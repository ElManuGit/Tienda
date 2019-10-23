<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Routes
 Route::middleware(['auth'])->group(function(){ Se usan corchetes para especificar un array, en caso de usar solo auth se puede poner solo parentesis porque es un solo parámetro el que se pasa.
    //Roles. Esta es la estructura básica de una ruta, el método, el nombre y el intermediario (Middleware) que se ocupa de controlar los permisos.
    Route::post(ruta)->name(nombre de ruta)
        ->middleware(verifica si cuenta con el permiso); En esta linea, el sistema va al archivo kernel.php y verifica si el nombre permission existe
        como Sí existe, va a ejecutar lo que tenemos en la clase UserHasPermission y ahí verifica si el User tiene permiso de trabajar con esa ruta
 })
*/


//Routes
Route::middleware(['auth'])->group(function () {

    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //Users
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');

    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('permission:users.create');


    //Products
    Route::post('products/store', 'ProductController@store')->name('products.store')
        ->middleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
        ->middleware('permission:products.index');

    Route::get('products/create', 'ProductController@create')->name('products.create')
        ->middleware('permission:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
        ->middleware('permission:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
        ->middleware('permission:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
        ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
        ->middleware('permission:products.edit');


    //Categories
    Route::post('categories/store', 'CategoryController@store')->name('categories.store')
        ->middleware('permission:categories.create');

    Route::get('categories', 'CategoryController@index')->name('categories.index')
        ->middleware('permission:categories.index');

    Route::get('categories/create', 'CategoryController@create')->name('categories.create')
        ->middleware('permission:categories.create');

    Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
        ->middleware('permission:categories.edit');

    Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
        ->middleware('permission:categories.show');

    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
        ->middleware('permission:categories.destroy');

    Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
        ->middleware('permission:categories.edit');



    //BrandProducts
    Route::post('brandProducts/store', 'BrandProductController@store')->name('brandProducts.store')
        ->middleware('permission:brandProducts.create');

    Route::get('brandProducts', 'BrandProductController@index')->name('brandProducts.index')
        ->middleware('permission:brandProducts.index');

    Route::get('brandProducts/create', 'BrandProductController@create')->name('brandProducts.create')
        ->middleware('permission:brandProducts.create');

    Route::put('brandProducts/{brandProduct}', 'BrandProductController@update')->name('brandProducts.update')
        ->middleware('permission:brandProducts.edit');

    Route::get('brandProducts/{brandProduct}', 'BrandProductController@show')->name('brandProducts.show')
        ->middleware('permission:brandProducts.show');

    Route::delete('brandProducts/{brandProduct}', 'BrandProductController@destroy')->name('brandProducts.destroy')
        ->middleware('permission:brandProducts.destroy');

    Route::get('brandProducts/{brandProduct}/edit', 'BrandProductController@edit')->name('brandProducts.edit')
        ->middleware('permission:brandProducts.edit');




    //Providers
    Route::post('providers/store', 'ProviderController@store')->name('providers.store')
        ->middleware('permission:providers.create');

    Route::get('providers', 'ProviderController@index')->name('providers.index')
        ->middleware('permission:providers.index');

    Route::get('providers/create', 'ProviderController@create')->name('providers.create')
        ->middleware('permission:providers.create');

    Route::put('providers/{provider}', 'ProviderController@update')->name('providers.update')
        ->middleware('permission:providers.edit');

    Route::get('providers/{provider}', 'ProviderController@show')->name('providers.show')
        ->middleware('permission:providers.show');

    Route::delete('providers/{provider}', 'ProviderController@destroy')->name('providers.destroy')
        ->middleware('permission:providers.destroy');

    Route::get('providers/{provider}/edit', 'ProviderController@edit')->name('providers.edit')
        ->middleware('permission:providers.edit');




    //Countries
    Route::post('countries/store', 'CountryController@store')->name('countries.store')
        ->middleware('permission:countries.create');

    Route::get('countries', 'CountryController@index')->name('countries.index')
        ->middleware('permission:countries.index');

    Route::get('countries/create', 'CountryController@create')->name('countries.create')
        ->middleware('permission:countries.create');

    Route::put('countries/{country}', 'CountryController@update')->name('countries.update')
        ->middleware('permission:countries.edit');

    Route::get('countries/{country}', 'CountryController@show')->name('countries.show')
        ->middleware('permission:countries.show');

    Route::delete('countries/{country}', 'CountryController@destroy')->name('countries.destroy')
        ->middleware('permission:countries.destroy');

    Route::get('countries/{country}/edit', 'CountryController@edit')->name('countries.edit')
        ->middleware('permission:countries.edit');

    //Provinces
    Route::post('provinces/store', 'ProvinceController@store')->name('provinces.store')
        ->middleware('permission:provinces.create');

    Route::get('provinces', 'ProvinceController@index')->name('provinces.index')
        ->middleware('permission:provinces.index');

    Route::get('provinces/create', 'ProvinceController@create')->name('provinces.create')
        ->middleware('permission:provinces.create');

    Route::put('provinces/{province}', 'ProvinceController@update')->name('provinces.update')
        ->middleware('permission:provinces.edit');

    Route::get('provinces/{province}', 'ProvinceController@show')->name('provinces.show')
        ->middleware('permission:provinces.show');

    Route::delete('provinces/{province}', 'ProvinceController@destroy')->name('provinces.destroy')
        ->middleware('permission:provinces.destroy');

    Route::get('provinces/{province}/edit', 'ProvinceController@edit')->name('provinces.edit')
        ->middleware('permission:provinces.edit');

    //Cities
    Route::post('cities/store', 'CityController@store')->name('cities.store')
        ->middleware('permission:cities.create');

    Route::get('cities', 'CityController@index')->name('cities.index')
        ->middleware('permission:cities.index');

    Route::get('cities/create', 'CityController@create')->name('cities.create')
        ->middleware('permission:cities.create');

    Route::put('cities/{city}', 'CityController@update')->name('cities.update')
        ->middleware('permission:cities.edit');

    Route::get('cities/{city}', 'CityController@show')->name('cities.show')
        ->middleware('permission:cities.show');

    Route::delete('cities/{city}', 'CityController@destroy')->name('cities.destroy')
        ->middleware('permission:cities.destroy');

    Route::get('cities/{city}/edit', 'CityController@edit')->name('cities.edit')
        ->middleware('permission:cities.edit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});
