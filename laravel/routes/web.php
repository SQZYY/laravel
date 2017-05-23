<?php

Route::get('/', 'NotebookController@index');
Route::post('/', 'NotebookController@addContact');
Route::get('edit/{id}', 'NotebookController@edit');
Route::post('update', 'NotebookController@update');
