<?php

get('album', [
    'uses' => 'AlbumController@index',
    'as' => 'album.index',
    'permission' => 'products',
    'menuItem' => ['icon' => 'md md-group', 'title' => 'Products']
]);
get('album/create', [
    'uses' => 'AlbumController@create',
    'as' => 'album.create',
    'permission' => 'products'
]);
post('album', [
    'uses' => 'AlbumController@store',
    'as' => 'album.store',
    'permission' => 'Users'
]);
get('album/{id}/edit', [
    'uses' => 'AlbumController@edit',
    'as' => 'album.edit',
    'permission' => 'products'
]);
put('album/{id}', [
    'uses' => 'AlbumController@update',
    'as'   => 'album.update',
    'permission' => 'products'
]);
post('album/{id}/delete', [
    'uses' => 'AlbumController@destroy',
    'as'   => 'album.destroy',
    'permission' => 'products'
]);

