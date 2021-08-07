@extends('admin.template')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
    @endif
    <!-- Main content -->
    <section class="content">
        <div class="conntainer-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Product</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('product.update', $product->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label class="form-label">Kode Product </label>
                                        <input type="text" class="form-control  @error('kode') is-invalid @enderror"
                                            value="{{old('kode', $product->kode)}}" name="kode" autofocus>
                                        @error('kode')
                                        <div class="alert alert-danger">{{$message}} </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nama Kategori </label><br>
                                        <select class="form-select" name="category_id"
                                            aria-label="Default select example">
                                            @foreach ($category as $item)
                                            <option value="{{$item->id}}">{{old('name', $item->name)}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="alert alert-danger">{{$message}} </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nama Product </label>
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                            value="{{old('name', $product->name)}}" name="name" autofocus>
                                        @error('name')
                                        <div class="alert alert-danger">{{$message}} </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Stock Product </label>
                                        <input type="number" class="form-control  @error('stock') is-invalid @enderror"
                                            value="{{old('stock', $product->stock)}}" name="stock" autofocus>
                                        @error('stock')
                                        <div class="alert alert-danger">{{$message}} </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Varian Product </label>
                                        <input type="text" class="form-control  @error('varian') is-invalid @enderror"
                                            value="{{old('varian', $product->varian)}}" name="varian" autofocus>
                                        @error('varian')
                                        <div class="alert alert-danger">{{$message}} </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Keterangan Product </label>
                                        <input type="text"
                                            class="form-control  @error('keterangan') is-invalid @enderror"
                                            value="{{old('keterangan', $product->keterangan)}}" name="keterangan"
                                            autofocus>
                                        @error('keterangan')
                                        <div class="alert alert-danger">{{$message}} </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                <!-- /.card-body -->
                                <!-- /.card -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Footer
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>


    </section>
    <!-- /.content -->
</div>

@endsection