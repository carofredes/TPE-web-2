<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">NOC</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a id="home" href="home">Home</a></li>
          <li><a id="wallpapers" href="wallpapers">Wallpapers</a></li>
          <li><a id="themes" href="themes">Themes</a></li>
          <li><a id="ringtones" href="ringtones">Ringtones</a></li>
          {if $admin}
          <li><a href="">admin</a></li>
          {/if}
      </ul>
      <ul class="nav navbar-nav navbar-right">
<!--    <li><a id="login-button"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
</nav>
