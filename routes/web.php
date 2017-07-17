<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', 'SiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index');

/* Eksport dan Import Data Siswa */
Route::get('export/siswa', [
	'as'	=> 'export.siswa',
	'uses'	=> 'SiswaController@exportExcel'
]);

Route::get('template/siswa', [
	'as'	=> 'template.siswa',
	'uses'	=> 'SiswaController@generateExcelTemplate'
]);

Route::post('import/siswa', [
	'as'	=> 'import.siswa',
	'uses'	=> 'SiswaController@importExcel'
]);

// Cetak Data Siswa

Route::get('pdf/{id}','SiswaController@pdf');