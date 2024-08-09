@extends('layout.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Katalog Barang</h1>
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
                                    <div class="col">
                                        {{-- Start Modals Add Data --}}
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#myModalAddData">Add Data</button>
                                        <!-- Modals Katalog Barang -->
                                        <div id="myModalAddData" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="container-fluid">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Add Data Katalog</h4>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{-- isi form --}}
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <!-- first column -->
                                                                <div class="col-md-12">
                                                                    <!-- general form elements -->
                                                                    <div class="card card-primary">
                                                                        <!-- form start -->
                                                                        <form>
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <label for="idPengajuan">Nomor
                                                                                        Pengajuan</label>
                                                                                    <input class="form-control"
                                                                                        type="text" value="801010001"
                                                                                        aria-label="Disabled input example"
                                                                                        disabled readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Jenis Vendor</label>
                                                                                    <select class="form-control select2"
                                                                                        style="width: 100%;">
                                                                                        <option selected="selected">
                                                                                            Pilih
                                                                                            Jenis Vendor</option>
                                                                                        <option>Perusahaan</option>
                                                                                        <option>Perorangan</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="alamat">Alamat</label>
                                                                                    <input type="alamat"
                                                                                        class="form-control" id="alamat"
                                                                                        placeholder="Jl. Nama Jalan No..">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contactPerson">Contact
                                                                                        Person</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="contactPerson"
                                                                                        placeholder="Masukan Nama">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="telp">No.
                                                                                        Telp/HP</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id="telp"
                                                                                        placeholder="089501100696">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="npwp">Nomor
                                                                                        NPWP</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id="npwp"
                                                                                        placeholder="01-02.03121142">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Status PKP</label>
                                                                                    <select class="form-control select2"
                                                                                        style="width: 100%;">
                                                                                        <option selected="selected">
                                                                                            Pilih
                                                                                            Status PKP</option>
                                                                                        <option>PKP 1</option>
                                                                                        <option>PKP 2</option>
                                                                                        <option>PKP 3</option>
                                                                                        <option>PKP 4</option>
                                                                                        <option>PKP 5</option>
                                                                                        <option>PKP 6</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Category</label>
                                                                                    <select class="form-control select2"
                                                                                        style="width: 100%;">
                                                                                        <option selected="selected">
                                                                                            Pilih
                                                                                            Kategori</option>
                                                                                        <option>Barang</option>
                                                                                        <option>Jasa</option>
                                                                                        <option>Barang & Jasa</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Product</label>
                                                                                    <select class="form-control select2"
                                                                                        style="width: 100%;">
                                                                                        <option selected="selected">
                                                                                            Pilih
                                                                                            Produk</option>
                                                                                        <option>Splicer</option>
                                                                                        <option>OPM</option>
                                                                                        <option>OTDR</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">Gambar
                                                                                        Product</label>
                                                                                    <div class="input-group">
                                                                                        <div class="custom-file">
                                                                                            <input type="file"
                                                                                                class="custom-file-input"
                                                                                                id="exampleInputFile">
                                                                                            <label class="custom-file-label"
                                                                                                for="exampleInputFile">Choose
                                                                                                file</label>
                                                                                        </div>
                                                                                        <div class="input-group-append">
                                                                                            <span
                                                                                                class="input-group-text">Upload</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    {{-- Start button modal footer --}}
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-primary"
                                                                            data-dismiss="modal">Save</button>
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                    {{-- End button modal footer --}}
                                                                    <!-- /.card-body -->
                                                                    </form>
                                                                </div>
                                                                <!-- /.card primary -->
                                                            </div>
                                                            <!--/.col (first) -->
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End modals add data --}}

                                        {{-- Start modals button Edit --}}
                                        <button type="button" class="btn btn-secondary" data-toggle="modal"
                                            data-target="#myModalEdit">Edit</button>
                                        {{-- End modals button Edit --}}
                                        <!-- Modals Edit Data Katalog Barang -->
                                        <div id="myModalEdit" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="container-fluid">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Edit Data Katalog Barang</h4>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{-- isi form --}}
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <!-- first column -->
                                                                <div class="col-md-12">
                                                                    <!-- general form elements -->
                                                                    <div class="card card-primary">
                                                                        <!-- form start -->
                                                                        <form>
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <label for="idPengajuan">Nomor
                                                                                        Pengajuan</label>
                                                                                    <input class="form-control"
                                                                                        type="text" value="801010001"
                                                                                        aria-label="Disabled input example"
                                                                                        disabled readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Jenis Vendor</label>
                                                                                    <select class="form-control select2"
                                                                                        style="width: 100%;">
                                                                                        <option selected="selected">
                                                                                            Pilih
                                                                                            Jenis Vendor</option>
                                                                                        <option>Perusahaan</option>
                                                                                        <option>Perorangan</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="alamat">Alamat</label>
                                                                                    <input type="alamat"
                                                                                        class="form-control"
                                                                                        id="alamat"
                                                                                        placeholder="Jl. Nama Jalan No..">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contactPerson">Contact
                                                                                        Person</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="contactPerson"
                                                                                        placeholder="Masukan Nama">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="telp">No.
                                                                                        Telp/HP</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="telp"
                                                                                        placeholder="089501100696">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="npwp">Nomor
                                                                                        NPWP</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="npwp"
                                                                                        placeholder="01-02.03121142">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Status PKP</label>
                                                                                    <select class="form-control select2"
                                                                                        style="width: 100%;">
                                                                                        <option selected="selected">
                                                                                            Pilih
                                                                                            Status PKP</option>
                                                                                        <option>PKP 1</option>
                                                                                        <option>PKP 2</option>
                                                                                        <option>PKP 3</option>
                                                                                        <option>PKP 4</option>
                                                                                        <option>PKP 5</option>
                                                                                        <option>PKP 6</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Category</label>
                                                                                    <select class="form-control select2"
                                                                                        style="width: 100%;">
                                                                                        <option selected="selected">
                                                                                            Pilih
                                                                                            Kategori</option>
                                                                                        <option>Barang</option>
                                                                                        <option>Jasa</option>
                                                                                        <option>Barang & Jasa</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Product</label>
                                                                                    <select class="form-control select2"
                                                                                        style="width: 100%;">
                                                                                        <option selected="selected">
                                                                                            Pilih
                                                                                            Produk</option>
                                                                                        <option>Splicer</option>
                                                                                        <option>OPM</option>
                                                                                        <option>OTDR</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">Gambar
                                                                                        Product</label>
                                                                                    <div class="input-group">
                                                                                        <div class="custom-file">
                                                                                            <input type="file"
                                                                                                class="custom-file-input"
                                                                                                id="exampleInputFile">
                                                                                            <label
                                                                                                class="custom-file-label"
                                                                                                for="exampleInputFile">Choose
                                                                                                file</label>
                                                                                        </div>
                                                                                        <div class="input-group-append">
                                                                                            <span
                                                                                                class="input-group-text">Upload</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    {{-- Start button modal footer --}}
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-primary"
                                                                            data-dismiss="modal">Save</button>
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                    {{-- End button modal footer --}}
                                                                    <!-- /.card-body -->
                                                                    </form>
                                                                </div>
                                                                <!-- /.card primary -->
                                                            </div>
                                                            <!--/.col (first) -->
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End modals add data --}}

                                        {{-- Start modals button Delete --}}
                                        <button type="button" class="btn btn-danger" id="btn-delete">Delete</button>

                                        {{-- End modals button Delete --}}

                                    </div>
                                </div>
                            </div>
                            <!-- /.container-fluid -->
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
