@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Edit Agent</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit Agent</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="{{ route('agent.view_page') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Agent List</a>
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
                <form method="POST" action="{{ route('agent.update', ['id' => $edit->id]) }}">
                @csrf
                       
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="applicantEmail">Agent Name :</label>
                                @error('agtname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" value="{{$edit->agtname}}" id="AgentName" name="agtname"
                                    placeholder="Agent Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="employeeNumber">Admin Mail ID:	</label>
                                @error('mailid')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="email" class="form-control" value="{{$edit->mailid}}" id="Admin-Mail" name="mailid"
                                    placeholder="Admin Mail ID">
                            </div>

                            <div class="form-group col-md-6">
                                @error('emailid')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="taVaNumber">Desk Mail ID:	</label>
                                <input type="email" class="form-control" value="{{$edit->emailid}}" id="DeskMail" name="emailid"
                                    placeholder="Desk Mail ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agentName">Username</label>
                               
                                <input type="text" class="form-control" value="{{$edit->username}}" id="Username" name="username"
                                    placeholder="Username">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agentName">Password</label>
                               
                                <input type="password" class="form-control" value="{{$edit->passwd}}" disabled id="password" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tpFormUpload">Mobile Number</label>
                                <input class="form-control" type="text" value="{{$edit->mobile}}" id="MobileNumber" name="mobile">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">GST No:</label>
                                <input type="text" class="form-control" value="{{$edit->gst_no}}" id="GST No" name="gst_no" placeholder="GST No">
                            </div>
                            <div class="form-group col-md-12">
                                    <label for="internal-remarks">Address</label>
                                    <textarea class="form-control" name="address" id="Address"
                                        rows="3" placeholder="Address"> {{$edit->address}}</textarea>
                                </div>

                            <div class="form-group col-md-4">
                                <label for="outStationName">Active</label>
                                <select id="outStationName" class="form-control" name="status">
                                    <option value="1"  @if($edit->status=="1") selected @endif >Yes</option>
                                    <option value="0"  @if($edit->status=="0") selected @endif>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="outStationName">Region:</label>
                                <select id="outStationName" class="form-control" name="region">
                                    <option value="1" @if($edit->region=="1") selected @endif>Karnataka</option>
                                    <option value="2" @if($edit->region=="2") selected @endif>Other State</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="outStationName">Outstation:</label>
                                <select id="outStationName" class="form-control" name="outstation">
                                    <option value="0"  @if($edit->outstation=="0") selected @endif>General</option>
                                    <option value="1"  @if($edit->outstation=="1") selected @endif>Outstation</option>
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
