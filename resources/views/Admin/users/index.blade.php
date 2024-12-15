<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      <h1>Usuários cadastrados</h1>

      <table border="1">
            <thead>
                  <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                  </tr>
            </thead>
            <tbody>
                  @forelse ($users as $user)
                        <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>--</td>
                        </tr>
                  @empty
                        <tr>
                              <td colspan="3">Nenhum usuário cadastrado</td>
                        </tr>
                  @endforelse
            </tbody>
      </table>
      {{$users->links()}} <!-- Link que direciona para as páginas -->
</body>

</html>