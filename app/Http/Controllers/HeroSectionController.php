<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroSectionStoreRequest;
use App\Http\Requests\HeroSectionUpdateRequest;
use App\Models\HeroSection;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroSections = HeroSection::orderBy('id')->paginate(3);

        return view('admin.heroSections.index', compact('heroSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.heroSections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeroSectionStoreRequest $request)
    {
        $heroSection = new HeroSection();

        // Update fields with request data
        $heroSection->title = $request->title;
        $heroSection->subtitle = $request->subtitle;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/heroSections'), $filename);
            $heroSection->image = 'heroSections/' . $filename;
        }

        $heroSection->save();

        return redirect()->route('admin.heroSections.index')->with('success', 'heroSection created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroSection $heroSection)
    {
        return view('admin.heroSections.edit', compact('heroSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HeroSectionUpdateRequest $request, HeroSection $heroSection)
    {
        // Update fields with request data
        $heroSection->title = $request->title;
        $heroSection->subtitle = $request->subtitle;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($heroSection->image && file_exists(public_path('storage/' . $heroSection->image))) {
                unlink(public_path('storage/' . $heroSection->image));
            }

            // Upload new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/heroSections'), $filename);
            $heroSection->image = 'heroSections/' . $filename;
        }

        $heroSection->save();

        return redirect()->route('admin.heroSections.index')->with('success', 'heroSection updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection)
    {
        // Delete image from storage if exists
        if ($heroSection->image && file_exists(public_path('storage/' . $heroSection->image))) {
            unlink(public_path('storage/' . $heroSection->image));
        }

        $heroSection->delete();

        return redirect()->route('admin.heroSections.index')->with('success', 'heroSection deleted successfully.');
    }
}
