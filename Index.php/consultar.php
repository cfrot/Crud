<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      
    <h1>Consultar</h1>

      <a href="form-incluir.php" class="btn btn-primary"> Incluir</a>
    <?php

      $db = new PDO('sqlite:database.sqlite');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="select * from usuario order by 1";
      $linhas = $db->query($sql);

      echo '<table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">senha</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>';


      foreach($linhas as $linha) {
        echo '<tr>
              <th scope="row">'.$linha['id'].'</th>
              <td>'.$linha['nome'].'</td>
              <td>'.$linha['email'].'</td>
              <td>'.$linha['senha'].'</td>
              <td>
              <a href="excluir.php?id='.$linha['id'].'"
                 class="btn btn-warning"> Excluir</a>
              </td>
              <td>
              <a href="form-update.php?id='.$linha['id'].'"
                 class="btn btn-primary"> Atualizar</a>
              </td>
            </tr>';

      }
      echo ' </tbody></table>';
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>

  </body>
</html>