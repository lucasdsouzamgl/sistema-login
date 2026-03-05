<?php
include("conexao.php");

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome,email,senha)
            VALUES ('$nome','$email','$senha')";

    if($conn->query($sql)){
        echo "Usuário cadastrado!";
    } else {
        echo "Erro.";
    }
}
?>

<form method="POST">
<input name="nome" placeholder="Nome">
<input name="email" placeholder="Email">
<input name="senha" type="password" placeholder="Senha">
<button>Cadastrar</button>
</form>