<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiPostController extends Controller
{
    public function index()
    {        
        $posts = Post::paginate(2);

        return response()->json([
            'data' => $posts->items(), 
            'current_page' => $posts->currentPage(),
            'last_page' => $posts->lastPage(),
            'per_page' => $posts->perPage(),
            'total' => $posts->total(),
            'message' => 'Succeed'
        ], 200);
    }
 
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'data' => [],
                'message' => 'Entrada no encontrada'
            ], 404);
        }

        return response()->json([
            'data' => $post,
            'message' => 'Succeed'
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $slug = Str::slug($request->title);
        $post = Post::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'body' => $validated['body'],
        ]);

        return response()->json([
            'data' => $post,
            'message' => 'Post creado exitosamente'
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $id,
            'body' => 'required|string',
        ]);
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post no encontrado'], 404);
        }
        $post->title = $request->input('title');
        $post->slug = $request->input('slug', Str::slug($request->input('title')));
        $post->body = $request->input('body');
        $post->save();
        return response()->json(['message' => 'Post actualizado con éxito', 'post' => $post], 200);
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return response()->json(['message' => 'Post eliminado exitosamente'], 200);
        }
        return response()->json(['message' => 'Post no encontrado'], 404);
    }
}