<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
  <?php include "head.php" ?>
</head>

<body>
  <div id="divMain">
    <?php include "topbar.php" ?>
    <div style="text-align: center">
      <h1>Nova Conta</h1>
      <h2>Enviar o Convite para:</h2>
      <form action="send-invitation.php" method="post">
        <input type="text" name="email" placeholder="E-mail">
        <input type="submit" value="Enviar">
      </form>
    </div>
    <?php include "botbar.php" ?>
  </div>
</body>

</html>