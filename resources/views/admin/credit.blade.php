@extends('layouts.admin.app')

@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{ $title }}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Default Layout</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">{{ $title }}</h2>
            <p class="section-lead">Welcome</p>
            <div class="card">
              <div class="card-header">
                <h4>{{ $title }}</h4>
              </div>
              <div class="card-body">
                <p>{{ $body }}</p>
              </div>
              <div class="card-footer bg-whitesmoke">
                Developed by Muhamad Randy Andrian 2021
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection