<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\About;
use App\Models\Quote;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use App\Http\Requests\QuoteStoreRequest;
use App\Http\Requests\ContactStoreRequest;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data hero section
        $heroSections = HeroSection::all();
        $services = Service::all();
        $about = About::first();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get(); // Ambil 3 blog terbaru

        // Kirim data ke view
        return view('index', compact('heroSections', 'services', 'about', 'blogs'));
    }

    public function indexQuoteStore(QuoteStoreRequest $request)
    {
        $quote = new Quote();

        // Update fields with request data
        $quote->name = $request->name;
        $quote->email = $request->email;
        $quote->phone = $request->phone;
        $quote->message = $request->message;
        $quote->service_id = $request->service_id;

        $quote->save();

        return redirect()->back()->with('success', 'Your quote has been sent successfully!');
    }

    public function indexContactStore(ContactStoreRequest $request)
    {
        $contact = new Contact();

        // Update fields with request data
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function about()
    {
        $services = Service::all();
        $about = About::first();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get(); // Ambil 3 blog terbaru

        return view ('main.about', compact('services', 'about', 'blogs'));
    }

    public function service()
    {
        $services = Service::all();

        return view ('main.service', compact('services'));
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $services = Service::orderBy('id')->paginate(5);

        // Kirim data modul ke view
        return view ('main.service-detail', compact('service', 'services'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();

        return view ('main.gallery', compact('galleries'));
    }

    public function blog()
    {
        $blogs = Blog::all();

        return view ('main.blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get(); // Ambil 3 blog terbaru
        $services = Service::orderBy('id')->paginate(5);

        // Kirim data ke view
        return view('main.blog-detail', compact('blog', 'blogs', 'services'));
    }

    public function contact()
    {
        return view ('main.contact');
    }

    public function contactStore(ContactStoreRequest $request)
    {
        $contact = new Contact();

        // Update fields with request data
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function quote()
    {
        $services = Service::all();

        return view ('main.quote', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
