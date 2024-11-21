<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\Service;
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

        // Kirim data ke view
        return view('index', compact('heroSections', 'services'));
    }

    public function about()
    {
        return view ('main.about');
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
        return view ('main.gallery');
    }

    public function blog()
    {
        return view ('main.blog');
    }

    public function contact()
    {
        return view ('main.contact');
    }

    public function quote()
    {
        return view ('main.quote');
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
