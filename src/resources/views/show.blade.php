@extends('master')
@section('content')
<div class="jumbotron text-center">
  <h1>{{ $master_tarif->nama }}</h1>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title"><h2>{{ $master_tarif->nama }}</h2></h5>
    <h6 class="card-subtitle mb-2 text-muted">Created : {{ $master_tarif->created_at }}</h6>
    <hr />
    {{-- <p class="card-text">{{ $master_tarif->description }}.</p> --}}
    
    <a href="{{ route('master-tarif.create') }}" class="btn btn-success">
      Add New
    </a>
    <a href="{{ route('master-tarif.edit',$master_tarif->id) }}" class="btn btn-warning">
      Edit
    </a>
  </div>
  <div class="card-footer">
    <span class="pull-left">Created by : {{ $master_tarif->getUserCreated->name }}</span>
    <span class="pull-right">Updated by : {{ $master_tarif->getUserUpdated->name }}</span>
  </div>
</div>

@endsection
