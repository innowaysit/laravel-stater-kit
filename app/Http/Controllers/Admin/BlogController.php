<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreRequest;
use App\Http\Requests\Blog\UpdateRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Str;

class BlogController extends Controller
{

    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        // apply middleares here
        $this->middleware('permission:admin-blog-list|admin-blog-create|admin-blog-edit|admin-blog-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:admin-blog-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:admin-blog-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:admin-blog-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $photoPath = "images/default.png";
        if ($request->has('photo')) {
            $ext = $request->file('photo')->getClientOriginalExtension();
            $photoPath = $request->file('photo')->storeAs('images', uniqid() . "." . $ext, 'public');
        }

        $blog = Blog::create($request->validated());
        $blog->update(['photo' => $photoPath]);
        return redirect()->route('admin.blogs.index')->withSuccess('Blog Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Blog $blog)
    {
        $photoPath = $blog->photo;
        if ($request->has('photo')) {
            $ext = $request->file('photo')->getClientOriginalExtension();
            $photoPath = $request->file('photo')->storeAs('images', uniqid() . "." . $ext, 'public');
        }

        $blog->update($request->validated());
        $blog->update(['photo' => $photoPath]);

        return redirect()->route('admin.blogs.index')->withSuccess('Blog Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
