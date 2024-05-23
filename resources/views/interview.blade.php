@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Interview</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Interview</a></li>

                </ol>
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
                                            <th>Applicant Name</th>
                                            <th>Country</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>qintcepr</td>
                                            <td>USA</td>
                                            <td>05-04-2020</td>
                                             <td>11:00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>qintcepr</td>
                                            <td>USA</td>
                                            <td>05-04-2020</td>
                                             <td>11:00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>qintcepr</td>
                                            <td>USA</td>
                                            <td>05-04-2020</td>
                                             <td>11:00</td>
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
