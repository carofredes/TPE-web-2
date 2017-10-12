<?php

class configApp {
	public static $ACTION = 'action';
	public static $PARAMS = 'params';
	public static $ACTIONS = [
		''=> 'homeController#home',
		'home'=> 'homeController#home',
		
		'ringtones' => 'ringtonesController#ringtones',
		'themes' => 'themesController#themes',
		'guardarThemes'=> 'themesController#store',
		'borrarThemes'=> 'themesController#destroy',
		'editarThemes'=> 'themesControler#edit',

		'wallpapers' => 'wallpapersController#wallpapers',
		'guardarWallpaper'=> 'wallpapersController#store',
        'borrarWallpaper' => 'wallpapersController#destroy',
        'editarWallpaper' => 'wallpapersController#edit',		
        'image' => 'imageDetailsController#imageDetails',

      	'login' => 'loginController#index',
      	'verificarUsuario' => 'loginController#verify',
      	'logout' => 'loginController#destroy'


	];
}

?>