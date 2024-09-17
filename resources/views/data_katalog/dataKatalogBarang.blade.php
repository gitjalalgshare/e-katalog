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
                        {{-- <div class="float-sm-right">
                            <a href="{{ route('input.purchase') }}" class="btn btn-primary">Add Purchase</a>
                        </div> --}}
                        {{-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
                        </ol> --}}
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            {{-- <div class="card-header">
                                <h3 class="card-title">Data Purchase Barang</h3>
                            </div> --}}
                            <div class="container-fluid">
                                <div class="row mt-3">
                                    {{-- <div class="col-9">
                                        <a href="{{ route('input.purchase') }}" class="btn btn-primary">Add Purchase</a>
                                    </div> --}}
                                    {{-- <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 300px;">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div><!-- /.container-fluid -->

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-2">
                                <table class="table table-hover text-nowrap" id="tabelPurchase" name="tabelPurchase"
                                    style="font-size: 12px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            {{-- <th>Nomor Pengajuan</th> --}}
                                            <th>Nama Barang</th>
                                            <th>Merk</th>
                                            <th>Type</th>
                                            <th>Uom</th>
                                            <th>Qty</th>
                                            <th>Harga Satuan</th>
                                            <th>Total Harga</th>
                                            <th>Branch</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Vendor</th>
                                            <th>Alamat</th>
                                            <th>Status PKP</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <hr>


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
            fetch_purchase();
            fetch_purchase_jasa();

            function fetch_purchase() {
                var tabel = $('#tabelPurchase').DataTable();
                tabel.clear().draw();

                $('#tabelPurchase').DataTable({
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
                        url: "{{ route('getDataPurchaseBarang') }}",
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
                        // {
                        //     data: 'no_pengajuan',
                        // },
                        {
                            data: 'nama_barang',
                        },
                        {
                            data: 'merk',
                        },
                        {
                            data: 'type',
                        },
                        {
                            data: 'uom',
                        },
                        {
                            data: 'qty',
                            "className": "text-center",
                        },
                        {
                            data: 'harga',
                            "className": "text-center",
                        },
                        {
                            data: 'total'.toLocaleString(),
                        },
                        {
                            data: 'branch',
                        },
                        {
                            data: 'bulan',
                        },
                        {
                            data: 'tahun',
                        },
                        {
                            data: 'nama_vendor',
                        },
                        {
                            data: 'alamat',
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
                    ],
                    columnDefs: [{
                        target: [6, 7, 8],
                        render: DataTable.render.number(null, null, 0)
                    }]
                });

            }

            function fetch_purchase_jasa() {
                var tabel = $('#tabelPurchaseJasa').DataTable();
                tabel.clear().draw();

                $('#tabelPurchaseJasa').DataTable({
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
                        url: "{{ route('getDataPurchaseJasa') }}",
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
                            data: 'no_pengajuan',
                        },
                        {
                            data: 'nama_jasa',
                        },
                        {
                            data: 'jenis_jasa',
                        },
                        {
                            data: 'type_jasa',
                        },
                        {
                            data: 'uom',
                        },
                        {
                            data: 'qty',
                            "className": "text-center",
                        },
                        {
                            data: 'periode',
                            "className": "text-center",
                        },
                        {
                            data: 'start_date',
                        },
                        {
                            data: 'harga'.toLocaleString(),
                        },
                        {
                            data: 'total'.toLocaleString(),
                        },
                        {
                            data: 'branch',
                        },
                        {
                            data: 'bulan',
                        },
                        {
                            data: 'tahun',
                        },
                        {
                            data: 'nama_vendor',
                        },
                        {
                            data: 'alamat',
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
                    ],
                    columnDefs: [{
                        target: [6, 7, 8],
                        render: DataTable.render.number(null, null, 0)
                    }]
                });

            }
        })

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
    </script>
@endpush
