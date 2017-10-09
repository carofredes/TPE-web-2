<?php

class configApp {
	public static $ACTION = 'action';
	public static $PARAMS = 'params';
	public static $ACTIONS = [
		''=> 'homeController#home',
		'home'=> 'homeController#home',
		'ringtones' => 'homeController#ringtones',
		'themes' => 'homeController#themes',
		'wallpapers' => 'wallpapersController#wallpapers'
	];
}

?>