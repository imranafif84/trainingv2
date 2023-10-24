@extends('template.app')

@section('title', 'Cipta Item')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Cipta Item</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ Route('item.store') }}" method="POST">
                    @csrf
                    @include('item.form')
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <a href="{{ Route('item.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Hantar</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>
@endsection
