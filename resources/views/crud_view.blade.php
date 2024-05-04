@extends('include.master')
@section('content')
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">CRM</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CRM</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <!-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add</button> -->
                            <a href="{{ route('crud.add_page') }}" class="btn btn-primary-rgba"> <i class="feather icon-plus mr-2"></i>Add</a>
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->   
 <!-- Start Contentbar -->    
 <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Default Data Table</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">With DataTables you can alter the ordering characteristics of the table at initialisation time.</h6>
                                <div class="table-responsive">
                                    <table id="default-datatable" class="display table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Content</th>
                                               <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($crud_list as $list)
                                            <tr>
                                                <td>{{$list['title']}}</td>
                                                <td>{{$list['content']}}</td>
                                               <td> <a href="{{ route('crud.edit_page', $list->id) }}">Edit</a>
                                               <form action="{{ route('crud.crud_destroy', $list->id) }}" method="post">
                                                @csrf
                                               <input type="hidden" name="id" value="{{ $list->id }}">
                                               <input type="submit" name="submit" value="Delete">
                                               </form></td>
                                               

                                            </tr>
                                         @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Content</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
               
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
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