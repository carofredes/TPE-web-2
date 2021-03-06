<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">NOC</a>
		</div>
		<ul class="nav navbar-nav">
			<li><button id="home">Home</button></li>
			<li><button id="wallpapers">Wallpapers</button></li>
			<li><button id="ringtones">Ringtones</button></li>
			{if $admin}
			<li><button id="userPanel">User panel</button></li>
			{/if}
		</ul>
		<ul class="nav navbar-nav navbar-right">
			{if $userLogged}
			<li><a id="login-button"><span class="glyphicon glyphicon-user"></span> {$userLogged}</a></li>
			<li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			{else}
			<li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			{/if}
		</ul>
	</div>
</nav>