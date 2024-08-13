@extends('layout.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Barang</h1>
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
                                    <div class="col-9">

                                        <a href="{{ route('input.barang') }} " class="btn btn-primary">Add New</a>
                                        {{-- <button type="button" class="btn btn-secondary">Edit</button> --}}
                                        {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-1">
                                <table class="table table-hover text-nowrap" id="tabelBarang">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Barang</th>
                                            <th>Merk</th>
                                            <th>Type</th>
                                            <th>Uom</th>
                                            <th class="text-center">Gambar Product</th>
                                            <th>action</th>
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
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    {{-- <link href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css" rel="stylesheet"> --}}
    {{-- <script src="https://cdn.datatables.net/2.1.3/js/dataTables.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/fc-4.3.0/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/fc-4.3.0/datatables.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $.noConflict();
            fetch_detail();


            function fetch_detail() {
                var tabel = $('#tabelBarang').DataTable();
                tabel.clear().draw();

                $('#tabelBarang').DataTable({
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
                        url: "{{ route('getDataBarang') }}",
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
                            data: 'fotoProduct',
                            "className": "text-center",
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
    </script>
@endsection
