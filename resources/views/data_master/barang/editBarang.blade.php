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
                                <form action="{{ route('update.barang', $dataBarang) }}" method="POST"
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
                                                    <label>Nama Barang</label>
                                                    <input type="text" class="form-control" id="namaBarang"
                                                        name="namaBarang" placeholder="Nama Barang"
                                                        value="{{ $dataBarang->nama_barang }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Merk</label>
                                                    <input type="text" class="form-control" id="merkBarang"
                                                        name="merkBarang" placeholder="Merk Barang"
                                                        value="{{ $dataBarang->merk }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="typeBarang">Type</label>
                                                    <input type="text" class="form-control" id="typeBarang"
                                                        name="typeBarang" placeholder="Tipe Barang"
                                                        value="{{ $dataBarang->type }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Uom</label>
                                                    <select class="form-control select2" style="width: 100%;" id="uom"
                                                        name="uom">
                                                        {{-- <option selected="selected">Pilih Uom</option> --}}
                                                        <option value="Unit"
                                                            {{ $dataBarang->uom == 'Unit' ? 'selected' : '' }}>Unit</option>
                                                        <option value="Pcs"
                                                            {{ $dataBarang->uom == 'Pcs' ? 'selected' : '' }}>Pcs</option>
                                                        <option value="Box"
                                                            {{ $dataBarang->uom == 'Box' ? 'selected' : '' }}>Box</option>
                                                        <option value="Pack"
                                                            {{ $dataBarang->uom == 'Pack' ? 'selected' : '' }}>Pack</option>
                                                        <option value="Meter"
                                                            {{ $dataBarang->uom == 'Meter' ? 'selected' : '' }}>Meter
                                                        </option>
                                                        <option value="Sak"
                                                            {{ $dataBarang->uom == 'Sak' ? 'selected' : '' }}>Sak</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Gambar Product</label>
                                                    <div class="form-group text-center">
                                                        <img src="{{ asset('/storage/image-brg/' . $dataBarang->foto_product . '') }}"
                                                            id="showgambar" alt="Card Image"
                                                            style="width:200px;height: 200px;" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="form-control" id="foto_product"
                                                                name="foto_product">
                                                            {{-- <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label> --}}
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    {{-- Button --}}
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Update</button>
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
