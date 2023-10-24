@extends('template.app')

@section('title')
Home
@endsection

@push('css')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
            <h1>Selamat Datang ke Sistem</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Item</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ Route('item.index') }}" class="small-box-footer">Maklumat Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $users ?? 0 }}</h3>

                <p>Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ Route('user.index') }}" class="small-box-footer">Maklumat Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-3"></div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
