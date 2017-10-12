<?php

class configApp {
	public static $ACTION = 'action';
	public static $PARAMS = 'params';
	public static $ACTIONS = [
		''=> 'homeController#home',
		'home'=> 'homeController#home',
		'ringtones' => 'ringtonesController#ringtones',
		'themes' => 'themesController#themes',
		'wallpapers' => 'wallpapersController#wallpapers',
		'image' => 'imageDetailsController#imageDetails',
		'guardarWallpaper'=> 'wallpapersController#store',
        'borrarWallpaper' => 'wallpapersController#destroy',
      	'login' => 'loginController#index',
      	'verificarUsuario' => 'loginController#verify',
      	'logout' => 'loginController#destroy'
	];
}

?>