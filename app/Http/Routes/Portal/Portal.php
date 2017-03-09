 <?php

get('/', [
    'uses' => 'Portal\PortalController@home',
    'as' => 'portal.home',
]);

get('gallery', [
    'uses' => 'Portal\PortalController@gallery',
    'as' => 'portal.gallery',
]);

get('aboutus', [
    'uses' => 'Portal\PortalController@aboutus',
    'as' => 'portal.aboutus',
]);
get('quality', [
    'uses' => 'Portal\PortalController@quality',
    'as' => 'portal.quality',
]);
get('relation', [
    'uses' => 'Portal\PortalController@relation',
    'as' => 'portal.relation',
]);
get('product', [
    'uses' => 'Portal\PortalController@product',
    'as' => 'portal.product',
]);

get('contactus', [
    'uses' =>  'Portal\ContactPortalController@create',
    'as'    => 'contactus.create',
]);

post('contactus/store', [
    'uses' =>  'Portal\ContactPortalController@store',
    'as'    => 'contactus.store',
]);

get('product/{id}/show', [
    'uses' => 'Portal\PortalController@showProduct',
    'as' => 'portal.show_product',
]);




?> 