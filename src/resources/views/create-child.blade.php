
@extends('master')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <h1>Add Child Master Tarif {{ $master_tarif_parent->nama }}</h1>
        <hr>
          <div class="card">
            <div class="card-header">
              <strong>Create Tarif - {{ $master_tarif_parent->nama }}</strong>
            </div>
            <div class="card-body">
              <form action="{{route('master-tarif.create-child.store', $master_tarif_parent->id)}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="masterTarifNama"  name="nama">
                </div>  

                <div class="form-group">
                  <label for="status">Status</label>
                  <select id="status" name="status" class="form-control form-control">
                    <option value="0">Tidak Aktif</option>
                    <option value="1">Aktif</option>
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
  