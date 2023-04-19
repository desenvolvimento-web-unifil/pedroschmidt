<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criar Usuario</title>
    </head>
    <body>
        <h1>Criar usuarios Listas Usuário</h1>
        <form action="/users" method="post">
            @csrf

            <label for="name">Nome: </label>
            <input type="text" name="name" id="">
            <label for="email">Email: </label>
            <input type="text" name="email" id="">
            <label for="password">Senha: </label>
            <input type="password" name="password" id="">

            <button type="submit">Adicionar</button>
        </form>
        <a href="/users/index">Voltar</a>
    </body>
</html>