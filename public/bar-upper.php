<style><?php include("bar-upper.css") ?></style>
<script><?php include("bar-upper.js") ?></script>
<div id="divNavBar">
  <div id="divLogo" onclick="barUpperGoToIndex()">
    <span class="spanLogo">
      <span class="letterU">U</span>
      <span class="letterR">R</span>
      <span class="letterV">V</span>
      <span class="letterS">S</span>
    </span>
    <ul class="ulLogo">
      <li>
        <span class="letterU">Universum</span>
        <span class="letterR">Regitur</span>
      </li>
      <li>
        <span class="letterV">Verum</span>
        <span class="letterS">Sapientia</span>
      </li>
    </ul>
  </div>
  <div id="divLogin">
    <div class="entrance">Entrada</div>
    <div>
      <form action="enter.php" method="post">
        <input placeholder="E-mail" type="text" name="email" size="12">
        <input type="password" name="pass" size="12">
      </form>
    </div>
    <div class="options">
      <span><a href="new-account.php">Nova conta</a></span>
      <span><a href="forgot-password.php">Esqueci a senha</a></span>
    </div>
  </div>
</div>