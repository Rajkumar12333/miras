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
                <form method="POST" action="{{ route('applicant.store') }}">
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
                                <input type="text" class="form-control" id="applicantName" name="applicant_name"
                                    placeholder="Applicant Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passportNumber">Passport No / Old Passport No</label>
                                <input type="text" class="form-control" id="passportNumber" name="passport_number"
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
                                <input type="text" class="form-control" id="employeeNumber" name="employee_number"
                                    placeholder="Employee No">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="taVaNumber">T.A/V.A No</label>
                                <input type="text" class="form-control" id="taVaNumber" name="ta_va_number"
                                    placeholder="T.A/V.A No">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agentName">Agent Name</label>
                                <select id="agentName" class="form-control" name="agent_name">
                                    <option value="90" selected=""> ACIRA - BLR </option>
                                    <option value="94"> GLOBE - MLR </option>
                                    <option value="52"> KESARI - BLR </option>
                                    <option value="63"> MATHA AIR - BLR </option>
                                    <option value="55"> MAYUR WORLD </option>
                                    <option value="96"> RAJVIHA </option>
                                    <option value="69"> SEARS </option>
                                    <option value="48"> SIMRAN </option>
                                    <option value="486"> The Dreams Navigator</option>
                                    <option value="284">Ace Travels-Mumbai</option>
                                    <option value="437">Adhvaga Holidays Inc</option>
                                    <option value="225">ADITYA TRAVEL LINES - BLR</option>
                                    <option value="295">AEROJET</option>
                                    <option value="169">AIRWING </option>
                                    <option value="223">AKBAR - MLR</option>
                                    <option value="461">AKBAR - MUMBAI</option>
                                    <option value="30">AKBAR-BLR</option>
                                    <option value="32">ALL ABOUT-BLR</option>
                                    <option value="364">ALLWIN TOURS AND TRAVELS</option>
                                    <option value="50">ALPHA - BLR </option>
                                    <option value="472">ANARA Travel</option>
                                    <option value="211">APPLIED MATERIALS</option>
                                    <option value="463">ARIUS HOLIDAYS AND TRAVELS</option>
                                    <option value="352">AROUND WORLD HOLIDAYS</option>
                                    <option value="470">ARROWSOFT TRAVEL LINES</option>
                                    <option value="496">ASD</option>
                                    <option value="166">ATHITHI TRAVELS</option>
                                    <option value="191">ATLURI </option>
                                    <option value="469">ATWELL TRAVEL SERVICES PVT LTD</option>
                                    <option value="259">BALMER LAWRIE-BANGALORE</option>
                                    <option value="300">BALMER LAWRIE-HYDERABAD</option>
                                    <option value="228">BCD HYDERABAD</option>
                                    <option value="11">BCD Travels Bangalore</option>
                                    <option value="432">BCD-MUMBAI</option>
                                    <option value="10">BCD-SCHNEIDER</option>
                                    <option value="406">BEATRIX-BLR </option>
                                    <option value="29">BELEAST-BLR</option>
                                    <option value="296">BENZ</option>
                                    <option value="483">BERRY JOURNEYS</option>
                                    <option value="357">BIRDS VACATIONSS</option>
                                    <option value="168">BON VOYAGE</option>
                                    <option value="401">BULK LIQUID</option>
                                    <option value="9">Carlson Wagonwlit Travels Bangalore</option>
                                    <option value="15">Carlson Wagonwlit Travels Hydrabad</option>
                                    <option value="226">CEEBAN TRAVELS</option>
                                    <option value="100">CISCO-BLR</option>
                                    <option value="441">COMPANY TRAVEL-BLR</option>
                                    <option value="384">CONCENTRIX DAKSH </option>
                                    <option value="104">CONQUER-BLR</option>
                                    <option value="294">CONTINENTAL</option>
                                    <option value="292">CORPORATE TRAVELS</option>
                                    <option value="494">CRIMSON HOLIDAYS LLP</option>
                                    <option value="112">CRYSTAL HOLIDAY-BLR</option>
                                    <option value="462">DE TRAVELLER.COM</option>
                                    <option value="273">DEEPU TRAVELS</option>
                                    <option value="331">DENTSU COMMUNICATIONS PVT.LTD</option>
                                    <option value="489">DOCTOR PACK INDIA PRIVATE LIMITED</option>
                                    <option value="345">DOVE TRAVELS WORLDWIDE</option>
                                    <option value="443">DREAMSCAPETOURS</option>
                                    <option value="45">EARTHWALK YATRAS</option>
                                    <option value="488">ECLAT TOURS AND TRAVELS</option>
                                    <option value="445">ETHEREAL MACHINES PVT LTD</option>
                                    <option value="355">FANTASY AIR TRAVELS</option>
                                    <option value="381">FANTASYA TOURS &amp;TRAVELS</option>
                                    <option value="107">FLORA MLR</option>
                                    <option value="447">FLY MERIDIAN</option>
                                    <option value="466">FLYNN THOMAS (TOOR SEEKERS)</option>
                                    <option value="467">FLYNN THOMAS (TOOR SEEKERS)</option>
                                    <option value="130">FORTUNE-BLR</option>
                                    <option value="409">FREEDOM HOLIDAYS</option>
                                    <option value="490">FUELIFE EXPLORERS</option>
                                    <option value="216">GILPIN TRAVELS-</option>
                                    <option value="422">Girikand Travels</option>
                                    <option value="290">GITANJALI TRAVLES</option>
                                    <option value="476">GO SMILED TRAVEL</option>
                                    <option value="293">Hexad Infosoft-BLR</option>
                                    <option value="264">HITESH HOLIDAYS</option>
                                    <option value="468">HMA TRAVEL</option>
                                    <option value="260">HOLIDAY COMPANION</option>
                                    <option value="279">Hyades Tours</option>
                                    <option value="120">I-TRIP HOLIDAYS-BLR</option>
                                    <option value="421">IN ORBIT TOURS</option>
                                    <option value="349">INDUS TRAVELLER BLR</option>
                                    <option value="231">INNOVATIVE TOURS AND TRAVELS</option>
                                    <option value="363">INSUMUST.COM</option>
                                    <option value="341">INTIME TEC</option>
                                    <option value="386">ITL TOURS AND TRAVELS</option>
                                    <option value="217">J.V TRAVEL</option>
                                    <option value="314">JAI HOLIDAYS</option>
                                    <option value="181">JAY GROUPS</option>
                                    <option value="479">JCARE TOURS &amp; TRAVEL</option>
                                    <option value="232">JOHNSON-BLR</option>
                                    <option value="99">KEANE-BLR</option>
                                    <option value="215">KELTECH-BLR</option>
                                    <option value="487">KERALA TRAVELS CHENNAI</option>
                                    <option value="23">KESARI HYDRABAD</option>
                                    <option value="198">KINGSWAY-BLR</option>
                                    <option value="33">KISHORE SIR</option>
                                    <option value="407">KUONI TRAVELS - HYD</option>
                                    <option value="420">KUONI-TVS MOTOR</option>
                                    <option value="213">LEPASSAGE</option>
                                    <option value="387">LIFERAY</option>
                                    <option value="340">MAGELLAN</option>
                                    <option value="208">MANIPAL TRAVELS </option>
                                    <option value="148">MCAFEE BANGALORE</option>
                                    <option value="214">MCKINSEY</option>
                                    <option value="390">Mico Bosch - Personal</option>
                                    <option value="255">MICO BOSCH-BLR</option>
                                    <option value="220">MICROSOFT</option>
                                    <option value="371">MINE TRAVELS</option>
                                    <option value="444">MIRAS-CHENNAI</option>
                                    <option value="416">MORGAN</option>
                                    <option value="164">MSD CHENNAI</option>
                                    <option value="262">MSTAR TOURS AND MORES</option>
                                    <option value="471">MY TRAVEL MAP</option>
                                    <option value="347">MY TRAVEL NEST</option>
                                    <option value="286">NEW AIRWING -BELGAUM</option>
                                    <option value="455">NEW FLY WING TOURS &amp; TRAVELS</option>
                                    <option value="205">NN TRAVEL-BLR</option>
                                    <option value="235">NORTH STAR-BLR</option>
                                    <option value="438">OASIS-BLR</option>
                                    <option value="429">OCEANUS HOLIDAYS PVT LTD</option>
                                    <option value="272">PATILS- ALPHA-BLR</option>
                                    <option value="298">Pegasus- Adyar</option>
                                    <option value="219">PEGASUS-EGMORE</option>
                                    <option value="102">PERFECT GETAWAYS-BLR</option>
                                    <option value="394">PHASE 1 - BLR</option>
                                    <option value="281">PREM TRAVEL &amp; TOURS</option>
                                    <option value="475">PREMIA TRAVELS</option>
                                    <option value="297">PRIME INDIA COCHIN TOURS AND TRAVELS</option>
                                    <option value="465">PRIYADARSHINI AIR WINGS PVT LTD</option>
                                    <option value="353">Pro tours and travels</option>
                                    <option value="423">RAASTA HOLIDAYS</option>
                                    <option value="440">reedmackay</option>
                                    <option value="392">ROBERT BOSCH - BEL</option>
                                    <option value="393">ROBERT BOSCH - BMH</option>
                                    <option value="391">ROBERT BOSCH - EC</option>
                                    <option value="396">ROBERT BOSCH - LONG TERM</option>
                                    <option value="400">ROBERT BOSCH - PRE APPROVAL</option>
                                    <option value="256">ROBERT BOSCH- KOR</option>
                                    <option value="21">ROBERT BOSCH-COIMBATORE</option>
                                    <option value="278">ROBERT BOSCH-PERSONAL</option>
                                    <option value="408">ROHAN ENTERPRISES</option>
                                    <option value="442">ROOPA-BLR</option>
                                    <option value="243">ROSY MICROSOFT</option>
                                    <option value="453">ROUND THE WORLD TRAVEL &amp; TOURS</option>
                                    <option value="288">S V TRAVELITE</option>
                                    <option value="343">SAFIYA TRAVELS </option>
                                    <option value="454">SAMEERA-HYD</option>
                                    <option value="473">SANNCIA HOLIDAY</option>
                                    <option value="201">SATELLITE TRAVELS -BLR</option>
                                    <option value="435">Sathianathan</option>
                                    <option value="190">SB INNTEL-BLR</option>
                                    <option value="485">SEG AUTOMOTIVE INDIA PVT LTD</option>
                                    <option value="433">SELFI TRIP</option>
                                    <option value="41">SHALOM-BLR</option>
                                    <option value="460">SHANKAR - TOT</option>
                                    <option value="183">SHREE AMARAGIRI TRAVEL POINT</option>
                                    <option value="380">SIGMA </option>
                                    <option value="474">SIGNATURE TRAVEL</option>
                                    <option value="404">SILICAN FOREX &amp; TRAVELS</option>
                                    <option value="446">SKYLINES TOURS &amp; TRAVELS</option>
                                    <option value="360">Smart Travel Solutions</option>
                                    <option value="42">SNEHA-BLR</option>
                                    <option value="398">SPICETRIP</option>
                                    <option value="25">SRI SAI HYDRABAD</option>
                                    <option value="230">ST MICRO ELECTRONICS</option>
                                    <option value="425">SUN TOURISM INTERNATIONAL</option>
                                    <option value="234">T C TRAVELS</option>
                                    <option value="108">Taffles</option>
                                    <option value="411">TAKE A BREAK</option>
                                    <option value="495">Test</option>
                                    <option value="448">THE HOLIDAY PLANNERS</option>
                                    <option value="348">TOGETHER TOURISM</option>
                                    <option value="239">TOT-MYSORE</option>
                                    <option value="464">TOURTIME</option>
                                    <option value="110">TRANSITY-BLR</option>
                                    <option value="106">TRAVEL GLOBE-BLR</option>
                                    <option value="258">TRAVEL 4 SEASONS</option>
                                    <option value="187">TRAVEL AIR- BLR</option>
                                    <option value="417">TRAVEL ARCADE-BLR</option>
                                    <option value="369">Travel Castle </option>
                                    <option value="241">TRAVEL CO-ORDINATOR</option>
                                    <option value="402">TRAVEL CROFT / POSHMILES</option>
                                    <option value="246">TRAVEL DOOR</option>
                                    <option value="196">TRAVEL EXPLORE-BLR</option>
                                    <option value="413">TRAVEL ITCH</option>
                                    <option value="449">TRAVEL LOKA</option>
                                    <option value="431">TRAVEL MANAGER HOLIDAYS PVT LTD</option>
                                    <option value="359">TRAVEL MASTERS</option>
                                    <option value="338">TRAVEL N LEISURE</option>
                                    <option value="265">TRAVEL NEXT- MYSORE</option>
                                    <option value="212">TRAVEL POOL</option>
                                    <option value="282">TRAVEL SMART-HYDERABAD</option>
                                    <option value="456">TRAVEL VISA EXPERTS-BLR</option>
                                    <option value="31">TRAVELLERS-CHOICE-BLR</option>
                                    <option value="242">TRAWELL ME TRAVELS</option>
                                    <option value="339">TRIP TOE TRAVELS</option>
                                    <option value="450">TRIPEUR</option>
                                    <option value="43">TRIWAY </option>
                                    <option value="207">TRMN </option>
                                    <option value="115">TYCOON</option>
                                    <option value="233">UAE XCHANGE BLR</option>
                                    <option value="358">UNIGLOBE</option>
                                    <option value="372">UNIQ TRAVELLER</option>
                                    <option value="37">UNITED TRAVELS TRIVANDRUM</option>
                                    <option value="27">UNITEDTRAVELSERVICES</option>
                                    <option value="254">UVS-ACE TRAVELS</option>
                                    <option value="250">UVS-Balaji</option>
                                    <option value="252">UVS-HiAce</option>
                                    <option value="253">UVS-Jetsave</option>
                                    <option value="251">UVS-Murugan</option>
                                    <option value="249">UVS-trvelpoint</option>
                                    <option value="193">VACATIONAL HOLIDAYS</option>
                                    <option value="299">Vaishnavi Travels</option>
                                    <option value="285">VALSPAR</option>
                                    <option value="218">VASWANI-BLR</option>
                                    <option value="457">VEGAA VACATIONS PVT LTD </option>
                                    <option value="301">VIA.COM</option>
                                    <option value="172">VICEREGAL TRAVELS</option>
                                    <option value="89">VISA CONSULTANCY - MUM </option>
                                    <option value="354">VOYAGE WORLD</option>
                                    <option value="410">VRUDDHI TRAVELS</option>
                                    <option value="195">VS TRAVELS-BLR</option>
                                    <option value="188">WALK IN CLIENT - BLR</option>
                                    <option value="452">WHATFIX</option>
                                    <option value="436">WHITEFIELD HOLIDAYS</option>
                                    <option value="383">WINDSTAR HOLIDAYS</option>
                                    <option value="451">WORLD VISION HOLIDAYS</option>
                                    <option value="366">zAMEX HCL</option>
                                    <option value="16">ZBALMER LAWRIE CHENNAI </option>
                                    <option value="14">ZBCD CHENNAI </option>
                                    <option value="167">ZBCD TRIVANDRUM</option>
                                    <option value="13">ZCarlson Wagonwlit Travels Chennai</option>
                                    <option value="176">ZCOLORFUL VACATION</option>
                                    <option value="44">ZCOMFORT LEISURE</option>
                                    <option value="170">ZDECCAN HOLIDAYS - BLR</option>
                                    <option value="158">ZFORD CHENNAI</option>
                                    <option value="133">ZFRONTIER HOLIDAYS</option>
                                    <option value="131">ZGLOBE FOREX-BLR</option>
                                    <option value="117">ZHOLIDAY DREAMS</option>
                                    <option value="182">ZINDIA AND WORLD</option>
                                    <option value="186">ZION-BLR</option>
                                    <option value="132">ZJETSAVE DELHI GE ACCOUNT</option>
                                    <option value="34">ZKEANECHENNAI</option>
                                    <option value="162">ZKPMG CHENNAI</option>
                                    <option value="160">ZNOKIA CHENNAI</option>
                                    <option value="180">ZTRAVEL FRIEND -BLR</option>
                                    <option value="171">ZTRAVEL SERVICES</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="tpFormUpload">Upload TP Form</label>
                                <input class="form-control" type="file" id="tpFormUpload" name="tp_form_upload">
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
                                <input type="date" class="form-control" id="dob" name="dob">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="location">Location</label>
                                <select id="location" class="form-control" name="location">
                                    <option value="">Select Location </option>
                                    <option value="1"> Bangalore </option>
                                    <option value="2"> Chennai </option>
                                    <option value="3"> Delhi </option>
                                    <option value="5"> Hyderabad </option>
                                    <option value="4"> Mumbai </option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="companyName">Company Name</label>
                                <input type="text" class="form-control" id="companyName" name="company_name"
                                    placeholder="Company Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <select id="country" class="form-control" name="country">
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
                            </div>
                            <div class="form-group col-md-4">
                                <label for="appointmentDate">Appointment Date</label>
                                <input type="date" class="form-control" id="appointmentDate" name="appointment_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="category">Category</label>
                                <select id="category" class="form-control" name="category">
                                    <option value="Attestation">Attestation</option>
                                    <option value="Business">Business</option>
                                    <option value="DEP Work">DEP Work</option>
                                    <option value="Dependent">Dependent</option>
                                    <option value="Joining Vessel">Joining Vessel</option>
                                    <option value="Migration">Migration</option>
                                    <option value="Non - Immigrant">Non - Immigrant</option>
                                    <option value="Official">Official</option>
                                    <option value="PPT Renewal">PPT Renewal</option>
                                    <option value="Recommendation">Recommendation</option>
                                    <option value="Refund">Refund</option>
                                    <option value="Religious">Religious</option>
                                    <option value="RET. Resident">RET. Resident</option>
                                    <option value="S.T. Work">S.T. Work</option>
                                    <option value="S.T.R">S.T.R</option>
                                    <option value="Sea Man">Sea Man</option>
                                    <option value="Social">Social</option>
                                    <option value="Student">Student</option>
                                    <option value="Super Numerary">Super Numerary</option>
                                    <option value="Tourist">Tourist</option>
                                    <option value="Transit">Transit</option>
                                    <option value="Visit">Visit</option>
                                    <option value="Work">Work</option>
                                    <option value="Visa cancellation">Visa cancellation</option>
                                    <option value="Visa correction">Visa correction</option>
                                    <option value="Pre-Approval">Pre-Approval</option>
                                    <option value="Visa fees ">Visa fees </option>
                                    <option value="Invoice ">Invoice </option>
                                    <option value="Appointment">Appointment</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="recDate">RecDate</label>
                                <input type="date" class="form-control" id="recDate" name="rec_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="subDate">SubDate</label>
                                <input type="date" class="form-control" id="subDate" name="sub_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="collDate">CollDate</label>
                                <input type="date" class="form-control" id="collDate" name="coll_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sentDate">SentDate</label>
                                <input type="date" class="form-control" id="sentDate" name="sent_date">
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
                                <input type="text" class="form-control" id="mobileNumber" name="mobile_number"
                                    placeholder="Mobile Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status">
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
                                <select id="Outstation" class="form-control" name="Outstation">
                                    <option value="0" selected="">Nill</option>
                                    <option value="435">Sathianathan</option>
                                    <option value="482">Linde South Asia India Pvt Ltd</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">Documents</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="passportCheck"
                                        name="passportCheck">
                                    <label class="form-check-label" for="passportCheck">Passport</label>
                                    <input type="date"
                                        class="form-control border border-gray-300 rounded p-2 w-full my-2 hidden"
                                        id="passportInput" name="passportInput" placeholder="Enter Passport Details">
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
                                            id="coveringLetterFromDate" name="coveringLetterFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="coveringLetterToDate">Cover Letter To
                                            Date:</label>
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
                                            id="invitationLetterFromDate" name="invitationLetterFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="invitationLetterToDate">Invitation Letter
                                            To Date:</label>
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
                                            id="ticketReservationFromDate" name="ticketReservationFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="ticketReservationToDate">Ticket Reservation
                                            To Date:</label>
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
                                            id="insuranceForTravelFromDate" name="insuranceForTravelFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="insuranceForTravelToDate">Insurance for
                                            Travel To Date:</label>
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
                                            id="hotelBookingFromDate" name="hotelBookingFromDate"
                                            placeholder="Enter From Date">
                                        <label class="form-check-label" for="hotelBookingToDate">Hotel Booking To
                                            Date:</label>
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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
                                        <input type="date"
                                            class="form-control border border-gray-300 rounded p-2 w-full my-2"
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

                                <div class="form-group col-md-6">
                                    <label for="remarks">Remarks</label>
                                    <textarea class="form-control" name="remarks" id="remarks" rows="3"
                                        placeholder="Remarks"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="internal-remarks">Internal Remarks</label>
                                    <textarea class="form-control" name="internal-remarks" id="internal-remarks"
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
                            <button type="submit" class="btn btn-primary">Sign in</button>
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
    document.getElementById('inputState').addEventListener('change', function () {
        const count = this.value;
        const dynamicFields = document.getElementById('dynamicFields');
        dynamicFields.innerHTML = ''; // Clear previous fields

        for (let i = 0; i < count; i++) {
            const fieldSet = document.createElement('div');
            fieldSet.className = 'form-row';

            const nameDiv = document.createElement('div');
            nameDiv.className = 'form-group col-md-12 mx-2 px-2';
            const nameLabel = document.createElement('label');
            nameLabel.className = 'block text-gray-700';
            nameLabel.textContent = `Applicant Name ${i + 1}`;
            const nameInput = document.createElement('input');
            nameInput.type = 'text';
            nameInput.className = 'form-control border border-gray-300 rounded p-2 w-full';
            nameInput.placeholder = `Applicant Name ${i + 1}`;
            nameDiv.appendChild(nameLabel);
            nameDiv.appendChild(nameInput);

            const passportDiv = document.createElement('div');
            passportDiv.className = 'form-group col-md-12 mx-2 px-2';
            const passportLabel = document.createElement('label');
            passportLabel.className = 'block text-gray-700';
            passportLabel.textContent = `Passport No / Old Passport No ${i + 1}`;
            const passportInput = document.createElement('input');
            passportInput.type = 'text';
            passportInput.className = 'form-control border border-gray-300 rounded p-2 w-full';
            passportInput.placeholder = `Passport No ${i + 1}`;
            passportDiv.appendChild(passportLabel);
            passportDiv.appendChild(passportInput);

            fieldSet.appendChild(nameDiv);
            fieldSet.appendChild(passportDiv);
            dynamicFields.appendChild(fieldSet);
        }
    });

</script>
@endsection
