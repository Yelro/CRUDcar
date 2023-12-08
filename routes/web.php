<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('typeCar','TypeController@index');
Route::post('saveType','TypeController@saveType');

Route::get('deleteType/{id}','TypeController@deleteType');

Route::get('editType/{id}','TypeController@editType');
Route::post('updateType/{id}','TypeController@updateType');

Route::post('saveCar','CarController@saveCar');
Route::get('registerCar','CarController@index');

Route::get('deleteCar/{id}','CarController@deleteCar');

Route::get('editCar/{id}','CarController@editCar');
Route::post('updateCar/{id}','CarController@updateCar');
