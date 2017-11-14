<?php

class configApp {
    public static $ACTION  = 'action';
    public static $PARAMS  = 'params';
    public static $ACTIONS = [
        ''                            => 'homeController#home',
        'home'                        => 'homeController#show',

        'ringtones'                   => 'ringtonesController#ringtones',

        'categorieResults'            => 'wallpapersController#showResults',
        'wallpapers'                  => 'wallpapersController#wallpapers',
        'guardarWallpaper'            => 'wallpapersController#store',
        'guardarWallpaperRelacionado' => 'wallpapersController#storeRelated',
        'borrarWallpaper'             => 'wallpapersController#destroy',
        'borrarWallpaperRelacionado'  => 'wallpapersController#destroyRelated',
        'editarWallpaper'             => 'wallpapersController#edit',
        'wallpaper'                   => 'wallpapersController#imageDetails',
        'guardarCategoria'            => 'wallpapersController#storeCategorie',
        'borrarCategoria'             => 'wallpapersController#destroyCategorie',

        'login'                       => 'usersController#index',
        'verificarUsuario'            => 'usersController#verify',
        'agregarUsuario'              => 'usersController#add',
        'logout'                      => 'usersController#destroy',
        'userPanel'                   => 'usersController#showUsersPanel',
        'borrarUsuario'               => 'usersController#delete',
        'cambiarPermiso'              => 'usersController#changePermission',
    ];
}

?>

