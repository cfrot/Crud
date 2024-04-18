<?php
session_start();

$email = $_GET['email'];
$senha = $_GET['senha'];
//este codigo não pode ser colocado em produção pois existe o problema de  sql injection

  $db = new PDO('sqlite:database.sqlite');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql="select * from usuario where email='$email' and senha='$senha'";
   $linhas = $db->query($sql);
    foreach($linhas as $linha) {
    $_SESSION['autenticado']=true;
      echo '
      <script>window.location.replace("menu.php"); </script>
      ';
      die();
    }
    unset($_SESSION['autenticado']);
    echo '
      <script>window.location.replace("index.php"); </script>
      ';


?>