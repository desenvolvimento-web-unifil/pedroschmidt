<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuários</title>
    </head>
    <body>
        <h1>Listas Usuário</h1>
        <a href="/users/create">Adicionar Usuario</a>

        <ul>
            @foreach ($users as $user)
                <li>{{$user->id}} - {{ $user->name }}</li>
            @endforeach
            </ul>
    </body>
</html>