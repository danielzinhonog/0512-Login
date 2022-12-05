<?php session_start()
//Login de um usuário
?>

<!DOCTYPE html>
</html>
<head>
  <tittle></tittle>
</head>
<body>

<?php
if(!isset($_SESSION['login'])){
  if(isset($_POST['acao'])){
    $login = 'luvadepedreiro';
    $senha = 'obrigadomeuDeus';
    $loginform = $_POST['login'];
    $senhaform = $_POST['senha'];

    if($login == $loginform && $senha == $senhaform){
      //o Login funcionará.
      $_SESSION['login'] = $login;
      header('Location: index.php');
    }else{
        //tem algum erro.
        echo 'Dados Inválidos';
    }
  } 
  include ('login.php');
}else{
  if(isset($_GET['logout'])){
    unset($_SESSION['login']);
    session_destroy();
    header('Location: index.php');
  }
  include('home.php');
}
?>
  
</body>
</html>