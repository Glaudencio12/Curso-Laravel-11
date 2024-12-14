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
            <tr>
                  <th>Nome</th>
                  <th>email</th>
            </tr>
            <?php foreach ($user as $user){ ?>
                  <tr>
                        <td><?php echo htmlspecialchars($user->name); ?></td>
                        <td><?php echo htmlspecialchars($user->email); ?></td>
                  </tr>
            <?php }; ?>
      </tr>
      </table>
</body>
</html>