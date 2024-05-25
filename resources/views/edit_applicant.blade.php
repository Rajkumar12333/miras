@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Add Applicant</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Applicant</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('visa_tracking') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>List Applicant </a>
            </div> 
        </div>
    </div>
</div>
<style>
    .hidden {
        display: none;
    }

</style>
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
    <!-- This code should be placed within your Blade template file (e.g., create.blade.php) -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form method="POST" enctype="multipart/form-data" action="{{ route('visa_tracking.update', ['id' => $edit->id]) }}">
                @csrf
                        <div class="form-group">
                            <label for="inputState">Total Document</label>
                            <select id="inputState" class="form-control" name="total_document">
                              
                                <option  @if($edit->doc=="1") selected @endif >1</option>
                                <option  @if($edit->doc=="2") selected @endif >2</option>
                                <option  @if($edit->doc=="3") selected @endif>3</option>
                                <option  @if($edit->doc=="4") selected @endif>4</option>
                                <option  @if($edit->doc=="5") selected @endif>5</option>
                                <option  @if($edit->doc=="6") selected @endif>6</option>
                                <option  @if($edit->doc=="7") selected @endif>7</option>
                                <option  @if($edit->doc=="8") selected @endif>8</option>
                                <option  @if($edit->doc=="9") selected @endif>9</option>
                                <option  @if($edit->doc=="10") selected @endif>10</option>
                                <option  @if($edit->doc=="11") selected @endif>11</option>
                                <option  @if($edit->doc=="12") selected @endif>12</option>
                                <option  @if($edit->doc=="13") selected @endif>13</option>
                                <option  @if($edit->doc=="14") selected @endif>14</option>
                                <option  @if($edit->doc=="15") selected @endif>15</option>
                            </select>
                        </div>

                        <div id="dynamicFields" class="form-row">
                            <div class="form-group col-md-6">
                                <label for="applicantName">Applicant Name</label>
                                <input type="text" class="form-control" id="applicantName" value="{{$edit->name}}" name="name"
                                    placeholder="Applicant Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passportNumber">Passport No / Old Passport No</label>
                                <input type="text" class="form-control" id="passportNumber" value="{{$edit->passportno}}" name="passportno"
                                    placeholder="Passport No">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="applicantEmail">Applicant Email</label>
                                <input type="text" class="form-control" id="applicantEmail" value="{{$edit->applicant_email}}" name="applicant_email"
                                    placeholder="Applicant Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="employeeNumber">Employee No</label>
                                <input type="text" class="form-control" id="employeeNumber" value="{{$edit->employeeno}}" name="employeeno"
                                    placeholder="Employee No">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="taVaNumber">T.A/V.A No</label>
                                <input type="text" class="form-control" id="taVaNumber" value="{{$edit->tavano}}" name="tavano"
                                    placeholder="T.A/V.A No">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agentName">Agent Name</label>
                                <select id="agentName" class="form-control" name="agtid">
                                    @foreach($Agent as $agent)
                                    <option value="{{$agent->id}}"
                                    @if($edit->agtid==$agent->id) selected @endif>{{$agent->agtname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload TP Form</label>
                                <input class="form-control" type="file" id="tpFormUpload" name="tp_form">
                                @if(!empty($tp))
                                <input type="hidden" value="{{$tp->id}}" name="tp_id">
                                <a href="{{$tp->file_name}}" target="_blank">TP form file</a>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label for="outStationName">OutStation Name</label>
                                <select id="outStationName" class="form-control" name="outstatid">
                                    <option selected>...</option>
                                    <option value="13">Nathan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dob">Date of Birth</label>
                                <input type="text" class="form-control datepicker" value="{{$edit->dob}}" id="dob" name="dob">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="location">Location  {{$edit->branchid}}</label>
                               
                                <select id="location" class="form-control" name="location">
                                @foreach($Branch as $con)
                                    <option value="{{$con->id}}"
                                    @if($edit->branchid==$con->id) selected @endif >{{$con->branch}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="companyName">Company Name</label>
                                <input type="text" class="form-control" value="{{$edit->company}}" id="companyName" name="company"
                                    placeholder="Company Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <select id="country" class="form-control" name="country">
                                    @foreach($Country as $con)
                                    <option value="{{$con->country}}" 
                                    @if($edit->country==$con->country) selected @endif>{{$con->country}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="appointmentDate">Appointment Date</label>
                                <input type="text" class="form-control datepicker" value="{{$edit->appoint_date}}" id="appointmentDate" name="appoint_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="category">Category</label>
                                <select id="category" class="form-control"  name="category">
                                    @foreach($Category as $cat)
                                    <option value="{{$cat->category}}">{{$cat->category}}</option>
                                    @endforeach
                                  
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="recDate">RecDate</label>
                                <input type="text" class="form-control datepicker" value="{{$edit->rcddate}}" id="recDate" name="rcddate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="subDate">SubDate</label>
                                <input type="text" class="form-control datepicker" value="{{$edit->subdate}}" id="subDate" name="subdate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="collDate">CollDate</label>
                                <input type="text" class="form-control datepicker" value="{{$edit->collectdate}}" id="collDate" name="collectdate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sentDate">SentDate</label>
                                <input type="text" class="form-control datepicker" value="{{$edit->sentdate}}" id="sentDate" name="sentdate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="referer">Referer</label>
                                <input type="text" class="form-control" value="{{$edit->referer}}" id="referer" name="referer"
                                    placeholder="Referer">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ddReceived">DD (if received)</label>
                                <input type="text" class="form-control" value="{{$edit->name}}" id="ddReceived1" name="dd_received1"
                                    placeholder="DD-1">
                                <input type="text" class="form-control" value="{{$edit->name}}" id="ddReceived2" name="dd_received2"
                                    placeholder="DD-2">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobileNumber">Mobile Number</label>
                                <input type="text" class="form-control" value="{{$edit->number}}" id="number" name="number"
                                    placeholder="Mobile Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select id="appt_status" class="form-control" name="appt_status">
                                    <option @if($edit->appt_status=="SUBMITTED") selected @endif value="SUBMITTED" >SUBMITTED</option>
                                    <option @if($edit->appt_status=="DOX RECEIVED") selected @endif value="DOX RECEIVED">DOX RECEIVED</option>
                                    <option @if($edit->appt_status=="DOX RECEIVED INPLANT") selected @endif value="DOX RECEIVED INPLANT">DOX RECEIVED INPLANT</option>
                                    <option @if($edit->appt_status=="SENT") selected @endif value="SENT">SENT</option>
                                    <option @if($edit->appt_status=="COLLECTED") selected @endif value="COLLECTED">COLLECTED</option>
                                    <option @if($edit->appt_status=="PENDING") selected @endif value="PENDING">PENDING</option>
                                    <option @if($edit->appt_status=="READY FOR SUBMISSION") selected @endif value="READY FOR SUBMISSION">READY FOR SUBMISSION</option>
                                    <option @if($edit->appt_status=="DESPATCHED") selected @endif value="DESPATCHED">DESPATCHED</option>
                                    <option @if($edit->appt_status=="DESPATCH TO MAA FOR SUBMISSION") selected @endif value="DESPATCH TO MAA FOR SUBMISSION">DESPATCH TO MAA FOR SUBMISSION
                                    </option>
                                    <option @if($edit->appt_status=="DESPATCH TO DEL FOR SUBMISSION") selected @endif value="DESPATCH TO DEL FOR SUBMISSION">DESPATCH TO DEL FOR SUBMISSION
                                    </option>
                                    <option @if($edit->appt_status=="DESPATCH TO BOM FOR SUBMISSION") selected @endif value="DESPATCH TO BOM FOR SUBMISSION">DESPATCH TO BOM FOR SUBMISSION
                                    </option>
                                    <option @if($edit->appt_status=="UNDER PROCESS") selected @endif value="UNDER PROCESS">UNDER PROCESS</option>
                                    <option @if($edit->appt_status=="PASSPORT WITHDRAWN &amp; SENT") selected @endif value="PASSPORT WITHDRAWN &amp; SENT">PASSPORT WITHDRAWN &amp; SENT</option>
                                    <option @if($edit->appt_status=="PASSPORT AWAITED") selected @endif value="PASSPORT AWAITED">PASSPORT AWAITED</option>
                                    <option @if($edit->appt_status=="DOX AWAITED") selected @endif value="DOX AWAITED">DOX AWAITED</option>
                                    <option @if($edit->appt_status=="VISA DONE &amp; SENT") selected @endif value="VISA DONE &amp; SENT">VISA DONE &amp; SENT</option>
                                    <option @if($edit->appt_status=="VFS DESPATCHED") selected @endif value="VFS DESPATCHED">VFS DESPATCHED</option>
                                    <option @if($edit->appt_status=="VISA REFUSED &amp; SENT") selected @endif value="VISA REFUSED &amp; SENT">VISA REFUSED &amp; SENT</option>
                                    <option @if($edit->appt_status=="DOX RECEIVED AT DELHI") selected @endif value="DOX RECEIVED AT DELHI">DOX RECEIVED AT DELHI</option>
                                    <option @if($edit->appt_status=="DOX RECEIVED AT MUMBAI") selected @endif value="DOX RECEIVED AT MUMBAI">DOX RECEIVED AT MUMBAI</option>
                                    <option @if($edit->appt_status=="SUBMITTED IN DELHI") selected @endif value="SUBMITTED IN DELHI">SUBMITTED IN DELHI</option>
                                    <option @if($edit->appt_status=="SUBMITTED IN MUMBAI/VFS/CONSULATE") selected @endif value="SUBMITTED IN MUMBAI/VFS/CONSULATE">SUBMITTED IN MUMBAI/VFS/CONSULATE
                                    </option>
                                    <option @if($edit->appt_status=="SUBMITTED IN CHENNAI/VFS/CONSULATE") selected @endif value="SUBMITTED IN CHENNAI/VFS/CONSULATE">SUBMITTED IN
                                        CHENNAI/VFS/CONSULATE</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Outstation">Outstation</label>
                                <select id="Outstation" class="form-control" name="outstation">
                                    <option value="0">Nill</option>
                                    @foreach($outstation as $outstations)
                                    <option value="{{$outstations->id}}"
                                    @if($outstations->id==$edit->outstation) selected @endif
                                    >{{$outstations->agtname}} {{$outstations->id}} {{$edit->outstation}}</option>
                                    @endforeach
                                  
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload Passport Copy</label>
                                <input class="form-control" type="file" id="passportcopy" name="passportcopy">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload Visa Copy</label>
                                <input class="form-control" type="file" id="visacopy" name="visacopy">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload Insurance Copy</label>
                                <input class="form-control" type="file" id="insurancecopy" name="insurancecopy">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload Interview Slip</label>
                                <input class="form-control" type="file" id="interviewslip" name="interviewslip">
                            </div>
                         

                                <div class="form-group col-md-6">
                                    <label for="remarks">Remarks</label>
                                    <textarea class="form-control" name="reason" id="reason" rows="3"
                                        placeholder="Remarks">{{$edit->reason}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="internal-remarks">Internal Remarks</label>
                                    <textarea class="form-control" name="internal_reason" id="internal-remarks"
                                        rows="3" placeholder="Internal Remarks">{{$edit->internal_reason}}</textarea>
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Send SMS ?
                                    </label>
                                </div>
                            </div>
                      
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.form-check-input');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const inputField1 = this.nextElementSibling.nextElementSibling;
                const inputField2 = inputField1.nextElementSibling;
                if (this.checked) {
                    inputField1.classList.remove('hidden');
                    inputField2.classList.remove('hidden');
                } else {
                    inputField1.classList.add('hidden');
                    inputField2.classList.add('hidden');
                }
            });
        });
    });

</script>
   
@endsection
