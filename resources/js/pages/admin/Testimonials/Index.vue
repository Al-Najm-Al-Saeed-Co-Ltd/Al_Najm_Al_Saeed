<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuTrigger } from '@/components/ui/dropdown-menu';
import { AlertDialog, AlertDialogAction, AlertDialogCancel, AlertDialogContent, AlertDialogDescription, AlertDialogFooter, AlertDialogHeader, AlertDialogTitle, AlertDialogTrigger } from '@/components/ui/alert-dialog';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
import { Plus, MoreHorizontal, Edit, Eye, Star, ToggleLeft, ToggleRight, Trash2 } from 'lucide-vue-next';
import { ref } from 'vue';
import { create, destroy, toggleStatus, show, edit } from '@/routes/admin/testimonials';

interface Testimonial {
    id: number;
    name: string;
    position: string;
    company?: string;
    quote: string;
    rating: number;
    avatar?: string;
    is_active: boolean;
    sort_order: number;
    created_at: string;
    updated_at: string;
}

interface Props {
    testimonials: Testimonial[];
}

const props = defineProps<Props>();

const deleteDialogOpen = ref(false);
const testimonialToDelete = ref<number | null>(null);

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/admin',
    },
    {
        title: 'Testimonials',
        href: '/admin/testimonials',
    },
];

const openDeleteDialog = (id: number) => {
    testimonialToDelete.value = id;
    deleteDialogOpen.value = true;
};

const deleteTestimonial = () => {
    if (testimonialToDelete.value) {
        router.delete(destroy({ testimonial: testimonialToDelete.value }).url, {
            onSuccess: () => {
                deleteDialogOpen.value = false;
                testimonialToDelete.value = null;
            }
        });
    }
};

const toggleTestimonialStatus = (id: number) => {
    router.patch(toggleStatus({ testimonial: id }).url, {}, {
        onSuccess: () => {
            // Success handled by Inertia
        }
    });
};

const getInitials = (name: string) => {
    return name.split(' ').map(n => n[0]).join('').toUpperCase();
};

const renderStars = (rating: number) => {
    return Array.from({ length: 5 }, (_, i) => ({
        filled: i < rating,
        index: i
    }));
};
</script>

<template>

    <Head title="Testimonials" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <!-- Header -->
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold tracking-tight">Testimonials</h1>
                    <p class="text-muted-foreground">
                        Manage client testimonials and reviews
                    </p>
                </div>
                <Link :href="create().url">
                <Button>
                    <Plus class="mr-2 h-4 w-4" />
                    Add Testimonial
                </Button>
                </Link>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                <Card v-for="testimonial in testimonials" :key="testimonial.id" class="relative">
                    <CardHeader class="pb-3">
                        <div class="flex items-start justify-between">
                            <div class="flex items-center space-x-3">
                                <Avatar class="h-10 w-10">
                                    <AvatarImage v-if="testimonial.avatar" :src="testimonial.avatar"
                                        :alt="testimonial.name" />
                                    <AvatarFallback>{{ getInitials(testimonial.name) }}</AvatarFallback>
                                </Avatar>
                                <div>
                                    <CardTitle class="text-base">{{ testimonial.name }}</CardTitle>
                                    <CardDescription class="text-sm">
                                        {{ testimonial.position }}
                                        <span v-if="testimonial.company"> at {{ testimonial.company }}</span>
                                    </CardDescription>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <Badge :variant="testimonial.is_active ? 'default' : 'secondary'">
                                    {{ testimonial.is_active ? 'Active' : 'Inactive' }}
                                </Badge>
                                <DropdownMenu>
                                    <DropdownMenuTrigger as-child>
                                        <Button variant="ghost" class="h-8 w-8 p-0">
                                            <MoreHorizontal class="h-4 w-4" />
                                        </Button>
                                    </DropdownMenuTrigger>
                                    <DropdownMenuContent align="end">
                                        <DropdownMenuItem as-child>
                                            <Link :href="show({ testimonial: testimonial.id }).url"
                                                class="flex items-center">
                                            <Eye class="mr-2 h-4 w-4" />
                                            View
                                            </Link>
                                        </DropdownMenuItem>
                                        <DropdownMenuItem as-child>
                                            <Link :href="edit({ testimonial: testimonial.id }).url"
                                                class="flex items-center">
                                            <Edit class="mr-2 h-4 w-4" />
                                            Edit
                                            </Link>
                                        </DropdownMenuItem>
                                        <DropdownMenuItem @click="toggleTestimonialStatus(testimonial.id)"
                                            class="flex items-center">
                                            <component :is="testimonial.is_active ? ToggleLeft : ToggleRight"
                                                class="mr-2 h-4 w-4" />
                                            {{ testimonial.is_active ? 'Deactivate' : 'Activate' }}
                                        </DropdownMenuItem>
                                        <DropdownMenuItem @click="openDeleteDialog(testimonial.id)" 
                                            class="text-destructive focus:text-destructive">
                                            <Trash2 class="mr-2 h-4 w-4" />
                                            Delete
                                        </DropdownMenuItem>
                                    </DropdownMenuContent>
                                </DropdownMenu>
                            </div>
                        </div>
                    </CardHeader>
                    <CardContent>
                        <!-- Rating -->
                        <div class="flex items-center mb-3">
                            <div class="flex items-center">
                                <Star v-for="star in renderStars(testimonial.rating)" :key="star.index"
                                    :class="star.filled ? 'h-4 w-4 text-yellow-400 fill-current' : 'h-4 w-4 text-gray-300'" />
                            </div>
                            <span class="ml-2 text-sm text-muted-foreground">{{ testimonial.rating }}/5</span>
                        </div>

                        <!-- Quote -->
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            "{{ testimonial.quote }}"
                        </p>

                        <!-- Sort Order -->
                        <div class="mt-3 text-xs text-muted-foreground">
                            Order: {{ testimonial.sort_order }}
                        </div>
                    </CardContent>
                </Card>
            </div>

            <!-- Empty State -->
            <div v-if="testimonials.length === 0" class="flex flex-col items-center justify-center py-12">
                <div class="text-center">
                    <h3 class="text-lg font-semibold">No testimonials yet</h3>
                    <p class="text-muted-foreground mb-4">
                        Get started by adding your first testimonial.
                    </p>
                    <Link :href="create().url">
                    <Button>
                        <Plus class="mr-2 h-4 w-4" />
                        Add Testimonial
                    </Button>
                    </Link>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Dialog -->
        <AlertDialog v-model:open="deleteDialogOpen">
            <AlertDialogContent>
                <AlertDialogHeader>
                    <AlertDialogTitle>Are you sure?</AlertDialogTitle>
                    <AlertDialogDescription>
                        This action cannot be undone. This will permanently delete the
                        testimonial.
                    </AlertDialogDescription>
                </AlertDialogHeader>
                <AlertDialogFooter>
                    <AlertDialogCancel @click="deleteDialogOpen = false">Cancel</AlertDialogCancel>
                    <Button @click="deleteTestimonial"
                        class="bg-destructive text-destructive-foreground hover:bg-destructive/90">
                        Delete
                    </Button>
                </AlertDialogFooter>
            </AlertDialogContent>
        </AlertDialog>
    </AppLayout>
</template>

<style scoped>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
