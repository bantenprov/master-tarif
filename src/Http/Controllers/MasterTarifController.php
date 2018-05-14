<?php namespace Bantenprov\MasterTarif\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\MasterTarif\Facades\MasterTarif;
use Bantenprov\MasterTarif\Models\MasterTarifModel;

/**
 * The MasterTarifController class.
 *
 * @package Bantenprov\MasterTarif
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MasterTarifController extends Controller
{
    public function demo()
    {
        return MasterTarif::welcome();
    }
}
