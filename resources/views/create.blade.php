<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Formulario de creacion de videojuegos</h1>
<p><a href="{{route('games')}}"> Tabla de juegos</a></p>
<form action="{{route ('createVideogame')}}" method="POST">

    {{-- Token --}}
    @csrf

    <input type="text" placeholder="Nombre del videojuego" name="name_game">
    @error('name_game')
    {{ $message }}
@enderror

<select name="categoria_id" id="">

    @foreach ( $categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
    @endforeach


</select>
<input type="submit" value="Enviar">
</form>
</body>
</html>
