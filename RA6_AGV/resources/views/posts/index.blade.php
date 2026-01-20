<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Publicaciones</title>
</head>
<body>

<h1>Listado de publicaciones</h1>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Categoría</th>
            <th>Extracto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->category }}</td>
                <td>{{ $post->excerpt }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<a href="/users">Ver usuarios</a>

</body>
</html>
