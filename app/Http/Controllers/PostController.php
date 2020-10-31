<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
            ->limit(10)
            ->orderBy('id', 'DESC')
            ->get();
        //dd($posts);
        return view('posts.show', ['posts' => $posts]);

    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('posts.create')
                ->withErrors($validator)
                ->withInput($request->only('title', 'description'));
        }
        DB::table('posts')->insert([
            'name' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        return redirect()->route('posts.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
