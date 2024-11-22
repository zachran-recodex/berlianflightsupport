<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\HeroSection;
use Illuminate\Http\Request;

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
