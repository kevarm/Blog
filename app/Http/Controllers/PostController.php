<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $response = Http::get('http://127.0.0.1:8000/api/posts', [
            'page' => $page 
        ]);

        if ($response->successful()) {
            $posts = $response->json();
            return view('index', [
                'posts' => $posts['data'], 
                'current_page' => $posts['current_page'],  
                'last_page' => $posts['last_page'],  
                'total' => $posts['total'],  
                'per_page' => $posts['per_page'],  
            ]);
        } else {
            return view('index', ['posts' => []]);
        }
    }

    public function show($id)
    {
        $response = Http::get("http://127.0.0.1:8000/api/posts/{$id}");
        if ($response->successful()) {
            $post = $response->json();
            return view('show', [
                'post' => $post['data'],
            ]);
        } else {
            return redirect()->route('index')->with('error', 'No existe');
        }
    }

    public function create()
    {
        return view('admin.create'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);
        $response = Http::post('http://127.0.0.1:8000/api/posts', [
            'title' => $validated['title'],
            'body' => $validated['body'],
        ]);
        if ($response->successful()) {
            return redirect()->route('admin')->with('success', 'Creado');
        } else {
            $errorMessage = $response->json()['message'] ?? 'Error';
            return back()->with('error', $errorMessage);
        }
    }

    public function edit($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/posts/' . $id);
        if ($response->successful()) {
            $post = $response->json();
            return view('admin.edit', ['post' => $post['data']]); 
        } else {
            return redirect()->route('admin')->with('error', 'No existe.');
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        $response = Http::put('http://127.0.0.1:8000/api/posts/' . $id, $validated); 

        if ($response->successful()) {
            return redirect()->route('admin')->with('success', 'Actualizado');
        } else {
            return redirect()->route('admin.edit', $id)->with('error', 'Error');
        }
    }

    public function destroy($id)
    {
        $response = Http::delete("http://127.0.0.1:8000/api/posts/{$id}");
        if ($response->successful()) {
            return redirect()->route('admin')->with('success', 'Eliminado');
        } else {
            return redirect()->route('admin')->with('error', 'Error');
        }
    }
}