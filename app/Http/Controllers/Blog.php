<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Blog extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = DB::table('tes')
                ->select('id', 'judul', 'konten')
                ->get();

        $view = [
            'datas' => $blog
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

       DB::table('tes')->insert([
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
       $blog = DB::table('tes')
        ->select('id', 'judul', 'konten')
        ->where('id', $id)
        ->first();

        $view = [
            'data' => $blog
        ];

        return view('blog/show', $view);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("blog.edit");
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
        DB::table("tes")
        ->where('id', $id)->delete();

        return redirect("blog");
    }
}
