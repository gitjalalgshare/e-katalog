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
                                    <div class="col">
                                        {{-- Start Modals Add Data --}}
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#myModalAddData">Add Data</button>
                                        <!-- Modals Input Data Vendor -->
                                        <div id="myModalAddData" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="container-fluid">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Add Data Vendor</h4>
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
                                                                                        Vendor</label>
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
                                        <!-- Modals Input Data Vendor -->
                                        <div id="myModalEdit" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="container-fluid">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Edit Data Vendor</h4>
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
                                                                                        Vendor</label>
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
                            <div class="card-body table-responsive p-1">
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
                        </div><!-- /.container-fluid -->

                        <!-- /.card-header -->

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
