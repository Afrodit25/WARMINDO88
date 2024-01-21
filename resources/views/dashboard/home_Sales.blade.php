@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="welcome-box">
                        <div class="welcome-img">
                            <img alt="" src="{{ asset('/') }}assets/img/people.png">
                        </div>
                        <div class="welcome-det">
                            <h3>Welcome, {{ Auth::user()->name }}  (Kode Refferal: {{ $kode_ref }}), you are logged in an Sales</h3>
                            <p>{{ date('d M Y H:i:s') }}</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->
@endsection
