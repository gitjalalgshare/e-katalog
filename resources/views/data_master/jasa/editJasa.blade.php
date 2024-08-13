@extends('layout.main')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Barang</h1>
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
                                    <h3 class="card-title">Form Edit Data Barang</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('updateDataJasa', $dataJasa) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                {{-- <div class="form-group">
                                            <label for="idPengajuan">Kode Barang</label>
                                            <input class="form-control" type="text" value="801010001"
                                                aria-label="Disabled input example" disabled readonly>
                                            </div> --}}
                                                <div class="form-group">
                                                    <label>Kategori Jasa</label>
                                                    <select class="form-control select2" style="width: 100%;"
                                                        id="kategoriJasa" name="kategoriJasa" required>
                                                        <option selected="selected">Pilih Kategori</option>
                                                        <option value="Sewa"
                                                            {{ $dataJasa->kategori_jasa == 'Sewa' ? 'selected' : '' }}>Sewa
                                                        </option>
                                                        <option value="Pekerjaan"
                                                            {{ $dataJasa->kategori_jasa == 'Pekerjaan' ? 'selected' : '' }}>
                                                            Pekerjaan</option>
                                                        <option value="Service"
                                                            {{ $dataJasa->kategori_jasa == 'Service' ? 'selected' : '' }}>
                                                            Service</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Jasa</label>
                                                    <input type="text" class="form-control" id="namaJasa"
                                                        value="{{ $dataJasa->nama_jasa }}" name="namaJasa"
                                                        placeholder="Nama Jasa" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="JenisJasa">Jenis Jasa</label>
                                                    <input type="text" class="form-control" id="jenisJasa"
                                                        value="{{ $dataJasa->jenis_jasa }}" name="jenisJasa"
                                                        placeholder="Jenis Jasa" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="typeBarang">Type Jasa</label>
                                                    <input type="text" class="form-control" id="typeJasa"
                                                        value="{{ $dataJasa->type_jasa }}" name="typeJasa"
                                                        placeholder="Tipe Jasa" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Uom</label>
                                                    <select class="form-control select2" style="width: 100%;" id="uom"
                                                        name="uom" required>
                                                        <option selected="selected">Pilih Uom</option>
                                                        <option value="Unit"
                                                            {{ $dataJasa->uom == 'Unit' ? 'selected' : '' }}>
                                                            Unit
                                                        </option>
                                                        <option value="Pcs"
                                                            {{ $dataJasa->uom == 'Pcs' ? 'selected' : '' }}>Pcs
                                                        </option>
                                                        <option value="Box"
                                                            {{ $dataJasa->uom == 'Box' ? 'selected' : '' }}>Box
                                                        </option>
                                                        <option value="Pack"
                                                            {{ $dataJasa->uom == 'Pack' ? 'selected' : '' }}>
                                                            Pack</option>
                                                        <option value="Meter"
                                                            {{ $dataJasa->uom == 'Meter' ? 'selected' : '' }}>
                                                            Meter</option>
                                                        <option value="Sak"
                                                            {{ $dataJasa->uom == 'Sak' ? 'selected' : '' }}>Sak
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    {{-- Button --}}
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Update</button>
                                        <a href="{{ route('data.jasa') }}" class="btn btn-danger">Cancel</a>
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

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
    <script type="text/javascript">
        $.noConflict();

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#showgambar').attr('src', e.target.result);

                }

                reader.readAsDataURL(input.files[0]);

            }
        }

        $("#foto_product").change(function() {
            console.log('#foto_product');
            readURL(this);
        });
    </script>
@endpush
