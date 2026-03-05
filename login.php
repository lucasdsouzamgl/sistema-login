<?php
include("conexao.php");

if(isset($_POST['email'])){
    
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios
        WHERE email='$email' AND senha='$senha'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Login realizado!";
}else{
    echo "Usuário ou senha inválidos";
}
}
?>

<form method="POST">
<input name="email" placeholder="Email">
<input name="senha" type="password" placeholder="Senha">
<button>Entrar</button>
</form>