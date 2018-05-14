@extends('master')
@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> Daftar Retribusi
            <a href="{{ route('master-tarif.create') }}" class="float-right">
              <button type="button" class="btn btn-warning">Add new</button>
            </a>&nbsp;
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-sm">
              <thead class="thead-dark">
                <tr>
                
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Dasar Hukum</th>
                  <th scope="col">Retribusi</th>
                  <th scope="col">Status</th>
                  <th scope="col">Created at</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($master_tarifs as $key => $master_tarif)
                <tr>
                  <th scope="row" id="{{$master_tarif->id}}">{{ ++$key }}</th>
                  <td>
                    <a href="{{route('master-tarif.show',$master_tarif->id)}}">{{$master_tarif->nama}}</a>
                  </td>                                 
                  <td>{{$master_tarif->dasar_hukum}}</td>
                  <td>{{$master_tarif->getDaftarRetribusi->nama}}</td>                     
                  <td>{{($master_tarif->status == 1) ? 'Aktif' : 'Tidak Aktif'}}</td>
                  <td>{{$master_tarif->created_at->toFormattedDateString()}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{ route('master-tarif.edit',$master_tarif->id) }}">
                        <button type="button" class="btn btn-warning">Edit</button>
                      </a>&nbsp;
                      <form action="{{route('master-tarif.destroy',$master_tarif->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="Delete" />
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <nav>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->
  </div>
</div>

@endsection