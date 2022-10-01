<!DOCTYPE html>
<html lang="en">
@include('layouts.assets-user.head')
    @include('layouts.assets-user.sidebar')
    @include('layouts.assets-user.header')

    <div class="page-wrapper">
        <div class="page-content">
            @yield('konten')
        </div>
    </div>


@include('layouts.assets-user.js')
