@extends('admin.template')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="row">
            <!-- /.Pendapatan -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-decoration-none text-body">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pendapatan</span>
                            <span class="info-box-number">
                                Rp. {{$orders->sum('jumlah_harga')}}
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.User -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-decoration-none text-body">
                    <div class="info-box mb-3">

                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Member Baru</span>
                            <span class="info-box-number">{{$users->count()}} User</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.Product -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-decoration-none text-body">
                    <div class="info-box mb-3">

                        <span class="info-box-icon card-dark elevation-1"><i class="fas fa-box-open"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Produk</span>
                            <span class="info-box-number">{{$products->count()}} Produk</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.Penjualan -->
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-decoration-none text-body">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Penjualan</span>
                            <span class="info-box-number">{{$orders_item->count()}} Penjualan</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-decoration-none text-body">
                    <div class="info-box mb-3">

                        <span class="info-box-icon bg-warning elevation-1"><i class="far fa-bookmark"></i></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Kategori Product</span>
                            <span class="info-box-number">{{$kategori->count()}} Kategori</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-decoration-none text-body">
                    <div class="info-box mb-3">

                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-money-check-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Transaksi</span>
                            <span class="info-box-number">{{$users->count()}} Transaksi</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-decoration-none text-body">
                    <div class="info-box mb-3">

                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-undo-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Refaund</span>
                            <span class="info-box-number">{{$users->count()}} Pengembalian</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-decoration-none text-body">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shipping-fast"></i></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Status Pengiriman</span>
                            <span class="info-box-number">{{$users->count()}} Terkirim</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0 bg-dark">
                        <h3 class="card-title">Penjualan Product Paling Laris</h3>
                        <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>PRODUK</th>
                                    <th>HARGA</th>
                                    <th>PENJUALAN</th>
                                    <th>STOK</th>
                                    <th>LAINNYA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders_item as $order_item)
                                <tr>
                                    <td>
                                        <img src="{{url('img/product')}}/{{$order_item->product->gambar_product}}"
                                            class="img-circle img-size-32 mr-2">
                                        {{$order_item->product->name}}
                                    </td>
                                    <td>{{$order_item->order->jumlah_harga}}</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            12%
                                        </small>
                                        12,000 Sold
                                    </td>
                                    <td>
                                        {{$order_item->product->stock}}
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0 bg-dark">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Grafik Penjualan</h3>
                            <a href="javascript:void(0);" class="text-light"><i class="far fa-eye"></i>&nbsp;Lihat Laporan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">$18,230.00</span>
                                <span>Sales Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                </span>
                                <span class="text-muted">Since last month</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This year
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Last year
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>

        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </section>
    <!-- /.content -->
</div>

@endsection
