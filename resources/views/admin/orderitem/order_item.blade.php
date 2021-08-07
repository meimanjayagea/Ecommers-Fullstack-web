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
                            <h3 class="card-title">List Order Item</h3>
                        </div>
                        <div class="card-body">

                                <form action="{{url('admin/order/'.$id.'/create')}}" method="POST"
                                    enctype="multipart/form-data" id="form-order-item">
                                    @csrf

                                    <input type="hidden" name="order_id" value="{{$id}}" id="order_id">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="product_id">Name Product</label>
                                            <select class="form-control" name="product_id" id="product_id">
                                                @foreach ($products as $product)
                                                <option value="{{$product->id}}"
                                                    {{ (old('product') == $product->name) ? 'selected' : '' }}>
                                                    {{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="qty">QTY</label>
                                            <input type="number" class="form-control @error('qty') is-invalid @enderror"
                                                name="qty" id="qty">

                                            @error('qty')
                                            <div class="alert alert-danger">{{$message}} </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-primary ml-3 mb-3"
                                        name="submit"></button>
                                </form>

                            <table id="order" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>QTY</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="data-item">
                                    <?php $i=1; ?>
                                    @forelse ($orderitems as $order)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$order->product->name}}</td>
                                        <td>{{$order->qty}}</td>
                                        <td>
                                            <a href="{{ url('admin/order/orders_item/edit'.$order->id) }}">
                                                <a href="{{ url('admin/order/'.$id.'/order_item/'.$order->id) }}">
                                                    <i class="fas fa-edit"></i></a>
                                                ||
                                                <a
                                                    href="{{ url('admin/order/'.$id.'/order_item/'.$order->id.'/delete') }}">
                                                    <button type="button" class="btn"
                                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')"><i
                                                            class="fas fa-trash"></i> </button></a>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">Tidak ada data Item Order!</div>
                                    @endforelse
                                </tbody>
                            </table>
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
@push('script')
    <script>
        $(document).ready(function(){
            $('#form-order-item').on('submit', function(e){
                e.preventDefault();
                const order_id = $('#order_id').val();
                const order_id = $('#product_id').val();
                const order_id = $('#qty').val();

                $ajax({
                    type: 'Post',
                    url : '/api/order/order_item/' + order_id,
                    data: {
                        'order_id' : order_id,
                        'product_id' : product_id,
                        'qty' : qty
                },
                su
                })
            })
        })

    </script>
@endpush