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
                            <h3 class="card-title">List Order</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{url('admin/order/create')}}" class="btn btn-success">Tambahkan Data</a>
                        </div>
                        <div class="card-body">

                            <table id="order" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Order</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($orders as $index=>$order)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$order->name}}</td>
                                        <td>{{date('d-m-y', strtotime($order->tanggal_order))}}</td>
                                        <td>
                                            <a href="{{ url('admin/order/edit/'.$order->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            ||
                                            <a href="{{ url('admin/order/'.$order->id) }}">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                            ||
                                            <a href="{{ url('admin/order/delete/'.$order->id) }}">
                                                <button type="button" class="btn "
                                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')"><i
                                                        class="fas fa-trash"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">Tidak ada data Order!</div>
                                    @endforelse
                                </tbody>
                            </table>


                            <div class="float-right">
                                {{ $orders->links()}}
                            </div>
                        </div>
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
    </section>
    <!-- /.content -->
</div>
@endsection
