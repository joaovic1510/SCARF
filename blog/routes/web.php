<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'sistema'], function(){

    $this->get('/new-rent', 'RentsController@newRental')->name('rent.newRental');
    $this->get('/historic', 'RentsController@historic')->name('rent.historic');

    $this->get('/new-product', 'ProductsController@newProduct')->name('product.newProduct');
    $this->get('/products', 'ProductsController@products')->name('product.products');

    $this->get('/new-client', 'ClientsController@clients')->name('client.clients');
    $this->get('/clients', 'CLientsController@newClient')->name('client.newClient');

    $this->get('/users', 'UsersController@users')->name('user.users');
    $this->get('/new-user', 'UsersController@newUser')->name('user.newUser');
    $this->get('/account', 'UsersController@account')->name('user.account');

    $this->get('/home', 'SistemaController@home')->name('home');
});

$this->get('/', 'sistema\SistemaController@index')->name('inicio');


Auth::routes();
