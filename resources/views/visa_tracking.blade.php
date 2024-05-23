@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Visa Tracking</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Visa Tracking</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <!-- <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div> -->
            <div class="widgetbar">
                            <a href="{{ route('applicant.add_page') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add Applicant</a>
                        </div> 
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Data Export Table</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Tracking Id</th>
                                            <th>Passport No</th>
                                            <th>PAX Name</th>
                                            <th>Company </th>
                                            <th>Country</th>
                                            <th>Agent Name</th>
                                            <th>Received</th>
                                            <th>Submit </th>
                                            <th>Collection</th>
                                            <th>Send On</th>
                                            <th>Total </th>
                                            <th>Status</th>
                                            <th>DD</th>
                                            <th>Actions</th>
                                            <th>Bill</th>
                                            <th>Qr Code</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($view as $views)
                                        <tr>
                                            <td>
                                            @php
                                                try {
                                                    $short_name = \App\Models\Branch::findOrFail($views->branchid);
                                                } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
                                                    $short_name = null; 
                                                }
                                            @endphp
                                                
                                                {{$short_name->shortname}}-{{$views->id}}</td>
                                            <td>{{$views->passportno}} </td>
                                                <td>{{$views->name}}</td>
                                                <td>{{$views->company}}</td>
                                                <td>{{$views->country}}</td>
                                                <td>
                                                @php
                                                    try {
                                                        $agent_name = \App\Models\Agent::findOrFail($views->agtid);
                                                    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
                                                        $agent_name = null; 
                                                    }
                                                @endphp
                                                @if(!empty($agent_name))
                                                {{$agent_name->agtname}}
                                                @endif
                                                </td>
                                                <td>{{$views->rcddate}}</td>
                                                <td>{{$views->subdate}}</td>
                                                <td>{{$views->collectdate}}</td>
                                                <td>{{$views->senton}}</td>
                                                <td>{{$views->doc}}</td>
                                                <td>{{$views->appt_status}} </td>
                                                <td>{{$views->dd}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                   
                                                        <a href="{{ route('visa_tracking.edit_page', $views->id) }}" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"> <span class="ti-pencil"></span> </a>
                                                        <form action="{{ route('visa_tracking.destroy', $views->id) }}" class="m-0" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $views->id }}">
                                                        <button type="submit" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>{{$views->bill}}</td>
                                        </tr>
                                        @endforeach
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
  
    @endif
    @endsection
