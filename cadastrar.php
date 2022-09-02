<?php

require_once 'class/usuario.php';
$u = new Usuario;

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastre-se</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div id="cadastrar-container">
    <h1>Cadastrar</h1>
    <form method="POST">
      <label for="text">Nome Completo</label>
      <input type="text" name="nome" id="text" placeholder="Digite seu nome completo" maxlength="30">
      <label for="text">Telefone</label>
      <input type="text" name="telefone" id="text" placeholder="Digite seu telefone" maxlength="30">
      <label for="text">Usuário</label>
      <input type="text" name="usuario" id="text" placeholder="Digite seu usuário" maxlength="40">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" placeholder="Digite seu e-email" autocomplete="off">
      <label for="password">Senha</label>
      <input type="password" name="senha" id="password" placeholder="Digite sua senha" maxlength="15">
      <label for="password">Confirme sua senha</label>
      <input type="password" name="confSenha" id="password" placeholder="Digite sua senha" maxlength="15">

      <input type="submit" value="CONFIRMAR">

    </form>
    <a href="index.php" class="botao">
      <input type="submit" value="Sair">
    </a>

  </div>

  <?php
  //Verifica se clicou no botão
  if (isset($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $usuario = addslashes($_POST['usuario']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);

    //verifica se não está vazio

    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
      $u->conectar("projeto_login", "localhost", "root", "");
      if ($u->msgErro == "") {
        if ($senha == $confirmarSenha) {
          if ($u->cadastrar($nome, $telefone, $email, $senha)) {
  ?>

          <?php
          } else {
          ?>
            <div class="msg-erro">
              Email já cadastrado!

            </div>
          <?php
          }
        } else {
          ?>
          <div id="msg-erro">
            Senha e Confirmar senha não correspondem!

          </div>
        <?php
        }
      } else {
        ?>
        <div class="msg-erro">
          <?php echo "Erro: " . $u->msgErro; ?>
        </div>
      <?php
      }
    } else {
      ?>
      <div class="msg-erro">
        preencha todos os campos!

      </div>
  <?php
    }
  }
  ?>
</body>

</html>