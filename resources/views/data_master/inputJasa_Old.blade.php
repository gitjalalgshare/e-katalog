@extends('layout.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Input Data Jasa</h1>
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
                                            <th>Nomor Pengajuan</th>
                                            <th>Jasa</th>
                                            <th>Jenis</th>
                                            <th>Type</th>
                                            <th>Uom</th>
                                            <th>Qty</th>
                                            <th>Periode</th>
                                            <th>Starting Periode</th>
                                            <th>Harga</th>
                                            <th>Total Harga</th>
                                            <th>Branch</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Vendor</th>
                                            <th>Alamat</th>
                                            <th>Status PKP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01-IKR-JSA/VII/2024</td>
                                            <td>Sewa</td>
                                            <td>Rumah</td>
                                            <td>45/90</td>
                                            <td>Unit</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>Agustus 2024</td>
                                            <td>1.000.000</td>
                                            <td>12.000.000</td>
                                            <td>Jakarta Selatan</td>
                                            <td>Juli</td>
                                            <td>2024</td>
                                            <td>PT Mitra Bersama</td>
                                            <td>Jl Bojong Koneng No 10 xxx</td>
                                            <td>PKP</td>
                                        </tr>
                                        <tr>
                                            <td>02-IKR-JSA/VII/2024</td>
                                            <td>Sewa</td>
                                            <td>Apartemen</td>
                                            <td>45/90</td>
                                            <td>Unit</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>Agustus 2024</td>
                                            <td>1.000.000</td>
                                            <td>12.000.000</td>
                                            <td>Jakarta Selatan</td>
                                            <td>Juli</td>
                                            <td>2024</td>
                                            <td>PT Mitra Bersama</td>
                                            <td>Jl Bojong Koneng No 10 xxx</td>
                                            <td>PKP</td>
                                        </tr>
                                        <tr>
                                            <td>03-IKR-JSA/VII/2024</td>
                                            <td>Sewa</td>
                                            <td>Kontrakan</td>
                                            <td>45/90</td>
                                            <td>Unit</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>Agustus 2024</td>
                                            <td>1.000.000</td>
                                            <td>12.000.000</td>
                                            <td>Jakarta Selatan</td>
                                            <td>Juli</td>
                                            <td>2024</td>
                                            <td>PT Mitra Bersama</td>
                                            <td>Jl Bojong Koneng No 10 xxx</td>
                                            <td>PKP</td>
                                        </tr>
                                        <tr>
                                            <td>04-IKR-JSA/VII/2024</td>
                                            <td>Sewa</td>
                                            <td>Gedung</td>
                                            <td>45/90</td>
                                            <td>Unit</td>
                                            <td>1</td>
                                            <td>12</td>
                                            <td>Agustus 2024</td>
                                            <td>1.000.000</td>
                                            <td>12.000.000</td>
                                            <td>Jakarta Selatan</td>
                                            <td>Juli</td>
                                            <td>2024</td>
                                            <td>PT Mitra Bersama</td>
                                            <td>Jl Bojong Koneng No 10 xxx</td>
                                            <td>PKP</td>
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
