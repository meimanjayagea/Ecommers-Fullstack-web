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

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List User</h3>

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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto Profile</th>
                            <th>Nama</th>
                            <th>email</th>
                            <!-- <th>Password</th> -->
                            <th>Level</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <p><a href="{{route('user.create')}}">Tambah User</a></p>
                        @forelse ($user as $index=>$item)
                        <tr>
                            <td scope="row">{{$index+1}}</td>
                            <td><img src="{{url('assets/dist/img')}}/{{$item->foto_profile}}" class="elevation-2" height="100px" width="100px" alt="User Image"></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <!-- <td>{{Str::limit($item->password, 20)}}</td> -->
                            <td>{{$item->level}}</td>

                            <td><a href="#"><i class="far fa-edit"></i></a>
                                || <a href="#"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">Tidak ada data!</div>
                        @endforelse
                    </tbody>
                </table>
                <div class="float-right">
                    {{$user->links()}}
                </div>
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