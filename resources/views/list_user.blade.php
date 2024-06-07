@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">User List</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Users List</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('user.add_page') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Add users</a>
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
                                            <th>Id</th>
                                            <th>First Name</th>
                                            <th>user ID	</th>
                                            <th>Mail ID	</th>
                                            <th>Rights	</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}	</td>
                                            <td>{{$user->userid}}</td>
                                            <td>{{$user->mailid}}	</td>
                                             <td>
                                             @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                <label class="badge badge-secondary text-dark">{{ $v }}</label>
                                                @endforeach
                                            @endif

                                            </td>
                                             <td>
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                    <a href="{{ route('user.edit_page', $user->id) }}"  class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></a>
                                                    <form action="{{ route('user.destroy', $user->id) }}" class="m-0" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                            <button type="submit" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
                                                    </form>
                                                </div>
                                                </td>
                                        </tr>
                                       @endforeach
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>



@endsection
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