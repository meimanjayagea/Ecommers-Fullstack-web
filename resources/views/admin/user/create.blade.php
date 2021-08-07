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

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah User</h3>

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
                <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Foto Profile</label><br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('foto_profile') is-invalid @enderror" id="foto_profile" name="foto_profile">
                            <label class="custom-file-label" for="foto_profile">Upload Foto</label>

                            @error('foto_profile')
                            <div class="alert alert-danger">{{$message}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Level</label><br>
                        <select class="form-control @error('id') is-invalid @enderror" name="id">
                            @foreach ($user as $item)
                            <option value="{{$item->id}}">{{$item->level}}</option>
                            @endforeach
                        </select>
                        @error('id')
                        <div class="alert alert-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" autofocus>
                        @error('name')
                        <div class="alert alert-danger">{{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control  @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" autofocus>
                        @error('email')
                        <div class="alert alert-danger">{{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control  @error('password') is-invalid @enderror" value="{{old('password')}}" name="password" autofocus>
                        @error('password')
                        <div class="alert alert-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

@endsection