@extends('layouts.assets-user.master-user')
@section('konten')
    <h6 class="mb-0 text-uppercase">Daftar Pelanggaran</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="pelanggaran" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Pelanggaran</th>
                        <th>Point</th>
                        <th>Kategori Pelanggaran</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Tidak Ikut Upacara</td>
                        <td>10</td>
                        <td>Ringan</td>

                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection

@section('js-user')
    <script src="{{URL::to('assets2/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{URL::to('assets2/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#pelanggaran').DataTable();
        } );
    </script>

@endsection

@section('head-user')
    <link href="{{URL::to('assets2/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection

