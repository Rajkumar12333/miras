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
                <a href="{{ route('add_users') }}" class="btn btn-primary-rgba"><i
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
                                        <tr>
                                            <td>1</td>
                                            <td>Anatham	</td>
                                            <td>anantham</td>
                                            <td>p.m.anantham@mirasvisa.com	</td>
                                             <td>ADMIN</td>
                                             <td>
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button
                                                            type="button"
                                                            class="tabledit-edit-button btn btn-sm btn-info"
                                                            style="float: none; margin: 5px;"><span
                                                                class="ti-pencil"></span></button><button type="button"
                                                            class="tabledit-delete-button btn btn-sm btn-info"
                                                            style="float: none; margin: 5px;"><span
                                                                class="ti-trash"></span></button></div>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Anatham	</td>
                                            <td>anantham</td>
                                            <td>p.m.anantham@mirasvisa.com	</td>
                                             <td>ADMIN</td>
                                             <td>
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button
                                                            type="button"
                                                            class="tabledit-edit-button btn btn-sm btn-info"
                                                            style="float: none; margin: 5px;"><span
                                                                class="ti-pencil"></span></button><button type="button"
                                                            class="tabledit-delete-button btn btn-sm btn-info"
                                                            style="float: none; margin: 5px;"><span
                                                                class="ti-trash"></span></button></div>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Anatham	</td>
                                            <td>anantham</td>
                                            <td>p.m.anantham@mirasvisa.com	</td>
                                             <td>ADMIN</td>
                                             <td>
                                                    <div class="btn-group btn-group-sm" style="float: none;"><button
                                                            type="button"
                                                            class="tabledit-edit-button btn btn-sm btn-info"
                                                            style="float: none; margin: 5px;"><span
                                                                class="ti-pencil"></span></button><button type="button"
                                                            class="tabledit-delete-button btn btn-sm btn-info"
                                                            style="float: none; margin: 5px;"><span
                                                                class="ti-trash"></span></button></div>
                                                </td>
                                        </tr>
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>



@endsection
