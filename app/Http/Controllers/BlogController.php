<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\blogRequest;
use App\Http\Requests\upblRequest;

    use Illuminate\Support\Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
     {
    return view('blogs.create');
    }


    /**
     * Store a newly created resource in storage.
     */
   public function store(blogRequest $request)
{
    $validatedData = $request->validated();

    // Handle the image upload
    $image = $request->file('image');
    $newImageName = time() . $image->getClientOriginalName();
    $image->move('public/images/', $newImageName);
    $blog = Blog::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => 'public/images/' . $newImageName,
        'slug' => Str::slug($request->title),
    ]);

    if ($blog) {
        return redirect()->back()->with('success', 'Blog created successfully');
    } else {
        return redirect()->back()->withErrors('Invalid data');
    }
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog=Blog::find($id);
        // $blogs = Blog::all();
        return view('blogs.show', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpblRequest $request, $id)
{
    $blog = Blog::findOrFail($id);
    $validatedData = $request->validated();
    if (!$validatedData) {
        return redirect()->back()->withErrors('invalid_request');
    }

    // Handle the image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $newImageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('public/images/', $newImageName);
        $blog->image = 'public/images/' . $newImageName;
    }

    $blog->title = $request->title;
    $blog->description = $request->description;
    $blog->slug = Str::slug($request->title);
    $blog->save();

    return redirect()->back()->with('success', 'Blog updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $blogs = Blog::find($id);
    $blogs->delete();
    $blogs = Blog::all();
    return view('blogs.index', compact('blogs'));
}

    public function edit($id){
        $blog=Blog::find($id);
        return view('blogs.edit')->with('blog',$blog);

    }
}
