<?php

$loginRoute = Config::get('saml.routes.login', 'login');
$logoutRoute = Config::get('saml.routes.logout', 'logout');

Route::get($loginRoute, 'SamlController@login');
Route::get($logoutRoute, 'SamlController@logout');
