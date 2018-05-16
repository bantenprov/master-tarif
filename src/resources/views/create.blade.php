
@extends('master')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <h1>Add New Master Tarif</h1>
        <hr>
        {{-- 
          'id',
          'uuid',
          'nama',
          'dasar_hukum',
          'status',
          'daftar_retribusi_id',
          'daftar_retribusi_uuid',
          'user_id',
          'user_update',
          --}}
          <div class="card">
            <div class="card-header">
              <strong>Master Tarif</strong>
            </div>
            <div class="card-body">
              <form action="{{route('master-tarif.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="masterTarifNama"  name="nama">
                </div>            
                <div class="form-group">
                  <label for="dasar_hukum">Dasar Hukum</label>
                  <input type="text" class="form-control" id="masterTarifDasarHukum"  name="dasar_hukum">
                </div>
                
                <div class="form-group">
                  <label for="daftar_retribusi_id">Retribusi</label>
                  <select id="daftar_retribusi_id" name="daftar_retribusi_id" class="form-control form-control">
                    <option value="">Please select</option>
                    @foreach ($daftar_retribusies as $daftar_retribusi)
                    <option value="{{$daftar_retribusi->id}}">{{$daftar_retribusi->nama}}</option>    
                    @endforeach                                   
                  </select>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @endsection
  