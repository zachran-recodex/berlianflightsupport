<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('id')->paginate(10);

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $service = new Service();

        // Update fields with request data
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/services'), $filename);
            $service->image = 'services/' . $filename;
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'service created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceUpdateRequest $request, $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        // Update fields with request data
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($service->image && file_exists(public_path('storage/' . $service->image))) {
                unlink(public_path('storage/' . $service->image));
            }

            // Upload new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/services'), $filename);
            $service->image = 'services/' . $filename;
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        // Delete image from storage if exists
        if ($service->image && file_exists(public_path('storage/' . $service->image))) {
            unlink(public_path('storage/' . $service->image));
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'service deleted successfully.');
    }
}
