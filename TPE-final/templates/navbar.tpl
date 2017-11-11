<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">NOC</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a id="home" href="home">Home</a></li>
          <li><a id="wallpapers" href="wallpapers">Wallpapers</a></li>
          <li><a id="ringtones" href="ringtones">Ringtones</a></li>          
      </ul>
      <ul class="nav navbar-nav navbar-right">
        {if $admin}
          <li><a id="login-button"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
        {/if}       
        {if $userLogged}
        <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
         {else} 
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        {/if}
      </ul>
    </div>
</nav>
