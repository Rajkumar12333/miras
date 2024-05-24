@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Agent details</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Agent details</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="{{ route('agent.add_page') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add Agent</a>
                        </div>                        
                    </div>
    </div>
</div>

<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
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
                                            <th>ID</th>
                                            <th>Agent Name</th>
                                            <th>Mail ID</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Agent as $agent)
                                        <tr>
                                            <td>{{$agent->id}}</td>
                                            <td>{{$agent->agtname}}	</td>
                                            <td>{{$agent->mailid}}</td>
                                            <td>{{$agent->username}}</td>
                                               
                                                <td>
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                    <!-- <button type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>
                                                    -->
                                                    <a href="{{ route('agent.edit_page', $agent->id) }}" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></a>
                                                    <form action="{{ route('agent.destroy', $agent->id) }}" class="m-0" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $agent->id }}">
                                                        <button type="submit" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
                                                    </form>
                                                </div>
                                                </td>
                                        </tr>
                                        @endforeach
                                       
                                       
                                        </tbody>
                                    </table>
                                    {{$Agent->links('pagination::bootstrap-4')}}
                                </div>
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
