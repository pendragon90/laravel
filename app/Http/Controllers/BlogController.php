<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blogs;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blogs::where('status', true)->withTrashed()->get();
       

        $view = [
            'datas' => $blog,
        ];

        return view('blog/index', $view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog/store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $judul = $request->input('judul');
        $konten = $request->input('konten');

       Blogs::create([
            'judul' => $judul,
            'konten' => $konten
        ]);

        return redirect('blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blogs::where('id', $id)->first();
       
        $comment = $blog->comments()->get();

        $view = [
            'data' => $blog,
            'comments' => $comment,
        ];

        return view('blog/show', $view);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blogs::where('id', $id)->first();

        $view = [
            'datas' => $blog
        ];

        return view("blog.edit", $view);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $judul = $request->input('judul');
        $konten = $request->input('konten');

        Blogs::where('id', $id)->update([
            'judul' => $judul,
            'konten' => $konten
        ]);

        return redirect('blog');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blogs::where('id', $id)->delete();

        return redirect("blog");
    }
}
