@extends('layout.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Input Data Vendor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="container-fluid">
                                <div class="row mt-3">
                                    <div class="col-9">
                                        <button type="button" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-secondary">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 300px;">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Nomor Vendor</th>
                                            <th>Jenis Vendor</th>
                                            <th>Nama Vendor</th>
                                            <th>Alamat</th>
                                            <th>Contact Person</th>
                                            <th>No. Telp/HP</th>
                                            <th>Nomor NPWP</th>
                                            <th>Status PKP</th>
                                            <th>Category</th>
                                            <th>Product</th>
                                            <th>Upload</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>00001</td>
                                            <td>Perusahaan</td>
                                            <td>PT Mitra Bersama</td>
                                            <td>Jl Bojong Koneng No 10 xxx</td>
                                            <td>Cecep</td>
                                            <td>0813-112121212</td>
                                            <td>01-02.03121142</td>
                                            <td>PKP</td>
                                            <td>Barang & Jasa</td>
                                            <td>Splicer</td>
                                            <td>NIB/KTP</td>
                                        </tr>
                                        <tr>
                                            <td>00002</td>
                                            <td>Perusahaan</td>
                                            <td>PT Mitra Bersama</td>
                                            <td>Jl Bojong Koneng No 10 xxx</td>
                                            <td>Cecep</td>
                                            <td>0813-112121212</td>
                                            <td>01-02.03121142</td>
                                            <td>PKP</td>
                                            <td>Barang & Jasa</td>
                                            <td>Splicer</td>
                                            <td>NIB/KTP</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->



                    </div>


                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
