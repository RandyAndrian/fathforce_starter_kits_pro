@extends('layouts.app2')

@section('title')
    Home
@endsection

@section('content')
    <div class="card">
    <div class="card-body">
        <img src="{{ $images }}" alt="" width="8%">
         <h3>{{ $nama }}</h3>
         <h3>{{ $email }}</h3>
    </div>
@endsection