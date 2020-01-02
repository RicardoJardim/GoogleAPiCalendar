<?php



Route::get('/index', 'FullCallenderController@index')->name('index');


Route::get('/', 'FullCallenderController@test')->name('test');


Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');
Route::put('/event-update', 'EventController@update')->name('routeEventUpdate');



Route::get('/googlecalendar', 'FullCallenderController@googlecalendar')->name('googlecalendar');

Route::get('/timegrid', 'FullCallenderController@timegrid')->name('timegrid');