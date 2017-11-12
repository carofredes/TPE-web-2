<?php

class configApp {
	public static $ACTION = 'action';
	public static $PARAMS = 'params';
	public static $ACTIONS = [
		''=> 'homeController#home',
		'home'=> 'homeController#show',
		
		'ringtones' => 'ringtonesController#ringtones',

		'categorieResults' => 'wallpapersController#showResults',
		'wallpapers' => 'wallpapersController#wallpapers',
		'guardarWallpaper'=> 'wallpapersController#store',
        'borrarWallpaper' => 'wallpapersController#destroy',
        'editarWallpaper' => 'wallpapersController#edit',		
        'wallpaper' => 'wallpapersController#imageDetails',
        'guardarCategoria'=> 'wallpapersController#storeCategorie',
		'borrarCategoria'=> 'wallpapersController#destroyCategorie',
		'editarCategoria'=> 'wallpapersController#editCategorie',

      	'login' => 'loginController#index',
      	'verificarUsuario' => 'loginController#verify',
      	'agregarUsuario' => 'loginController#add',
      	'logout' => 'loginController#destroy'
	];
}

?>

