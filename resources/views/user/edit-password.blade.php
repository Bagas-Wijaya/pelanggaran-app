@extends('layouts.assets-user.master-user')
@section('konten')
<div class="container">
<div class="wrapper">
    <div class="authentication-reset-password d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-5 border-end">
                            <div class="card-body">
                                <div class="p-5">
                                    <div class="text-start">
                                        <img src="{{URL::to('assets2/images/logo-img.png')}}" width="180" alt="">
                                    </div>
                                    <h4 class="mt-5 font-weight-bold">Ubah Password</h4>
                                    <div class="mb-3 mt-5">
                                        <label class="form-label">Password Baru</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Password Baru" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Konfirmasi Password</label>
                                        <input type="text" class="form-control" placeholder="Konfirmasi Password" />
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-primary">Simpan Password</button> <a href="" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Kembali ke Halaman Utama</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <img src="{{URL::to('assets2/images/login-images/forgot-password-frent-img.jpg')}}" class="card-img login-img h-100" alt="...">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @section('js-user')

    @endsection

@section('head-user')
@endsection
