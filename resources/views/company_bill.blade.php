@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Company bill</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Company bill</a></li>

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
                                            <th>Id</th>
                                            <th>Applicant Name</th>
                                            <th>paasport/No</th>
                                            <th>Location</th>
                                            <th>Country</th>
                                            <th>Agent Name</th>
                                            <th>Visa Fees</th>
                                            <th>Vfs Charge</th>
                                            <th>Service Charge</th>
                                            <th>Service Tax</th>
                                            <th>Round Off</th>
                                            <th>Total Amount</th>
                                            <th>Date</th>
                                            <th>Bill Status</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                          
                                        <tr>
                                            <td>1</td>
                                            <td>sathia nathan;	</td>
                                                <td>435435;	</td>
                                                <td>Bangalore</td>
                                                <td>Angola;</td>
                                                <td>ACIRA - BLR</td>
                                                <td>20</td>
                                                <td>100</td>
                                                <td>20</td>
                                                <td>8.10</td>
                                                <td>0.13</td>
                                                <td>307	</td>
                                                <td>2022-06-18</td>
                                                <td>Billed</td>
                                               
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>sathia nathan;	</td>
                                                <td>435435;	</td>
                                                <td>Bangalore</td>
                                                <td>Angola;</td>
                                                <td>ACIRA - BLR</td>
                                                <td>20</td>
                                                <td>100</td>
                                                <td>20</td>
                                                <td>8.10</td>
                                                <td>0.13</td>
                                                <td>307	</td>
                                                <td>2022-06-18</td>
                                                <td>Billed</td>
                                               
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>sathia nathan;	</td>
                                                <td>435435;	</td>
                                                <td>Bangalore</td>
                                                <td>Angola;</td>
                                                <td>ACIRA - BLR</td>
                                                <td>20</td>
                                                <td>100</td>
                                                <td>20</td>
                                                <td>8.10</td>
                                                <td>0.13</td>
                                                <td>307	</td>
                                                <td>2022-06-18</td>
                                                <td>Billed</td>
                                               
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
       
    </div>
    @endsection
