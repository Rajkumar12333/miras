@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Add visa</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Visa</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="{{ route('visa_form') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Visa List</a>
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
                                <label for="employeeNumber">Country:</label>
                                <select id="country" class="form-control" name="country" class="mail-inp">
                                    <option value=""> Select Country </option>
                                    <option value="Afghanistan"> Afghanistan </option>
                                    <option value="Albania"> Albania </option>
                                    <option value="Algeria"> Algeria </option>
                                    <option value="Andorra"> Andorra </option>
                                    <option value="Angola"> Angola </option>
                                    <option value="Anguilla"> Anguilla </option>
                                    <option value="Antigua &amp; Barbuda"> Antigua &amp; Barbuda </option>
                                    <option value="Argentina"> Argentina </option>
                                    <option value="Armenia"> Armenia </option>
                                    <option value="Aruba"> Aruba </option>
                                    <option value="Australia"> Australia </option>
                                    <option value="Austria"> Austria </option>
                                    <option value="Azerbaijan"> Azerbaijan </option>
                                    <option value="Bahamas"> Bahamas </option>
                                    <option value="Bahrain"> Bahrain </option>
                                    <option value="Bangladesh"> Bangladesh </option>
                                    <option value="Barbados"> Barbados </option>
                                    <option value="Belarus"> Belarus </option>
                                    <option value="Belgium"> Belgium </option>
                                    <option value="Belize"> Belize </option>
                                    <option value="Benin"> Benin </option>
                                    <option value="Bermuda"> Bermuda </option>
                                    <option value="Bhutan"> Bhutan </option>
                                    <option value="Bolivia"> Bolivia </option>
                                    <option value="Bosnia Herzegovina"> Bosnia Herzegovina </option>
                                    <option value="Botswana"> Botswana </option>
                                    <option value="Brazil"> Brazil </option>
                                    <option value="Brunei Darussalam"> Brunei Darussalam </option>
                                    <option value="Bulgaria"> Bulgaria </option>
                                    <option value="Burkina Faso"> Burkina Faso </option>
                                    <option value="Burundi"> Burundi </option>
                                    <option value="Cambodia"> Cambodia </option>
                                    <option value="Cameroon"> Cameroon </option>
                                    <option value="Canada"> Canada </option>
                                    <option value="Cape Verde Islands"> Cape Verde Islands </option>
                                    <option value="Cayman Islands"> Cayman Islands </option>
                                    <option value="Central African Republic"> Central African Republic </option>
                                    <option value="Chad"> Chad </option>
                                    <option value="Chile"> Chile </option>
                                    <option value="China"> China </option>
                                    <option value="Chinese Taipei"> Chinese Taipei </option>
                                    <option value="Christmas Island"> Christmas Island </option>
                                    <option value="Colombia"> Colombia </option>
                                    <option value="Comoros"> Comoros </option>
                                    <option value="Conch Republic"> Conch Republic </option>
                                    <option value="Congo"> Congo </option>
                                    <option value="Cook Islands"> Cook Islands </option>
                                    <option value="Costa Rica"> Costa Rica </option>
                                    <option value="C?te d'Ivoire"> C?te d'Ivoire </option>
                                    <option value="Croatia"> Croatia </option>
                                    <option value="Cuba"> Cuba </option>
                                    <option value="Cyprus"> Cyprus </option>
                                    <option value="Czech"> Czech </option>
                                    <option value="Denmark"> Denmark </option>
                                    <option value="Djibouti"> Djibouti </option>
                                    <option value="Dominica Commowealth"> Dominica Commowealth </option>
                                    <option value="Dominican Republic"> Dominican Republic </option>
                                    <option value="East Timor"> East Timor </option>
                                    <option value="Ecuador"> Ecuador </option>
                                    <option value="Egypt"> Egypt </option>
                                    <option value="El Salvador"> El Salvador </option>
                                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                    <option value="Eritrea"> Eritrea </option>
                                    <option value="Estonia"> Estonia </option>
                                    <option value="Ethiopia"> Ethiopia </option>
                                    <option value="Falkland Islands"> Falkland Islands </option>
                                    <option value="Fiji"> Fiji </option>
                                    <option value="Finland"> Finland </option>
                                    <option value="France"> France </option>
                                    <option value="French Guiana"> French Guiana </option>
                                    <option value="French Polynesia"> French Polynesia </option>
                                    <option value="French West Indies"> French West Indies </option>
                                    <option value="Fyrom"> Fyrom </option>
                                    <option value="Gabon"> Gabon </option>
                                    <option value="Gambia"> Gambia </option>
                                    <option value="Georgia"> Georgia </option>
                                    <option value="Germany"> Germany </option>
                                    <option value="Ghana"> Ghana </option>
                                    <option value="Gibraltar"> Gibraltar </option>
                                    <option value="Greece"> Greece </option>
                                    <option value="Grenada"> Grenada </option>
                                    <option value="Guadeloupe (French)"> Guadeloupe (French) </option>
                                    <option value="Guam"> Guam </option>
                                    <option value="Guatemala"> Guatemala </option>
                                    <option value="Guinea"> Guinea </option>
                                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                    <option value="Guyana"> Guyana </option>
                                    <option value="Haiti"> Haiti </option>
                                    <option value="Hawaiian Islands"> Hawaiian Islands </option>
                                    <option value="Holy See"> Holy See </option>
                                    <option value="Honduras"> Honduras </option>
                                    <option value="Hong Kong"> Hong Kong </option>
                                    <option value="Hungary"> Hungary </option>
                                    <option value="Iceland"> Iceland </option>
                                    <option value="India"> India </option>
                                    <option value="Indonesia"> Indonesia </option>
                                    <option value="Iran"> Iran </option>
                                    <option value="Iraq"> Iraq </option>
                                    <option value="Ireland"> Ireland </option>
                                    <option value="Israel"> Israel </option>
                                    <option value="Italy"> Italy </option>
                                    <option value="Ivory Coast"> Ivory Coast </option>
                                    <option value="Jamaica"> Jamaica </option>
                                    <option value="Japan"> Japan </option>
                                    <option value="Johnston Islands"> Johnston Islands </option>
                                    <option value="Jordan"> Jordan </option>
                                    <option value="Kazakstan"> Kazakstan </option>
                                    <option value="Kenya"> Kenya </option>
                                    <option value="Kiribati"> Kiribati </option>
                                    <option value="Korea - D.P.R (N/Korea)"> Korea - D.P.R (N/Korea) </option>
                                    <option value="Korea - Rep. Of (S/Korea)"> Korea - Rep. Of (S/Korea) </option>
                                    <option value="Kuwait"> Kuwait </option>
                                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                    <option value="Laos"> Laos </option>
                                    <option value="Latvia"> Latvia </option>
                                    <option value="Lebanon"> Lebanon </option>
                                    <option value="Leeward Islands"> Leeward Islands </option>
                                    <option value="Lesotho"> Lesotho </option>
                                    <option value="Liberia"> Liberia </option>
                                    <option value="Libya"> Libya </option>
                                    <option value="Liechtenstein"> Liechtenstein </option>
                                    <option value="Lithuania"> Lithuania </option>
                                    <option value="Luxembourg"> Luxembourg </option>
                                    <option value="Macau"> Macau </option>
                                    <option value="Madagascar"> Madagascar </option>
                                    <option value="Malawi"> Malawi </option>
                                    <option value="Malaysia"> Malaysia </option>
                                    <option value="Maldives"> Maldives </option>
                                    <option value="Mali"> Mali </option>
                                    <option value="Malta"> Malta </option>
                                    <option value="Mariana Islands"> Mariana Islands </option>
                                    <option value="Marshall Islands"> Marshall Islands </option>
                                    <option value="Martinique"> Martinique </option>
                                    <option value="Mauritania"> Mauritania </option>
                                    <option value="Mauritius"> Mauritius </option>
                                    <option value="Mayotte"> Mayotte </option>
                                    <option value="Mexico"> Mexico </option>
                                    <option value="Micronesia"> Micronesia </option>
                                    <option value="Moldova"> Moldova </option>
                                    <option value="Monaco"> Monaco </option>
                                    <option value="Mongolia"> Mongolia </option>
                                    <option value="Montserrat"> Montserrat </option>
                                    <option value="Morocco"> Morocco </option>
                                    <option value="Mozambique"> Mozambique </option>
                                    <option value="Myanmar"> Myanmar </option>
                                    <option value="Namibia"> Namibia </option>
                                    <option value="Nauru"> Nauru </option>
                                    <option value="Nepal"> Nepal </option>
                                    <option value="Netherlands"> Netherlands </option>
                                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                    <option value="New Caledonia"> New Caledonia </option>
                                    <option value="Newzealand"> Newzealand </option>
                                    <option value="Nicaragua"> Nicaragua </option>
                                    <option value="Niger"> Niger </option>
                                    <option value="Nigeria"> Nigeria </option>
                                    <option value="Niue"> Niue </option>
                                    <option value="Norfolk Islands"> Norfolk Islands </option>
                                    <option value="Norway"> Norway </option>
                                    <option value="Notary"> Notary </option>
                                    <option value="Oman"> Oman </option>
                                    <option value="Pakistan"> Pakistan </option>
                                    <option value="Palau Islands"> Palau Islands </option>
                                    <option value="Palestine"> Palestine </option>
                                    <option value="Panama"> Panama </option>
                                    <option value="Papua New Guinea"> Papua New Guinea </option>
                                    <option value="Paraguay"> Paraguay </option>
                                    <option value="Peru"> Peru </option>
                                    <option value="Philippines"> Philippines </option>
                                    <option value="Pitcairn Island"> Pitcairn Island </option>
                                    <option value="Poland"> Poland </option>
                                    <option value="Portugal"> Portugal </option>
                                    <option value="Puerto Rico"> Puerto Rico </option>
                                    <option value="Qatar"> Qatar </option>
                                    <option value="Reunion"> Reunion </option>
                                    <option value="Romania"> Romania </option>
                                    <option value="Russian Federation"> Russian Federation </option>
                                    <option value="Rwanda"> Rwanda </option>
                                    <option value="Saint Helena"> Saint Helena </option>
                                    <option value="Saint Pierre And Miquelon"> Saint Pierre And Miquelon </option>
                                    <option value="Samoa - American"> Samoa - American </option>
                                    <option value="Samoa - Western"> Samoa - Western </option>
                                    <option value="San Marino"> San Marino </option>
                                    <option value="Sao Tome &amp; Principe"> Sao Tome &amp; Principe </option>
                                    <option value="Saudi Arabia"> Saudi Arabia </option>
                                    <option value="Senegal"> Senegal </option>
                                    <option value="Serbia And Montenegro"> Serbia And Montenegro </option>
                                    <option value="Seychelles"> Seychelles </option>
                                    <option value="Sierra Leone"> Sierra Leone </option>
                                    <option value="Singapore"> Singapore </option>
                                    <option value="Slovakia"> Slovakia </option>
                                    <option value="Slovenia"> Slovenia </option>
                                    <option value="Solomon Islands"> Solomon Islands </option>
                                    <option value="Somalia"> Somalia </option>
                                    <option value="South Africa"> South Africa </option>
                                    <option value="Spain"> Spain </option>
                                    <option value="Srilanka"> Srilanka </option>
                                    <option value="St. Kitts &amp; Nevis"> St. Kitts &amp; Nevis </option>
                                    <option value="St. Lucia"> St. Lucia </option>
                                    <option value="St. Vincent / Gerandines"> St. Vincent / Gerandines </option>
                                    <option value="Sudan"> Sudan </option>
                                    <option value="Suriname"> Suriname </option>
                                    <option value="Svalbard And Jan Mayen Islands"> Svalbard And Jan Mayen Islands
                                    </option>
                                    <option value="Swains Islands"> Swains Islands </option>
                                    <option value="Swaziland"> Swaziland </option>
                                    <option value="Sweden"> Sweden </option>
                                    <option value="Switzerland"> Switzerland </option>
                                    <option value="Syria"> Syria </option>
                                    <option value="Taiwan"> Taiwan </option>
                                    <option value="Tajikistan"> Tajikistan </option>
                                    <option value="Tanzania"> Tanzania </option>
                                    <option value="Thailand"> Thailand </option>
                                    <option value="Togo"> Togo </option>
                                    <option value="Tokelau"> Tokelau </option>
                                    <option value="Tongo"> Tongo </option>
                                    <option value="Transkei"> Transkei </option>
                                    <option value="Trinidad &amp; Tobago"> Trinidad &amp; Tobago </option>
                                    <option value="Tunisia"> Tunisia </option>
                                    <option value="Turkey"> Turkey </option>
                                    <option value="Turkmenistan"> Turkmenistan </option>
                                    <option value="Turks &amp; Caicos Islands"> Turks &amp; Caicos Islands </option>
                                    <option value="Tuvalu"> Tuvalu </option>
                                    <option value="Uganda"> Uganda </option>
                                    <option value="Ukraine"> Ukraine </option>
                                    <option value="United Arab Emirates"> United Arab Emirates </option>
                                    <option value="United Kingdom"> United Kingdom </option>
                                    <option value="Uruguay"> Uruguay </option>
                                    <option value="United States of America"> United States of America </option>
                                    <option value="Uzbekistan"> Uzbekistan </option>
                                    <option value="Vanuatu"> Vanuatu </option>
                                    <option value="Vatican City"> Vatican City </option>
                                    <option value="Venezuela"> Venezuela </option>
                                    <option value="Vietnam"> Vietnam </option>
                                    <option value="Virgin Islands"> Virgin Islands </option>
                                    <option value="Wake Islands"> Wake Islands </option>
                                    <option value="Wallis And Futuna Islands"> Wallis And Futuna Islands </option>
                                    <option value="Winward Islands"> Winward Islands </option>
                                    <option value="Yemen"> Yemen </option>
                                    <option value="Yugoslavia"> Yugoslavia </option>
                                    <option value="Zambia"> Zambia </option>
                                    <option value="Zimbabwe"> Zimbabwe </option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="employeeNumber">Branch:	</label>
                                <select name="branchid" class="form-control" id="sel" class="box3 branchid" onchange="vf1(this)" >
		  <option selected="selected" value="">Select Branch</option>
				  <option value="1">Bangalore</option>
		 		  <option value="2">Chennai</option>
		 		  <option value="3">Delhi</option>
		 		  <option value="4">Mumbai</option>
		 		  <option value="5">Hyderabad</option>
		 		</select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="employeeNumber">Branch:	</label>
                                <select name="categoryID" class="form-control" id="sel" class="box3 categoryID" onchange="vic(this)" style="">
		<option selected="selected" value="">Select Category</option>
		  <option value="1">Attestation</option>
	  	  <option value="2">Business</option>
	  	  <option value="3">DEP Work</option>
	  	  <option value="4">Dependent</option>
	  	  <option value="5">Joining Vessel</option>
	  	  <option value="6">Migration</option>
	  	  <option value="7">Non - Immigrant</option>
	  	  <option value="8">Official</option>
	  	  <option value="9">PPT Renewal</option>
	  	  <option value="10">Recommendation</option>
	  	  <option value="11">Refund</option>
	  	  <option value="12">Religious</option>
	  	  <option value="13">RET. Resident</option>
	  	  <option value="14">S.T. Work</option>
	  	  <option value="15">S.T.R</option>
	  	  <option value="16">Sea Man</option>
	  	  <option value="17">Social</option>
	  	  <option value="18">Student</option>
	  	  <option value="19">Super Numerary</option>
	  	  <option value="20">Tourist</option>
	  	  <option value="21">Transit</option>
	  	  <option value="22">Visit</option>
	  	  <option value="23">Work</option>
	  	  <option value="24">Visa cancellation</option>
	  	  <option value="25">Visa correction</option>
	  	  <option value="26">Pre-Approval</option>
	  	  <option value="27">Visa fees </option>
	  	  <option value="28">Invoice </option>
	  	  <option value="29">Appointment</option>
	       </select>
                            </div>
                            <div class="form-group col-md-12">
                                    <label for="internal-remarks">Description</label>
                                    <textarea class="form-control" name="Description" id="Description"
                                        rows="3" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="outStationName">Active</label>
                                <select id="outStationName" class="form-control" name="outstation_name">
                                    <option selected>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="taVaNumber">File:</label>
                                <input type="file" class="form-control" id="file" name="file"
                                    placeholder="Desk Mail ID">
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
