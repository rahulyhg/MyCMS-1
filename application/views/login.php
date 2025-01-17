<section class='login'>
  <div class="login-container">
    <h1>MyCMS</h1>

    <form action="<?=base_url('Login/login')?>" method="post" class='login-form' enctype='multipart/form-data'> 
      <div class="labelgroup">
        <label for="email">E-mail</label>
        <input type="email" name='email' placeholder="Digite seu e-mail" class='rounded-input'>
      </div>

      <div class="labelgroup">
        <label for="senha">Senha</label>
        <input type="password" name='senha' class="rounded-input" placeholder="Digite sua senha">
      </div>

      <a href="<?=base_url('recuperar')?>" class="link">Recuperar senha</a>
      <input type="submit" class="btn-rounded" value="Entrar">
    </form>
  </div>

  <div class="login-footer">
    <hr>
    <ul>
      <li><a href="#">Sobre</a></li>
      <li><a href="#">Contato</a></li>
      <li><a href="#">Copyright</a></li>
    </ul>
  </div>
</section>