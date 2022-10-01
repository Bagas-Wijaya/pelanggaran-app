<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{URL::to('/')}}" class="mb-5">
            <img src="{{URL::to('assets/images/mahaputra1.png')}}" class="img-fluid"
                 style="max-width: 185px; height: auto; margin-left: 10%; margin-right: 10%;" alt="logo icon">
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol mt-2">
        <li class="sidebar-header">MAIN NAVIGATION</li>

        <li>
            <a href="{{URL::to('/')}}" class="">
                <i class="icon-home"></i> <span>Dashboard</span> <i class=""></i>
            </a>

        <li>

        <li>
            <a href="{{URL::to('/')}}" class="waves-effect">
                <i class="icon-user"></i> <span>Kelola Siswa</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{URL::to('/admin/siswa')}}"><i class="icon-user icons"></i>Tambah Siswa</a></li>
                <li><a href="{{URL::to('/admin/pelanggar')}}"><i class="icon-close icon"></i> Pelanggar</a></li>


            </ul>

        <li>
            <a href="{{URL::to('/')}}" class="waves-effect">
                <i class="icon-user"></i> <span>Kelola Kelas</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{URL::to('/admin/kelas')}}"><i class="icon-user-follow icons"></i>Tambah Kelas</a></li>

            </ul>
        <li>
            <a href="{{URL::to('/')}}" class="waves-effect">
                <i class="icon-close icon"></i> <span>Kelola Pelanggaran</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{URL::to('/admin/pelanggaran')}}"><i class="icon-exclamation icon"></i>Daftar Pelanggaran</a></li>
                <li><a href="{{URL::to('/admin/kategori-pelanggaran')}}"><i class="icon-notebook icon"></i>Kategori Pelanggaran</a></li>

            </ul>
        </li>
     </ul>

</div>
