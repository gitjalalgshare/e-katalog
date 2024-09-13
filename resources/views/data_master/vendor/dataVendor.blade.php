@extends('layout.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Vendor</h1>
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
                            <div class="row ml-0 mt-3">
                                <div class="col">
                                    {{-- Start Modals Add Data --}}
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-primary" id="addVendor" name="addVendor">Add
                                        Data</button>

                                </div>
                            </div>

                            <div class="card-body table-responsive p-1">
                                <table class="table table-hover text-wrap" id="tabelVendor" style="font-size: 12px;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="width: 100px">Nomor Vendor</th>
                                            <th>Jenis Vendor</th>
                                            <th>Category Product</th>
                                            <th>List Product</th>
                                            <th>List Jasa</th>
                                            <th>Nama Vendor</th>
                                            <th>Alamat</th>
                                            <th>Contact Person</th>
                                            <th>No. Telp/HP</th>
                                            <th>Nomor NPWP</th>
                                            <th>Status PKP</th>


                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                            <!-- Modals Input Data Vendor -->
                            <div id="modalInputVendor" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-xl">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="container-fluid">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Add Data Vendor</h4>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card card-primary">
                                                <!-- form start -->
                                                <form action="{{ route('simpan.vendor') }}" method="POST">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-1">
                                                                    <span>Nomor
                                                                        Vendor</span>
                                                                    <input class="form-control form-control-sm"
                                                                        id="noVendor" name="noVendor"
                                                                        style="border-color:#9ca0a7;" type="text"
                                                                        value="801010001" readonly>
                                                                </div>

                                                                <div class="form-group mb-1">
                                                                    <span>Jenis Vendor</span>
                                                                    <select class="form-control form-control-sm select2"
                                                                        id="jenisVendor" name="jenisVendor"
                                                                        style="width: 100%;border-color:#9ca0a7;">
                                                                        <option value="" selected="selected">
                                                                            Pilih
                                                                            Jenis Vendor</option>
                                                                        <option value="Perusahaan">Perusahaan</option>
                                                                        <option value="Perorangan">Perorangan</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group mb-1">
                                                                    <span>Nama
                                                                        Vendor</span>
                                                                    <input type="namaVendor" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm" id="namaVendor"
                                                                        name="namaVendor">
                                                                </div>

                                                                <div class="form-group mb-1">
                                                                    <span for="alamat">Alamat</span>
                                                                    <input type="alamat" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm"
                                                                        id="alamatVendor" name="alamatVendor">
                                                                </div>
                                                                <div class="form-group mb-1">
                                                                    <span for="contactPerson">Contact
                                                                        Person</span>
                                                                    <input type="text" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm" id="cpVendor"
                                                                        name="cpVendor">
                                                                </div>
                                                                <div class="form-group mb-1">
                                                                    <span for="telp">No.
                                                                        Telp/HP</span>
                                                                    <input type="text" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm" id="telpVendor"
                                                                        name="telpVendor">
                                                                </div>
                                                                <div class="form-group mb-1">
                                                                    <span for="npwp">Nomor
                                                                        NPWP</span>
                                                                    <input type="text" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm" id="npwpVendor"
                                                                        name="npwpVendor">
                                                                </div>
                                                                <div class="form-group mb-1">
                                                                    <span>Status PKP</span>
                                                                    <select class="form-control form-control-sm select2"
                                                                        style="width: 100%; border-color:#9ca0a7;"
                                                                        id="statusPkp" name="statusPkp">
                                                                        <option value="" selected="selected">
                                                                            Pilih
                                                                            Status PKP</option>
                                                                        <option value="PKP">PKP</option>
                                                                        <option value="Non PKP">Non PKP</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="row">

                                                                    <div class="col form-group mb-1">
                                                                        <span>Category Vendor</span>
                                                                        <select id="category" name="category"
                                                                            class="form-control form-control-sm select2"
                                                                            style="width: 100%; border-color:#9ca0a7;">
                                                                            <option selected="selected">
                                                                                Pilih
                                                                                Kategori</option>
                                                                            <option value="Barang">Barang</option>
                                                                            <option value="Jasa">Jasa</option>
                                                                            <option value="Barang & Jasa">Barang & Jasa
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered "
                                                                                id="tabelProduct"
                                                                                style="font-size: 12px; border-color:#9ca0a7;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            <select id="pilihProduct"
                                                                                                nama="pilihProduct"
                                                                                                class="form-control form-control-sm select2">
                                                                                                <option value="">
                                                                                                    Pilih Produk
                                                                                                </option>
                                                                                            </select>
                                                                                        </th>
                                                                                        <th><button type="button"
                                                                                                id="addProduct"
                                                                                                name="addProduct"
                                                                                                class="btn btn-sm btn-primary">Add</button>
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>Nama Product</th>
                                                                                        <th class="text-center">#</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id=tbodyProduct>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered"
                                                                                id="tabelJasa" style="font-size: 12px">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            <select id="pilihJasa"
                                                                                                name="pilihJasa"
                                                                                                class="form-control form-control-sm select2"
                                                                                                style="font-size: 12px; border-color:#9ca0a7;">
                                                                                                <option value="">
                                                                                                    Pilih
                                                                                                    Jasa</option>
                                                                                            </select>
                                                                                        </th>
                                                                                        <th><button type="button"
                                                                                                id="addJasa"
                                                                                                name="addJasa"
                                                                                                class="btn btn-sm btn-primary">Add</button>
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr class="text-center">
                                                                                        <th>Nama Jasa</th>
                                                                                        <th>#</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id=tbodyJasa>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End modals add data --}}

                            <!-- Modals Edit Data Vendor -->
                            <div id="modalEditVendor" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-xl">
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
                                            <div class="card card-primary">
                                                <!-- form start -->
                                                <form action="{{ route('updateDataVendor') }}" method="POST">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-1">
                                                                    <span>Nomor
                                                                        Vendor</span>
                                                                    <input type="hidden" id="noVendorEdtId"
                                                                        name="noVendorEdtId" value="" readonly>
                                                                    <input class="form-control form-control-sm"
                                                                        id="noVendorEdt" name="noVendorEdt"
                                                                        style="border-color:#9ca0a7;" type="text"
                                                                        value="801010001" readonly>
                                                                </div>

                                                                <div class="form-group mb-1">
                                                                    <span>Jenis Vendor</span>
                                                                    <select class="form-control form-control-sm select2"
                                                                        id="jenisVendorEdt" name="jenisVendorEdt"
                                                                        style="width: 100%;border-color:#9ca0a7;">
                                                                        <option value="" selected="selected">
                                                                            Pilih
                                                                            Jenis Vendor</option>
                                                                        <option value="Perusahaan">Perusahaan</option>
                                                                        <option value="Perorangan">Perorangan</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group mb-1">
                                                                    <span>Nama
                                                                        Vendor</span>
                                                                    <input type="text" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm"
                                                                        id="namaVendorEdt" name="namaVendorEdt">
                                                                </div>

                                                                <div class="form-group mb-1">
                                                                    <span for="alamat">Alamat</span>
                                                                    <input type="text" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm"
                                                                        id="alamatVendorEdt" name="alamatVendorEdt">
                                                                </div>
                                                                <div class="form-group mb-1">
                                                                    <span for="contactPerson">Contact
                                                                        Person</span>
                                                                    <input type="text" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm"
                                                                        id="cpVendorEdt" name="cpVendorEdt">
                                                                </div>
                                                                <div class="form-group mb-1">
                                                                    <span for="telp">No.
                                                                        Telp/HP</span>
                                                                    <input type="text" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm"
                                                                        id="telpVendorEdt" name="telpVendorEdt">
                                                                </div>
                                                                <div class="form-group mb-1">
                                                                    <span for="npwp">Nomor
                                                                        NPWP</span>
                                                                    <input type="text" style="border-color:#9ca0a7;"
                                                                        class="form-control form-control-sm"
                                                                        id="npwpVendorEdt" name="npwpVendorEdt">
                                                                </div>
                                                                <div class="form-group mb-1">
                                                                    <span>Status PKP</span>
                                                                    <select class="form-control form-control-sm select2"
                                                                        style="width: 100%; border-color:#9ca0a7;"
                                                                        id="statusPkpEdt" name="statusPkpEdt">
                                                                        <option value="" selected="selected">
                                                                            Pilih
                                                                            Status PKP</option>
                                                                        <option value="PKP">PKP</option>
                                                                        <option value="Non PKP">Non PKP</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="row">

                                                                    <div class="col form-group mb-1">
                                                                        <span>Category Vendor</span>
                                                                        <select id="categoryEdt" name="categoryEdt"
                                                                            class="form-control form-control-sm select2"
                                                                            style="width: 100%; border-color:#9ca0a7;">
                                                                            <option selected="selected">
                                                                                Pilih
                                                                                Kategori</option>
                                                                            <option value="Barang">Barang</option>
                                                                            <option value="Jasa">Jasa</option>
                                                                            <option value="Barang & Jasa">Barang & Jasa
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered "
                                                                                id="tabelProductEdt"
                                                                                style="font-size: 12px; border-color:#9ca0a7;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            <select id="pilihProductEdt"
                                                                                                nama="pilihProductEdt"
                                                                                                class="form-control form-control-sm select2">
                                                                                                <option value="">
                                                                                                    Pilih Produk
                                                                                                </option>
                                                                                            </select>
                                                                                        </th>
                                                                                        <th><button type="button"
                                                                                                id="addProductEdt"
                                                                                                name="addProductEdt"
                                                                                                class="btn btn-sm btn-primary">Add</button>
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>Nama Product</th>
                                                                                        <th class="text-center">#</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id=tbodyProductEdt>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered"
                                                                                id="tabelJasaEdt" name="tabelJasaEdt"
                                                                                style="font-size: 12px">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            <select id="pilihJasaEdt"
                                                                                                name="pilihJasaEdt"
                                                                                                class="form-control form-control-sm select2"
                                                                                                style="font-size: 12px; border-color:#9ca0a7;">
                                                                                                <option value="">
                                                                                                    Pilih
                                                                                                    Jasa</option>
                                                                                            </select>
                                                                                        </th>
                                                                                        <th><button type="button"
                                                                                                id="addJasaEdt"
                                                                                                name="addJasaEdt"
                                                                                                class="btn btn-sm btn-primary">Add</button>
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr class="text-center">
                                                                                        <th>Nama Jasa</th>
                                                                                        <th>#</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id=tbodyJasaEdt>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End modals Edit data Vendor --}}

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

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/fc-4.3.0/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/fc-4.3.0/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            // $.noConflict();
            fetch_vendor();

            function fetch_vendor() {
                var tabel = $('#tabelVendor').DataTable();
                tabel.clear().draw();

                $('#tabelVendor').DataTable({
                    // dom: 'Bftip',
                    // layout: {
                    //     topStart: {
                    //         buttons: ['excel']
                    //     }
                    // },
                    responsive: true,
                    paging: true,
                    orderClasses: false,
                    deferRender: true,
                    scrollCollapse: true,
                    scrollX: true,
                    lengthChange: false,
                    bFilter: true,
                    destroy: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('getDataVendor') }}",
                        type: "get",
                        dataType: "json",
                        // data: datafilter
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_Row_Index',
                            "className": "text-center",
                            // orderable: false,
                            searchable: false,
                        },
                        {
                            data: 'no_vendor',
                        },
                        {
                            data: 'jenis_vendor',
                        },
                        {
                            data: 'category',
                        },
                        {
                            data: 'list_product',
                        },
                        {
                            data: 'list_jasa',
                        },
                        {
                            data: 'nama_vendor',
                        },
                        {
                            data: 'alamat',
                        },
                        {
                            data: 'contact_person',
                        },
                        {
                            data: 'no_telp',
                        },
                        {
                            data: 'npwp',
                        },
                        {
                            data: 'status_pkp',
                        },
                        {
                            data: 'action',
                            "className": "text-center",
                            orderable: false,
                            searchable: false
                        },
                    ]
                });

            }
        })


        $('#addVendor').click(function(e) {

            $.ajax({
                url: "{{ route('getAutoNo') }}",
                type: "GET",
                success: function(autoNo) {
                    $('#noVendor').val(autoNo);
                    $('#modalInputVendor').modal('show');
                }
            })
        })


        $(document).on('change', '#category', function(e) {
            let category = $(this).val();
            var _token = $('meta[name=csrf-token]').attr('content');

            $.ajax({
                url: "{{ route('getBarangJasa') }}",
                type: "GET",
                data: {
                    filCategory: category,
                    _token: _token,
                },
                success: function(data) {

                    if (category === "Barang") {
                        document.getElementById('addProduct').disabled = false;
                        document.getElementById('addJasa').disabled = true;

                        $('#tbodyJasa tr').remove();

                        $('#pilihProduct').find('option').remove();
                        $('#pilihProduct').append(`<option value="">Pilih Product</option>`);
                        $.each(data.product, function(key, p) {
                            $('#pilihProduct').append(
                                `<option value="${p.nama_barang}">${p.nama_barang}</option>`
                            )
                        })


                    }
                    if (category === "Jasa") {
                        document.getElementById('addProduct').disabled = true;
                        document.getElementById('addJasa').disabled = false;

                        $('#tbodyProduct tr').remove();

                        $('#pilihJasa').find('option').remove();
                        $('#pilihJasa').append(`<option value="">Pilih Jasa</option>`);
                        $.each(data.jasa, function(key, j) {
                            $('#pilihJasa').append(
                                `<option value="${j.nama_jasa+"-"+j.jenis_jasa}">${j.nama_jasa + " " + j.jenis_jasa}</option>`
                            )
                        })
                    }
                    if (category === "Barang & Jasa") {
                        document.getElementById('addProduct').disabled = false;
                        document.getElementById('addJasa').disabled = false;
                        $('#pilihProduct').find('option').remove();
                        $('#pilihProduct').append(`<option value="">Pilih Product</option>`);
                        $.each(data.product, function(key, p) {
                            $('#pilihProduct').append(
                                `<option value="${p.nama_barang}">${p.nama_barang}</option>`
                            )
                        })

                        $('#pilihJasa').find('option').remove();
                        $('#pilihJasa').append(`<option value="">Pilih Jasa</option>`);
                        $.each(data.jasa, function(key, j) {
                            $('#pilihJasa').append(
                                `<option value="${j.nama_jasa+"-"+j.jenis_jasa}">${j.nama_jasa + " " + j.jenis_jasa}</option>`
                            )
                        })
                    }
                }
            })
        })


        $('#addProduct').click(function(e) {
            let pBrs = 1;

            if ($('#pilihProduct').val() != "") {
                $('#tbodyProduct').append(
                    `<tr >
                    <td><input type="text" name="listProduct[]" readonly value="${$('#pilihProduct').val()}"</td>
                    <td class="text-center"><input type="Button" onclick="deleteRow(this)" value="x" class="btn btn-sm btn-secondary"></td>
                </tr>`
                )
            }
        })

        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("tabelProduct").deleteRow(i);
        }


        $('#addJasa').click(function(e) {
            let pBrs = 1;
            if ($('#pilihJasa').val() != "") {
                $('#tbodyJasa').append(
                    `<tr >
                    <td><input type="text" name="listJasa[]" readonly value="${$('#pilihJasa').val()}"></td>
                    <td class="text-center"><input type="Button" onclick="deleteJasa(this)" value="x" class="btn btn-sm btn-secondary"></td>
                </tr>`
                )
            }
        })

        function deleteJasa(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("tabelJasa").deleteRow(i);
        }

        $(document).on('click', '#edit-vendor', function(e) {
            // e.prevenDefault();
            var _token = $('meta[name=csrf-token]').attr('content');

            $.ajax({
                url: "{{ route('editDataVendor') }}",
                type: "get",
                data: {
                    id: $(this).data('id'),
                    _token: _token,
                },
                success: function(edtVendor) {

                    $('#noVendorEdtId').val(edtVendor.id);
                    $('#noVendorEdt').val(edtVendor.no_vendor);
                    $('#jenisVendorEdt').val(edtVendor.jenis_vendor);
                    $('#namaVendorEdt').val(edtVendor.nama_vendor);
                    $('#alamatVendorEdt').val(edtVendor.alamat);
                    $('#cpVendorEdt').val(edtVendor.contact_person);
                    $('#telpVendorEdt').val(edtVendor.no_telp);
                    $('#npwpVendorEdt').val(edtVendor.npwp);
                    $('#noVendorEdt').val(edtVendor.no_vendor);
                    $('#statusPkpEdt').val(edtVendor.status_pkp);
                    $('#categoryEdt').val(edtVendor.category);
                    $('#noVendorEdt').val(edtVendor.no_vendor);

                    $('#modalEditVendor').modal('show');

                    liProduct = edtVendor.list_product.split(',')
                    liJasa = edtVendor.list_jasa.split(',')

                    $('#tbodyProductEdt tr').remove();
                    $('#tbodyJasaEdt tr').remove();
                    if (liProduct != "-") {
                        $.each(liProduct, function(k, l) {
                            $('#tbodyProductEdt').append(
                                `<tr >
                                    <td><input type="text" name="listProductEdt[]" readonly value="${l}"</td>
                                    <td class="text-center"><input type="Button" onclick="deleteRowEdt(this)" value="x" class="btn btn-sm btn-secondary"></td>
                                </tr>`
                            )
                        })
                    }

                    if (liJasa != "-") {
                        $.each(liJasa, function(k, j) {
                            $('#tbodyJasaEdt').append(
                                `<tr >
                                <td><input type="text" name="listJasaEdt[]" readonly value="${j}"</td>
                                <td class="text-center"><input type="Button" onclick="deleteJasaEdt(this)" value="x" class="btn btn-sm btn-secondary"></td>
                                </tr>`
                            )
                        })
                    }
                }
            })
        })

        $(document).on('change', '#categoryEdt', function(e) {
            let categoryEdt = $(this).val();
            var _token = $('meta[name=csrf-token]').attr('content');

            $.ajax({
                url: "{{ route('getBarangJasa') }}",
                type: "GET",
                data: {
                    filCategory: categoryEdt,
                    _token: _token,
                },
                success: function(data) {
                    console.log(data);
                    if (categoryEdt === "Barang") {
                        document.getElementById('addProductEdt').disabled = false;
                        document.getElementById('addJasaEdt').disabled = true;

                        $('#tbodyJasaEdt tr').remove();

                        $('#pilihProductEdt').find('option').remove();
                        $('#pilihProductEdt').append(`<option value="">Pilih Product</option>`);
                        $.each(data.product, function(key, p) {
                            $('#pilihProductEdt').append(
                                `<option value="${p.nama_barang}">${p.nama_barang}</option>`
                            )
                        })


                    }
                    if (categoryEdt === "Jasa") {
                        document.getElementById('addProductEdt').disabled = true;
                        document.getElementById('addJasaEdt').disabled = false;

                        $('#tbodyProductEdt tr').remove();

                        $('#pilihJasaEdt').find('option').remove();
                        $('#pilihJasaEdt').append(`<option value="">Pilih Jasa</option>`);
                        $.each(data.jasa, function(key, j) {
                            $('#pilihJasaEdt').append(
                                `<option value="${j.nama_jasa+"-"+j.jenis_jasa}">${j.nama_jasa + " " + j.jenis_jasa}</option>`
                            )
                        })
                    }
                    if (categoryEdt === "Barang & Jasa") {
                        document.getElementById('addProductEdt').disabled = false;
                        document.getElementById('addJasaEdt').disabled = false;

                        $('#tbodyProductEdt tr').remove();
                        $('#tbodyJasaEdt tr').remove();

                        $('#pilihProductEdt').find('option').remove();
                        $('#pilihProductEdt').append(`<option value="">Pilih Product</option>`);
                        $.each(data.product, function(key, p) {
                            $('#pilihProductEdt').append(
                                `<option value="${p.nama_barang}">${p.nama_barang}</option>`
                            )
                        })

                        $('#pilihJasaEdt').find('option').remove();
                        $('#pilihJasaEdt').append(`<option value="">Pilih Jasa</option>`);
                        $.each(data.jasa, function(key, j) {
                            $('#pilihJasaEdt').append(
                                `<option value="${j.nama_jasa+"-"+j.jenis_jasa}">${j.nama_jasa + " " + j.jenis_jasa}</option>`
                            )
                        })
                    }
                }
            })
        })

        $('#addProductEdt').click(function(e) {

            if ($('#pilihProductEdt').val() != "") {
                $('#tbodyProductEdt').append(
                    `<tr >
                    <td><input type="text" name="listProductEdt[]" readonly value="${$('#pilihProductEdt').val()}"</td>
                    <td class="text-center"><input type="Button" onclick="deleteRowEdt(this)" value="x" class="btn btn-sm btn-secondary"></td>
                </tr>`
                )
            }
        })

        function deleteRowEdt(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("tabelProductEdt").deleteRow(i);
        }


        $('#addJasaEdt').click(function(e) {

            if ($('#pilihJasaEdt').val() != "") {
                $('#tbodyJasaEdt').append(
                    `<tr >
                    <td><input type="text" name="listJasaEdt[]" readonly value="${$('#pilihJasaEdt').val()}"></td>
                    <td class="text-center"><input type="Button" onclick="deleteJasaEdt(this)" value="x" class="btn btn-sm btn-secondary"></td>
                </tr>`
                )
            }
        })

        function deleteJasaEdt(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("tabelJasaEdt").deleteRow(i);
        }
    </script>
@endpush
