@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Add Agent</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Agent</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="{{ route('list_agent') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Agent List</a>
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
                    <!-- <h5 class="card-title">Form row</h5> -->
                </div>
               <div class="card-body">
                <form method="POST" action="">
                @csrf
                       
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="applicantEmail">Agent Name :</label>
                                <input type="text" class="form-control" id="AgentName" name="AgentName"
                                    placeholder="Agent Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="employeeNumber">Admin Mail ID:	</label>
                                <input type="text" class="form-control" id="Admin-Mail" name="Admin-Mail"
                                    placeholder="Admin Mail ID">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="taVaNumber">Desk Mail ID:	</label>
                                <input type="text" class="form-control" id="DeskMail" name="DeskMail"
                                    placeholder="Desk Mail ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agentName">Username</label>
                                <input type="text" class="form-control" id="Username" name="Username"
                                    placeholder="Username">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tpFormUpload">Mobile Number</label>
                                <input class="form-control" type="text" id="MobileNumber" name="MobileNumber">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">GST No:</label>
                                <input type="text" class="form-control" id="GST No" name="GST No" placeholder="GST No">
                            </div>
                            <div class="form-group col-md-12">
                                    <label for="internal-remarks">Address</label>
                                    <textarea class="form-control" name="Address" id="Address"
                                        rows="3" placeholder="Address"></textarea>
                                </div>

                            <div class="form-group col-md-4">
                                <label for="outStationName">Active</label>
                                <select id="outStationName" class="form-control" name="outstation_name">
                                    <option selected>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="outStationName">Region:</label>
                                <select id="outStationName" class="form-control" name="outstation_name">
                                    <option selected>Karnataka</option>
                                    <option>Other State</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="outStationName">Outstation:</label>
                                <select id="outStationName" class="form-control" name="outstation_name">
                                    <option selected>General</option>
                                    <option>Outstation</option>
                                </select>
                            </div>
                            

                            </div>
                            
                      
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
