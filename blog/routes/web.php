<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'sistema'], function(){
    $this->get('/home', 'SistemaController@home')->name('Home');
});

$this->get('/', 'sistema\SistemaController@index')->name('Inicio');


Auth::routes();
