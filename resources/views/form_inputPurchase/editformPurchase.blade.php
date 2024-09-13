@extends('layout.main')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Purchase</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Edit</li>
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
                                    <h3 class="card-title">Form Edit Data Purchase</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="idPengajuan">Nomor Pengajuan</label>
                                            <input class="form-control" type="text" value="801010001"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Pilih Nama Barang</option>
                                                <option>Splicer</option>
                                                <option>OPM</option>
                                                <option>OLS</option>
                                                <option>Laser</option>
                                                <option>Tangga Teleskopik</option>
                                                <option>Meja</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Merk</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Pilih Merk</option>
                                                <option>Joinwit</option>
                                                <option>Fujikura</option>
                                                <option>Furukawa</option>
                                                <option>Jembo</option>
                                                <option>Tp-Link</option>
                                                <option>Krisbow</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="typeBarang">Type</label>
                                            <input type="text" class="form-control" id="typeBarang"
                                                placeholder="Tipe Barang">
                                        </div>
                                        <div class="form-group">
                                            <label>Uom</label>
                                            <select class="form-control select2" style="width: 100%;">
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
                                            <label for="qtyBarang">Qty</label>
                                            <input type="text" class="form-control" id="qtyBarang"
                                                placeholder="Qty Barang">
                                        </div>
                                        <div class="form-group">
                                            <label for="qtyBarang">Harga Satuan</label>
                                            <input type="text" class="form-control" id="qtyBarang"
                                                placeholder="Masukan Harga Satuan">
                                        </div>
                                        <div class="form-group">
                                            <label for="qtyBarang">Total Harga</label>
                                            <input type="text" class="form-control" id="qtyBarang"
                                                placeholder="20.000.000">
                                        </div>
                                        <div class="form-group">
                                            <label>Branch</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Pilih Branch</option>
                                                <option>Jakarta TImur</option>
                                                <option>Jakarta Selatan</option>
                                                <option>Bekasi</option>
                                                <option>Bogor</option>
                                                <option>Tangerang</option>
                                                <option>Medan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="bln">Bulan</label>
                                            <input class="form-control" type="text" value="Agustus"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="bln">Tahun</label>
                                            <input class="form-control" type="text" value="2024"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Vendor</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Pilih Vendor</option>
                                                <option>PT Mitra Sinergi Telematika</option>
                                                <option>PT Quantum Nusantara</option>
                                                <option>PT Moratelindo </option>
                                                <option>PT Nuansa</option>
                                                <option>PT Indah Kargo</option>
                                                <option>PT Misitel</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="bln">Alamat</label>
                                            <input class="form-control" type="text" value="Jl. Raya xxx"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="bln">Status PKP</label>
                                            <input class="form-control" type="text" value="PKP"
                                                aria-label="Disabled input example" disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Product</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    {{-- Button --}}
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="submit" class="btn btn-danger">Cancel</button>
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
