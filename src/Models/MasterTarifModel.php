<?php namespace Bantenporv\MasterTarif\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The MasterTarifModel class.
 *
 * @package Bantenporv\MasterTarif
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MasterTarifModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'master_tarif';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
