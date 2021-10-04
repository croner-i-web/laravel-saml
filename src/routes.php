<?php

$loginRoute = Config::get('saml.routes.login', 'login');
$logoutRoute = Config::get('saml.routes.logout', 'logout');

Route::get($loginRoute, 'SamlController@login')->name('login');
Route::get($logoutRoute, 'SamlController@logout')->name('logout');
