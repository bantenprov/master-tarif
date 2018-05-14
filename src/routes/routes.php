<?php

Route::group(['prefix' => '/','middleware' => ['web']], function() {
    Route::resource('master-tarif', 'Bantenprov\MasterTarif\Http\Controllers\MasterTarifController');
});
