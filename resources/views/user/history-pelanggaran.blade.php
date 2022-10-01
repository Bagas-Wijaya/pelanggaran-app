@extends('layouts.assets-user.master-user')
@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="pelanggaran" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Nama Pelanggaran</th>
                        <th>Waktu Melanggar</th>
                        <th>Point</th>
                        <th>Penanggung Jawab</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Tidak Ikut Upacara</td>
                        <td>10/06/2021</td>
                        <td>10</td>
                        <td>Drs.Dede. Se.Spd.Kprdi</td>
                    </tr>
                    <tr>
                        <td>Jadi Penganut Dajal</td>
                        <td>10/06/2021</td>
                        <td>10</td>
                        <td>Drs.Dede. Se.Spd.Kprdi</td>
                    </tr>
                    <tr>
                        <td>Murtad</td>
                        <td>10/06/2021</td>
                        <td>50</td>
                        <td>Drs.Dede. Se.Spd.Kprdi</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>Jumlah</th>
                        <th>70</th>
                        <th></th>
                    </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
@endsection

@section('js-user')
    <script src="{{URL::to('assets2/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{URL::to('assets2/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#pelanggaran').DataTable();
        });
    </script>

@endsection

@section('head-user')
    <link href="{{URL::to('assets2/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>
@endsection
