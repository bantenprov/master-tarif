<?php

Route::group(['prefix' => 'master-tarif'], function() {
    Route::get('demo', 'Bantenprov\MasterTarif\Http\Controllers\MasterTarifController@demo');
});
