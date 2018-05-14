<?php

namespace Bantenprov\MasterTarif\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class MasterTarifModel extends Model 
{
    use NodeTrait;

    protected $table = 'master_tarifs';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = array(
        'id',
        'uuid',
        'nama',
        'dasar_hukum',
        'status',
        'daftar_retribusi_id',
        'daftar_retribusi_uuid',
        'user_id',
        'user_update',
    );

    public function getDaftarRetribusi()
    {
        return $this->belongsTo('Bantenprov\DaftarRetribusi\Models\DaftarRetribusiModel', 'daftar_retribusi_id');
    }

    public function getUserCreated()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function getUserUpdated()
    {
        return $this->belongsTo('App\User','user_update');
    }

}