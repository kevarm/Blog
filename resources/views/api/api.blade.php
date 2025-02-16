@extends('layouts.layout')

@section('content')
<div class="container mt-5" style="max-width: 1200px; margin: auto; background-color: #f8e1e7; border-radius: 25px; padding: 30px 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
    <h1 class="text-center mb-4" style="font-weight: 700; color: #d63384; font-family: 'Poppins', sans-serif;">Documentación de la API</h1>
    
    <h2 class="text-xl font-semibold mb-2" style="font-weight: 700; color: #333;">Rutas Disponibles</h2>
    <table class="table-auto w-full border-collapse border border-gray-300 mb-6">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Método</th>
                <th class="border border-gray-300 px-4 py-2">Ruta</th>
                <th class="border border-gray-300 px-4 py-2">Descripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">GET</td>
                <td class="border border-gray-300 px-4 py-2">/api/posts</td>
                <td class="border border-gray-300 px-4 py-2">Obtiene una lista paginada de posts.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">GET</td>
                <td class="border border-gray-300 px-4 py-2">/api/posts/{id}</td>
                <td class="border border-gray-300 px-4 py-2">Obtiene un post específico por su ID.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">POST</td>
                <td class="border border-gray-300 px-4 py-2">/api/posts</td>
                <td class="border border-gray-300 px-4 py-2">Crea un nuevo post.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">PUT</td>
                <td class="border border-gray-300 px-4 py-2">/api/posts/{id}</td>
                <td class="border border-gray-300 px-4 py-2">Actualiza un post existente.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">DELETE</td>
                <td class="border border-gray-300 px-4 py-2">/api/posts/{id}</td>
                <td class="border border-gray-300 px-4 py-2">Elimina un post.</td>
            </tr>
        </tbody>
    </table>
    
    <h2 class="text-xl font-semibold mb-2" style="font-weight: 700; color: #333;">Ejemplo de Uso</h2>
    <p class="mb-4" style="font-size: 16px; color: #333;">Para crear un post, puedes enviar una solicitud POST a <code>/api/posts</code> con el siguiente JSON:</p>
    <pre class="bg-gray-200 p-4 rounded-md" style="font-size: 14px; color: #333;">
{
    "title": "Ejemplo de Post",
    "body": "Este es el contenido del post."
}
    </pre>
    
    <div class="text-center mb-4">
        <img src="../../../img/1.png" class="img-fluid mx-2" style="max-width: 100%; border-radius: 12px;">
        <img src="../../../img/2.png" class="img-fluid mx-2" style="max-width: 100%; border-radius: 12px;">
        <img src="../../../img/3.png" class="img-fluid mx-2" style="max-width: 100%; border-radius: 12px;">
        <img src="../../../img/4.png" class="img-fluid mx-2" style="max-width: 100%; border-radius: 12px;">
        <img src="../../../img/5.png" class="img-fluid mx-2" style="max-width: 100%; border-radius: 12px;">
        <img src="../../../img/6.png" class="img-fluid mx-2" style="max-width: 100%; border-radius: 12px;">
        <img src="../../../img/7.png" class="img-fluid mx-2" style="max-width: 100%; border-radius: 12px;">
        <img src="../../../img/8.png" class="img-fluid mx-2" style="max-width: 100%; border-radius: 12px;">
    </div>

    <h2 class="text-xl font-semibold mt-4 mb-2" style="font-weight: 700; color: #333;">Respuestas</h2>
    <p class="mb-4" style="font-size: 16px; color: #333;">La API devuelve respuestas en formato JSON. Ejemplo de respuesta exitosa:</p>
    <pre class="bg-gray-200 p-4 rounded-md" style="font-size: 14px; color: #333;">
{
    "data": {
        "id": 1,
        "title": "Ejemplo de Post",
        "slug": "ejemplo-de-post",
        "body": "Este es el contenido del post."
    },
    "message": "Post creado exitosamente"
}
    </pre>
</div>
@endsection
