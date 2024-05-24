@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->

<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Visa Tracking</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Visa Tracking</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <!-- <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div> -->
            <div class="widgetbar">
                <a href="{{ route('applicant.add_page') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Add Applicant</a>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
<div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
    <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
        <h4>Filter By</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img
                src="{{asset('assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close"></a>
    </div>
    <div class="infobar-settings-sidebar-body">
        <div class="custom-mode-setting">
            <form method="POST" action="">
                @csrf

                <div class="form-row p-3">

                    <div class="form-group col-md-12">
                        <label for="agentName">Agent Name</label>
                        <select name="agtid" class="form-control" onchange="t(this)">
                            <option selected="selected"></option>
                            <option value="90"> ACIRA - BLR </option>
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
                        <label for="country">Country</label>
                        <select name="countryname" class="form-control" onchange="c(this)" style="">
                            <option selected="selected"></option>

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

                            <option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands</option>

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
                    <div class="form-group col-md-12">
                        <label for="internal-remarks">Refrence Id</label>
                        <input type="text" class="form-control" id="Refrence" name="Refrence" placeholder="Refrence Id">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="internal-remarks">PassPort No</label>
                        <input type="text" class="form-control" id="PassPort" name="PassPort" placeholder="PassPort No">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="internal-remarks">Applicant Name:</label>
                        <input type="text" class="form-control" id="Applicant" name="Applicant"
                            placeholder="Applicant Name">
                    </div>
                    <div class="form-group col-md-12" style="display: flex; align-items: flex-end;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="infobar-settings-sidebar-overlay"></div>
    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
               

                <div class="card-header">
                   
                    <div class="d-flex">
                    <a href="javascript:void(0)" id="infobar-settings-open" style="display: flex; align-items: center;" >
                    <h5>Filter</h5> <img class="infobar-icon" src="assets/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                </a>
                </div>
                </div>
                <div class="card-body">
                <h5 class="card-title">Applicant Table</h5>
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
                                    <th>Send On</th>
                                    <th>Total </th>
                                    <th>Status</th>
                                    <th>DD</th>
                                    <th>Actions</th>
                                    <th>Bill</th>
                                    <th>Qr Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($view as $views)
                                <tr>
                                    <td>
                                        @php
                                        try {
                                        $short_name = \App\Models\Branch::findOrFail($views->branchid);
                                        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
                                        $short_name = null;
                                        }
                                        @endphp

                                        {{$short_name->shortname}}-{{$views->id}}</td>
                                    <td>{{$views->passportno}} </td>
                                    <td>{{$views->name}}</td>
                                    <td>{{$views->company}}</td>
                                    <td>{{$views->country}}</td>
                                    <td>
                                        @php
                                        try {
                                        $agent_name = \App\Models\Agent::findOrFail($views->agtid);
                                        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
                                        $agent_name = null;
                                        }
                                        @endphp
                                        @if(!empty($agent_name))
                                        {{$agent_name->agtname}}
                                        @endif
                                    </td>
                                    <td>{{$views->rcddate}}</td>
                                    <td>{{$views->subdate}}</td>
                                    <td>{{$views->collectdate}}</td>
                                    <td>{{$views->senton}}</td>
                                    <td>{{$views->doc}}</td>
                                    <td>{{$views->appt_status}} </td>
                                    <td>{{$views->dd}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" style="float: none;">

                                            <a href="{{ route('visa_tracking.edit_page', $views->id) }}"
                                                class="tabledit-edit-button btn btn-sm btn-info"
                                                style="float: none; margin: 5px;"><span class="ti-pencil"></span> </a>
                                            <form action="{{ route('visa_tracking.destroy', $views->id) }}" class="m-0"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $views->id }}">
                                                <button type="submit" class="tabledit-delete-button btn btn-sm btn-info"
                                                    style="float: none; margin: 5px;"><span
                                                        class="ti-trash"></span></button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{$views->bill}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('
            success ') }}',
            showConfirmButton: false,
            timer: 1500
        });

    </script>

    @endif
    @endsection
