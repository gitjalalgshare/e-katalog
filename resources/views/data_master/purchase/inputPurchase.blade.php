@extends('layout.main')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Input Data Purchase</h1>
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
                                    <h3 class="card-title">Form Input Data Purchase</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body mb-1">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col form-group mb-1">
                                                        <span>Nomor Pengajuan</span>
                                                        <input class="form-control form-control-sm" type="text"
                                                            id="noPengajuan" name="noPengajuan"
                                                            style="width: 100%; border-color:#9ca0a7;">
                                                    </div>

                                                    <div class=" col form-group mb-1">
                                                        <span>Date</span>
                                                        <input class="form-control form-control-sm" type="date"
                                                            id="tgl" name="tgl" value="{{ date('Y-m-d') }}"
                                                            style="width: 100%; border-color:#9ca0a7;">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col form-group mb-1">
                                                        <span>Cost Center</span>
                                                        <select class="form-control form-control-sm" id="costCenter"
                                                            name="costCenter" style="width: 100%; border-color:#9ca0a7;">
                                                            <option value="">Pilih Cost Center</option>
                                                            @foreach ($cost as $cc)
                                                                <option value="{{ $cc->cost_center }}">
                                                                    {{ $cc->cost_center }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col form-group mb-1">
                                                        <span>Branch</span>
                                                        <select class="form-control form-control-sm" id="branch"
                                                            name="branch" style="width: 100%; border-color:#9ca0a7;">
                                                            <option value="">Pilih Branch</option>
                                                            @foreach ($branch as $b)
                                                                <option value="{{ $b->nama_branch }}">{{ $b->nama_branch }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col form-group mb-1">
                                                        <span>Category</span>
                                                        <select class="form-control form-control-sm" id="category"
                                                            name="category" style="width: 100%; border-color:#9ca0a7;">
                                                            <option value="">Pilih Category</option>
                                                            <option value="Barang">Barang</option>
                                                            <option value="Jasa">Jasa</option>
                                                        </select>
                                                    </div>
                                                    <div class="col form-group mb-1">

                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col">
                                                <div class="form-group mb-1">
                                                    <span>Vendor</span>
                                                    <select class="form-control form-control-sm select2" id="noVendor"
                                                        name="noVendor" style="border-color:#9ca0a7;">
                                                        <option value="">Pilih Vendor</option>
                                                    </select>
                                                </div>

                                                <div class="row">
                                                    <div class="col form-group mb-1">
                                                        <span>Jenis Vendor</span>
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jenisVendor" name="jenisVendor"
                                                            style="border-color:#9ca0a7;">
                                                    </div>

                                                    <div class="col form-group mb-1">
                                                        <span>Status PKP</span>
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="statusPKP" name="statusPKP" style="border-color:#9ca0a7;">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col form-group mb-1">
                                                        <span>Alamat Vendor</span>
                                                        <textarea type="text" class="form-control form-control-sm" id="alamatVendor" name="alamatVendor"
                                                            style="border-color:#9ca0a7;"></textarea>
                                                    </div>

                                                    <div class="col form-group mb-1">
                                                        <span>No Telp</span>
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="noTelp" name="noTelp" style="border-color:#9ca0a7;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">

                                            <div class="col-auto form-group mb-1">
                                                {{-- <span><small>Nama Barang</small></span> --}}
                                            </div>

                                            <div class="col form-group mb-1">
                                                {{-- <span><small>Nama Barang</small></span> --}}
                                                <select class="form-control form-control-sm select2" id="pilihBarang"
                                                    name="pilihBarang" style="border-color:#9ca0a7;">
                                                    <option value="">Pilih Nama Barang</option>
                                                </select>
                                            </div>

                                            <div class="col form-group mb-1">
                                                {{-- <span><small>Merk</small></span> --}}
                                                <select class="form-control form-control-sm select2" id="pilihMerk"
                                                    name="pilihMerk" style="border-color:#9ca0a7;">
                                                    <option value="">Pilih Merk</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-1">
                                                {{-- <span><small>Type</small></span> --}}
                                                <select class="form-control form-control-sm select2" id="pilihType"
                                                    name="pilihType" style="border-color:#9ca0a7;">
                                                    <option value="">Pilih Type</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-1">
                                                {{-- <span><small>UOM</small></span> --}}
                                                <input type="text" class="form-control form-control-sm" id="uom"
                                                    name="uom" style="border-color:#9ca0a7;">
                                            </div>

                                            <div class="col form-group mb-1">
                                                {{-- <span><small>Qty</small></span> --}}
                                                <input type="text" class="form-control form-control-sm" id="qty"
                                                    name="qty" style="border-color:#9ca0a7;">
                                            </div>
                                            <div class="col form-group mb-1">
                                                {{-- <span><small>Harga Satuan</small></span> --}}
                                                <input type="text" class="form-control form-control-sm" id="harga"
                                                    name="harga" style="border-color:#9ca0a7;">
                                            </div>
                                            <div class="col form-group mb-1">
                                                {{-- <span><small>Total Harga</small></span> --}}
                                                <input type="text" class="form-control form-control-sm" id="totHarga"
                                                    name="totHarga" style="border-color:#9ca0a7;">
                                            </div>

                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-sm btn-primary">Add
                                                    List</button>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="table table-responsive">
                                                <table class="table table-bordered text-wrap"
                                                    style="border-color:#9ca0a7;font-size: 12px;" id="tabelPurchase">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th class="text-center">Nama Barang</th>
                                                            <th class="text-center">Merk</th>
                                                            <th class="text-center">Type</th>
                                                            <th class="text-center">UOM</th>
                                                            <th class="text-center">Qty</th>
                                                            <th class="text-center">Harga</th>
                                                            <th class="text-center">Total Harga</th>
                                                            <th class="text-center">#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>

                                                </table>
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

@push('script')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();

            var dtVendor;
        });

        $(document).on('change', '#category', function(e) {
            var _token = $('meta[name=csrf-token]').attr('content');
            let category = $(this).val();

            $.ajax({
                url: "{{ route('getVendor') }}",
                type: "get",
                data: {
                    category: category,
                    _token: _token,
                },
                success: function(v) {
                    dtVendor = v;

                    $('#noVendor').find('option').remove();
                    $('#noVendor').append(`<option value="">Pilih Vendor</option>`);
                    $.each(v, function(key, p) {
                        $('#noVendor').append(
                            `<option value="${p.id}">${p.nama_vendor}</option>`
                        )
                    })
                }
            })
        })

        $(document).on('change', '#noVendor', function() {
            console.log(dtVendor);

            let vd = dtVendor.find(k => k.id === Number($(this).val()));

            $('#jenisVendor').val(vd.jenis_vendor);
            $('#alamatVendor').val(vd.alamat);
            $('#statusPKP').val(vd.status_pkp);
            $('#noTelp').val(vd.no_telp);


        })
    </script>
@endpush
