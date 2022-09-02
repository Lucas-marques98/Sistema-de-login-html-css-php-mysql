<?php
require_once 'class/usuario.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div id="login-container">
    <h1>Login</h1>
    <form method="POST">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" placeholder="Digite seu e-email" autocomplete="off">
      <label for="password">Senha</label>
      <input type="password" name="senha" id="password" placeholder="Digite sua senha">
      <a href="#" id="forgot-pass">Esqueceu a senha?</a>
      <input type="submit" value="Login">
    </form>
    

          <?php
            } else {
          ?>
            <div class="msg-erro">
              Email e/ou senha estão incorretos!

            </div>
          <?php
          }
        } else {
          ?>
          <div id="msg-erro">
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