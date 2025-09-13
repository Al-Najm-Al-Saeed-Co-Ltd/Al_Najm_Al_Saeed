<?php

namespace App\Http\Controllers\Website;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class BasicController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return Inertia::render('website/Home');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return Inertia::render('website/About');
    }

    /**
     * Display the service page.
     */
    public function service()
    {
        return Inertia::render('website/Services');
    }

    /**
     * Display the HVAC page.
     */
    public function hvac()
    {
        return Inertia::render('website/HVAC');
    }

    /**
     * Display the career page.
     */
    public function career()
    {
        return Inertia::render('website/Career');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return Inertia::render('website/Contact');
    }

    /**
     * Display the Riyadh location page.
     */
    public function locationRiyadh()
    {
        return Inertia::render('website/LocationRiyadh');
    }

    /**
     * Handle contact form submission.
     */
    public function submitContact(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'service' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $contactData = $request->only([
            'full_name',
            'email',
            'phone',
            'company',
            'service',
            'message'
        ]);

        try {
            // Send email to admin
            $adminEmail = config('mail.admin_email', 'suhailsaeedme@gmail.com');
            Mail::to($adminEmail)->send(new ContactFormMail($contactData));

            // Send confirmation email to customer
            Mail::to($contactData['email'])->send(new \App\Mail\ContactConfirmationMail($contactData));

            return back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (\Exception $e) {
            Log::error('Contact form email error: ' . $e->getMessage());
            return back()->with('error', 'There was an error sending your message. Please try again or contact us directly.');
        }
    }

    /**
     * Handle callback form submission.
     */
    public function submitCallback(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'callback_date' => 'required|date|after:today',
            'callback_time' => 'required|date_format:H:i',
            'message' => 'required|string|max:1000',
        ]);

        // TODO: Implement callback form submission logic
        // This could include:
        // - Scheduling callback appointments
        // - Sending email notifications
        // - Integrating with calendar systems

        return back()->with('success', 'Thank you for your callback request! We will get back to you soon.');
    }

    /**
     * Handle newsletter subscription.
     */
    public function subscribeNewsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255|unique:newsletter_subscriptions,email',
        ]);

        // TODO: Implement newsletter subscription logic
        // This could include:
        // - Storing email in database
        // - Integrating with email marketing services
        // - Sending welcome email

        return back()->with('success', 'Thank you for subscribing to our newsletter!');
    }


    /**
     * Get company statistics for display.
     */
    public function getStatistics()
    {
        // TODO: Implement dynamic statistics
        // This could fetch from database or external APIs
        return response()->json([
            'projects_completed' => 150,
            'years_experience' => 25,
            'team_members' => 50,
            'client_satisfaction' => 98,
        ]);
    }

    /**
     * Get testimonials for display.
     */
    public function getTestimonials()
    {
        $testimonials = Testimonial::active()
            ->ordered()
            ->get()
            ->map(function ($testimonial) {
                return [
                    'id' => $testimonial->id,
                    'name' => $testimonial->name,
                    'position' => $testimonial->position,
                    'company' => $testimonial->company,
                    'content' => $testimonial->quote,
                    'rating' => $testimonial->rating,
                    'avatar' => $testimonial->avatar ? FileUploader::getUrl($testimonial->avatar) : null,
                ];
            });

        return response()->json($testimonials);
    }

    /**
     * Get services data for display.
     */
    public function getServices()
    {
        // TODO: Implement dynamic services
        // This could fetch from database
        return response()->json([
            [
                'id' => 1,
                'title' => 'HVAC Systems',
                'description' => 'Providing expert HVAC solutions for residential and commercial spaces, focusing on efficient air conditioning, heating, and ventilation systems to ensure optimal indoor climate control.',
                'icon' => 'snowflake',
                'color' => 'blue',
            ],
            [
                'id' => 2,
                'title' => 'Building Construction',
                'description' => 'Delivering comprehensive building construction services, from initial planning to final finishes, ensuring quality, safety, and durability for residential, commercial, and industrial projects.',
                'icon' => 'hard-hat',
                'color' => 'green',
            ],
            [
                'id' => 3,
                'title' => 'Interior Design',
                'description' => 'Creating unique, functional interior spaces that reflect client personalities and needs, combining aesthetic appeal with practical design for residential and commercial environments.',
                'icon' => 'paintbrush',
                'color' => 'purple',
            ],
            [
                'id' => 4,
                'title' => 'Electro-Mechanical Works',
                'description' => 'Specializing in electro-mechanical installations, including electrical and plumbing systems, providing reliable, safe, and efficient solutions for diverse residential and commercial needs.',
                'icon' => 'zap',
                'color' => 'orange',
            ],
            [
                'id' => 5,
                'title' => 'Shades',
                'description' => 'Offering innovative shading solutions, from retractable awnings to custom shade structures, designed to enhance outdoor comfort and protect against harsh weather conditions.',
                'icon' => 'umbrella',
                'color' => 'yellow',
            ],
            [
                'id' => 6,
                'title' => 'Website Development',
                'description' => 'Crafting user-friendly, modern websites with responsive design, tailored functionality, and SEO optimization, aimed at enhancing client visibility and engagement online.',
                'icon' => 'laptop',
                'color' => 'indigo',
            ],
        ]);
    }
}