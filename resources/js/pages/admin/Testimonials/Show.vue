<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { Edit, Star, Calendar, Hash } from 'lucide-vue-next';
import { edit, index } from '@/routes/admin/testimonials';

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
    testimonial: Testimonial;
}

const props = defineProps<Props>();

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/admin',
    },
    {
        title: 'Testimonials',
        href: '/admin/testimonials',
    },
    {
        title: props.testimonial.name,
        href: `/admin/testimonials/${props.testimonial.id}`,
    },
];

const getInitials = (name: string) => {
    return name.split(' ').map(n => n[0]).join('').toUpperCase();
};

const renderStars = (rating: number) => {
    return Array.from({ length: 5 }, (_, i) => ({
        filled: i < rating,
        index: i
    }));
};

const formatDate = (dateString: string) => {
    return new Date(dateString).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
};
</script>

<template>
    <Head :title="`Testimonial - ${testimonial.name}`" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <!-- Header -->
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold tracking-tight">{{ testimonial.name }}</h1>
                    <p class="text-muted-foreground">
                        Testimonial Details
                    </p>
                </div>
                <Link :href="edit({ testimonial: testimonial.id }).url">
                    <Button>
                        <Edit class="mr-2 h-4 w-4" />
                        Edit
                    </Button>
                </Link>
            </div>

            <!-- Testimonial Details -->
            <div class="w-full">
                <div class="grid gap-4 lg:grid-cols-3">
                    <!-- Main Content -->
                    <div class="lg:col-span-2">
                        <Card>
                            <CardHeader>
                                <div class="flex items-start justify-between">
                                    <div class="flex items-center space-x-4">
                                        <Avatar class="h-16 w-16">
                                            <AvatarImage v-if="testimonial.avatar" :src="testimonial.avatar" :alt="testimonial.name" />
                                            <AvatarFallback class="text-lg">{{ getInitials(testimonial.name) }}</AvatarFallback>
                                        </Avatar>
                                        <div>
                                            <CardTitle class="text-xl">{{ testimonial.name }}</CardTitle>
                                            <CardDescription class="text-base">
                                                {{ testimonial.position }}
                                                <span v-if="testimonial.company"> at {{ testimonial.company }}</span>
                                            </CardDescription>
                                        </div>
                                    </div>
                                    <Badge :variant="testimonial.is_active ? 'default' : 'secondary'">
                                        {{ testimonial.is_active ? 'Active' : 'Inactive' }}
                                    </Badge>
                                </div>
                            </CardHeader>
                            <CardContent>
                                <!-- Rating -->
                                <div class="flex items-center mb-6">
                                    <div class="flex items-center">
                                        <Star 
                                            v-for="star in renderStars(testimonial.rating)" 
                                            :key="star.index"
                                            :class="star.filled ? 'h-5 w-5 text-yellow-400 fill-current' : 'h-5 w-5 text-gray-300'"
                                        />
                                    </div>
                                    <span class="ml-3 text-lg font-medium">{{ testimonial.rating }}/5</span>
                                </div>
                                
                                <!-- Quote -->
                                <blockquote class="text-lg text-muted-foreground italic leading-relaxed">
                                    "{{ testimonial.quote }}"
                                </blockquote>
                            </CardContent>
                        </Card>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-4">
                        <!-- Status Card -->
                        <Card>
                            <CardHeader>
                                <CardTitle class="text-base">Status</CardTitle>
                            </CardHeader>
                            <CardContent class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium">Active</span>
                                    <Badge :variant="testimonial.is_active ? 'default' : 'secondary'">
                                        {{ testimonial.is_active ? 'Yes' : 'No' }}
                                    </Badge>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium">Sort Order</span>
                                    <span class="text-sm text-muted-foreground">{{ testimonial.sort_order }}</span>
                                </div>
                            </CardContent>
                        </Card>

                        <!-- Details Card -->
                        <Card>
                            <CardHeader>
                                <CardTitle class="text-base">Details</CardTitle>
                            </CardHeader>
                            <CardContent class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <Hash class="h-4 w-4 text-muted-foreground" />
                                    <div>
                                        <p class="text-sm font-medium">ID</p>
                                        <p class="text-sm text-muted-foreground">#{{ testimonial.id }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <Calendar class="h-4 w-4 text-muted-foreground" />
                                    <div>
                                        <p class="text-sm font-medium">Created</p>
                                        <p class="text-sm text-muted-foreground">{{ formatDate(testimonial.created_at) }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <Calendar class="h-4 w-4 text-muted-foreground" />
                                    <div>
                                        <p class="text-sm font-medium">Updated</p>
                                        <p class="text-sm text-muted-foreground">{{ formatDate(testimonial.updated_at) }}</p>
                                    </div>
                                </div>
                            </CardContent>
                        </Card>

                        <!-- Actions Card -->
                        <Card>
                            <CardHeader>
                                <CardTitle class="text-base">Actions</CardTitle>
                            </CardHeader>
                            <CardContent class="space-y-3">
                                <Link :href="edit({ testimonial: testimonial.id }).url" class="block">
                                    <Button variant="outline" class="w-full justify-start">
                                        <Edit class="mr-2 h-4 w-4" />
                                        Edit Testimonial
                                    </Button>
                                </Link>
                            </CardContent>
                        </Card>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
