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
                        <img alt="" src="assets/img/profiles/avatar-02.jpg">
                    </div>
                    <div class="welcome-det">
                        <h3>Welcome, {{ Auth::user()->name }} , you are logged in an Member</h3>
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
