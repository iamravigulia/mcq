<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package!';
// });

// Route::get('test', 'EdgeWizz\Fillup\Controllers\FillupController@test')->name('test');

Route::post('fmt/mcq/store', 'EdgeWizz\Mcq\Controllers\McqController@store')->name('fmt.mcq.store');

Route::post('fmt/mcq/update/{id}', 'EdgeWizz\Mcq\Controllers\McqController@update')->name('fmt.mcq.update');

Route::post('fmt/mcq/csv_upload', 'EdgeWizz\Mcq\Controllers\McqController@uploadFile')->name('fmt.mcq.csv');

Route::any('fmt/mcq/delete/{id}',  'EdgeWizz\Mcq\Controllers\McqController@delete')->name('fmt.mcq.delete');

Route::any('fmt/mcq/inactive/{id}',  'EdgeWizz\Mcq\Controllers\McqController@inactive')->name('fmt.mcq.inactive');
Route::any('fmt/mcq/active/{id}',  'EdgeWizz\Mcq\Controllers\McqController@active')->name('fmt.mcq.active');