<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{URL::to('assets2/images/mahaputra1.png')}}" class=" img-fluid" style="max-width: 185px; height: auto; margin-left: 10%; margin-right: 10%;" alt="logo icon">
            </div>
            <div>

            </div>
            <div class="toggle-icon ms-auto"><i class=''></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{URL::to('/user')}}" class="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
                <ul>
                    <li> <a href="{{URL::to('/user/history-pelanggaran')}}"><i class="fadeIn animated bx bx-pie-chart-alt"></i>History Pelanggaran</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!--end sidebar wrapper -->

    <!--start page wrapper -->

</div>
