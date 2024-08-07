@extends('layout.main')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Input Data Barang</h1>
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

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- first column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Input Data Barang</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('simpan.barang') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="card-body">
                                        {{-- <div class="form-group">
                                            <label for="idPengajuan">Kode Barang</label>
                                            <input class="form-control" type="text" value="801010001"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input type="text" class="form-control" id="namaBarang" name="namaBarang"
                                                placeholder="Nama Barang" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Merk</label>
                                            <input type="text" class="form-control" id="merkBarang" name="merkBarang"
                                                placeholder="Merk Barang" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="typeBarang">Type</label>
                                            <input type="text" class="form-control" id="typeBarang" name="typeBarang"
                                                placeholder="Tipe Barang" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Uom</label>
                                            <select class="form-control select2" style="width: 100%;" id="uom" name="uom" required>
                                                <option selected="selected">Pilih Uom</option>
                                                <option>Unit</option>
                                                <option>Pcs</option>
                                                <option>Box</option>
                                                <option>Pack</option>
                                                <option>Meter</option>
                                                <option>Sak</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Product</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control" id="foto_product" name="foto_product">
                                                    {{-- <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label> --}}
                                                </div>
                                                {{-- <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    {{-- Button --}}
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a href="{{ route('data.barang') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                    {{-- /Button --}}
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                        <!--/.col (first) -->
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content -->



@endsection
