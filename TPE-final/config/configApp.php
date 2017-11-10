<?php

class configApp {
	public static $ACTION = 'action';
	public static $PARAMS = 'params';
	public static $ACTIONS = [
		''=> 'homeController#home',
		'home'=> 'homeController#home',
		
		'ringtones' => 'ringtonesController#ringtones',
		'themes' => 'themesController#themes',
		'themeImages' => 'themesController#themeImages',
		'guardarThemes'=> 'themesController#store',
		'borrarThemes'=> 'themesController#destroy',
		'editarThemes'=> 'themesControler#edit',

		'wallpapers' => 'wallpapersController#wallpapers',
		'guardarWallpaper'=> 'wallpapersController#store',
        'borrarWallpaper' => 'wallpapersController#destroy',
        'editarWallpaper' => 'wallpapersController#edit',		
        'wallpaper' => 'wallpapersController#imageDetails',

      	'login' => 'loginController#index',
      	'verificarUsuario' => 'loginController#verify',
      	'agregarUsuario' => 'loginController#add',
      	'logout' => 'loginController#destroy'


	];
}

?>