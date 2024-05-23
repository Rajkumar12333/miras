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
                                <input type="hidden" value="{{$tp->id}}" name="tp_id">
                                <a href="{{$tp->file_name}}" target="_blank">TP form file</a>
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
                                <select id="appt_status" class="form-control" name="appt_status[]">
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
                                    @foreach($outstation as $outstations)
                                    <option value="{{$outstations->id}}">{{$outstations->agtname}}</option>
                                    @endforeach
                                    <!-- <option value="435">Sathianathan</option>
                                    <option value="482">Linde South Asia India Pvt Ltd</option> -->
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload TP Form</label>
                                <input class="form-control" type="file" id="passportcopy" name="passportcopy">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload TP Form</label>
                                <input class="form-control" type="file" id="visacopy" name="visacopy">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload TP Form</label>
                                <input class="form-control" type="file" id="insurancecopy" name="insurancecopy">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload TP Form</label>
                                <input class="form-control" type="file" id="interviewslip" name="interviewslip">
                            </div>
                            <!-- <div class="form-group col-md-12">
                                <label for="inputState">Documents</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="passportCheck"
                                        name="passportCheck">
                                    <label class="form-check-label" for="passportCheck">Passport</label>
                                    <div class="hidden">
                                    <label class="form-check-label" for="passportCheck">Valitity Date:</label>
                                    <input type="text"
                                        class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                        id="passportInput" name="passportInput" placeholder="Enter Passport Details">
                                        </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="photoCheck"
                                        name="photoCheck">
                                    <label class="form-check-label" for="photoCheck">Photo</label>
                                    <select id="photoCountry" name="photoCountry" class="form-control hidden mt-2">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="C?te d'Ivoire">C?te d'Ivoire</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde Islands">Cape Verde Islands</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Chinese Taipei">Chinese Taipei</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Conch Republic">Conch Republic</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech">Czech</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica Commowealth">Dominica Commowealth</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French West Indies">French West Indies</option>
                                        <option value="Fyrom">Fyrom</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe (French)">Guadeloupe (French)</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaiian Islands">Hawaiian Islands</option>
                                        <option value="Holy See">Holy See</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Johnston Islands">Johnston Islands</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakstan">Kazakstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea - D.P.R (N/Korea)">Korea - D.P.R (N/Korea)</option>
                                        <option value="Korea - Rep. Of (S/Korea)">Korea - Rep. Of (S/Korea)</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Leeward Islands">Leeward Islands</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Mariana Islands">Mariana Islands</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="Newzealand">Newzealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Islands">Norfolk Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Notary">Notary</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Islands">Palau Islands</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                        <option value="Samoa - American">Samoa - American</option>
                                        <option value="Samoa - Western">Samoa - Western</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia And Montenegro">Serbia And Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Srilanka">Srilanka</option>
                                        <option value="St. Kitts &amp; Nevis">St. Kitts &amp; Nevis</option>
                                        <option value="St. Lucia">St. Lucia</option>
                                        <option value="St. Vincent / Gerandines">St. Vincent / Gerandines</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands
                                        </option>
                                        <option value="Swains Islands">Swains Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tongo">Tongo</option>
                                        <option value="Transkei">Transkei</option>
                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands">Virgin Islands</option>
                                        <option value="Wake Islands">Wake Islands</option>
                                        <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
                                        <option value="Winward Islands">Winward Islands</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    <input type="text" class="form-control hidden my-2" id="photoCount"
                                        name="photoCount" placeholder="Count">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="visaFormCheck"
                                        name="visaFormCheck">
                                    <label class="form-check-label" for="visaFormCheck">Visa form</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="declarationCheck"
                                        name="declarationCheck">
                                    <label class="form-check-label" for="declarationCheck">Declaration</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="healthDeclarationCheck"
                                        name="healthDeclarationCheck">
                                    <label class="form-check-label" for="healthDeclarationCheck">Health
                                        Declaration</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="vfsDeclarationCheck"
                                        name="vfsDeclarationCheck">
                                    <label class="form-check-label" for="vfsDeclarationCheck">VFS- Declaration</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coveringLetterCheck"
                                        name="coveringLetterCheck">
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
                                            id="coveringLetterToDate" name="coveringLetterToDate"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invitationLetterCheck"
                                        name="invitationLetterCheck">
                                    <label class="form-check-label" for="invitationLetterCheck">Invitation
                                        Letter</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="invitationLetterFromDate">Invitation Letter
                                            From Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="invitationLetterFromDate" name="invitationLetterFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="invitationLetterToDate">Invitation Letter
                                            To Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="invitationLetterToDate" name="invitationLetterToDate"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="personalBankStatementCheck" name="personalBankStatementCheck">
                                    <label class="form-check-label" for="personalBankStatementCheck">Personal Bank
                                        Statement</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="personalBankStatementDate">Personal Bank
                                            Statement Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="personalBankStatementDate" name="personalBankStatementDate"
                                            placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="personalITReturnsCheck"
                                        name="personalITReturnsCheck">
                                    <label class="form-check-label" for="personalITReturnsCheck">Personal IT
                                        Returns</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="personalITReturnsDate">Personal IT Returns
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="personalITReturnsDate" name="personalITReturnsDate"
                                            placeholder="Enter Date">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="companyBankStatementCheck" name="companyBankStatementCheck">
                                    <label class="form-check-label" for="companyBankStatementCheck">Company Bank
                                        Statement</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="companyBankStatementDate">Company Bank
                                            Statement Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="companyBankStatementDate" name="companyBankStatementDate"
                                            placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="companyITReturnsCheck"
                                        name="companyITReturnsCheck">
                                    <label class="form-check-label" for="companyITReturnsCheck">Company IT
                                        Returns</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="companyITReturnsDate">Company IT Returns
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="companyITReturnsDate" name="companyITReturnsDate"
                                            placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="payslipCheck"
                                        name="payslipCheck">
                                    <label class="form-check-label" for="payslipCheck">Payslip</label>
                                    <div class="hidden">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payslipOption"
                                                id="payslipEmployee" value="Employee">
                                            <label class="form-check-label"
                                                for="payslipEmployee">Payslip[Employee]</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payslipOption"
                                                id="payslipDirector" value="Director">
                                            <label class="form-check-label" for="payslipDirector">Incorporation
                                                Certificate[Director]</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="ticketReservationCheck"
                                        name="ticketReservationCheck">
                                    <label class="form-check-label" for="ticketReservationCheck">Ticket
                                        Reservation</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="ticketReservationFromDate">Ticket
                                            Reservation From Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="ticketReservationFromDate" name="ticketReservationFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="ticketReservationToDate">Ticket Reservation
                                            To Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="ticketReservationToDate" name="ticketReservationToDate"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="insuranceForTravelCheck" name="insuranceForTravelCheck">
                                    <label class="form-check-label" for="insuranceForTravelCheck">Insurance for
                                        Travel</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="insuranceForTravelFromDate">Insurance for
                                            Travel From Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="insuranceForTravelFromDate" name="insuranceForTravelFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="insuranceForTravelToDate">Insurance for
                                            Travel To Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="insuranceForTravelToDate" name="insuranceForTravelToDate"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="hotelBookingCheck"
                                        name="hotelBookingCheck">
                                    <label class="form-check-label" for="hotelBookingCheck">Hotel Booking</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="hotelBookingFromDate">Hotel Booking From
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="hotelBookingFromDate" name="hotelBookingFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="hotelBookingToDate">Hotel Booking To
                                            Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="hotelBookingToDate" name="hotelBookingToDate"
                                            placeholder="Enter To Date">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="yellowFeverCardCheck"
                                        name="yellowFeverCardCheck">
                                    <label class="form-check-label" for="yellowFeverCardCheck">Yellow Fever Card</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="chamberOfCommerceCheck"
                                        name="chamberOfCommerceCheck">
                                    <label class="form-check-label" for="chamberOfCommerceCheck">Chamber of
                                        Commerce</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="forexReceiptCheck"
                                        name="forexReceiptCheck">
                                    <label class="form-check-label" for="forexReceiptCheck">Forex Receipt / Credit
                                        Copy</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="ddCheck"
                                        name="ddCheck">
                                    <label class="form-check-label" for="ddCheck">DD</label>
                                    <div class="hidden">
                                        <label class="form-check-label" for="ddDate">DD Date:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2 datepicker"
                                            id="ddDate" name="ddDate" placeholder="Enter Date">
                                        <label class="form-check-label" for="ddNumber">Number:</label>
                                        <input type="text"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
                                            id="ddNumber" name="ddNumber" placeholder="Enter Number">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="addressProofCheck"
                                        name="addressProofCheck">
                                    <label class="form-check-label" for="addressProofCheck">Address Proof</label>
                                </div>
                            </div> -->

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
