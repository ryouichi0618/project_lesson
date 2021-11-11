@extends('admin.layouts.base')
@section('page')

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>


@include('admin.layouts.nav')

@include('admin.layouts.sidebar')

@include('admin.layouts.content')

@include('admin.layouts.footer')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.layouts.script')

@endsection
