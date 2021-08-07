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
                            <h3 class="card-title">List Product</h3>

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
                            <form action="{{url('admin/order/'.$orderitem->order_id.'/order_item/'.$orderitem->id)}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form">

                                    <input type="hidden" name="order_id" value="{{$orderitem->order_id}}" id="order_id">
                                    <div class="col-md-4 mb-2">
                                        <label for="product_id">Product</label>
                                        <select class="form-control" name="product_id" id="product_id">
                                            @foreach ($products as $product)
                                            <option value="{{ $product->id }}"
                                                {{ (old('product_id', $orderitem->product->name) == $product->name) ? 'selected' : '' }}>
                                                {{ $product->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-2">
                                        <label for="qty">QTY</label>
                                        <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" id="qty"
                                            value="{{old('qty', $orderitem->qty)}}">
                                            @error('qty')
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
