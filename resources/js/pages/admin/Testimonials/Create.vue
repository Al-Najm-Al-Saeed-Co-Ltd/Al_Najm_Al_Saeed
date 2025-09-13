<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Textarea } from '@/components/ui/textarea';
import { Switch } from '@/components/ui/switch';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Star, Upload } from 'lucide-vue-next';
import { ref } from 'vue';
import { store, index } from '@/routes/admin/testimonials';

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
        title: 'Create',
        href: '/admin/testimonials/create',
    },
];

const form = useForm({
    name: '',
    position: '',
    company: '',
    quote: '',
    rating: 5,
    avatar: null as File | null,
    is_active: true,
    sort_order: 0,
});

const avatarPreview = ref<string | null>(null);

const handleAvatarChange = (event: Event) => {
    const target = event.target as HTMLInputElement;
    const file = target.files?.[0];
    
    if (file) {
        form.avatar = file;
        
        // Create preview
        const reader = new FileReader();
        reader.onload = (e) => {
            avatarPreview.value = e.target?.result as string;
        };
        reader.readAsDataURL(file);
    }
};

const submit = () => {
    form.post(store().url, {
        forceFormData: true,
    });
};

const renderStars = (rating: number) => {
    return Array.from({ length: 5 }, (_, i) => ({
        filled: i < rating,
        index: i
    }));
};
</script>

<template>
    <Head title="Create Testimonial" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <!-- Header -->
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold tracking-tight">Create Testimonial</h1>
                    <p class="text-muted-foreground">
                        Add a new client testimonial
                    </p>
                </div>
            </div>

            <!-- Form -->
            <div class="w-full">
                <Card>
                    <CardHeader>
                        <CardTitle>Testimonial Details</CardTitle>
                        <CardDescription>
                            Fill in the details for the new testimonial
                        </CardDescription>
                    </CardHeader>
                    <CardContent>
                        <form @submit.prevent="submit" class="space-y-6">
                            <!-- Name and Position Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Name -->
                                <div class="space-y-2">
                                    <Label for="name">Name *</Label>
                                    <Input
                                        id="name"
                                        v-model="form.name"
                                        placeholder="Client name"
                                        required
                                    />
                                    <div v-if="form.errors.name" class="text-sm text-destructive">
                                        {{ form.errors.name }}
                                    </div>
                                </div>

                                <!-- Position -->
                                <div class="space-y-2">
                                    <Label for="position">Position *</Label>
                                    <Input
                                        id="position"
                                        v-model="form.position"
                                        placeholder="Job title or position"
                                        required
                                    />
                                    <div v-if="form.errors.position" class="text-sm text-destructive">
                                        {{ form.errors.position }}
                                    </div>
                                </div>
                            </div>

                            <!-- Company -->
                            <div class="space-y-2">
                                <Label for="company">Company</Label>
                                <Input
                                    id="company"
                                    v-model="form.company"
                                    placeholder="Company name (optional)"
                                />
                                <div v-if="form.errors.company" class="text-sm text-destructive">
                                    {{ form.errors.company }}
                                </div>
                            </div>

                            <!-- Quote -->
                            <div class="space-y-2">
                                <Label for="quote">Testimonial Quote *</Label>
                                <Textarea
                                    id="quote"
                                    v-model="form.quote"
                                    placeholder="What the client said..."
                                    rows="4"
                                    required
                                />
                                <div v-if="form.errors.quote" class="text-sm text-destructive">
                                    {{ form.errors.quote }}
                                </div>
                            </div>

                            <!-- Rating and Sort Order Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Rating -->
                                <div class="space-y-2">
                                    <Label>Rating *</Label>
                                    <div class="flex items-center space-x-2">
                                        <div class="flex items-center">
                                            <Star 
                                                v-for="star in renderStars(form.rating)" 
                                                :key="star.index"
                                                :class="star.filled ? 'h-5 w-5 text-yellow-400 fill-current cursor-pointer' : 'h-5 w-5 text-gray-300 cursor-pointer'"
                                                @click="form.rating = star.index + 1"
                                            />
                                        </div>
                                        <span class="text-sm text-muted-foreground">{{ form.rating }}/5</span>
                                    </div>
                                    <div v-if="form.errors.rating" class="text-sm text-destructive">
                                        {{ form.errors.rating }}
                                    </div>
                                </div>

                                <!-- Sort Order -->
                                <div class="space-y-2">
                                    <Label for="sort_order">Sort Order</Label>
                                    <Input
                                        id="sort_order"
                                        v-model.number="form.sort_order"
                                        type="number"
                                        min="0"
                                        placeholder="0"
                                    />
                                    <p class="text-xs text-muted-foreground">
                                        Lower numbers appear first
                                    </p>
                                    <div v-if="form.errors.sort_order" class="text-sm text-destructive">
                                        {{ form.errors.sort_order }}
                                    </div>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="space-y-2">
                                <Label for="avatar">Avatar</Label>
                                <div class="flex items-center space-x-4">
                                    <div v-if="avatarPreview" class="w-16 h-16 rounded-full overflow-hidden border-2 border-border">
                                        <img :src="avatarPreview" alt="Avatar preview" class="w-full h-full object-cover" />
                                    </div>
                                    <div class="flex-1">
                                        <Input
                                            id="avatar"
                                            type="file"
                                            accept="image/*"
                                            @change="handleAvatarChange"
                                        />
                                        <p class="text-xs text-muted-foreground mt-1">
                                            JPG, PNG, GIF up to 2MB
                                        </p>
                                    </div>
                                </div>
                                <div v-if="form.errors.avatar" class="text-sm text-destructive">
                                    {{ form.errors.avatar }}
                                </div>
                            </div>

                            <!-- Active Status -->
                            <div class="flex items-center justify-between">
                                <div class="space-y-0.5">
                                    <Label>Active</Label>
                                    <p class="text-xs text-muted-foreground">
                                        Show this testimonial on the website
                                    </p>
                                </div>
                                <Switch v-model:checked="form.is_active" />
                            </div>

                            <!-- Submit Buttons -->
                            <div class="flex items-center space-x-4 pt-4">
                                <Button type="submit" :disabled="form.processing">
                                    {{ form.processing ? 'Creating...' : 'Create Testimonial' }}
                                </Button>
                                <Link :href="index().url">
                                    <Button type="button" variant="outline">
                                        Cancel
                                    </Button>
                                </Link>
                            </div>
                        </form>
                    </CardContent>
                </Card>
            </div>
        </div>
    </AppLayout>
</template>
