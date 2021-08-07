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
                            <a href="{{route('product.create')}}" class="btn btn-success">Tambahkan Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Product</th>
                                        <th>Kategori Product</th>
                                        <th>Gambar Product</th>
                                        <th>Nama Product</th>
                                        <th>Harga Product</th>
                                        <th>Stoct Product</th>
                                        <th>Varian Product</th>
                                        <th>Keterangan Product</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $index=>$item)
                                    <tr>
                                        <td scope="row">{{$index+1}}</td>
                                        <td>{{$item->kode}}</td>
                                        <td>{{$item->category->name}}</td>
                                        <td>{{$item->gambar_product}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>Rp. {{$item->harga}}</td>
                                        <td>{{$item->stock}}</td>
                                        <td>{{Str::limit($item->varian,50)}}</td>
                                        <td>{{Str::limit($item->keterangan, 20)}}</td>
                                        <td>
                                            <a href="{{route('product.edit', $item->id)}}">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            || <form action="{{route('product.destroy', $item->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn btn-link p-0 m-0 d-inline align-baseline">Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">Tidak ada data Product!</div>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{$product->links()}}
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