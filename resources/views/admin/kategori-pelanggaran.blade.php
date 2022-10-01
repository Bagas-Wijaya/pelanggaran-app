@extends('layouts.assets-admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="default-datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Pelanggaran Ringan</th>
                                <th>Pelanggaran sedang</th>
                                <th>Pelanggaran Berat</th>
                                <th>Point</th>
                                <th>Aksi</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr class="deleted">
                                <td>boloh pelajaran</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>20</td>
                                <td><button class="btn btn-info"><i class="fa fa-pencil " style="font-size: 18px"></i> </button>
                                   <button onclick="Delete()" class="btn btn-danger"><i class="fa fa-trash" style="font-size: 18px"></i></button> </td>


                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>

    <script src="{{URL::to('assets/plugins/jquery-multi-select/jquery.multi-select.js')}}"></script>
    <script src="{{URL::to('assets/plugins/jquery-multi-select/jquery.quicksearch.js')}}"></script>
    <script src="{{URL::to('assets/plugins/select2/js/select2.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.single-select').select2();

            $('.multiple-select').select2();

            //multiselect start
        });
    </script>

    <script>
        $(document).ready(function() {
            //Default data table
            $('#default-datatable').DataTable();


            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
            } );

            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );

        } );

    </script>
    <script >
         function Delete(){
          var del = confirm()
             if (del == true){
                 $('.deleted').html('')
             }
        }
    </script>

@endsection


@section('head')
    <link href="{{URL::to('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('assets/plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet" type="text/css">

@endsection



<div class="modal fade" id="addOffense">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-star"></i> Tambah Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <label>Nama Pelanggaran</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="offense_name" class="form-control mb-2">
                        </div>

                        <div class="col-3">
                            <label>Point</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="offense_name" class="form-control mb-2">
                        </div>

                        <div class="col-3">
                            <label>Kategori</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control single-select">
                                <option value="">Ringan</option>
                                <option value="">Sedang</option>
                                <option value="">Berat</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
