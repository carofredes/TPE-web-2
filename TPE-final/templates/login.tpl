{include file="header.tpl"}
<div class="login-page">
  <div class="row">
    <h2 class="title-login-page">Log in!</h2>
    <div class="login-form">
      <form action="verificarUsuario" method="post">
        <div class="form-group">
          <label for="nickName">Usuario</label>
          <input type="text" class="form-control" id="nickName" name="nickName" placeholder="Usuario@mail.com" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        {if !empty($error) }
        <div class="alert alert-danger" role="alert">{$error}</div>
        {/if}
        <button type="submit" class="btn btn-default btn-login">Login</button>
      </form>
    </div>
  </div>
  <div class="row">
    <h2 class="title-login-page">Create an account</h2>
    <div class="login-form">
      <form action="agregarUsuario" method="post">
        <div class="form-group">
          <label for="nickName">Usuario</label>
          <input type="text" class="form-control" id="nickName" name="nickName" placeholder="Usuario@mail.com" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        {if !empty($error) }
        <div class="alert alert-danger" role="alert">{$error}</div>
        {/if}
        <button type="submit" class="btn btn-default btn-login">Create</button>
      </form>
    </div>
  </div>
  <span class="goback-text"><a href="./">Go back</a></span>
</div>
{include file="footer.tpl"}