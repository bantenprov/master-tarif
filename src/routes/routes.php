<?php

Route::group(['prefix' => 'master-tarif'], function() {
    Route::get('demo', 'Bantenporv\MasterTarif\Http\Controllers\MasterTarifController@demo');
});
