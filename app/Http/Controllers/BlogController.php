<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('id')->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogStoreRequest $request)
    {
        $blog = new Blog();

        // Update fields with request data
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/blogs'), $filename);
            $blog->image = 'blogs/' . $filename;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'blog created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Update fields with request data
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image && file_exists(public_path('storage/' . $blog->image))) {
                unlink(public_path('storage/' . $blog->image));
            }

            // Upload new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/blogs'), $filename);
            $blog->image = 'blogs/' . $filename;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Delete image from storage if exists
        if ($blog->image && file_exists(public_path('storage/' . $blog->image))) {
            unlink(public_path('storage/' . $blog->image));
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'blog deleted successfully.');
    }
}
