@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Delete Entry</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Delete Entry</a></li>

                </ol>
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
                                            <th>Total </th>
                                            <th>Status</th>
                                            <th>DD</th>
                                            <th>Restore</th>
                                            <th>Bill</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                          
                                        <tr>
                                            <td>BLR-15	</td>
                                            <td>3423423 </td>
                                                <td>sathianathan-test;</td>
                                                <td>test</td>
                                                <td>Bahrain</td>
                                                <td>ACIRA - BLR</td>
                                                <td>2024/05/14</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>1</td>
                                                <td>COLLECTED</td>
                                                <td>Restore</td>
                                                <td>no</td>
                                               
                                        </tr>
                                        <tr>
                                            <td>BLR-15	</td>
                                            <td>3423423 </td>
                                                <td>sathianathan-test;</td>
                                                <td>test</td>
                                                <td>Bahrain</td>
                                                <td>ACIRA - BLR</td>
                                                <td>2024/05/14</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>1</td>
                                                <td>COLLECTED</td>
                                                <td>Restore</td>
                                                <td>no</td>
                                               
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
       
    </div>
    @endsection
