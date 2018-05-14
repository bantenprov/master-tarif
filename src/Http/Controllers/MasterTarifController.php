<?php namespace Bantenprov\MasterTarif\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\MasterTarif\Facades\MasterTarif;
use Bantenprov\MasterTarif\Models\MasterTarifModel;
use Bantenprov\DaftarRetribusi\Models\DaftarRetribusiModel;
use Ramsey\Uuid\Uuid;

/**
 * Class MasterTarifController
 * @package Bantenprov\MasterTarif\Http\Controllers
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MasterTarifController extends Controller
{

    /**
     * @return mixed
     */
    public function index()
    {
        $master_tarifs = MasterTarifModel::all();

        return view('master-tarif::index', compact('master_tarifs'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $daftar_retribusies = DaftarRetribusiModel::all();

        return view('master-tarif::create', compact('daftar_retribusies'));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {

        $daftar_retribusi = DaftarRetribusiModel::find($request->daftar_retribusi_id);

        $request->validate([            
            'nama'                  => 'required',
            'dasar_hukum'           => 'required',
            'status'                => 'required',
            'daftar_retribusi_id'   => 'required',
        ]);

        if(is_null($daftar_retribusi)){
            return redirect()->back()->withErrors('Error : retribusi yang dipilih tidak ditemukan');
        }

        if($request->status > 1 && $request->status < 0){
            return redirect()->back()->withErrors('Error : status salah');
        }

        MasterTarifModel::create([
            'uuid'                  => Uuid::uuid5(Uuid::NAMESPACE_DNS, 'bantenprov.go.id'.date('YmdHis')),
            'nama'                  => $request->nama,
            'dasar_hukum'           => $request->dasar_hukum,
            'status'                => $request->status,
            'daftar_retribusi_id'   => $request->daftar_retribusi_id,
            'daftar_retribusi_uuid' => $daftar_retribusi->uuid,
            'user_id'               => \Auth::user()->id,
            'user_update'           => \Auth::user()->id,
        ]);

        $request->session()->flash('message', 'Successfully add new data');

        return redirect()->route('master-tarif.index');

    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $daftar_retribusies = DaftarRetribusiModel::all();

        $master_tarif = MasterTarifModel::find($id);

        return view('master-tarif::edit',compact('daftar_retribusies','master_tarif'));
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        $daftar_retribusi = DaftarRetribusiModel::find($request->daftar_retribusi_id);

        $request->validate([            
            'nama'                  => 'required',
            'dasar_hukum'           => 'required',
            'status'                => 'required',
            'daftar_retribusi_id'   => 'required',
        ]);

        if(is_null($daftar_retribusi)){
            return redirect()->back()->withErrors('Error : retribusi yang dipilih tidak ditemukan');
        }

        if($request->status > 1 && $request->status < 0){
            return redirect()->back()->withErrors('Error : status salah');
        }

        MasterTarifModel::find($id)->update([            
            'nama'                  => $request->nama,
            'dasar_hukum'           => $request->dasar_hukum,
            'status'                => $request->status,
            'daftar_retribusi_id'   => $request->daftar_retribusi_id,
            'daftar_retribusi_uuid' => $daftar_retribusi->uuid,
            'user_update'           => \Auth::user()->id,
        ]);

        $request->session()->flash('message', 'Successfully add new data');

        return redirect()->route('master-tarif.index');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $master_tarif = MasterTarifModel::find($id);

        return view('master-tarif::show', compact('master_tarif'));
    }

    /**
     * @param $id
     */
    public function destroy(Request $request, $id)
    {
        MasterTarifModel::find($id)->delete();

        $request->session()->flash('message', 'Successfully delete data');

        return redirect()->route('master-tarif.index');
    }

}
