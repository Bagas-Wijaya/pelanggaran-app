@extends('layouts.assets-admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                    <i class="fa fa-table"></i> Daftar Pelanggaran
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="default-datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Nama Pelanggaran</th>
                                <th>Kategori Pelanggaran</th>
                                <th>Point</th>
                                <th>Pelanggar</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tidak Ikut Upacara</td>
                                <td style="color: #0fae18">Ringan</td>
                                <td>10</td>
                                <td>
                                    <button onclick="add()" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>
                                        Tambah Pelanggar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Tidak Ikut Upacara</td>
                                <td style="color: yellow">Sedang</td>
                                <td>15</td>
                                <td>
                                    <button onclick="add()" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>
                                        Tambah Pelanggar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Tidak Ikut Upacara</td>
                                <td style="color: red">Berat</td>
                                <td>50</td>
                                <td>
                                    <button onclick="add()" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>
                                        Tambah Pelanggar
                                    </button>
                                </td>
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
        function add() {
            $('#addOffense').modal('show')
        }
    </script>
@endsection

@section('head')
    <link href="{{URL::to('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{URL::to('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{URL::to('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('assets/plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet" type="text/css">


@endsection

<div class="modal fade" id="addOffense">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-star"></i> Tambah Pelanggar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3"><label>Nama Siswa</label>
                        </div>
                    </div>

                    <div class="col-9">
                        <select class="form-control multiple-select" multiple="multiple">
                            <option value="">Farman</option>
                            <option value="">Firman</option>
                            <option value="">Furkon</option>
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3"><label>Penanggung Jawab</label></div>

                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control">
                    </div>

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>




