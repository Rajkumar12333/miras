@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Update Mail</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Update Mail</a></li>

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
                    <!-- <h5 class="card-title">Form row</h5> -->
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="applicantEmail">Email To:</label>
                                <select id="email" class="form-control" name="email" class="mail-inp">
                                    <option value="All"> ALL AGENTS </option>
                                    <option value="uvsmaacms@gmail.com"> ANATHAM </option>
                                    <option value="carlson@carlson.com"> Carlson </option>
                                    <option value="sureshforuin@gmail.com"> suresh </option>
                                    <option value="daniel@chnagepond.com"> Danny </option>
                                    <option value="m.duraimanickam@gmail.com"> Durai Manickam </option>
                                    <option value="san_145_psgcas@yahoo.com"> Santhi </option>
                                    <option value="yuvraj@unitedvisaservices.com"> BCD BLR </option>
                                    <option value="daniel@pixeldzines.com"> Donald </option>
                                    <option value="cwtblrvisa@carlsonwagonlit.co.in;cwtblr@mirasvisa.com"> Carlson
                                        Wagonwlit Travels Bangalore </option>
                                    <option value="traveldesk.indblr@non.schneider-electric.com"> BCD-SCHNEIDER
                                    </option>
                                    <option value="visadesk.blr@bcdtravel.in,"> BCD Travels Bangalore </option>
                                    <option value="hydvisa@uniglobeatb.com"> AIR TRAVEL BUREAU HYDERABAD </option>
                                    <option value="maavisa@carlsonwagonlit.co.in, cwtblr@mirasvisa.com"> ZCarlson
                                        Wagonwlit Travels Chennai </option>
                                    <option value="visa.maa@bcdtravel.in,"> ZBCD CHENNAI </option>
                                    <option value="misservices@carlsonwagonlit.co.in,cwtblr@mirasvisa.com,"> Carlson
                                        Wagonwlit Travels Hydrabad </option>
                                    <option value="travel.chn@balmerlawrie.com,"> ZBALMER LAWRIE CHENNAI </option>
                                    <option value="manojkumarp8@gmail.com"> BALMER LAWRIE HYDERABAD </option>
                                    <option value="baijunv1@rediffmail.com"> BALMER LAWRIE TRV </option>
                                    <option value="htravels@in.ibm.com; "> IBM-HYDERABAD </option>
                                    <option value="amexhyd@microsoft.com,"> AMEX MICROSOFT HYDERABAD </option>
                                    <option value="external.cob.traveldesk@in.bosch.com, bosch@mirasvisa.com"> ROBERT
                                        BOSCH-COIMBATORE </option>
                                    <option value="midoffice-chennai@aexp.com,"> AMEX CHENNAI </option>
                                    <option value="karimullamd@kesari.in,"> KESARI HYDRABAD </option>
                                    <option value="nithya.maa@sita.hrgworldwide.com"> HRG SITA CHENNAI </option>
                                    <option value="pushpanjali@uniglobesrisaitravel.com,"> SRI SAI HYDRABAD </option>
                                    <option value="prabhakarjm@parry.murugappa.com,"> Parry Travels </option>
                                    <option value="reservations@flyuts.com,unitedvisa@vsnl.net,"> UNITEDTRAVELSERVICES
                                    </option>
                                    <option value="unitedvisa@vsnl.net,uvsmaa@gmail.com"> UVSCHENNAI </option>
                                    <option
                                        value="mail@beleastmail.com,domestic@beleastmail.com,international@beleastmail.com,amish.desai@beleastmail">
                                        BELEAST-BLR </option>
                                    <option value="babu@akbartravels.in"> AKBAR-BLR </option>
                                    <option value="travellers_choice@hotmail.com ,niranjan@thetravellerschoice.com,">
                                        TRAVELLERS-CHOICE-BLR </option>
                                    <option value="imran@allaboutravel.net,sales@allaboutravel.net,"> ALL ABOUT-BLR
                                    </option>
                                    <option value="krishthakur52@yahoo.co.in,"> KISHORE SIR </option>
                                    <option value="sunitha.abhilash@keane.com,digambar.sahu@keane.com,"> ZKEANECHENNAI
                                    </option>
                                    <option value="toc.hyderabadtraveldesk@thomson.com"> Thomson Amex Hyd </option>
                                    <option value="anthony@zetatravelsolutions.com"> ZETA Technologies Pvt. Ltd.
                                    </option>
                                    <option value="trv@uttworld.com,"> UNITED TRAVELS TRIVANDRUM </option>
                                    <option value="kirti@airsonictravels.com,mirasblrcms@mirasvisa.com"> AIRSONIC-BLR
                                    </option>
                                    <option value="ace_visas@yahoo.co.in"> ACE-BOM </option>
                                    <option value="mail@beleastmail.com"> BELEAST </option>
                                    <option value="shalomtravelspvtltd@yahoo.co.in,vellaravl@yahoo.com,"> SHALOM-BLR
                                    </option>
                                    <option value="snehatravels@gmail.com,"> SNEHA-BLR </option>
                                    <option value="triwaytravels@gmail.com,"> TRIWAY </option>
                                    <option value="ramesh@comfortleisure.com,"> ZCOMFORT LEISURE </option>
                                    <option value="uday@earthwalk.co.in,"> EARTHWALK YATRAS </option>
                                    <option value="kirankumarm@caresoftglobal.com,"> CARE SOFT GLOBAL </option>
                                    <option value="vivatours@gmail.com"> VIVA </option>
                                    <option value="simrantravelsblr@gmail.com"> SIMRAN </option>
                                    <option value=" comfortholidays@yahoo.com, Joseph@comfortholidays.net,"> COMFORT
                                        HOLIDAYS </option>
                                    <option value=" rmurthy@alphaairtravels.com,documentation@alphaairtravels.com ">
                                        ALPHA - BLR </option>
                                    <option value=" travelcoordinator.sharat "> TRAVEL CO - ORDINATOR </option>
                                    <option value=" gopikp@kesari.in,gopipatil35@gmail.com, mahendranas@kesari.in ">
                                        KESARI - BLR </option>
                                    <option value=" shijojoy@hotmail.com "> COMPASS </option>
                                    <option value=" phanikikkeri@yahoo.co.in "> BLUE OCEAN HASSAN </option>
                                    <option value=" mayurwt@yahoo.com "> MAYUR WORLD </option>
                                    <option value=" carmelair@indiatimes.com "> CARMEL AIR </option>
                                    <option value=" srikant@indusoutback.com,    kumar@indusoutback.com "> INDUS OUTBACK
                                    </option>
                                    <option value=" gpandian@travelguru.com "> ZTRAVEL GURU - BLR </option>
                                    <option value=" blueoceanairtravels@yahoo.co.in "> BLUE OCEAN - BLR </option>
                                    <option value=" oasisholidaysblr@yahoo.co.in "> OASIS HOLIDAYS - BLR </option>
                                    <option value=" sonystravel@hotmail.com "> SONYS - BLR </option>
                                    <option value=" silicontravels@aol.in "> SILICON - BLR </option>
                                    <option value=" mathaairtravels@gmail.com"> MATHA AIR - BLR </option>
                                    <option value=" manipal@airtelmail.in "> MANIPAL - BLR </option>
                                    <option value=" patils_alpha@rediffmail.com "> PATILS ALPHA - BLR </option>
                                    <option value=" legacy_travels@hotmail.com"> LEGACY - BLR </option>
                                    <option value=" imran@allaboutravel.net "> ALL ABOUT TRAVELS </option>
                                    <option value=" patils_alpha@rediffmail.com "> PATILS ALPHA </option>
                                    <option value=" searstravels@yahoo.com, "> SEARS </option>
                                    <option value=" silicontravelsos@gmail.com "> SILICON TVL </option>
                                    <option value=" deepika@slttc.com "> SREELAKSHMI </option>
                                    <option value=" girija@hammockholidays.com "> HAMMOCK LEISURE HOLIDAYS </option>
                                    <option value=" inditravel@rediffmail.com "> INDI TVL </option>
                                    <option value=" sanjaysrinivas81@hotmail.com "> J.M.MEHTA - BLR </option>
                                    <option value=" kingswaytravel@yahoo.co.in "> KINGSWAY - BLR </option>
                                    <option value=" oasisblr@hotmail.com "> OASIS - BLR </option>
                                    <option value=" savyasachi501@yahoo.co.in,   "> SAVYASACHI - BLR </option>
                                    <option value=" siddu@uniglobettc.com "> UV GLOBE - BLR </option>
                                    <option value=" shankar@tottravels.com,"> TOT - BLR </option>
                                    <option value=" aruna.narayan@riversilica.com "> ZRIVERSILICA </option>
                                    <option value=" universalsvcs@gmail.com "> UNIVERSAL - BLR </option>
                                    <option value=" niranjan.gupta@viajustgo.com "> VIA - BLR </option>
                                    <option value=" manohar@dreamdestinationz.com,    mirasblrcms@mirasvisa.com ">
                                        ZDREAM DESTNATION - BLR </option>
                                    <option value=" vacationer@dataone.in "> VACATIONER - BLL </option>
                                    <option value=" avion1@avionnetwork.com "> AVION - BLR </option>
                                    <option value=" newflywing@gmail.com, mirasblrcms@mirasvisa.com "> ZNEW FLY WING -
                                        BLR </option>
                                    <option value=" zionforex@gmail.com "> ZION INTL - BLR </option>
                                    <option value=" raghu@neptunenext.com "> NEPTUNE - BLR </option>
                                    <option value="visacon@vsnl.com "> VISA CONSULTANCY - MUM </option>
                                    <option value=" acira.travels@gmail.com,    mirasblrcms@mirasvisa.com "> ACIRA - BLR
                                    </option>
                                    <option value=" murugantravels@gmail.com "> MURUGAN - BLR </option>
                                    <option value=" hiacetravelindia@yahoo.co.in "> HI ACE - BLR </option>
                                    <option value=" rekhatravels@gmail.com "> REKHA - BLR </option>
                                    <option value=" preethi@globetravels.in,"> GLOBE - MLR </option>
                                    <option value=" cjb@flyuts.com "> UTS - CJB </option>
                                    <option value=" gayatri@rajviha.com "> RAJVIHA </option>
                                    <option value=" syedsharjil1@gmail.com, mirasblrcms@mirasvisa.com "> ZTRAVEL HQ -
                                        BLR </option>
                                    <option value=" globex11@hotmail.com, mirasblrcms@mirasvisa.com "> ZGlobe
                                        Express-BLR </option>
                                    <option
                                        value="rajnikanth.chandrashekar@nttdata.com,Jisha.Kannankara@nttdata.com,mirasblrcms@mirasvisa.com">
                                        KEANE-BLR </option>
                                    <option value="amex-visas.in.gen@cisco.com"> CISCO-BLR </option>
                                    <option value="clotilda@globetravels.in,preethi@globetravels.in"> GLOBE-MLR
                                    </option>
                                    <option value="pgresv@perfectgetaways.in,mirasblrcms@mirasvisa.com"> PERFECT
                                        GETAWAYS-BLR </option>
                                    <option value="balmer.lawrie@gmail.com"> BALMER LAWRIE-BLR </option>
                                    <option
                                        value="conquertravels@gmail.com,mirasblrcms@mirasvisa.com,hegdekshama@yahoo.co.in,shettyanum@yahoo.co.in">
                                        CONQUER-BLR </option>
                                    <option value="latha.s@vaswanigroup.com"> VASWANI-BLR </option>
                                    <option value="info@travglobe.net,mirasblrcms@mirasvisa.com"> TRAVEL GLOBE-BLR
                                    </option>
                                    <option value="floratravels@sify.com,mirasblrcms@mirasvisa.com"> FLORA MLR </option>
                                    <option value="tafflestravels@vsnl.net"> Taffles </option>
                                    <option value="newflywing@gmail.com"> FLYWING-BLR </option>
                                    <option value="pd.johnny@gmail.com,mirasblrcms@mirasvisa.com"> TRANSITY-BLR
                                    </option>
                                    <option value="cruzs07@ymail.com,mirasblrcms@mirasvisa.com"> ZTRINITY-BLR </option>
                                    <option value="crystalholiday@hotmail.com"> CRYSTAL HOLIDAY-BLR </option>
                                    <option value="traveldoor2004@yahoo.com,mirasblrcms@mirasvisa.com"> travel door
                                    </option>
                                    <option value="viswanath@safaryz.com"> SAFARYZ </option>
                                    <option value="tycoontours@newairtelmail.onmicrosoft.com,mirasblr@gmail.com"> TYCOON
                                    </option>
                                    <option value="info@revajourneys.com"> REVA JOURNEYS(GLOBE) PVT LTD </option>
                                    <option value="holidaydreams13@gmail.com,mirasblrcms@mirasvisa.com"> ZHOLIDAY DREAMS
                                    </option>
                                    <option value="gopi.nair@tourismdna.com,mirasblrcms@mirasvisa.com"> TOURISM DNA BLR
                                    </option>
                                    <option value="flomike3@yahoo.com,mirasblrcms@mirasvisa.com"> FLORANCE-BLR </option>
                                    <option
                                        value="seema@itripholidays.com,monesh@itripholidays.com,info@itripholidays.com">
                                        I-TRIP HOLIDAYS-BLR </option>
                                    <option value="sunilhs@revajourneys.com,mirasblrcms@mirasvisa.com"> REVA JOURNEYS
                                    </option>
                                    <option value="" vinaya="" suresh"="" <vinayasur@yahoo.co.in="">, "&gt; THE TRAVEL
                                        COMPANY </option>
                                    <option value="rayees@globalleisuretravel.com"> GLOBAL LEISURE HYD </option>
                                    <option value="deeputravels@gmail.com,mirasblrcms@mirasvisa.com"> DEEPU TRAVELS
                                    </option>
                                    <option value="rchachad@travelguru.com "> LESCONCIERGES </option>
                                    <option value="ceeben2000@gmail.com>"> CEEBEN </option>
                                    <option value="manoj@wanderer360.com,mirasblrcms@mirasvisa.com "> ZWANDERER 360
                                    </option>
                                    <option value="hema.reddy@travelvacationsindia.com,mirasblrcms@mirasvisa.com ">
                                        ZTRAVEL VACATION-BLR </option>
                                    <option value="" vinaya="" suresh"="" <vinayasur@yahoo.co.in="">"&gt; UNIGLOBE-BLR
                                    </option>
                                    <option value="fortuneraja@yahoo.co.in,mirasblrcms@mirasvisa.com"> FORTUNE-BLR
                                    </option>
                                    <option value="john john@globeindia.in,mirasblrcms@mirasvisa.com"> ZGLOBE FOREX-BLR
                                    </option>
                                    <option value="viplav_2k@hotmail.com"> ZJETSAVE DELHI GE ACCOUNT </option>
                                    <option value="ashwini@frontierholidays.com,mirasblrcms@mirasvisa.com"> ZFRONTIER
                                        HOLIDAYS </option>
                                    <option value="siddu@uniglobettc.com,mirasblrcms@mirasvisa.com"> UNIGLOBE-BLR
                                    </option>
                                    <option value="tafflestravels@vsnl.net"> TAFFLES - BLR </option>
                                    <option value="midoffice-bangalore@aexp.com"> AMEX BANGALORE </option>
                                    <option value="amex-travel.in.gen@cisco.com"> AMEX CISCO BANGALORE </option>
                                    <option value="travel@in.ibm.com;"> IBM BANGALORE </option>
                                    <option value="srinath.rao@in.hrgworldwide.com,mirasblrcms@mirasvisa.com"> HRG
                                        BANGALORE </option>
                                    <option
                                        value="Amex_Traveldesk_India@dell.com; Akhilan.Veeran.Ramalingam@aexp.com; naseeruddin.shaik@aexp.com;">
                                        DELL BANGALORE </option>
                                    <option value="indiatraveldesk@intel.com"> INTEL BANGALORE </option>
                                    <option value="midoffice-bangalore@aexp.com,mirasblrcms@mirasvisa.com"> NOKIA
                                        BANGALORE </option>
                                    <option value="midoffice-bangalore@aexp.com"> CITRIX BANGALORE </option>
                                    <option value="midoffice-bangalore@aexp.com"> NXP BANGALORE </option>
                                    <option value="Sahil.Kochhar@aexp.com"> AMEX-PHILIPS </option>
                                    <option value="Mohammed.ahmed@gs.com"> GS BANGALORE </option>
                                    <option value="amex_bangalore@emc.com"> EMC BANGALORE </option>
                                    <option value="Narasimha_Murthy@McAfee.com"> MCAFEE BANGALORE </option>
                                    <option value="midoffice-bangalore@aexp.com"> SUN GSS BANGALORE </option>
                                    <option value="midoffice-bangalore@aexp.com"> SUN IEC BANGALORE </option>
                                    <option value="traveldesk.amex@gm.com"> GM BANGALORE </option>
                                    <option value="cognizant.india@aexp.com;"> AMEX-CTS </option>
                                    <option value="midoffice-bangalore@aexp.com"> THOMSON REUTERS BANGALORE </option>
                                    <option value="btraveldesk@in.kpmg.com "> KPMG BANGALORE </option>
                                    <option value="midoffice-bangalore@aexp.com"> TCS BANGALORE </option>
                                    <option value="coe2@aexp.com"> COE2 CHENNAI </option>
                                    <option value="midoffice-bangalore@aexp.com;coe1@aexp.com"> COE1 BANGALORE </option>
                                    <option value="filamex@aexp.com"> ZFORD CHENNAI </option>
                                    <option value="Jency.N.F@aexp.com"> CTS CHENNAI </option>
                                    <option value="nokia.che@aexp.com"> ZNOKIA CHENNAI </option>
                                    <option value="ctravels@in.ibm.com"> IBM CHENNAI </option>
                                    <option value="chetraveldesk@in.kpmg.com"> ZKPMG CHENNAI </option>
                                    <option value="teji-george@contractor.amat.com"> ZVGP CHENNAI </option>
                                    <option value="travelmumbai@aexp.com"> MSD CHENNAI </option>
                                    <option
                                        value="shashidhar.sakela@greenpeace.org,uday.kumar@greenpeace.org,mirasblrcms@mirasvisa.com">
                                        GREEN PEACE - BLR </option>
                                    <option value="venkiathithi@gmail.com,mirasblrcms@mirasvisa.com"> ATHITHI TRAVELS
                                    </option>
                                    <option value="ops.trv@bcdtravel.in,mirasblrcms@mirasvisa.com"> ZBCD TRIVANDRUM
                                    </option>
                                    <option value="bonvoyagemaa@yahoo.com,mirasblrcms@mirasvisa.com"> BON VOYAGE
                                    </option>
                                    <option value="airwingit@gmail.com,mirasblrcms@mirasvisa.com"> AIRWING </option>
                                    <option value="deccanholidays@sify.com,mirasblrcms@mirasvisa.com"> ZDECCAN HOLIDAYS
                                        - BLR </option>
                                    <option value="travelservicesadyar@gmail.com,mirasblrcms@mirasvisa.com"> ZTRAVEL
                                        SERVICES </option>
                                    <option value="viceregaltravels@gmail.com"> VICEREGAL TRAVELS </option>
                                    <option value="sunshinemanipal@yahoo.com"> SUNSHINE - BLR </option>
                                    <option value=" ops2.ccu@globeindia.in,mirasblrcms@mirasvisa.com"> GLOBE FOREX -
                                        KOLKATTA </option>
                                    <option value="sbethi@sita.hrgworldwide.com"> Suresh Bethi </option>
                                    <option value="manish.singh@colorfulvacations.com"> ZCOLORFUL VACATION </option>
                                    <option value="indiatravel@vmware.com"> zvmware </option>
                                    <option value="Ajith NK AKBT Mangalore ajithnk@akbartravels.in"> AKBAR-MLR </option>
                                    <option value="mail@dovetravels.in via yahoo.com"> DOVE TRAVELS </option>
                                    <option value="travelfriendprasad@gmail.com,mirasblrcms@mirasvisa.com"> ZTRAVEL
                                        FRIEND -BLR </option>
                                    <option value="enquiry@jaygroups.com"> JAY GROUPS </option>
                                    <option value="PRAVEEN@INDIANWORLD.COM"> ZINDIA AND WORLD </option>
                                    <option value="sagtravelpoint@gmail.com"> SHREE AMARAGIRI TRAVEL POINT </option>
                                    <option value="globaltravels06@gmail.com,mirasblrcms@mirasvisa.com"> FLY GLOBAL
                                        TRAVELS </option>
                                    <option value="Mirandaclotty@hotmail.com,mirasblrcms@mirasvisa.com"> CLOTILDA DSA
                                        MLR </option>
                                    <option value="info@zionforex.com"> ZION-BLR </option>
                                    <option value="madhuchandra.sj@traveltours.in,mirasblrcms@mirasvisa.com"> TRAVEL
                                        AIR- BLR </option>
                                    <option value="mirasblracc@gmail.com,mirasblrcms@mirasvisa.com"> WALK IN CLIENT -
                                        BLR </option>
                                    <option
                                        value="blueoceanairtravels@yahoo.co.in,swethahegde@blueoceanlocales.com,mirasblrcms@mirasvisa.com">
                                        BLUE OCEAAN -BLR </option>
                                    <option value="travelair2000@yahoo.co.in "> SB INNTEL-BLR </option>
                                    <option value="travelair2008@gmail.com "> ATLURI </option>
                                    <option value=" siddu <siddu@uniglobettc.com>"> UNIGLOBE </option>
                                    <option value="shan@vacationerholidays.in,mirasblrcms@mirasvisa.com"> VACATIONAL
                                        HOLIDAYS </option>
                                    <option value="vinayasur@yahoo.co.in "> VINAYA MADAM-BLR </option>
                                    <option value="vstravelz@gmail.com,mirasblrcms@mirasvisa.com"> VS TRAVELS-BLR
                                    </option>
                                    <option
                                        value="pooja@thetravelexplorers.co.in,sunil@thetravelexplorers.co.in,mirasblrcms@mirasvisa.com">
                                        TRAVEL EXPLORE-BLR </option>
                                    <option value="anto@macsports.org"> MAC SPORTS-BLR </option>
                                    <option value="mahesh@kingswaytravels.net,mirasblrcms@mirasvisa.com"> KINGSWAY-BLR
                                    </option>
                                    <option value="operations@travel4seasons.in"> TRAVEL4SEASONS </option>
                                    <option value="Maneesh.BSDaya@cognizant.com"> CTS - COCHIN </option>
                                    <option value="satellitetravels81@gmail.com,mirasblrcms@mirasvisa.com"> SATELLITE
                                        TRAVELS -BLR </option>
                                    <option value="thyag_travelair@yahoo.com"> TRAVEL AIR THYAGARAJAN - BLR </option>
                                    <option value="manjulaa.n@traveltours.in"> TRAVEL AIR MANJULAA - BLR </option>
                                    <option value=" Madhusudan H.V. vivatours@gmail.com,mirasblrcms@mirasvisa.com">
                                        Zviva </option>
                                    <option value="nntravelworld@yahoo.com,mirasblrcms@mirasvisa.com"> NN TRAVEL-BLR
                                    </option>
                                    <option value="mayur@gilpintravelindia.com"> MAYUR GILPIN TRAVELS </option>
                                    <option value="uma.rao@trmn.biz,rajkiran.bs@trmn.biz,mirasblrcms@mirasvisa.com">
                                        TRMN </option>
                                    <option value="manipal@airtelmail.in,TRAVELS@manipal.com,mirasblrcms@mirasvisa.com">
                                        MANIPAL TRAVELS </option>
                                    <option value="globaltravels06@gmail.com,mirasblrcms@mirasvisa.com"> GLOBAL TRAVELS
                                        BLR </option>
                                    <option value="sindatravels@yahoo.in,mirasblrcms@mirasvisa.com"> SINDHA TRAVELS
                                    </option>
                                    <option value="Travel_india@amat.com"> APPLIED MATERIALS </option>
                                    <option value="travel traveldesk_mbrdi.pool-id@daimler.com"> TRAVEL POOL </option>
                                    <option value="alok@lepassagetoindia.net,mirasblrcms@mirasvisa.com"> LEPASSAGE
                                    </option>
                                    <option value="visamumbai@aexp.com;"> MCKINSEY </option>
                                    <option value="anu@perlite.in,mirasblrcms@mirasvisa.com"> KELTECH-BLR </option>
                                    <option value="mayur@gilpintravelindia.com,mirasblrcms@mirasvisa.com"> GILPIN
                                        TRAVELS- </option>
                                    <option value="v.travels.mohan@gmail.com,mirasblrcms@mirasvisa.com"> J.V TRAVEL
                                    </option>
                                    <option value="latha.s@vaswanigroup.com,mirasblrcms@mirasvisa.com"> VASWANI-BLR
                                    </option>
                                    <option value="vijay.pegasus@gmail.com,mirasblrcms@mirasvisa.com"> PEGASUS-EGMORE
                                    </option>
                                    <option value="v-bicalr@microsoft.com"> MICROSOFT </option>
                                    <option value="adbtours2002@yahoo.com"> ADB TOURS </option>
                                    <option value="farholidays@yahoo.com,mirasblrcms@mirasvisa.com"> FAR HOLIDAYS
                                    </option>
                                    <option value="ajithnk@akbartravels.in,mirasblrcms@mirasvisa.com"> AKBAR - MLR
                                    </option>
                                    <option value="suresh@sprout9.com,girija@sprout9.com"> SPROUT 9 TRAVELS </option>
                                    <option value="info@atltravel.in"> ADITYA TRAVEL LINES - BLR </option>
                                    <option value="ceeben2000@gmail.com,mirasblrcms@mirasvisa.com"> CEEBAN TRAVELS
                                    </option>
                                    <option value="madhu@travelmaaza.com "> TRAVEL MAAZA BLR </option>
                                    <option value="joginder.singh@bcdtravel.in "> BCD HYDERABAD </option>
                                    <option value=" Krishna.kumar@corpus.com,mirasblrcms@mirasvisa.com"> CORPUS
                                    </option>
                                    <option value="bangalore.travel@st.com"> ST MICRO ELECTRONICS </option>
                                    <option value="ramesh@innovativetours.net,mirasblrcms@mirasvisa.com"> INNOVATIVE
                                        TOURS AND TRAVELS </option>
                                    <option value="johnsonoutbound@gmail.com,mirasblrcms@mirasvisa.com "> JOHNSON-BLR
                                    </option>
                                    <option value="blrmgroadtravel@gmail.com,mirasblrcms@mirasvisa.com"> UAE XCHANGE BLR
                                    </option>
                                    <option value="mohan.t@tatacapital.com,mirasblrcms@mirasvisa.com"> T C TRAVELS
                                    </option>
                                    <option value="mail@thegreatindianescape.com,mirasblrcms@mirasvisa.com"> NORTH
                                        STAR-BLR </option>
                                    <option value="dhandapani.s@polarisFT.com"> POLARIS CHENNAI </option>
                                    <option value="sriram.kv@dnata.com,shashidharan.p@dnata.com,dnatablr@mirasvisa.com">
                                        DNATA-BLR </option>
                                    <option value="champion.trvl@gmail.com"> CHAMPION TRAVEL </option>
                                    <option value="totmystravel@yahoo.com,mirasblrcms@mirasvisa.com"> TOT-MYSORE
                                    </option>
                                    <option value="jayakumar.ettennil@alten-india.com,mirasblrcms@mirasvisa.com"> ALTEN
                                        INDIA </option>
                                    <option value="travelcoordinator.sharat@gmail.com,uvsblecms@gmail.com"> TRAVEL
                                        CO-ORDINATOR </option>
                                    <option value="trawellme t trawellme@gmail.com,mirasblrcms@mirasvisa.com"> TRAWELL
                                        ME TRAVELS </option>
                                    <option value="Microsoftindia@aexp.com;"> ROSY MICROSOFT </option>
                                    <option value="care@staygalaxy.com"> GALAXY TRAVEL </option>
                                    <option value=""> AMEX BANGALORE </option>
                                    <option value="traveldoor2004@yahoo.com"> TRAVEL DOOR </option>
                                    <option value="uvsmaa@gmail.com,unitedvisa@vsnl.net"> uvs chennai </option>
                                    <option value="mirasblr@gmail.com"> UVS-Ace </option>
                                    <option value="contact@tpvisa.com"> UVS-trvelpoint </option>
                                    <option value="balajisherkhane@gmail.com"> UVS-Balaji </option>
                                    <option value="murugantravels@gmail.com"> UVS-Murugan </option>
                                    <option value="hiacetravelindia@yahoo.co.in"> UVS-HiAce </option>
                                    <option value="anil_jetsave@hotmail.com"> UVS-Jetsave </option>
                                    <option value="info@acevisas.in"> UVS-ACE TRAVELS </option>
                                    <option
                                        value="rbin-blr@mirasvisa.com,pendingdocs@mirasvisa.com,bosch@mirasvisa.com">
                                        MICO BOSCH-BLR </option>
                                    <option
                                        value="externalblr.visadesk@in.bosch.com,pendingdocs@mirasvisa.com,bosch@mirasvisa.com">
                                        ROBERT BOSCH- KOR </option>
                                    <option value="unitedvisa@vsnl.net,"> UVS CHENNAI </option>
                                    <option value="operations@travel4seasons.in"> TRAVEL 4 SEASONS </option>
                                    <option value="balmerinternational@gmail.com"> BALMER LAWRIE-BANGALORE </option>
                                    <option value="holidaycompanionbangalore@gmail.com"> HOLIDAY COMPANION </option>
                                    <option value="kaleel@akbartravels.in"> AKBAR-CHENNAI </option>
                                    <option value="mstar.bangalore@gmail.com"> MSTAR TOURS AND MORES </option>
                                    <option value="bangalore@balurghat.co.in  "> BALURGHAT TRAVELS </option>
                                    <option value="hiteshholidays@gmail.com"> HITESH HOLIDAYS </option>
                                    <option value="travelnext3@gmail.com"> TRAVEL NEXT- MYSORE </option>
                                    <option value="shivu.rbgm@gmail.com"> BRV TRAVELS </option>
                                    <option value="axistourstravels@gmail.com"> AXIS TOURS &amp; TRAVELS-BLR </option>
                                    <option value="mirasblrcms@mirasvisa.com"> BENZ </option>
                                    <option value="john@globeindia.in"> GLOBE FOREX CHENNAI </option>
                                    <option value=" bhaskar reddy <chetantoursandtravels@gmail.com>"> CHETAN TOURS &amp;
                                        TRAVELS </option>
                                    <option value="anupama.rao@etas.com"> ETAS </option>
                                    <option value="patair@gmail.com"> PATILS- ALPHA-BLR </option>
                                    <option value="deeputravels@gmail.com"> DEEPU TRAVELS </option>
                                    <option value=""> SHIVA </option>
                                    <option value="neha@uniglobeodysseytravel.com"> ODYSSEY </option>
                                    <option value="syed@travelnetworkonline.in"> HIZ TRAVEL NETWORK PVT LTD </option>
                                    <option value="abhinav_tours@yahoo.in"> ABHINAV TOURS </option>
                                    <option
                                        value="externalblr.visadesk@in.bosch.com,pendingdocs@mirasvisa.com,bosch@mirasvisa.com">
                                        ROBERT BOSCH-PERSONAL </option>
                                    <option value="bibi@hyades.in"> Hyades Tours </option>
                                    <option value="tonio@redditmail.com"> ALOHA TOURS &amp; TRAVELS </option>
                                    <option value="premtravelandtours@gmail.com"> PREM TRAVEL &amp; TOURS </option>
                                    <option value="travelsmart20@gmail.com"> TRAVEL SMART-HYDERABAD </option>
                                    <option value="horizon_divyesh@yahoo.co.in"> HORIZON TRAVEL </option>
                                    <option value="info@acevisas.in "> Ace Travels-Mumbai </option>
                                    <option value="SANGRAM.BHUYAN@valspareurope.com"> VALSPAR </option>
                                    <option value="airwingit@gmail.com"> NEW AIRWING -BELGAUM </option>
                                    <option value="a.r.murugan@insideindiatourism.com"> INSIDE INDIA </option>
                                    <option value="svtravelite.gm@gmail.com"> S V TRAVELITE </option>
                                    <option value="visas@7cholidays.co.in"> 7C HOLIDAYS </option>
                                    <option value="rud@gitanjalitravels.in"> GITANJALI TRAVLES </option>
                                    <option value="info@honeymoonhavens.in"> HONEYMOON HAVENS-BLR </option>
                                    <option value="corporatetravels@hotmail.com"> CORPORATE TRAVELS </option>
                                    <option value="suprita.parande@hexad.de"> Hexad Infosoft-BLR </option>
                                    <option value="Kumar.Adimurthy@continental-corporation.com"> CONTINENTAL </option>
                                    <option value="aerojettravelsblr@gmail.com"> AEROJET </option>
                                    <option
                                        value="uvs.swathi@daimler.com; mirasblr@gmail.com; uvs.prithivi@daimler.com; Daimlertravel@bcdtravelapac.co">
                                        BENZ </option>
                                    <option value="primeindiac@gmail"> PRIME INDIA COCHIN TOURS AND TRAVELS </option>
                                    <option value="prasad_pegasus@hotmail.com"> Pegasus- Adyar </option>
                                    <option value="chanderkv@hotmail.com"> Vaishnavi Travels </option>
                                    <option value="hyd2_bltravel@sancharnet.in,balmer7@gmail.com"> BALMER
                                        LAWRIE-HYDERABAD </option>
                                    <option value="sa@via.com, ihotels@via.com"> VIA.COM </option>
                                    <option value="Travel_India@amat.com, midoffice-bangalore@aexp.com"> AMEX-APPLIED
                                        MATERIALS </option>
                                    <option value="indiaamex@citrix.com, midoffice-bangalore@aexp.com"> AMEX-CITRIX
                                    </option>
                                    <option value="Amex_Traveldesk_India@Dell.com, midoffice-bangalore@aexp.com">
                                        AMEX-DELL </option>
                                    <option value="Amex_Bangalore@emc.com;"> AMEX-EMC </option>
                                    <option value="traveldesk.amex@gm.com;"> AMEX-GENERAL MOTORS </option>
                                    <option value="traveldesk.amex@gm.com, midoffice-bangalore@aexp.com"> AMEX-GOLDMAN
                                        SACHS </option>
                                    <option value="traveldesk.pic@philips.com, midoffice-bangalore@aexp.com">
                                        AMEX-PHILIPS </option>
                                    <option value="savithax.v.rao@intel.com, midoffice-bangalore@aexp.com">
                                        AMEX-INTEL/IMC </option>
                                    <option value="indiatraveldesk@intel.com, midoffice-bangalore@aexp.com"> AMEX-INTEL
                                        BGA </option>
                                    <option value="indiatraveldesk@intel.com, midoffice-bangalore@aexp.com"> AMEX-INTEL
                                        SSR </option>
                                    <option value="indiatraveldesk@intel.com"> AMEX-INTEL </option>
                                    <option value="btraveldesk@kpmg.com"> AMEX-KPMG </option>
                                    <option value="jaiholidays@gmail.com"> JAI HOLIDAYS </option>
                                    <option value="Narasimha_Murthy@McAfee.com, "> AMEX-MCAFEE </option>
                                    <option value="Bangalore.travel@st.com, noida.travel@st.com"> AMEX-ST MICRO
                                    </option>
                                    <option value="Rabekha.B.Kumari@aexp.com; Aijaz.A.Shaikh1@aexp.com;"> AMEX-VMWARE
                                    </option>
                                    <option value="trvlban@adobe.com;"> AMEX-ADOBE </option>
                                    <option value="traveldesk.amex@ap.jll.com, midoffice-bangalore@aexp.com"> AMEX-JLL
                                    </option>
                                    <option value="GID.Travel.helpdesk@delphi.com, midoffice-bangalore@aexp.com">
                                        AMEX-DELPHI </option>
                                    <option value="COE1@aexp.com"> AMEX-TCS </option>
                                    <option
                                        value="Sanjib.Kalita2@aexp.com,midoffice-bangalore@aexp.com,amexblr@mirasvisa.com">
                                        AMEX-INTEVA </option>
                                    <option
                                        value="In.International@service.americanexpress.com, midoffice-bangalore@aexp.com">
                                        AMEX-TATA </option>
                                    <option value="atpairtravels@gmail.com"> ATP AIR TRAVELS </option>
                                    <option value="coe1@aexp.com, "> AMEX-UNISYS </option>
                                    <option value="airticket@jww.co.in"> JWW </option>
                                    <option value="coe2@aexp.com, midoffice-bangalore@aexp.com"> AMEX-ALTRAN </option>
                                    <option value="coe1@aexp.com,midoffice-bangalore@aexp.com"> AMEX-INVENSYS </option>
                                    <option value="amexbasftraveldesk@aexp.com,coe2@aexp.com"> AMEX-BASF </option>
                                    <option value="amextrvl@microsoft.com, v-bicalr@microsoft.com"> AMEX-MICROSOFT
                                    </option>
                                    <option value="guruprasad.s@dentsu.in"> DENTSU COMMUNICATIONS PVT.LTD </option>
                                    <option value="amexBTggn@aexp.com"> AMEX-BT </option>
                                    <option value="Rohit.Gulati@aexp.com"> AMEX-GURGOAN </option>
                                    <option value="amex.traveldesk@nielsen.com"> AMEX-NIELSEN </option>
                                    <option value="coe1@aexp.com"> AMEX-TEKTRONIX </option>
                                    <option value="midoffice-bangalore@aexp.com"> AMEX-EMC </option>
                                    <option value="In.International@service.americanexpress.com"> AMEX-QUINTILES
                                    </option>
                                    <option value="info@travelnleisure.net"> TRAVEL N LEISURE </option>
                                    <option value="ravi.kumar@weizmanforex.com"> TRIP TOE TRAVELS </option>
                                    <option value="info@magellan.net.in"> MAGELLAN </option>
                                    <option value="vijaya.arucapalli@intimetec.com"> INTIME TEC </option>
                                    <option value="Meenakshi.Nagar1@aexp.com"> AMEX-AEXP </option>
                                    <option value="cochin@safiyatravels.in"> SAFIYA TRAVELS </option>
                                    <option value="sales1.hyd@inorbittours.com"> INORBIT TOURS PVT LTD </option>
                                    <option value="dovetravels@yahoo.com"> DOVE TRAVELS WORLDWIDE </option>
                                    <option value="anithatravels@yahoo.com"> ANITHA TRAVELS </option>
                                    <option value="saleemkhilji@mytravelnest.com"> MY TRAVEL NEST </option>
                                    <option value="shiva@togethertourism.com"> TOGETHER TOURISM </option>
                                    <option value="dinesh@industraveller.com"> INDUS TRAVELLER BLR </option>
                                    <option value="visamumbai@aexp.com"> AMEX-MCKINSEY </option>
                                    <option value="rmcblr@yahoo.com,rmc_trvl@vsnl.net"> RAM MOHAN TRAVELS </option>
                                    <option value="atwholidays9999@gmail.com  "> AROUND WORLD HOLIDAYS </option>
                                    <option value="protours11@gmail.com"> Pro tours and travels </option>
                                    <option value="voyageworld@gmail.com"> VOYAGE WORLD </option>
                                    <option value="fantasyairtravels@gmail.com"> FANTASY AIR TRAVELS </option>
                                    <option value="misbadamad.wadehra@l-3com.com"> AMEX-L3 </option>
                                    <option value="birdsvacations@gmail.com"> BIRDS VACATIONSS </option>
                                    <option value="infoblr@uniglobesameeratravel.com"> UNIGLOBE </option>
                                    <option value="infobom@travelmastersonline.com"> TRAVEL MASTERS </option>
                                    <option value="Mohammed.ilyas@smarttravel.co.in"> Smart Travel Solutions </option>
                                    <option value="balaji09d@gmail.com"> balajjjjjjj </option>
                                    <option value="ops@flyhubtravels.com"> FLYHUB TRAVELS </option>
                                    <option value="info@insumust.com"> INSUMUST.COM </option>
                                    <option value="allwintrvls@gmail.com"> ALLWIN TOURS AND TRAVELS </option>
                                    <option value="SundaraPandian.SundaraPandian@aexp.com"> AMEX HCL </option>
                                    <option value="Rohit.Gulati@aexp.com"> zAMEX HCL </option>
                                    <option value="traveldeskin@merck.com"> AMEX-MSD </option>
                                    <option value="midoffice-bangalore@aexp.com "> AMEX-ASTRAZENECA </option>
                                    <option value="pradeep@travelcastle.net"> Travel Castle </option>
                                    <option value="cadencetraveldesk@cadence.com"> AMEX-CADENCE </option>
                                    <option value="mirasblrcms@mirasvisa.com"> MINE TRAVELS </option>
                                    <option value="mirasblrcms@mirasvisa.com"> UNIQ TRAVELLER </option>
                                    <option value="kirti@airticketandholidays.com"> Airtickets&amp;holidays </option>
                                    <option value="AmexPune@symantec.com"> AMEX - SYMANTEC </option>
                                    <option value="mirasblrcms@mirasvisa.com"> UNIQ TRAVELLER </option>
                                    <option value="mirasblrcms@mirasvisa.com,srinivas@interzone.in"> Inter Zone
                                    </option>
                                    <option value="Meenakshi.Nagar1@aexp.com"> AMEX-AKZONOBEL </option>
                                    <option value="coe1@aexp.com "> AMEX-SKELTA </option>
                                    <option value="thimmashetty@skyimmigrations.com"> SKY IMMIGRATIONS </option>
                                    <option value="mirasblrcms@mirasvisa.com,blr.ops@sigmavisa.com "> SIGMA </option>
                                    <option value="dillibabu26@gmail.com"> FANTASYA TOURS &amp;TRAVELS </option>
                                    <option value="midoffice-bangalore@aexp.com"> AMEX NEEV TECHNOLOGY </option>
                                    <option value="windstarholidays@gmail.com"> WINDSTAR HOLIDAYS </option>
                                    <option value="Raja.R@concentrix.com "> CONCENTRIX DAKSH </option>
                                    <option value="Raja.R@concentrix.com "> CONCENTRIX DAKSH SERVICES INDIA PRIVATE
                                        LIMITED </option>
                                    <option value="visa.cok@itltravel.com"> ITL TOURS AND TRAVELS </option>
                                    <option value="belita.menezes@liferay.com "> LIFERAY </option>
                                    <option
                                        value="cscvisadesk@carlsonwagonlit.co.in,cwtblrvisa@carlsonwagonlit.co.in,cwtblr@mirasvisa.com,opsblr@miras">
                                        CWT-CSC </option>
                                    <option value="Meenakshi.Nagar1@aexp.com"> AMEX JOHNSON &amp; JOHNSON </option>
                                    <option value="rbin-blr@mirasvisa.com,pendingdocs@mirasvisa.com"> Mico Bosch -
                                        Personal </option>
                                    <option value="externalblr.visadesk@in.bosch.com "> ROBERT BOSCH - EC </option>
                                    <option value="externalblr.visadesk@in.bosch.com"> ROBERT BOSCH - BEL </option>
                                    <option value="externalblr.visadesk@in.bosch.com "> ROBERT BOSCH - BMH </option>
                                    <option value="poornima@phase1world.com "> PHASE 1 - BLR </option>
                                    <option value="prithivianand@gmail.com"> test prithivi </option>
                                    <option
                                        value="externalblr.visadesk@in.bosch.com;fixed-term.Hemanth.Bambure@in.bosch.com,Santhosh.GayathriVenkatesh">
                                        ROBERT BOSCH - LONG TERM </option>
                                    <option value="jobina@indianwingsholidays.com"> INDIANWINGS HOLIDAYS </option>
                                    <option value="bookings@spicetrip.com"> SPICETRIP </option>
                                    <option value="Rohini.Arora@aexp.com "> AMEX-NGA </option>
                                    <option
                                        value="externalblr.visadesk@in.bosch.com,fixed-term.Hemanth.Bambure@in.bosch.com,Santhosh.GayathriVenkatesh">
                                        ROBERT BOSCH - PRE APPROVAL </option>
                                    <option value="info@bulkliquid.net"> BULK LIQUID </option>
                                    <option value="arjun@poshmiles.com;raghu@poshmiles.com;azam@poshmiles.com"> TRAVEL
                                        CROFT / POSHMILES </option>
                                    <option value="champion.trvl@gmail.com"> CHAMPION TRAVELS </option>
                                    <option value="silicontravels08@gmail.com/sales.silicontravels12@gmail.com ">
                                        SILICAN FOREX &amp; TRAVELS </option>
                                    <option value="sgupta@uniglobeperfect.com"> PERFECT CONNECTION(AHAMEDABAD) </option>
                                    <option value="sandeshdz11@gmail.com"> BEATRIX-BLR </option>
                                    <option value="visa.sbd@in.kuoni.com"> KUONI TRAVELS - HYD </option>
                                    <option value="ritu@rohanenterprises.in"> ROHAN ENTERPRISES </option>
                                    <option value="marketing@freedomholidaysindia.org"> FREEDOM HOLIDAYS </option>
                                    <option value="vruddhitravels@gmail.com "> VRUDDHI TRAVELS </option>
                                    <option value="holiday@takeabreak.in/sales@ takeabreak.in"> TAKE A BREAK </option>
                                    <option value="kirshana@buenavistaholiday.co.in/sudesh17340@gmail.com"> BUENAVISTA
                                        HOLIDAY </option>
                                    <option value="mirasblr@gmail.com"> TRAVEL ITCH </option>
                                    <option value="nokiavisa@aexp.com;visa_helpdesk.bangalore@nokia.com"> AMEX-NOKIA
                                    </option>
                                    <option value="coca-colatraveldesk@aexp.com"> AMEX-COCOCOLA </option>
                                    <option value="namrata@morgan-dynamics.com; "> MORGAN </option>
                                    <option value="muthu@travelarcade.co.in"> TRAVEL ARCADE-BLR </option>
                                    <option value="muthu@travelarcade.co.in"> TRAVEL ARCADE-BLR </option>
                                    <option value="Travel.Kuoni@tvsmotor.co.in/Yokesh.M@tvsmotor.com"> KUONI </option>
                                    <option value="Travel.Kuoni@tvsmotor.co.in/Yokesh.M@tvsmotor.com"> KUONI-TVS MOTOR
                                    </option>
                                    <option value="csd2.bom@inorbittours.com"> IN ORBIT TOURS </option>
                                    <option value="visa3@girikand.com "> Girikand Travels </option>
                                    <option value="raastaholidays@gmail.com"> RAASTA HOLIDAYS </option>
                                    <option value="naveen.m@gapbridgesoft.com"> GAPBRIDGE </option>
                                    <option value="visas@suntourismpune.com"> SUN TOURISM INTERNATIONAL </option>
                                    <option value="darshan ks (darshan@industraveller.com"> INDUS TRAVELS </option>
                                    <option value="darshan ks (darshan@industraveller.com"> INDUS TRAVELLER </option>
                                    <option value="mercuryglobalholidays@gmail.com"> MERCURY GLOBAL HOLIDAYS </option>
                                    <option value="OCEANUSHOLIDAYSPVTLTD@GMAIL.COM"> OCEANUS HOLIDAYS PVT LTD </option>
                                    <option value="Abdul.Mateen.Karimuddin@aexp.com"> AMEX-INFORMATICA </option>
                                    <option value="ajay@travelmanager.co.in"> TRAVEL MANAGER HOLIDAYS PVT LTD </option>
                                    <option value="raghunath.lad@bcdtravel.in"> BCD-MUMBAI </option>
                                    <option value="srinivas@selfitrip.com"> SELFI TRIP </option>
                                    <option value=""> ACCENTURE </option>
                                    <option value="amazepixels@gmail.com"> Sathianathan </option>
                                    <option value="mail@mirasvisa.com"> WHITEFIELD HOLIDAYS </option>
                                    <option value="gururaju@flymeridians.com"> FLY MERIDIAN </option>
                                    <option value="Booking <booking@adhvagaholidays.com>"> Adhvaga Holidays Inc
                                    </option>
                                    <option value="Oasisvacations@outlook.com"> OASIS-BLR </option>
                                    <option value="chinmay@visaconsultancy.com"> VCS-BOM </option>
                                    <option value="Visa.IN@reedmackay.com"> reedmackay </option>
                                    <option value="TICKETING@COMPANYTRAVEL.IN"> COMPANY TRAVEL-BLR </option>
                                    <option value="justflyroopa@gmail.com"> ROOPA-BLR </option>
                                    <option value="DREAMSCAPETOURS .SJ@GMAIL.COM"> DREAMSCAPETOURS </option>
                                    <option value="opsmaa@mirasvisa.com"> MIRAS-CHENNAI </option>
                                    <option value="opsblr@mirasvisa.com"> ETHEREAL MACHINES PVT LTD </option>
                                    <option value="siddiq@skylinestours.com"> SKYLINES TOURS &amp; TRAVELS </option>
                                    <option value="help@weplanyourholidays.com"> THE HOLIDAY PLANNERS </option>
                                    <option value="accounts@travelloka.co.in"> TRAVEL LOKA </option>
                                    <option value="dipanjan@tripeur.com"> TRIPEUR </option>
                                    <option value="info@worldvisionholidays.com"> WORLD VISION HOLIDAYS </option>
                                    <option value="conrad.vinodh@whatfix.com"> WHATFIX </option>
                                    <option value="babu@rtwtravelandtours.com"> ROUND THE WORLD TRAVEL &amp; TOURS
                                    </option>
                                    <option value="ARahman@sameeratravel.com"> SAMEERA-HYD </option>
                                    <option value="newflywing@gmail.com"> NEW FLY WING TOURS &amp; TRAVELS </option>
                                    <option value="karthik@travelvisaxperts.in"> TRAVEL VISA EXPERTS-BLR </option>
                                    <option value="vegaavacations@yahoo.com"> VEGAA VACATIONS PVT LTD </option>
                                    <option value="visa8.bom@akbartravels.com"> AKBAR - MUMBAI </option>
                                    <option value="visa8.bom@akbartravels.com"> AKBAR - MUMBAI </option>
                                    <option value="visakaarmik@gmail.com"> SHANKAR - TOT </option>
                                    <option value="Athar Shaikh Akbartravels.com"> AKBAR - MUMBAI </option>
                                    <option value="arif@de-traveller.com"> DE TRAVELLER.COM </option>
                                    <option value="operations@ariusholidays.com"> ARIUS HOLIDAYS AND TRAVELS </option>
                                    <option value="tourtime.smg@gmail.com"> TOURTIME </option>
                                    <option value="blr@pawpl.com"> PRIYADARSHINI AIR WINGS PVT LTD </option>
                                    <option value="tourseekers.in@gmail.com"> FLYNN THOMAS (TOOR SEEKERS) </option>
                                    <option value="tourseekers.in@gmail.com"> FLYNN THOMAS (TOOR SEEKERS) </option>
                                    <option value="stanveer@hmatravel.com"> HMA TRAVEL </option>
                                    <option value="atwelltravelservices@gmail.com"> ATWELL TRAVEL SERVICES PVT LTD
                                    </option>
                                    <option value="arrowsofttravels@gmail.com"> ARROWSOFT TRAVEL LINES </option>
                                    <option value="mytravelmap18@gmail.com"> MY TRAVEL MAP </option>
                                    <option value=""> ANARA Travel </option>
                                    <option value="monica.c@sannciaholiday.com"> SANNCIA HOLIDAY </option>
                                    <option value=""> SIGNATURE TRAVEL </option>
                                    <option value="info@premiatravels.com"> PREMIA TRAVELS </option>
                                    <option value=""> GO SMILED TRAVEL </option>
                                    <option value="<info@thedreamsnavigator.com>"> DREAMS NAVIGATOR </option>
                                    <option value=""> AKBAR TRAVEL PUNE </option>
                                    <option value="opsblr@mirasvisa.com"> JCARE TOURS &amp; TRAVEL </option>
                                    <option value="visas@rubyworldtravel.com"> RUBY WORLD TRAVELS </option>
                                    <option value=""> Linde South Asia India Pvt Ltd </option>
                                    <option value=""> Linde South Asia India Pvt Ltd </option>
                                    <option value="manmeet@berryjourneys.com"> BERRY JOURNEYS </option>
                                    <option value=""> Linde South Asia India Pvt Ltd </option>
                                    <option value="external.ladson.carvallo@seg-automotive.com"> SEG AUTOMOTIVE INDIA
                                        PVT LTD </option>
                                    <option value="  info@thedreamsnavigator.com"> The Dreams Navigator </option>
                                    <option value="raju@ktinterserve.com"> KERALA TRAVELS CHENNAI </option>
                                    <option value="brenda@eclattravels.net"> ECLAT TOURS AND TRAVELS </option>
                                    <option value="jagadeesh@doctorpackindia.com"> DOCTOR PACK INDIA PRIVATE LIMITED
                                    </option>
                                    <option value="BOOKINGS@FUELIFEEXPLORERS.COM"> FUELIFE EXPLORERS </option>
                                    <option value=""> RSV TRAVELS </option>
                                    <option value=""> Linde South Asia India Pvt Ltd </option>
                                    <option value=""> SWISS RE GLOBAL </option>
                                    <option value="monesh@crinsonholidays.in"> CRIMSON HOLIDAYS LLP </option>
                                    <option value="exmaple@gamil.com"> Test </option>
                                    <option value="ndhivyapriya9@gmail.com"> ASD </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="employeeNumber">Subject:</label>
                                <input type="text" class="form-control" id="Subject" name="Subject"
                                    placeholder="Subject">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="taVaNumber">Message:</label>
                                <textarea class="form-control" name="message" id="messagen" rows="3"
                                        placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="taVaNumber">Attachment:</label>
                                <input class="form-control" type="file" id="attachment" name="attachment">
                                <input class="form-control" type="file" id="attachment1" name="attachment1">
                                <input class="form-control" type="file" id="attachment2" name="attachment2">
                                <input class="form-control" type="file" id="attachment3" name="attachment3">
                                <input class="form-control" type="file" id="attachment4" name="attachment4">
                            </div>
                        
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
