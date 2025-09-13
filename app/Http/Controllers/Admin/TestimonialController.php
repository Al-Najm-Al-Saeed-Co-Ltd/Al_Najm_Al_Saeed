<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Helpers\FileUploader;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::ordered()->get();
        
        return Inertia::render('admin/Testimonials/Index', [
            'testimonials' => $testimonials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('admin/Testimonials/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'quote' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        $data = $request->only([
            'name', 'position', 'company', 'quote', 'rating', 'is_active', 'sort_order'
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $avatarPath = FileUploader::upload($request->file('avatar'), 'testimonials/avatars');
            if ($avatarPath) {
                $data['avatar'] = $avatarPath;
            }
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return Inertia::render('admin/Testimonials/Show', [
            'testimonial' => $testimonial,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return Inertia::render('admin/Testimonials/Edit', [
            'testimonial' => $testimonial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'quote' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        $data = $request->only([
            'name', 'position', 'company', 'quote', 'rating', 'is_active', 'sort_order'
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($testimonial->avatar) {
                FileUploader::delete($testimonial->avatar);
            }
            
            $avatarPath = FileUploader::upload($request->file('avatar'), 'testimonials/avatars');
            if ($avatarPath) {
                $data['avatar'] = $avatarPath;
            }
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Delete avatar if exists
        if ($testimonial->avatar) {
            FileUploader::delete($testimonial->avatar);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully.');
    }

    /**
     * Toggle testimonial active status
     */
    public function toggleStatus(Testimonial $testimonial)
    {
        $testimonial->update(['is_active' => !$testimonial->is_active]);

        return redirect()->back()
            ->with('success', 'Testimonial status updated successfully.');
    }
}
