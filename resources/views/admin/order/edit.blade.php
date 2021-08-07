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
                            <h3 class="card-title">Edit Order</h3>

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
                            <form action="{{url('admin/order/edit/' . $order->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form">

                                    <div class="col-md-4 mb-2">
                                        <label for="exampleFormControlSelect1">Name</label>
                                        <select class="form-control" name="user_id" id="exampleFormControlSelect1">
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}"
                                                {{ (old('user_id', $user->id) == $order->user_id) ? 'selected' : '' }}>
                                                {{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-2">
                                        <label for="validationDefault01">Tanggal Order</label>
                                        <input type="date" class="form-control @error('tanggal_order') is-invalid @enderror" name="tanggal_order"
                                            id="validationDefault01" value="{{old('date', $order->tanggal_order)}}">
                                            @error('tanggal_order')
                                        <div class="alert alert-danger">{{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary ml-2 mb-2" name="submit"></button>
                            </form>
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
