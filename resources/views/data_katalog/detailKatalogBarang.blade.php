@extends('layout.main')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Data Purchase</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            {{-- <li class="breadcrumb-item active">Project Add</li> --}}
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
                                {{-- <div class="card-header">
                                    <h3 class="card-title">Form Edit Data Purchase</h3>
                                </div> --}}
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('update.purchase') }}" method="post">
                                    @csrf
                                    <div class="card-body mb-1">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col form-group mb-1">
                                                        <span>Nomor Pengajuan</span>
                                                        <input class="form-control form-control-sm" type="text"
                                                            id="noPengajuan" name="noPengajuan"
                                                            style="width: 100%; border-color:#9ca0a7;" required>
                                                        <input type="hidden" id="purId" name="purId" readonly>
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
                                                            name="costCenter" style="width: 100%; border-color:#9ca0a7;"
                                                            required>
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
                                                            name="branch" style="width: 100%; border-color:#9ca0a7;"
                                                            required>
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
                                                            name="category" style="width: 100%; border-color:#9ca0a7;"
                                                            required>
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
                                                        name="noVendor" style="border-color:#9ca0a7;" required>
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
                                        {{-- <hr style="border: 1px solid"> --}}

                                        {{-- <div class="row" id="categoryBrg">
                                            <div class="col form-group">
                                                <span><small>Nama Barang</small></span>
                                                <input class="form-contorl form-control-sm" list="datalistOpt"
                                                    id="pilihBarang">
                                                <input type="hidden" id="barangId" name="barangId">
                                                <datalist id="datalistOpt">
                                                </datalist>
                                            </div>
                                            <div class="col form-group">
                                                <span><small>Merk</small></span>
                                                <input type="text" class="form-control form-control-sm" id="merk"
                                                    name="merk" style="border-color:#9ca0a7;" readonly>
                                            </div>
                                            <div class="col form-group">
                                                <span><small>Type</small></span>
                                                <input type="text" class="form-control form-control-sm" id="type"
                                                    name="type" style="border-color:#9ca0a7;" readonly>
                                            </div>
                                            <div class="col form-group">
                                                <span><small>UOM</small></span>
                                                <input type="text" class="form-control form-control-sm" id="uom"
                                                    name="uom" style="border-color:#9ca0a7;" readonly>
                                            </div>

                                            <div class="col form-group">
                                                <span><small>Qty</small></span>
                                                <input type="number" class="form-control form-control-sm" id="qty"
                                                    name="qty" style="border-color:#9ca0a7;">
                                            </div>
                                            <div class="col form-group">
                                                <span><small>Harga Satuan</small></span>
                                                <input type="number" class="form-control form-control-sm" id="harga"
                                                    name="harga" style="border-color:#9ca0a7;">
                                            </div>
                                            <div class="col form-group">
                                                <span><small>Total Harga</small></span>
                                                <input type="text" class="form-control form-control-sm" id="totHarga"
                                                    name="totHarga" style="border-color:#9ca0a7;" readonly>
                                            </div>
                                        </div>

                                        <div class="row" id="categoryJasa">
                                            <div class="col form-group">
                                                <span><small>Nama Jasa</small></span>
                                                <input class="form-contorl form-control-sm" list="datalistJasa"
                                                    id="pilihJasa">
                                                <input type="hidden" id="jasaId" name="jasaId">
                                                <input type="hidden" id="namaJasa" name="namaJasa">
                                                <datalist id="datalistJasa">
                                                </datalist>
                                            </div>
                                            <input type="hidden" id="jenisJasa" name="jenisJasa"
                                                style="border-color:#9ca0a7;" readonly>
                                            <div class="col-2 form-group">
                                                <span><small>Type</small></span>
                                                <input type="text" class="form-control form-control-sm" id="typeJasa"
                                                    name="typeJasa" style="border-color:#9ca0a7;" readonly>
                                            </div>
                                            <div class="col-1 form-group">
                                                <span><small>UOM</small></span>
                                                <input type="text" class="form-control form-control-sm" id="uomJasa"
                                                    name="uomJasa" style="border-color:#9ca0a7;" readonly>
                                            </div>

                                            <div class="col form-group">
                                                <span><small>Qty</small></span>
                                                <input type="number" class="form-control form-control-sm" id="qtyJasa"
                                                    name="qtyJasa" style="border-color:#9ca0a7;">
                                            </div>
                                            <div class="col form-group">
                                                <span><small>Periode (Month)</small></span>
                                                <input type="number" class="form-control form-control-sm"
                                                    id="periodeJasa" name="periodeJasa" style="border-color:#9ca0a7;">
                                            </div>
                                            <div class="col form-group">
                                                <span><small>Starting Periode</small></span>
                                                <input type="date" class="form-control form-control-sm"
                                                    id="startingJasa" name="startingJasa" style="border-color:#9ca0a7;">
                                            </div>
                                            <div class="col form-group">
                                                <span><small>Harga Satuan</small></span>
                                                <input type="number" class="form-control form-control-sm" id="hargaJasa"
                                                    name="hargaJasa" style="border-color:#9ca0a7;">
                                            </div>
                                            <div class="col form-group">
                                                <span><small>Total Harga</small></span>
                                                <input type="text" class="form-control form-control-sm"
                                                    id="totHargaJasa" name="totHargaJasa" style="border-color:#9ca0a7;"
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col text-center">
                                                <button type="button" id="addList" name="addList"
                                                    class="btn btn-sm btn-primary">Add
                                                    List</button>
                                            </div>
                                        </div> --}}

                                        <hr style="border: 1px solid">
                                        <div class="row" id="tabelBrg">

                                            <div class="table table-responsive">
                                                <table class="table table-bordered text-wrap"
                                                    style="border-color:#9ca0a7;font-size: 12px;" id="tabelPurchase"
                                                    name="tabelPurchase">
                                                    <thead>
                                                        <tr>
                                                            {{-- <th>#</th> --}}
                                                            <th class="text-center">Nama Barang</th>
                                                            <th class="text-center">Merk</th>
                                                            <th class="text-center">Type</th>
                                                            <th class="text-center">UOM</th>
                                                            <th class="text-center">Qty</th>
                                                            <th class="text-center">Harga</th>
                                                            <th class="text-center">Total Harga</th>
                                                            {{-- <th class="text-center">#</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodyList">
                                                    </tbody>

                                                </table>
                                            </div>

                                        </div>

                                        <div class="row" id="tabelJasa">

                                            <div class="table table-responsive">
                                                <table class="table table-bordered text-wrap"
                                                    style="border-color:#9ca0a7;font-size: 12px;" id="tabelPurchaseJasa"
                                                    name="tabelPurchaseJasa">
                                                    <thead>
                                                        <tr>
                                                            {{-- <th>#</th> --}}
                                                            <th class="text-center">Nama Jasa</th>
                                                            <th class="text-center">Jenis</th>
                                                            <th class="text-center">Type</th>
                                                            <th class="text-center">UOM</th>
                                                            <th class="text-center">Qty</th>
                                                            <th class="text-center">Periode (Month)</th>
                                                            <th class="text-center">Starting Date</th>
                                                            <th class="text-center">Harga</th>
                                                            <th class="text-center">Total Harga</th>
                                                            {{-- <th class="text-center">#</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodyListJasa">
                                                    </tbody>

                                                </table>
                                            </div>

                                        </div>

                                    </div>


                            </div>
                            <!-- /.card-body -->
                            {{-- Button --}}
                            <div class="card-footer">
                                {{-- <button type="submit" class="btn btn-info">Update</button> --}}
                                <a href="{{ route('katalogBarang') }}" class="btn btn-danger">Cancel</a>
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
            var dtBr;
            var brPick;
            var tot;

            $('#categoryJasa').hide();
            $('#tabelJasa').hide();
        });

        $(document).on('keyup', '#harga', function() {
            jml = document.getElementById('qty').value;
            hrg = document.getElementById('harga').value;
            tot = jml * hrg
            $('#totHarga').val(tot.toLocaleString())
        })

        $(document).on('keyup', '#qty', function() {
            jml = document.getElementById('qty').value;
            hrg = document.getElementById('harga').value;
            tot = jml * hrg
            $('#totHarga').val(tot.toLocaleString())
        })

        $(document).on('keyup', '#qtyJasa', function() {
            jml = document.getElementById('qtyJasa').value;
            periode = document.getElementById('periodeJasa').value;
            hrg = document.getElementById('hargaJasa').value;
            tot = (jml * periode) * hrg
            $('#totHargaJasa').val(tot.toLocaleString())
        })

        $(document).on('keyup', '#hargaJasa', function() {
            jml = document.getElementById('qtyJasa').value;
            periode = document.getElementById('periodeJasa').value;
            hrg = document.getElementById('hargaJasa').value;
            tot = (jml * periode) * hrg
            $('#totHargaJasa').val(tot.toLocaleString())
        })

        $(document).on('keyup', '#periodeJasa', function() {
            jml = document.getElementById('qtyJasa').value;
            periode = document.getElementById('periodeJasa').value;
            hrg = document.getElementById('hargaJasa').value;
            tot = (jml * periode) * hrg
            $('#totHargaJasa').val(tot.toLocaleString())
        })

        function deleteRow(r1) {
            let i = r1.parentNode.parentNode.rowIndex;
            document.getElementById("tabelPurchase").deleteRow(i);
        }

        function deleteJasa(j1) {
            let i = j1.parentNode.parentNode.rowIndex;
            document.getElementById("tabelPurchaseJasa").deleteRow(i);
        }

        function deleteRowEdt(r2) {
            let i = r2.parentNode.parentNode.rowIndex;
            document.getElementById("tabelPurchase").deleteRow(i);
        }

        function deleteJasaEdt(j2) {
            let i = j2.parentNode.parentNode.rowIndex;
            document.getElementById("tabelPurchaseJasa").deleteRow(i);
        }

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


                    if ($('#category').val() === "Barang") {
                        $('#categoryBrg').show();
                        $('#categoryJasa').hide();
                        $('#tabelBrg').show();
                        $('#tabelJasa').hide();
                    }
                    if ($('#category').val() === "Jasa") {
                        $('#categoryBrg').hide();
                        $('#categoryJasa').show();
                        $('#tabelBrg').hide();
                        $('#tabelJasa').show();
                    }

                    $('#barangId').val("")
                    $('#pilihBarang').val("")
                    $('#merk').val("")
                    $('#type').val("");
                    $('#uom').val("");
                    $('#qty').val("");
                    $('#harga').val("");
                    $('#totHarga').val("");

                    $('#jasaId').val("")
                    $('#pilihJasa').val("")
                    $('#jenisJasa').val("")
                    $('#typeJasa').val("");
                    $('#uomJasa').val("");
                    $('#qtyJasa').val("");
                    $('#periodeJasa').val("");
                    $('#startingJasa').val("");
                    $('#hargaJasa').val("");
                    $('#totHargaJasa').val("");
                }
            })
        })

        $(document).on('change', '#noVendor', function() {


            let vd = dtVendor.find(k => k.id === Number($(this).val()));
            let listP
            let listJ

            $('#jenisVendor').val(vd.jenis_vendor);
            $('#alamatVendor').val(vd.alamat);
            $('#statusPKP').val(vd.status_pkp);
            $('#noTelp').val(vd.no_telp);

            console.log('vd : ', vd);
            if ($('#category').val() === "Barang") {
                listP = vd.list_product.split(',');
            };
            if ($('#category').val() === "Jasa") {
                listJ = vd.list_jasa.split(',');
            };

            console.log('vd : ', vd);
            console.log('listP : ', listP)
            console.log('listJ : ', listJ)

            $.ajax({
                url: "{{ route('getProd') }}",
                type: "get",
                data: {
                    category: $('#category').val(),
                    listP: listP,
                    listJ: listJ
                },
                success: function(dtProd) {
                    dtBr = dtProd;
                    console.log('dtBr : ', dtBr);

                    $('#datalistOpt').find('option').remove();
                    if ($('#category').val() === "Barang") {
                        for (d = 0; d < dtProd.length; d++) {
                            $('#datalistOpt').append(`
                                <option value="${dtProd[d].nama_barang}" id="${dtProd[d].id}">${dtProd[d].merk + "--" + dtProd[d].type}</option>
                            `)
                        }
                    };

                    $('#datalistJasa').find('option').remove();
                    if ($('#category').val() === "Jasa") {
                        for (d = 0; d < dtProd.length; d++) {
                            $('#datalistJasa').append(`
                                <option value="${dtProd[d].nama_jasa+" - "+dtProd[d].jenis_jasa}" id="${dtProd[d].id}">${dtProd[d].type_jasa}</option>
                            `)
                        }
                    };

                }
            })
        })



        $(document).on('change', '#pilihBarang', function() {
            // console.log($(this).data('id'))

            let dL = $('option[value="' + $(this).val() + '"]');

            brid = dL.attr('id');
            br = dtBr.find(i => i.id === Number(brid))
            $('#barangId').val(brid);
            $('#merk').val(br.merk);
            $('#type').val(br.type);
            $('#uom').val(br.uom);

        })

        $(document).on('change', '#pilihJasa', function() {
            // console.log($(this).data('id'))

            let dL = $('option[value="' + $(this).val() + '"]');
            brid = dL.attr('id');
            br = dtBr.find(i => i.id === Number(brid))
            $('#jasaId').val(brid);
            $('#namaJasa').val(brid);
            $('#jenisJasa').val(br.jenis_jasa);
            $('#typeJasa').val(br.type_jasa);
            $('#uomJasa').val(br.uom);

        })

        $('#addList').click(function(e) {
            // let pBrs = 1;


            if ($('#category').val() === "Barang") {
                if ($('#pilihBarang').val() != "") {
                    $('#tbodyList').append(
                        `<tr>
                        <td><input type="hidden" name="brg_id[]" value="${$('#barangId').val()+'|'+$('#pilihBarang').val()+'|'+$('#merk').val()+'|'+$('#type').val()+'|'+$('#uom').val()+'|'+$('#qty').val()+'|'+$('#harga').val()+'|'+$('#totHarga').val()}" readonly>
                            ${$('#pilihBarang').val()}
                        </td>
                        <td>${$('#merk').val()}</td>
                        <td>${$('#type').val()}</td>
                        <td>${$('#uom').val()}</td>
                        <td>${$('#qty').val()}</td>
                        <td>${$('#harga').val()}</td>
                        <td>${$('#totHarga').val()}</td>
                    </tr>`
                    )
                }
            }

            if ($('#category').val() === "Jasa") {
                if ($('#pilihJasa').val() != "") {
                    $('#tbodyListJasa').append(
                        `<tr>
                        <td><input type="hidden" name="jasa_id[]" value="${$('#jasaId').val()+'|'+$('#namaJasa').val()+'|'+$('#jenisJasa').val()+'|'+$('#typeJasa').val()+'|'+$('#uomJasa').val()+'|'+$('#qtyJasa').val()+'|'+$('#periodeJasa').val()+'|'+$('#startingJasa').val()+'|'+$('#hargaJasa').val()+'|'+$('#totHargaJasa').val()}" readonly>
                            ${$('#namaJasa').val()}" readonly>
                        </td>
                        <td>${$('#jenisJasa').val()}</td>
                        <td>${$('#typeJasa').val()}</td>
                        <td>${$('#uomJasa').val()}</td>
                        <td>${$('#qtyJasa').val()}</td>
                        <td>${$('#periodeJasa').val()}</td>
                        <td>${$('#startingJasa').val()}</td>
                        <td>${$('#hargaJasa').val()}</td>
                        <td>${$('#totHargaJasa').val()}</td>
                    </tr>`
                    )
                }
            }

            $('#barangId').val("")
            $('#pilihBarang').val("")
            $('#merk').val("")
            $('#type').val("");
            $('#uom').val("");
            $('#qty').val("");
            $('#harga').val("");
            $('#totHarga').val("");

            $('#jasaId').val("")
            $('#pilihJasa').val("")
            $('#jenisJasa').val("")
            $('#typeJasa').val("");
            $('#uomJasa').val("");
            $('#qtyJasa').val("");
            $('#periodeJasa').val("");
            $('#startingJasa').val("");
            $('#hargaJasa').val("");
            $('#totHargaJasa').val("");

        })


        // });

        $(document).ready(function() {

            // $('.select2').select2();
            var dtPur = {!! $dtPurchase !!}
            var dtPurDet = {!! $dtPurchaseDet !!}
            console.log('dtPur : ', dtPur);
            console.log('dtPurDet : ', dtPurDet);

            $('#noPengajuan').val(dtPur.no_pengajuan);
            $('#purId').val(dtPur.id);
            $('#tgl').val(dtPur.tgl);
            $('#costCenter').val(dtPur.cost_center);
            $('#branch').val(dtPur.branch);

            $('#category').val(dtPur.category);
            $('#category').change();

            // $('#noVendor').val('2'); // Select the option with a value of '1'
            // $('#noVendor').trigger('change'); // Notify any JS components that the value changed
            // $('#jenisVendor').val(dtPur.no_pengajuan);

            // $('#statusPKP').val(dtPur.no_pengajuan);
            // $('#alamatVendor').val(dtPur.no_pengajuan);
            // $('#noTelp').val(dtPur.no_pengajuan);

            var _token = $('meta[name=csrf-token]').attr('content');
            let category = $('#category').val();

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

                    $('#noVendor').val(dtPur.no_vendor)
                    $('#noVendor').change();


                    if ($('#category').val() === "Barang") {
                        $('#categoryBrg').show();
                        $('#categoryJasa').hide();
                        $('#tabelBrg').show();
                        $('#tabelJasa').hide();
                    }
                    if ($('#category').val() === "Jasa") {
                        $('#categoryBrg').hide();
                        $('#categoryJasa').show();
                        $('#tabelBrg').hide();
                        $('#tabelJasa').show();
                    }

                }
            })

            for ($x = 0; $x < dtPurDet.length; $x++) {

                if ($('#category').val() === "Barang") {
                    // if ($('#pilihBarang').val() != "") {
                    totHarga = dtPurDet[$x].qty * dtPurDet[$x].harga;
                    $('#tbodyList').append(
                        `<tr>
                        <td><input type="hidden" name="brg_id[]" value="${dtPurDet[$x].br_id+'|'+dtPurDet[$x].nama_barang+'|'+dtPurDet[$x].merk+'|'+dtPurDet[$x].type+'|'+dtPurDet[$x].uom+'|'+dtPurDet[$x].qty+'|'+dtPurDet[$x].harga+'|'+totHarga}" readonly>
                            ${dtPurDet[$x].nama_barang}
                        </td>
                        <td>${dtPurDet[$x].merk}</td>
                        <td>${dtPurDet[$x].type}</td>
                        <td>${dtPurDet[$x].uom}</td>
                        <td class="text-center">${dtPurDet[$x].qty.toLocaleString()}</td>
                        <td>${dtPurDet[$x].harga.toLocaleString()}</td>
                        <td>${totHarga.toLocaleString()}</td>
                    </tr>`
                    )
                    // }
                }

                if ($('#category').val() === "Jasa") {
                    // if ($('#pilihJasa').val() != "") {
                    totHarga = dtPurDet[$x].qty * dtPurDet[$x].harga;
                    $('#tbodyListJasa').append(
                        `<tr>
                        <td><input type="hidden" name="jasa_id[]" value="${dtPurDet[$x].br_id+'|'+dtPurDet[$x].nama_jasa+'|'+dtPurDet[$x].jenis_jasa+'|'+dtPurDet[$x].type_jasa+'|'+dtPurDet[$x].uom+'|'+dtPurDet[$x].qty+'|'+dtPurDet[$x].periode+'|'+dtPurDet[$x].start_date+'|'+dtPurDet[$x].harga+'|'+totHarga}" readonly>
                            ${dtPurDet[$x].nama_jasa}
                        </td>
                        <td>${dtPurDet[$x].jenis_jasa}</td>
                        <td>${dtPurDet[$x].type_jasa}</td>
                        <td>${dtPurDet[$x].uom}</td>
                        <td class="text-center">${dtPurDet[$x].qty.toLocaleString()}</td>
                        <td class="text-center">${dtPurDet[$x].periode}</td>
                        <td>${dtPurDet[$x].start_date}</td>
                        <td>${dtPurDet[$x].harga}</td>
                        <td>${dtPurDet[$x].total.toLocaleString()}</td>
                    </tr>`
                    )
                    // }
                }

            }





        });
    </script>
@endpush
