<?php

Route::group(['prefix' => '/','middleware' => ['web']], function() {
    Route::resource('master-tarif', 'Bantenprov\MasterTarif\Http\Controllers\MasterTarifController');

    Route::get('master-tarif/{parent_id}/add-child', 'Bantenprov\MasterTarif\Http\Controllers\MasterTarifController@createChild')->name('master-tarif.create-child');

    Route::post('master-tarif/{parent_id}/add-child', 'Bantenprov\MasterTarif\Http\Controllers\MasterTarifController@storeChild')->name('master-tarif.create-child.store');
});
