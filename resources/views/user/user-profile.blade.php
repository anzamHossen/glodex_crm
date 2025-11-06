@extends('layouts.app')
@section('content')
    <!-- Begin page -->
    <div class="wrapper">
        <div class="page-container">
            <div class="row mt-2">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                            <h4 class="header-title mb-0">Pending Student User</h4>
                            <a href="{{ route('admin_dashboard') }}" class="btn btn-sm btn-secondary">
                                <i class="ti ti-arrow-back-up" style="margin-right:3px; font-size: 1.3rem; margin-bottom: 1px"></i>Go Back 
                            </a>
                        </div>
                        <div class="card-body">
                            <h1>Write your content here</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- END wrapper -->
@endsection
@push('page-js')
@endpush