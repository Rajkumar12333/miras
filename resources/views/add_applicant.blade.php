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
                <a href="{{ route('visa_tracking') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>List Applicant</a>
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
                <form method="POST" id="applicantForm" enctype="multipart/form-data" action="{{route('applicant.store')}}">
                @csrf
                        <div class="form-group">
                            <label for="inputState">Total Document</label>
                            <select id="inputState" class="form-control" name="total_document">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                            </select>
                        </div>

                        <div id="dynamicFields" class="form-row">
                            <div class="form-group col-md-6">
                                <label for="applicantName">Applicant Name</label>
                                <input type="text" class="form-control" id="applicantName" name="document[0][name]"
                                    placeholder="Applicant Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passportNumber">Passport No / Old Passport No</label>
                                <input type="text" class="form-control" id="passportNumber" name="document[0][passportno]"
                                    placeholder="Passport No">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="applicantEmail">Applicant Email</label>
                                <input type="text" class="form-control" id="applicantEmail" name="applicant_email"
                                    placeholder="Applicant Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="employeeNumber">Employee No</label>
                                <input type="text" class="form-control" id="employeeNumber" name="employeeno"
                                    placeholder="Employee No">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="taVaNumber">T.A/V.A No</label>
                                <input type="text" class="form-control" id="taVaNumber" name="tavano"
                                    placeholder="T.A/V.A No">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agentName">Agent Name</label>
                                <select id="agentName" class="form-control" name="agtid">
                                    @foreach($Agent as $agent)
                                    <option value="{{$agent->id}}">{{$agent->agtname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload TP Form</label>
                                <input class="form-control" type="file" id="tpFormUpload" name="tp_form">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="outStationName">OutStation Name</label>
                                <select id="outStationName" class="form-control" name="outstation_name">
                                    <option selected>...</option>
                                    <option>Nathan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dob">Date of Birth</label>
                                <input type="text" class="form-control date" id="dob" name="dob">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="location">Location</label>
                                <select id="location" class="form-control" name="location">
                                @foreach($Branch as $con)
                                    <option value="{{$con->id}}">{{$con->branch}}</option>
                                    @endforeach

                                    <!-- <option value="">Select Location </option>
                                    <option value="1"> Bangalore </option>
                                    <option value="2"> Chennai </option>
                                    <option value="3"> Delhi </option>
                                    <option value="5"> Hyderabad </option>
                                    <option value="4"> Mumbai </option> -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="companyName">Company Name</label>
                                <input type="text" class="form-control" id="companyName" name="company"
                                    placeholder="Company Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <select id="country" class="form-control" name="country1">
                                    @foreach($Country as $con)
                                    <option value="{{$con->country}}">{{$con->country}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="appointmentDate">Appointment Date</label>
                                <input type="text" class="form-control datepicker" id="appointmentDate" name="appoint_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="category">Category</label>
                                <select id="category" class="form-control" name="category">
                                    @foreach($Category as $cat)
                                    <option value="{{$cat->category}}">{{$cat->category}}</option>
                                    @endforeach
                                  
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="recDate">RecDate</label>
                                <input type="text" class="form-control datepicker" id="recDate" name="rcddate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="subDate">SubDate</label>
                                <input type="text" class="form-control datepicker" id="subDate" name="subdate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="collDate">CollDate</label>
                                <input type="text" class="form-control datepicker" id="collDate" name="collectdate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sentDate">SentDate</label>
                                <input type="text" class="form-control datepicker" id="sentDate" name="sentdate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="referer">Referer</label>
                                <input type="text" class="form-control" id="referer" name="referer"
                                    placeholder="Referer">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ddReceived">DD (if received)</label>
                                <input type="text" class="form-control" id="ddReceived1" name="dd_received1"
                                    placeholder="DD-1">
                                <input type="text" class="form-control" id="ddReceived2" name="dd_received2"
                                    placeholder="DD-2">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobileNumber">Mobile Number</label>
                                <input type="text" class="form-control" id="number" name="number"
                                    placeholder="Mobile Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select id="appt_status" class="form-control" name="appt_status">
                                    <option value="SUBMITTED" selected="">SUBMITTED</option>
                                    <option value="DOX RECEIVED">DOX RECEIVED</option>
                                    <option value="DOX RECEIVED INPLANT">DOX RECEIVED INPLANT</option>
                                    <option value="SENT">SENT</option>
                                    <option value="COLLECTED">COLLECTED</option>
                                    <option value="PENDING">PENDING</option>
                                    <option value="READY FOR SUBMISSION">READY FOR SUBMISSION</option>
                                    <option value="DESPATCHED">DESPATCHED</option>
                                    <option value="DESPATCH TO MAA FOR SUBMISSION">DESPATCH TO MAA FOR SUBMISSION
                                    </option>
                                    <option value="DESPATCH TO DEL FOR SUBMISSION">DESPATCH TO DEL FOR SUBMISSION
                                    </option>
                                    <option value="DESPATCH TO BOM FOR SUBMISSION">DESPATCH TO BOM FOR SUBMISSION
                                    </option>
                                    <option value="UNDER PROCESS">UNDER PROCESS</option>
                                    <option value="PASSPORT WITHDRAWN &amp; SENT">PASSPORT WITHDRAWN &amp; SENT</option>
                                    <option value="PASSPORT AWAITED">PASSPORT AWAITED</option>
                                    <option value="DOX AWAITED">DOX AWAITED</option>
                                    <option value="VISA DONE &amp; SENT">VISA DONE &amp; SENT</option>
                                    <option value="VFS DESPATCHED">VFS DESPATCHED</option>
                                    <option value="VISA REFUSED &amp; SENT">VISA REFUSED &amp; SENT</option>
                                    <option value="DOX RECEIVED AT DELHI">DOX RECEIVED AT DELHI</option>
                                    <option value="DOX RECEIVED AT MUMBAI">DOX RECEIVED AT MUMBAI</option>
                                    <option value="SUBMITTED IN DELHI">SUBMITTED IN DELHI</option>
                                    <option value="SUBMITTED IN MUMBAI/VFS/CONSULATE">SUBMITTED IN MUMBAI/VFS/CONSULATE
                                    </option>
                                    <option value="SUBMITTED IN CHENNAI/VFS/CONSULATE">SUBMITTED IN
                                        CHENNAI/VFS/CONSULATE</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Outstation">Outstation</label>
                                <select id="Outstation" class="form-control" name="outstation">
                                    <option value="0" selected="">Nill</option>
                                    <option value="435">Sathianathan</option>
                                    <option value="482">Linde South Asia India Pvt Ltd</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">Documents</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="passport" id="passportCheck"
                                        >
                                    <label class="form-check-label" for="passportCheck">Passport</label>
                                    <div class="hidden">
                                    <label class="form-check-label" for="passportCheck">Valitity Date:</label>
                                    <input type="text"
                                        class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                        id="passportInput" name="passport_validity_date" placeholder="Enter Passport Details">
                                        </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="photo" value="" id="photoCheck"
                                        >
                                    <label class="form-check-label" for="photoCheck">Photo</label>
                                    <select id="photoCountry" name="country" class="form-control hidden mt-2">
                                    @foreach($Country as $con)
                                    <option value="{{$con->country}}">{{$con->country}}</option>
                                    @endforeach
                                    </select>
                                    <input type="text" class="form-control hidden my-2" id="photoCount"
                                        name="count" placeholder="Count">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="visaFormCheck"
                                        name="visa_form">
                                    <label class="form-check-label" for="visaFormCheck">Visa form</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="declarationCheck"
                                        name="declaration">
                                    <label class="form-check-label" for="declarationCheck">Declaration</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="healthDeclarationCheck"
                                        name="health_declaration">
                                    <label class="form-check-label" for="healthDeclarationCheck">Health
                                        Declaration</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="vfsDeclarationCheck"
                                        name="VFS_declaration">
                                    <label class="form-check-label" for="vfsDeclarationCheck">VFS- Declaration</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coveringLetterCheck"
                                        name="covering_letter">
                                    <label class="form-check-label" for="coveringLetterCheck">Covering Letter</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="coveringLetterFromDate">Cover Letter From
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="coveringLetterFromDate" name="coveringLetterFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="coveringLetterToDate">Cover Letter To
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="coveringLetterToDate" name="covering_letter_to_date"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invitationLetterCheck"
                                        name="invitation_letter">
                                    <label class="form-check-label" for="InvitationLetter">Invitation
                                        Letter</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="invitationLetterFromDate">Invitation Letter
                                            From Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="invitationLetterFromDate" name="invitation_letter_from_date"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="invitationLetterToDate">Invitation Letter
                                            To Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="invitationLetterToDate" name="invitation_letter_to_date"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="personalBankStatementCheck" name="personal_bank_statement">
                                    <label class="form-check-label" for="personalBankStatementCheck">Personal Bank
                                        Statement</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="PersonalITReturns">Personal Bank
                                            Statement Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="personalBankStatementDate" name="pbs_given_date"
                                            placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="personalITReturnsCheck"
                                        name="personal_it_returns">
                                    <label class="form-check-label" for="personalITReturnsCheck">Personal IT
                                        Returns</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="personalITReturnsDate">Personal IT Returns
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="personalITReturnsDate" name="pit_date"
                                            placeholder="Enter Date">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="companyBankStatementCheck" name="company_bank_statement">
                                    <label class="form-check-label" for="companyBankStatementCheck">Company Bank
                                        Statement</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="companyBankStatementDate">Company Bank
                                            Statement Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="companyBankStatementDate" name="cbs_date"
                                            placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="company_it_returns"
                                        name="CompanyITreturns">
                                    <label class="form-check-label" for="companyITReturnsCheck">Company IT
                                        Returns</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="companyITReturnsDate">Company IT Returns
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="companyITReturnsDate" name="cit_date"
                                            placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="payslip" value="" id="payslipCheck"
                                        name="Payslip">
                                    <label class="form-check-label" for="payslipCheck">Payslip</label>
                                    <div class="hidden">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payslip_type"
                                                id="payslipEmployee" value="Employee">
                                            <label class="form-check-label"
                                                for="payslipEmployee">Payslip[Employee]</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payslip_type"
                                                id="payslipDirector" value="Director">
                                            <label class="form-check-label" for="payslipDirector">Incorporation
                                                Certificate[Director]</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="ticketReservationCheck"
                                        name="ticket_reservation">
                                    <label class="form-check-label" for="ticketReservationCheck">Ticket
                                        Reservation</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="ticketReservationFromDate">Ticket
                                            Reservation From Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="ticketReservationFromDate" name="tr_fromdate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="ticketReservationToDate">Ticket Reservation
                                            To Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="ticketReservationToDate" name="tr_todate"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="insuranceForTravelCheck" name="insurance_for_travel">
                                    <label class="form-check-label" for="insuranceForTravelCheck">Insurance for
                                        Travel</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="insuranceForTravelFromDate">Insurance for
                                            Travel From Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="insuranceForTravelFromDate" name="ift_fromdate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="insuranceForTravelToDate">Insurance for
                                            Travel To Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="insuranceForTravelToDate" name="ift_todate"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="HotelBooking"
                                        name="hotelbooking">
                                    <label class="form-check-label" for="hotelBookingCheck">Hotel Booking</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="hotelBookingFromDate">Hotel Booking From
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="hotelBookingFromDate" name="hb_fromdate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="hotelBookingToDate">Hotel Booking To
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="hotelBookingToDate" name="hb_todate"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="yellowFeverCardCheck"
                                        name="yellow_fever_card">
                                    <label class="form-check-label" for="yellowFeverCardCheck">Yellow Fever Card</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="chamberOfCommerceCheck"
                                        name="chamber_of_commerce">
                                    <label class="form-check-label" for="chamberOfCommerceCheck">Chamber of
                                        Commerce</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="forex_receipt"
                                        name="ForexReceipt/Creditcopy">
                                    <label class="form-check-label" for="forexReceiptCheck">Forex Receipt / Credit
                                        Copy</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="ddCheck"
                                        name="dd">
                                    <label class="form-check-label" for="ddCheck">DD</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="ddDate">DD Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="ddDate" name="dd_date" placeholder="Enter Date">
                                        <label class="form-check-label" for="ddNumber">Number:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
                                            id="ddNumber" name="dd_number" placeholder="Enter Number">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Addressproof"
                                        name="Addressproof">
                                    <label class="form-check-label" for="addressProofCheck">Address Proof</label>
                                </div>
                            </div>

                                <div class="form-group col-md-6">
                                    <label for="remarks">Remarks</label>
                                    <textarea class="form-control" name="reason" id="reason" rows="3"
                                        placeholder="Remarks"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="internal-remarks">Internal Remarks</label>
                                    <textarea class="form-control" name="internal_reason" id="internal-remarks"
                                        rows="3" placeholder="Internal Remarks"></textarea>
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
<script>
    // document.getElementById('inputState').addEventListener('change', function () {
    //     const count = this.value;
    //     const dynamicFields = document.getElementById('dynamicFields');
    //     dynamicFields.innerHTML = ''; // Clear previous fields

    //     for (let i = 0; i < count; i++) {
    //         const fieldSet = document.createElement('div');
    //         fieldSet.className = 'form-row';

    //         const nameDiv = document.createElement('div');
    //         nameDiv.className = 'form-group col-md-12 mx-2 px-2';
    //         const nameLabel = document.createElement('label');
    //         nameLabel.className = 'block text-gray-700';
    //         nameLabel.textContent = `Applicant Name ${i + 1}`;
    //         const nameInput = document.createElement('input');
    //         nameInput.type = 'text';
    //         nameInput.className = 'form-control border border-gray-300 rounded p-2 w-full';
    //         nameInput.placeholder = `Applicant Name ${i + 1}`;
    //         nameDiv.appendChild(nameLabel);
    //         nameDiv.appendChild(nameInput);

    //         const passportDiv = document.createElement('div');
    //         passportDiv.className = 'form-group col-md-12 mx-2 px-2';
    //         const passportLabel = document.createElement('label');
    //         passportLabel.className = 'block text-gray-700';
    //         passportLabel.textContent = `Passport No / Old Passport No ${i + 1}`;
    //         const passportInput = document.createElement('input');
    //         passportInput.type = 'text';
    //         passportInput.className = 'form-control border border-gray-300 rounded p-2 w-full';
    //         passportInput.placeholder = `Passport No ${i + 1}`;
    //         passportDiv.appendChild(passportLabel);
    //         passportDiv.appendChild(passportInput);

    //         fieldSet.appendChild(nameDiv);
    //         fieldSet.appendChild(passportDiv);
    //         dynamicFields.appendChild(fieldSet);
    //     }
    // });

    document.getElementById('inputState').addEventListener('change', function () {
    const count = parseInt(this.value, 10);
    const dynamicFields = document.getElementById('dynamicFields');
    dynamicFields.innerHTML = ''; // Clear previous fields

    for (let i = 0; i < count; i++) {
        // Create a new form-row div for every two input pairs
        if (i % 2 === 0) {
            var fieldSet = document.createElement('div');
            fieldSet.className = 'form-row';
            dynamicFields.appendChild(fieldSet);
        }

        const nameDiv = document.createElement('div');
        nameDiv.className = 'form-group col-md-6';
        const nameLabel = document.createElement('label');
        nameLabel.setAttribute('for', `applicantName${i}`);
        nameLabel.className = 'block text-gray-700';
        nameLabel.textContent = `Applicant Name ${i + 1}`;
        const nameInput = document.createElement('input');
        nameInput.type = 'text';
        nameInput.className = 'form-control border border-gray-300 rounded p-2 w-full';
        nameInput.name = `document[${i}][name]`;  // Unique name for each input
        nameInput.id = `applicantName${i}`;
        nameInput.placeholder = `Applicant Name ${i + 1}`;
        nameDiv.appendChild(nameLabel);
        nameDiv.appendChild(nameInput);

        const passportDiv = document.createElement('div');
        passportDiv.className = 'form-group col-md-6';
        const passportLabel = document.createElement('label');
        passportLabel.setAttribute('for', `passportNumber${i}`);
        passportLabel.className = 'block text-gray-700';
        passportLabel.textContent = `Passport No / Old Passport No ${i + 1}`;
        const passportInput = document.createElement('input');
        passportInput.type = 'text';
        passportInput.className = 'form-control border border-gray-300 rounded p-2 w-full';
        passportInput.name = `document[${i}][passportno]`;  // Unique name for each input
        passportInput.id = `passportNumber${i}`;
        passportInput.placeholder = `Passport No ${i + 1}`;
        passportDiv.appendChild(passportLabel);
        passportDiv.appendChild(passportInput);

        fieldSet.appendChild(nameDiv);
        fieldSet.appendChild(passportDiv);
    }
});
document.getElementById("applicantForm").addEventListener("submit", function(event) {
    // Prevent the default form submission
    event.preventDefault();
    
    // Get all checkboxes inside the form
    var checkboxes = document.querySelectorAll("#applicantForm input[type='checkbox']");
    
    // Loop through each checkbox and update its value
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            checkbox.value = "1";
        } else {
            checkbox.value = "0";
        }
    });
    
    // Submit the form programmatically
    event.target.submit();
});

</script>
@endsection
