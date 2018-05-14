<?php namespace Bantenporv\MasterTarif\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenporv\MasterTarif\Facades\MasterTarif;
use Bantenporv\MasterTarif\Models\MasterTarifModel;

/**
 * The MasterTarifController class.
 *
 * @package Bantenporv\MasterTarif
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MasterTarifController extends Controller
{
    public function demo()
    {
        return MasterTarif::welcome();
    }
}
