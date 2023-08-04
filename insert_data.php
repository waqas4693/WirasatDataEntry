<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Wirasat</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Custom Style Css File -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php
    if (isset($_SESSION['user_name'])) {
        ?>
                                                    <div class="row justify-content-center mt-0">
                                                        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                                                            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                                                <h2><strong>Wirasat</strong></h2>
                                                                <div class="row">
                                                                    <div class="col-md-12 mx-0">
                                                                        <form id="msform" method="POST"
                                                                            action="https://script.google.com/macros/s/AKfycbzIriT4T9-DZvflJiH8_z0ZOpOVBer01DY2eLf8ikGiAkFl7tAWOSni9jr5i0RFLbnMpw/exec">

                                                                            <!-- progressbar -->
                                                                            <ul id="progressbar">
                                                                                <li class="active" id="step-1"><strong>Step I</strong></li>
                                                                                <li id="step-2"><strong>Step II</strong></li>
                                                                                <li id="step-3"><strong>Step III</strong></li>
                                                                                <li id="step-4"><strong>Step IV</strong></li>
                                                                                <li id="step-5"><strong>Step V</strong></li>
                                                                                <li id="step-6"><strong>Step VI</strong></li>
                                                                            </ul>

                                                                            <!-- Get Current Date -->
                                                                            <input type="hidden" class="datetime" name="dateTime">

                                                                            <!-- Logged In User Name -->
                                                                            <input type="hidden" name="userName"
                                                                                value="<?php echo $_SESSION['first_name'] ?>">

                                                                            <!-- Fieldset - 1 -->
                                                                            <fieldset>
                                                                                <div class="form-card">
                                                                                    <h2 class="fs-title text-center">Invoice No</h2>
                                                                                    <input type="text" class="form-control" name="invoiceNo" placeholder="Invoice No">
                                                                                    <br>
                                                                                    <h6 class="fs-title text-center">Customer Name</h6>
                                                                                    <input type="text" class="form-control" name="customerName"
                                                                                        placeholder="Customer Name">
                                                                                </div>
                                                                                <button type="button" name="next" class="btn btn-primary next">Next</button>
                                                                            </fieldset>
                                                                            <!-- Fieldset - 1 -->

                                                                            <!-- Fieldset - 2 -->
                                                                            <fieldset>
                                                                                <div class="form-card">
                                                                                    <h2 class="fs-title text-center">Pick Society</h2>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="alNoor-Orchard"
                                                                                            value="Al Noor Orchard">
                                                                                        <label class="form-check-label" for="alNoor-Orchard">Al Noor Orchard</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="alBari-Residencia" value="Al Bari Residencia">
                                                                                        <label class="form-check-label" for="alBari-Residencia">Al Bari
                                                                                            Residencia</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="alJalil-Garden-Sheikhupura" value="Al Jalil Garden Sheikhupura">
                                                                                        <label class="form-check-label" for="alJalil-Garden-Sheikhupura">Al Jalil Garden
                                                                                            Sheikhupura</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="amazon-Mall"
                                                                                            value="Amazon Mall">
                                                                                        <label class="form-check-label" for="amazon-Mall">Amazon Mall</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="blue-World-City-Islamabad" value="Blue World City Islamabad">
                                                                                        <label class="form-check-label" for="blue-World-City-Islamabad">Blue World City
                                                                                            Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="bahria-Enclave"
                                                                                            value="bahria-Enclave">
                                                                                        <label class="form-check-label" for="alJalil-Garden-Sheikhupura">Bahria
                                                                                            Enclave</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="bahria-Town"
                                                                                            value="Bahria Town">
                                                                                        <label class="form-check-label" for="amazon-Mall">Bahria Town</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="citi-Housing-Kharian" value="Citi Housing Kharian">
                                                                                        <label class="form-check-label" for="citi-Housing-Kharian">Citi Housing
                                                                                            Kharian</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="citi-Housing-Multan" value="Citi Housing Multan">
                                                                                        <label class="form-check-label" for="citi-Housing-Multan">Citi Housing
                                                                                            Multan</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="capital-Smart-City" value="Capital Smart City">
                                                                                        <label class="form-check-label" for="capital-Smart-City">Capital Smart
                                                                                            City</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="dHA-Multan"
                                                                                            value="DHA Multan">
                                                                                        <label class="form-check-label" for="dHA-Multan">DHA Multan</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="dHA-Islamabad"
                                                                                            value="DHA Islamabad">
                                                                                        <label class="form-check-label" for="dHA-Islamabad">DHA Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="dream-Housing-Lahore" value="Dream Housing Lahore">
                                                                                        <label class="form-check-label" for="">Dream Housing Lahore</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="Eighteen-Islamabad-18" value="Eighteen Islamabad 18">
                                                                                        <label class="form-check-label" for="eighteen-Islamabad-18">Eighteen Islamabad
                                                                                            18</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="faisal-Town-Phase-1" value="Faisal Town Phase 1">
                                                                                        <label class="form-check-label" for="faisal-Town-Phase-1">Faisal Town Phase
                                                                                            1</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="golf-Floras"
                                                                                            value="Golf Floras">
                                                                                        <label class="form-check-label" for="golf-Floras">Golf Floras</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="hateem-City"
                                                                                            value="Hateem City">
                                                                                        <label class="form-check-label" for="hateem-City">Hateem City</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="kingdom-Valley-Islamabad" value="Kingdom Valley Islamabad">
                                                                                        <label class="form-check-label" for="kingdom-Valley-Islamabad">Kingdom Valley
                                                                                            Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="kings-Town-Lahore" value="Kings Town Lahore">
                                                                                        <label class="form-check-label" for="kings-Town-Lahore">Kings Town
                                                                                            Lahore</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="lahore-Smart-City" value="Lahore Smart City">
                                                                                        <label class="form-check-label" for="lahore-Smart-City">Lahore Smart
                                                                                            City</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="mall-of-Arabia"
                                                                                            value="Mall of Arabia">
                                                                                        <label class="form-check-label" for="mall-of-Arabia">Mall of Arabia</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="nova-City-Islamabad" value="Nova City Islamabad">
                                                                                        <label class="form-check-label" for="nova-City-Islamabad">Nova City
                                                                                            Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="nova-One-Lahore"
                                                                                            value="Nova One Lahore">
                                                                                        <label class="form-check-label" for="nova-One-Lahore">Nova One Lahore</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="nova-City-Peshawar" value="Nova City Peshawar">
                                                                                        <label class="form-check-label" for="nova-City-Peshawar">Nova City
                                                                                            Peshawar</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="new-Metro-City-GK" value="New Metro City GK">
                                                                                        <label class="form-check-label" for="new-Metro-City-GK">New Metro City
                                                                                            GK</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="new-City-Paradise" value="New City Paradise">
                                                                                        <label class="form-check-label" for="new-City-Paradise">New City
                                                                                            Paradise</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="new-Metro-City-Mandi-Bahauddin" value="New Metro City Mandi Bahauddin">
                                                                                        <label class="form-check-label" for="new-Metro-City-Mandi-Bahauddin">New Metro
                                                                                            City Mandi Bahauddin</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="park-View-City-Lahore" value="Park View City Lahore">
                                                                                        <label class="form-check-label" for="park-View-City-Lahore">Park View City
                                                                                            Lahore</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="park-View-City-Islamabad" value="Park View City Islamabad">
                                                                                        <label class="form-check-label" for="park-View-City-Islamabad">Park View City
                                                                                            Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="royal-Orchard-Multan" value="Royal Orchard Multan">
                                                                                        <label class="form-check-label" for="royal-Orchard-Multan">Royal Orchard
                                                                                            Multan</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="rudn-Enclave"
                                                                                            value="Rudn Enclave">
                                                                                        <label class="form-check-label" for="rudn-Enclave">Rudn Enclave</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="river-Vista-Islamabad" value="River Vista Islamabad">
                                                                                        <label class="form-check-label" for="river-Vista-Islamabad">River Vista
                                                                                            Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="silver-City-Islamabad" value="Silver City Islamabad">
                                                                                        <label class="form-check-label" for="silver-City-Islamabad">Silver City
                                                                                            Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="signature-(J7)"
                                                                                            value="Signature (J7)">
                                                                                        <label class="form-check-label" for="signature-(J7)">Signature (J7)</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="taj-Residencia-Islamabad" value="Taj Residencia Islamabad">
                                                                                        <label class="form-check-label" for="taj-Residencia-Islamabad">Taj Residencia
                                                                                            Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="tab-City"
                                                                                            value="Tab City">
                                                                                        <label class="form-check-label" for="tab-City">Tab City</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="victoria-City"
                                                                                            value="Victoria City">
                                                                                        <label class="form-check-label" for="victoria-City">Victoria City</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="wirasat-Others"
                                                                                            value="Wirasat / Others">
                                                                                        <label class="form-check-label" for="wirasat-Others">Wirasat / Others</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="7-Wonders-City-Islamabad" value="7 Wonders City Islamabad">
                                                                                        <label class="form-check-label" for="7-Wonders-City-Islamabad">7 Wonders City
                                                                                            Islamabad</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="lahore-Motorway-City" value="Lahore Motorway City">
                                                                                        <label class="form-check-label" for="lahore-Motorway-City">Lahore Motorway
                                                                                            City</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="soul-City"
                                                                                            value="Soul City">
                                                                                        <label class="form-check-label" for="soul-City">Soul City</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="faisal-Town-Phase-2" value="Faisal Town Phase 2">
                                                                                        <label class="form-check-label" for="faisal-Town-Phase-2">Faisal Town Phase
                                                                                            2</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio"
                                                                                            id="mPCHS-Chakri-Road" value="MPCHS Chakri Road">
                                                                                        <label class="form-check-label" for="mPCHS-Chakri-Road">MPCHS Chakri
                                                                                            Road</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="society" type="radio" id="faisal-Hills"
                                                                                            value="Faisal Hills">
                                                                                        <label class="form-check-label" for="faisal-Hills">Faisal Hills</label>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" name="previous" class="btn btn-primary previous">Back</button>
                                                                                <button id="societySelectConfirm" type="button" name="next"
                                                                                    class="btn btn-primary next">Next</button>
                                                                            </fieldset>
                                                                            <!-- Fieldset - 2 -->

                                                                            <!-- Fieldset - 3 -->
                                                                            <fieldset>
                                                                                <div class="form-card">
                                                                                    <h2 class="fs-title text-center">Pick Block</h2>

                                                                                    <!-- Al Noor Orchard Blocks -->
                                                                                    <div class="form-check alNoorOrchardBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-A"
                                                                                            value="Block A">
                                                                                        <label class="form-check-label" for="block-A">Block A</label>
                                                                                    </div>
                                                                                    <div class="form-check alNoorOrchardBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-B"
                                                                                            value="Block B">
                                                                                        <label class="form-check-label" for="block-B">Block B</label>
                                                                                    </div>
                                                                                    <div class="form-check alNoorOrchardBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-C"
                                                                                            value="Block C">
                                                                                        <label class="form-check-label" for="block-C">Block C</label>
                                                                                    </div>
                                                                                    <div class="form-check alNoorOrchardBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-A-Extension"
                                                                                            value="Block A Extension">
                                                                                        <label class="form-check-label" for="block-A-Extension">Block A
                                                                                            Extension</label>
                                                                                    </div>
                                                                                    <div class="form-check alNoorOrchardBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="west-Marina"
                                                                                            value="West Marina">
                                                                                        <label class="form-check-label" for="west-Marina">West Marina</label>
                                                                                    </div>
                                                                                    <div class="form-check alNoorOrchardBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="west-Marina-Sport-City" value="West Marina Sport City">
                                                                                        <label class="form-check-label" for="west-Marina-Sport-City">West Marina Sport
                                                                                            City</label>
                                                                                    </div>
                                                                                    <div class="form-check alNoorOrchardBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="marina-Sport-City-Residencia" value="Marina Sport City Residencia">
                                                                                        <label class="form-check-label" for="marina-Sport-City-Residencia">Marina Sport
                                                                                            City Residencia</label>
                                                                                    </div>
                                                                                    <!-- Al Noor Orchard Blocks -->

                                                                                    <!-- Al Bari Residencia Blocks -->
                                                                                    <div class="form-check alBariResidenciaBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-A"
                                                                                            value="Block A">
                                                                                        <label class="form-check-label" for="block-A">Block A</label>
                                                                                    </div>
                                                                                    <div class="form-check alBariResidenciaBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-B"
                                                                                            value="Block B">
                                                                                        <label class="form-check-label" for="block-B">Block B</label>
                                                                                    </div>
                                                                                    <div class="form-check alBariResidenciaBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-C"
                                                                                            value="Block C">
                                                                                        <label class="form-check-label" for="block-C">Block C</label>
                                                                                    </div>
                                                                                    <!-- Al Bari Residencia Blocks -->

                                                                                    <!-- Al Jalil Garden Sheikhupura Blocks -->
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Rose-Blocks" value="Al Jalil Garden Rose Blocks">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Rose-Blocks">Al Jalil
                                                                                            Garden Rose Blocks</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Tulip-Blocks" value="Al Jalil Garden Tulip Blocks">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Tulip-Blocks">Al Jalil
                                                                                            Garden Tulip Blocks</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Jasmine-Blocks" value="Al Jalil Garden Jasmine Blocks">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Jasmine-Blocks">Al Jalil
                                                                                            Garden Jasmine Blocks</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-A" value="Al Jalil Garden Block A">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-A">Al Jalil Garden
                                                                                            Block A</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-B" value="Al Jalil Garden Block B">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-B">Al Jalil Garden
                                                                                            Block B</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-C" value="Al Jalil Garden Block C">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-C">Al Jalil Garden
                                                                                            Block C</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-D" value="Al Jalil Garden Block D">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-D">Al Jalil Garden
                                                                                            Block D</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-E" value="Al Jalil Garden Block E">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-E">Al Jalil Garden
                                                                                            Block E</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-F" value="Al Jalil Garden Block F">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-F">Al Jalil Garden
                                                                                            Block F</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-G" value="Al Jalil Garden Block G">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-G">Al Jalil Garden
                                                                                            Block G</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-H" value="Al Jalil Garden Block H">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-H">Al Jalil Garden
                                                                                            Block H</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-I" value="Al Jalil Garden Block I">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-I">Al Jalil Garden
                                                                                            Block I</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-J" value="Al Jalil Garden Block J">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-J">Al Jalil Garden
                                                                                            Block J</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-K" value="Al Jalil Garden Block K">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-K">Al Jalil Garden
                                                                                            Block K</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-L" value="Al Jalil Garden Block L">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-L">Al Jalil Garden
                                                                                            Block L</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-M" value="Al Jalil Garden Block M">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-M">Al Jalil Garden
                                                                                            Block M</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-N" value="Al Jalil Garden Block N">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-N">Al Jalil Garden
                                                                                            Block N</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-O" value="Al Jalil Garden Block O">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-O">Al Jalil Garden
                                                                                            Block O</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-P" value="Al Jalil Garden Block P">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-P">Al Jalil Garden
                                                                                            Block P</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-Q" value="Al Jalil Garden Block Q">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-Q">Al Jalil Garden
                                                                                            Block Q</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-R" value="Al Jalil Garden Block R">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-R">Al Jalil Garden
                                                                                            Block R</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-S" value="Al Jalil Garden Block S">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-S">Al Jalil Garden
                                                                                            Block S</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-T" value="Al Jalil Garden Block T">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-T">Al Jalil Garden
                                                                                            Block T</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-U" value="Al Jalil Garden Block U">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-U">Al Jalil Garden
                                                                                            Block U</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-V" value="Al Jalil Garden Block V">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-V">Al Jalil Garden
                                                                                            Block V</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-W" value="Al Jalil Garden Block W">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-W">Al Jalil Garden
                                                                                            Block W</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-X" value="Al Jalil Garden Block X">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-X">Al Jalil Garden
                                                                                            Block X</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-Y" value="Al Jalil Garden Block Y">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-Y">Al Jalil Garden
                                                                                            Block Y</label>
                                                                                    </div>
                                                                                    <div class="form-check alJalilGardenSheikhupuraBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="al-Jalil-Garden-Block-Z" value="Al Jalil Garden Block Z">
                                                                                        <label class="form-check-label" for="al-Jalil-Garden-Block-Z">Al Jalil Garden
                                                                                            Block Z</label>
                                                                                    </div>
                                                                                    <!-- Al Jalil Garden Sheikhupura Blocks -->

                                                                                    <!-- Amazon Mall Blocks -->
                                                                                    <div class="form-check amazonMallBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="shop"
                                                                                            value="Shop">
                                                                                        <label class="form-check-label" for="shop">Shop</label>
                                                                                    </div>
                                                                                    <div class="form-check amazonMallBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="food-Court"
                                                                                            value="Food Court">
                                                                                        <label class="form-check-label" for="food-Court">Food Court</label>
                                                                                    </div>
                                                                                    <!-- Amazon Mall Blocks -->

                                                                                    <!-- Blue World City Islamabad Blocks -->
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="awami-Apartments"
                                                                                            value="Awami Apartments">
                                                                                        <label class="form-check-label" for="awami-Apartments">Awami Apartments</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="country-Farms"
                                                                                            value="Country Farms">
                                                                                        <label class="form-check-label" for="country-Farms">Country Farms</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="awami-Block"
                                                                                            value="Awami Block">
                                                                                        <label class="form-check-label" for="awami-Block">Awami Block</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="overseas-Block"
                                                                                            value="Overseas Block">
                                                                                        <label class="form-check-label" for="overseas-Block">Overseas Block</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="waterfront-Block"
                                                                                            value="Waterfront Block">
                                                                                        <label class="form-check-label" for="waterfront-Block">Waterfront Block</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="general-Block"
                                                                                            value="General Block">
                                                                                        <label class="form-check-label" for="general-Block">General Block</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="sports-Valley-Block" value="Sports Valley Block">
                                                                                        <label class="form-check-label" for="sports-Valley-Block">Sports Valley
                                                                                            Block</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="hollywood-Block"
                                                                                            value="Hollywood Block">
                                                                                        <label class="form-check-label" for="hollywood-Block">Hollywood Block</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="general-Block-Sector-1-5" value="General Block Sector 1-5">
                                                                                        <label class="form-check-label" for="general-Block-Sector-1-5">General Block
                                                                                            Sector 1-5</label>
                                                                                    </div>
                                                                                    <div class="form-check blueWorldCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="overseas-Block-Sector-1-14" value="Overseas Block Sector 1-14">
                                                                                        <label class="form-check-label" for="overseas-Block-Sector-1-14">Overseas Block
                                                                                            Sector 1-14</label>
                                                                                    </div>
                                                                                    <!-- Blue World City Islamabad Blocks -->

                                                                                    <!-- Bahria Enclave Blocks -->
                                                                                    <div class="form-check bahriaEnclaveBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-A-Z"
                                                                                            value="Block A - Z">
                                                                                        <label class="form-check-label" for="block-A-Z">Block-A-Z</label>
                                                                                    </div>
                                                                                    <!-- Bahria Enclave Blocks -->

                                                                                    <!-- Bahria Town Blocks -->
                                                                                    <div class="form-check bahriaTownBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-A-Z"
                                                                                            value="Block A - Z">
                                                                                        <label class="form-check-label" for="block-A-Z">Block-A-Z</label>
                                                                                    </div>
                                                                                    <!-- Bahria Town Blocks -->

                                                                                    <!-- Citi Housing Kharian Blocks -->
                                                                                    <div class="form-check citiHousingKharianBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="general-Block"
                                                                                            value="General Block">
                                                                                        <label class="form-check-label" for="general-Block">General Block</label>
                                                                                    </div>
                                                                                    <div class="form-check citiHousingKharianBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="overesas-Block"
                                                                                            value="Overesas Block">
                                                                                        <label class="form-check-label" for="overesas-Block">Overesas Block</label>
                                                                                    </div>
                                                                                    <!-- Citi Housing Kharian Blocks -->

                                                                                    <!-- Citi Housing Multan Blocks -->
                                                                                    <div class="form-check citiHousingMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block-A-Z"
                                                                                            value="Block A - Z">
                                                                                        <label class="form-check-label" for="block-A-Z">Block-A-Z</label>
                                                                                    </div>
                                                                                    <!-- Citi Housing Multan Blocks -->

                                                                                    <!-- Capital Smart City Blocks -->
                                                                                    <div class="form-check capitalSmartCityBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio"
                                                                                            id="oS-East" value="OS East">
                                                                                        <label class="form-check-label" for="oS-East">OS East</label>
                                                                                    </div>
                                                                                    <div class="form-check capitalSmartCityBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio"
                                                                                            id="oS-Central" value="OS Central">
                                                                                        <label class="form-check-label" for="oS-Central">OS Central</label>
                                                                                    </div>
                                                                                    <div class="form-check capitalSmartCityBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio"
                                                                                            id="exective-1" value="Exective 1">
                                                                                        <label class="form-check-label" for="exective-1">Exective 1</label>
                                                                                    </div>
                                                                                    <div class="form-check capitalSmartCityBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio"
                                                                                            id="oS-Prime-1" value="OS Prime 1">
                                                                                        <label class="form-check-label" for="oS-Prime-1">OS Prime 1</label>
                                                                                    </div>
                                                                                    <div class="form-check capitalSmartCityBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio"
                                                                                            id="oS-Prime-2" value="oS-Prime-2">
                                                                                        <label class="form-check-label" for="oS-Prime-2">OS Prime 2</label>
                                                                                    </div>
                                                                                    <div class="form-check capitalSmartCityBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio"
                                                                                            id="harmony-Block-East" value="Harmony Block East">
                                                                                        <label class="form-check-label" for="harmony-Block-East">Harmony Block
                                                                                            East</label>
                                                                                    </div>
                                                                                    <div class="form-check capitalSmartCityBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio"
                                                                                            id="harmony-Block-Central" value="Harmony Block Central">
                                                                                        <label class="form-check-label" for="harmony-Block-Central">Harmony Block
                                                                                            Central</label>
                                                                                    </div>
                                                                                    <div class="form-check capitalSmartCityBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio"
                                                                                            id="harmony-Block" value="Harmony Block">
                                                                                        <label class="form-check-label" for="harmony-Block">Harmony Block</label>
                                                                                    </div>
                                                                                    <!-- Capital Smart City Blocks -->

                                                                                    <!-- DHA Multan Blocks -->
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="a"
                                                                                            value="A">
                                                                                        <label class="form-check-label" for="a">A</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="b1"
                                                                                            value="B1">
                                                                                        <label class="form-check-label" for="b1">B1</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="b2"
                                                                                            value="B2">
                                                                                        <label class="form-check-label" for="b2">B2</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="c"
                                                                                            value="C">
                                                                                        <label class="form-check-label" for="C">C</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="d"
                                                                                            value="D">
                                                                                        <label class="form-check-label" for="D">D</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="e"
                                                                                            value="E">
                                                                                        <label class="form-check-label" for="e">E</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="f"
                                                                                            value="F">
                                                                                        <label class="form-check-label" for="f">F</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="g"
                                                                                            value="G">
                                                                                        <label class="form-check-label" for="g">G</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="h"
                                                                                            value="H">
                                                                                        <label class="form-check-label" for="h">H</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="i"
                                                                                            value="I">
                                                                                        <label class="form-check-label" for="i">I</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="j"
                                                                                            value="J">
                                                                                        <label class="form-check-label" for="j">J</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="k"
                                                                                            value="K">
                                                                                        <label class="form-check-label" for="k">K</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="l"
                                                                                            value="L">
                                                                                        <label class="form-check-label" for="l">L</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="m"
                                                                                            value="M">
                                                                                        <label class="form-check-label" for="m">M</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="n"
                                                                                            value="N">
                                                                                        <label class="form-check-label" for="n">N</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="o"
                                                                                            value="O">
                                                                                        <label class="form-check-label" for="o">O</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="p"
                                                                                            value="P">
                                                                                        <label class="form-check-label" for="p">P</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="q"
                                                                                            value="Q">
                                                                                        <label class="form-check-label" for="q">Q</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="r"
                                                                                            value="R">
                                                                                        <label class="form-check-label" for="r">R</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="s"
                                                                                            value="S">
                                                                                        <label class="form-check-label" for="s">S</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="t"
                                                                                            value="T">
                                                                                        <label class="form-check-label" for="t">T</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="u"
                                                                                            value="U">
                                                                                        <label class="form-check-label" for="u">U</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="v"
                                                                                            value="V">
                                                                                        <label class="form-check-label" for="v">V</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="w1"
                                                                                            value="W1">
                                                                                        <label class="form-check-label" for="w1">W1</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="W2"
                                                                                            value="W2">
                                                                                        <label class="form-check-label" for="w2">W2</label>
                                                                                    </div>
                                                                                    <div class="form-check dHaMultanBlocks">
                                                                                        <input class="form-check-input" name="block" name="block" type="radio" id="X"
                                                                                            value="X">
                                                                                        <label class="form-check-label" for="x">X</label>
                                                                                    </div>
                                                                                    <!-- DHA Multan Blocks -->

                                                                                    <!-- DHA Islamabad Blocks -->
                                                                                    <div class="form-check dHAIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block"
                                                                                            value="Block">
                                                                                        <label class="form-check-label" for="block">Block</label>
                                                                                    </div>
                                                                                    <!-- DHA Islamabad Blocks -->

                                                                                    <!-- Dream Housing Lahore Blocks -->
                                                                                    <div class="form-check dreamHousingLahoreBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="block"
                                                                                            value="Block">
                                                                                        <label class="form-check-label" for="block">Block</label>
                                                                                    </div>
                                                                                    <!-- Dream Housing Lahore Blocks -->

                                                                                    <!-- Eighteen Islamabad 18 Blocks -->
                                                                                    <div class="form-check eighteenIslamabad18Blocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="apartment"
                                                                                            value="apartment">
                                                                                        <label class="form-check-label" for="Apartment">Apartment</label>
                                                                                    </div>
                                                                                    <div class="form-check eighteenIslamabad18Blocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="shop"
                                                                                            value="Shop">
                                                                                        <label class="form-check-label" for="Shop">Shop</label>
                                                                                    </div>
                                                                                    <div class="form-check eighteenIslamabad18Blocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="villa-10M"
                                                                                            value="Villa 10M">
                                                                                        <label class="form-check-label" for="villa-10M">Villa 10M</label>
                                                                                    </div>
                                                                                    <div class="form-check eighteenIslamabad18Blocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="villa-1-Kanal"
                                                                                            value="Villa 1 Kanal">
                                                                                        <label class="form-check-label" for="villa-1-Kanal">Villa 1 Kanal</label>
                                                                                    </div>
                                                                                    <!-- Eighteen Islamabad 18 Blocks -->

                                                                                    <!-- Faisal Town Phase 1 Blocks -->
                                                                                    <div class="form-check faisalTownPhase1Blocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="faisal-a"
                                                                                            value="A">
                                                                                        <label class="form-check-label" for="faisal-a">A</label>
                                                                                    </div>
                                                                                    <div class="form-check faisalTownPhase1Blocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="faisal-b"
                                                                                            value="B">
                                                                                        <label class="form-check-label" for="faisal-b">B</label>
                                                                                    </div>
                                                                                    <div class="form-check faisalTownPhase1Blocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="faisal-c"
                                                                                            value="C">
                                                                                        <label class="form-check-label" for="faisal-c">C</label>
                                                                                    </div>
                                                                                    <!-- Faisal Town Phase 1 Blocks -->

                                                                                    <!-- Golf Floras Blocks -->
                                                                                    <div class="form-check golfFlorasBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="shop"
                                                                                            value="Shop">
                                                                                        <label class="form-check-label" for="shop">Shop</label>
                                                                                    </div>
                                                                                    <div class="form-check golfFlorasBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="apartment"
                                                                                            value="Apartment">
                                                                                        <label class="form-check-label" for="apartment">Apartment</label>
                                                                                    </div>
                                                                                    <!-- Golf Floras Blocks -->

                                                                                    <!-- Hateem City Blocks -->
                                                                                    <div class="form-check hateemCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="general"
                                                                                            value="General">
                                                                                        <label class="form-check-label" for="general">General</label>
                                                                                    </div>
                                                                                    <!-- Hateem City Blocks -->

                                                                                    <!-- Kingdom Valley Islamabad Blocks -->
                                                                                    <div class="form-check kingdomValleyIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="exective"
                                                                                            value="Exective">
                                                                                        <label class="form-check-label" for="exective">Exective</label>
                                                                                    </div>
                                                                                    <div class="form-check kingdomValleyIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="kingdom-General"
                                                                                            value="General">
                                                                                        <label class="form-check-label" for="kingdom-General">General</label>
                                                                                    </div>
                                                                                    <div class="form-check kingdomValleyIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="farm-Houses"
                                                                                            value="Farm Houses">
                                                                                        <label class="form-check-label" for="farm-Houses">Farm Houses</label>
                                                                                    </div>
                                                                                    <div class="form-check kingdomValleyIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="commercial"
                                                                                            value="Commercial">
                                                                                        <label class="form-check-label" for="commercial">Commercial</label>
                                                                                    </div>
                                                                                    <div class="form-check kingdomValleyIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="elegant-Villa"
                                                                                            value="Elegant Villa">
                                                                                        <label class="form-check-label" for="elegant-Villa">Elegant Villa</label>
                                                                                    </div>
                                                                                    <!-- Kingdom Valley Islamabad Blocks -->

                                                                                    <!-- Kings Town Lahore Blocks -->
                                                                                    <div class="form-check kingsTownLahoreBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="general-Block"
                                                                                            value="General Block">
                                                                                        <label class="form-check-label" for="general-Block">General Block</label>
                                                                                    </div>
                                                                                    <div class="form-check kingsTownLahoreBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="overseas-Block"
                                                                                            value="Overseas Block">
                                                                                        <label class="form-check-label" for="overseas-Block">Overseas Block</label>
                                                                                    </div>
                                                                                    <div class="form-check kingsTownLahoreBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="executive-Block"
                                                                                            value="Executive Block">
                                                                                        <label class="form-check-label" for="executive-Block">Executive Block</label>
                                                                                    </div>
                                                                                    <!-- Kings Town Lahore Blocks -->

                                                                                    <!-- Mall of Arabia Blocks -->
                                                                                    <div class="form-check mallofArabiaBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="apartment"
                                                                                            value="Apartment">
                                                                                        <label class="form-check-label" for="apartment">Apartment</label>
                                                                                    </div>
                                                                                    <div class="form-check mallofArabiaBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="commercial"
                                                                                            value="Commercial">
                                                                                        <label class="form-check-label" for="commercial">Commercial</label>
                                                                                    </div>
                                                                                    <div class="form-check mallofArabiaBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="food-Court"
                                                                                            value="Food Court">
                                                                                        <label class="form-check-label" for="food-Court">Food Court</label>
                                                                                    </div>
                                                                                    <!-- Mall of Arabia Blocks -->

                                                                                    <!-- Nova City Islamabad Blocks -->
                                                                                    <div class="form-check novaCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="nova-General"
                                                                                            value="General">
                                                                                        <label class="form-check-label" for="nova-General">General</label>
                                                                                    </div>
                                                                                    <div class="form-check novaCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="overseas-Prime-Block" value="Overseas Prime Block">
                                                                                        <label class="form-check-label" for="overseas-Prime-Block">Overseas Prime
                                                                                            Block</label>
                                                                                    </div>
                                                                                    <div class="form-check novaCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="nova-Villa"
                                                                                            value="Villa">
                                                                                        <label class="form-check-label" for="nova-Villa">Villa</label>
                                                                                    </div>
                                                                                    <div class="form-check novaCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="e-Sprots"
                                                                                            value="E Sprots">
                                                                                        <label class="form-check-label" for="e-Sprots">E Sprots</label>
                                                                                    </div>
                                                                                    <!-- Nova City Islamabad Blocks -->

                                                                                    <!-- Nova One Lahore Blocks -->
                                                                                    <div class="form-check novaOneLahoreBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="nova-One-General"
                                                                                            value="General">
                                                                                        <label class="form-check-label" for="nova-One-General">General</label>
                                                                                    </div>
                                                                                    <!-- Nova One Lahore Blocks -->

                                                                                    <!-- Nova One Peshawar Blocks -->
                                                                                    <div class="form-check novaOnePeshawarBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="nova-One-Peshawar-General" value="General">
                                                                                        <label class="form-check-label" for="nova-One-Peshawar-General">General</label>
                                                                                    </div>
                                                                                    <!-- Nova One Peshawar Blocks -->

                                                                                    <!-- New Metro City GK Blocks -->
                                                                                    <div class="form-check newMetroCityGKBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="new-Metro-Block-A"
                                                                                            value="Block A">
                                                                                        <label class="form-check-label" for="new-Metro-Block-A">Block A</label>
                                                                                    </div>
                                                                                    <div class="form-check newMetroCityGKBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="new-Metro-Block-B"
                                                                                            value="Block B">
                                                                                        <label class="form-check-label" for="new-Metro-Block-B">Block B</label>
                                                                                    </div>
                                                                                    <div class="form-check newMetroCityGKBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="new-Metro-Block-C"
                                                                                            value="Block C">
                                                                                        <label class="form-check-label" for="new-Metro-Block-C">Block C</label>
                                                                                    </div>
                                                                                    <div class="form-check newMetroCityGKBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="low-Cost"
                                                                                            value="Low Cost">
                                                                                        <label class="form-check-label" for="low-Cost">Low Cost</label>
                                                                                    </div>
                                                                                    <div class="form-check newMetroCityGKBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="new-Metro-Villa"
                                                                                            value="Villa">
                                                                                        <label class="form-check-label" for="new-Metro-Villa">Villa</label>
                                                                                    </div>
                                                                                    <div class="form-check newMetroCityGKBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="new-Metro-General"
                                                                                            value="General">
                                                                                        <label class="form-check-label" for="new-Metro-General">General</label>
                                                                                    </div>
                                                                                    <!-- New Metro City GK Blocks -->

                                                                                    <!-- New City Paradise Blocks -->
                                                                                    <div class="form-check newCityParadiseBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="new-City-Paradise-General" value="General">
                                                                                        <label class="form-check-label" for="new-City-Paradise-General">General</label>
                                                                                    </div>
                                                                                    <!-- New City Paradise Blocks -->

                                                                                    <!-- New Metro City Mandi Bahauddin Blocks -->
                                                                                    <div class="form-check newMetroCityMandiBahauddinBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="new-Metro-City-Overseas" value="Overesas">
                                                                                        <label class="form-check-label" for="new-Metro-City-Overseas">Overesas</label>
                                                                                    </div>
                                                                                    <div class="form-check newMetroCityMandiBahauddinBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="new-Metro-City-General" value="General">
                                                                                        <label class="form-check-label" for="new-Metro-City-General">General</label>
                                                                                    </div>
                                                                                    <div class="form-check newMetroCityMandiBahauddinBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="new-Metro-City-General-Villa" value="Villa">
                                                                                        <label class="form-check-label" for="new-Metro-City-General-Villa">Villa</label>
                                                                                    </div>
                                                                                    <!-- New Metro City Mandi Bahauddin Blocks -->

                                                                                    <!-- Park View City Lahore Blocks -->
                                                                                    <div class="form-check parkViewCityLahoreBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Lahore-Crystal" value="Crystal">
                                                                                        <label class="form-check-label"
                                                                                            for="parkView-City-Lahore-Crystal">Crystal</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityLahoreBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Lahore-Overseas" value="Overseas">
                                                                                        <label class="form-check-label"
                                                                                            for="parkView-City-Lahore-Overseas">Overseas</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityLahoreBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-Lahore-golfEstate" value="Golf Estate">
                                                                                        <label class="form-check-label" for="parkView-Lahore-golfEstate">Golf
                                                                                            Estate</label>
                                                                                    </div>
                                                                                    <!-- Park View City Lahore Blocks -->

                                                                                    <!-- Park View City Islamabad Blocks -->
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-A" value="A">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-A">A</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-B" value="B">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-B">B</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-C" value="C">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-C">C</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-D" value="D">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-D">D</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-F" value="F">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-F">F</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-G" value="G">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-G">G</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-H" value="H">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-H">H</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-J" value="J">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-J">J</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-K" value="K">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-K">K</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-Overseas" value="Overseas">
                                                                                        <label class="form-check-label"
                                                                                            for="parkView-City-Islamabad-Overseas">Overseas</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-Hill-Estate" value="Hill Estate">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-Hill-Estate">Hill
                                                                                            Estate</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-Golf-Estate" value="Golf Estate">
                                                                                        <label class="form-check-label" for="parkView-City-Islamabad-Golf-Estate">Golf
                                                                                            Estate</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-Apartment" value="Apartment">
                                                                                        <label class="form-check-label"
                                                                                            for="parkView-City-Islamabad-Apartment">Apartment</label>
                                                                                    </div>
                                                                                    <div class="form-check parkViewCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="parkView-City-Islamabad-Lake-Commercial" value="Lake Commercial">
                                                                                        <label class="form-check-label"
                                                                                            for="parkView-City-Islamabad-Lake-Commercial">Lake Commercial</label>
                                                                                    </div>
                                                                                    <!-- Park View City Islamabad Blocks -->

                                                                                    <!-- Royal Orchard Multan Blocks -->
                                                                                    <div class="form-check royalOrchardMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="royal-Orchard-Multan-A" value="A">
                                                                                        <label class="form-check-label" for="royal-Orchard-Multan-A">A</label>
                                                                                    </div>
                                                                                    <div class="form-check royalOrchardMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="royal-Orchard-Multan-B" value="B">
                                                                                        <label class="form-check-label" for="royal-Orchard-Multan-B">B</label>
                                                                                    </div>
                                                                                    <div class="form-check royalOrchardMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="royal-Orchard-Multan-C" value="C">
                                                                                        <label class="form-check-label" for="royal-Orchard-Multan-C">C</label>
                                                                                    </div>
                                                                                    <div class="form-check royalOrchardMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="royal-Orchard-Multan-D" value="D">
                                                                                        <label class="form-check-label" for="royal-Orchard-Multan-D">D</label>
                                                                                    </div>
                                                                                    <div class="form-check royalOrchardMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="royal-Orchard-Multan-E" value="E">
                                                                                        <label class="form-check-label" for="royal-Orchard-Multan-E">E</label>
                                                                                    </div>
                                                                                    <div class="form-check royalOrchardMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="royal-Orchard-Multan-F" value="F">
                                                                                        <label class="form-check-label" for="royal-Orchard-Multan-F">F</label>
                                                                                    </div>
                                                                                    <div class="form-check royalOrchardMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="royal-Orchard-Multan-G" value="G">
                                                                                        <label class="form-check-label" for="royal-Orchard-Multan-G">G</label>
                                                                                    </div>
                                                                                    <div class="form-check royalOrchardMultanBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="royal-Orchard-Multan-Overseas" value="Overseas">
                                                                                        <label class="form-check-label"
                                                                                            for="royal-Orchard-Multan-Overseas">Overseas</label>
                                                                                    </div>
                                                                                    <!-- Royal Orchard Multan Blocks -->

                                                                                    <!-- Rudn Enclave Blocks -->
                                                                                    <div class="form-check rudnEnclaveBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="rudn-Enclave-General" value="General">
                                                                                        <label class="form-check-label" for="rudn-Enclave-General">General</label>
                                                                                    </div>
                                                                                    <div class="form-check rudnEnclaveBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="rudn-Enclave-Executive" value="Executive">
                                                                                        <label class="form-check-label" for="rudn-Enclave-Executive">Executive</label>
                                                                                    </div>
                                                                                    <div class="form-check rudnEnclaveBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="rudn-Enclave-Farm-Houses" value="Farm Houses">
                                                                                        <label class="form-check-label" for="rudn-Enclave-Farm-Houses">Farm
                                                                                            Houses</label>
                                                                                    </div>
                                                                                    <div class="form-check rudnEnclaveBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="rudn-Enclave-Villa" value="Villa">
                                                                                        <label class="form-check-label" for="rudn-Enclave-Villa">Villa</label>
                                                                                    </div>
                                                                                    <!-- Rudn Enclave Blocks -->

                                                                                    <!-- River Vista Islamabad Blocks -->
                                                                                    <div class="form-check riverVistaIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="river-Vista-Islamabad-Apartment" value="Apartment">
                                                                                        <label class="form-check-label"
                                                                                            for="river-Vista-Islamabad-Apartment">Apartment</label>
                                                                                    </div>
                                                                                    <div class="form-check riverVistaIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="river-Vista-Islamabad-Office" value="Office">
                                                                                        <label class="form-check-label"
                                                                                            for="river-Vista-Islamabad-Office">Office</label>
                                                                                    </div>
                                                                                    <div class="form-check riverVistaIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="river-Vista-Islamabad-Shop" value="Shop">
                                                                                        <label class="form-check-label" for="river-Vista-Islamabad-Shop">Shop</label>
                                                                                    </div>
                                                                                    <!-- River Vista Islamabad Blocks -->

                                                                                    <!-- Silver City Islamabad Blocks -->
                                                                                    <div class="form-check silverCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="silver-City-Islamabad-General" value="General">
                                                                                        <label class="form-check-label"
                                                                                            for="silver-City-Islamabad-General">General</label>
                                                                                    </div>
                                                                                    <div class="form-check silverCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="silver-City-Islamabad-Overseas" value="Overseas">
                                                                                        <label class="form-check-label"
                                                                                            for="silver-City-Islamabad-Overseas">Overseas</label>
                                                                                    </div>
                                                                                    <!-- Silver City Islamabad Blocks -->

                                                                                    <!-- Signature (J7) -->

                                                                                    <!-- Signature (J7) -->

                                                                                    <!-- Taj Residencia Islamabad Blocks -->
                                                                                    <div class="form-check tajResidenciaIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="lilly"
                                                                                            value="Lilly">
                                                                                        <label class="form-check-label" for="lilly">Lilly</label>
                                                                                    </div>
                                                                                    <div class="form-check tajResidenciaIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="tulip"
                                                                                            value="Tulip">
                                                                                        <label class="form-check-label" for="tulip">Tulip</label>
                                                                                    </div>
                                                                                    <div class="form-check tajResidenciaIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="gardenia"
                                                                                            value="Gardenia">
                                                                                        <label class="form-check-label" for="Gardenia">Gardenia</label>
                                                                                    </div>
                                                                                    <div class="form-check tajResidenciaIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="orchard"
                                                                                            value="Orchard">
                                                                                        <label class="form-check-label" for="orchard">Orchard</label>
                                                                                    </div>
                                                                                    <div class="form-check tajResidenciaIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="lotus"
                                                                                            value="Lotus">
                                                                                        <label class="form-check-label" for="lotus">Lotus</label>
                                                                                    </div>
                                                                                    <!-- Taj Residencia Islamabad Blocks -->

                                                                                    <!-- Tab City Blocks -->

                                                                                    <!-- Tab City Blocks -->

                                                                                    <!-- Victoria City Blocks -->
                                                                                    <div class="form-check victoriaCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="general"
                                                                                            value="General">
                                                                                        <label class="form-check-label" for="general">General</label>
                                                                                    </div>
                                                                                    <!-- Victoria City Blocks -->

                                                                                    <!-- Wirasat / Others Blocks -->

                                                                                    <!-- Wirasat / Others Blocks -->

                                                                                    <!-- 7 Wonders City Islamabad Blocks -->
                                                                                    <div class="form-check 7WondersCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="7-Wonders-City-Islamabad-General" value="General">
                                                                                        <label class="form-check-label"
                                                                                            for="7-Wonders-City-Islamabad-General">General</label>
                                                                                    </div>
                                                                                    <div class="form-check 7WondersCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="7-Wonders-City-Islamabad-Overseas" value="Overseas">
                                                                                        <label class="form-check-label"
                                                                                            for="7-Wonders-City-Islamabad-Overseas">Overseas</label>
                                                                                    </div>
                                                                                    <div class="form-check 7WondersCityIslamabadBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="7-Wonders-City-Islamabad-Gold" value="Gold">
                                                                                        <label class="form-check-label" for="7-Wonders-City-Islamabad-Gold">Gold</label>
                                                                                    </div>
                                                                                    <!-- 7 Wonders City Islamabad Blocks -->

                                                                                    <!-- Lahore Motorway City Blocks -->
                                                                                    <div class="form-check lahoreMotorwayCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="lahore-Motorway-City-General" value="General">
                                                                                        <label class="form-check-label"
                                                                                            for="lahore-Motorway-City-General">General</label>
                                                                                    </div>
                                                                                    <div class="form-check lahoreMotorwayCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="lahore-Motorway-City-R-Preminum-Block" value="R Preminum Block">
                                                                                        <label class="form-check-label" for="lahore-Motorway-City-R-Preminum-Block">R
                                                                                            Preminum Block</label>
                                                                                    </div>
                                                                                    <!-- Lahore Motorway City Blocks -->

                                                                                    <!-- Soul City Blocks -->
                                                                                    <div class="form-check soulCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="soul-City-Block-A"
                                                                                            value="Block A">
                                                                                        <label class="form-check-label" for="soul-City-Block-A">Block A</label>
                                                                                    </div>
                                                                                    <div class="form-check soulCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="soul-City-Block-B"
                                                                                            value="Block B">
                                                                                        <label class="form-check-label" for="soul-City-Block-B">Block B</label>
                                                                                    </div>
                                                                                    <div class="form-check soulCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio" id="soul-City-Block-C"
                                                                                            value="Block C">
                                                                                        <label class="form-check-label" for="soul-City-Block-C">Block C</label>
                                                                                    </div>
                                                                                    <div class="form-check soulCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="soul-City-Block-A-Extension" value="Block A Extension">
                                                                                        <label class="form-check-label" for="soul-City-Block-A-Extension">Block A
                                                                                            Extension</label>
                                                                                    </div>
                                                                                    <div class="form-check soulCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="soul-City-West-Marina" value="West Marina">
                                                                                        <label class="form-check-label" for="soul-City-West-Marina">West Marina</label>
                                                                                    </div>
                                                                                    <div class="form-check soulCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="soul-City-West-Marina-Sport-City" value="West Marina Sport City">
                                                                                        <label class="form-check-label" for="soul-City-West-Marina-Sport-City">West
                                                                                            Marina Sport City</label>
                                                                                    </div>
                                                                                    <div class="form-check soulCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="soul-City-Marina-Sport-City-Residencia"
                                                                                            value="Marina Sport City Residencia">
                                                                                        <label class="form-check-label"
                                                                                            for="soul-City-Marina-Sport-City-Residencia">Marina Sport City
                                                                                            Residencia</label>
                                                                                    </div>
                                                                                    <!-- Soul City Blocks -->

                                                                                    <!-- MPCHS Chakri Road Blocks -->
                                                                                    <div class="form-check victoriaCityBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="mPCHS-Chakri-Road-General" value="General">
                                                                                        <label class="form-check-label" for="mPCHS-Chakri-Road-General">General</label>
                                                                                    </div>
                                                                                    <!-- MPCHS Chakri Road Blocks -->

                                                                                    <!-- Faisal Hills Blocks -->
                                                                                    <div class="form-check faisalHillsBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="faisal-Hills-Block-A" value="Block A">
                                                                                        <label class="form-check-label" for="faisal-Hills-Block-A">Block A</label>
                                                                                    </div>
                                                                                    <div class="form-check faisalHillsBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="faisal-Hills-Block-B" value="Block B">
                                                                                        <label class="form-check-label" for="faisal-Hills-Block-B">Block B</label>
                                                                                    </div>
                                                                                    <div class="form-check faisalHillsBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="faisal-Hills-Block-C" value="Block C">
                                                                                        <label class="form-check-label" for="faisal-Hills-Block-C">Block C</label>
                                                                                    </div>
                                                                                    <div class="form-check faisalHillsBlocks">
                                                                                        <input class="form-check-input" name="block" type="radio"
                                                                                            id="faisal-Hills-Exective" value="Exective">
                                                                                        <label class="form-check-label" for="faisal-Hills-Exective">Exective</label>
                                                                                    </div>
                                                                                    <!-- Faisal Hills Blocks -->

                                                                                </div>
                                                                                <button type="button" name="previous" class="btn btn-primary previous">Back</button>
                                                                                <button type="button" name="next" class="btn btn-primary next">Next</button>
                                                                            </fieldset>
                                                                            <!-- Fieldset - 3 -->

                                                                            <!-- Fieldset - 4 -->
                                                                            <fieldset>
                                                                                <div class="form-card">
                                                                                    <h2 class="fs-title text-center">Pick Plot Size</h2>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="2-Marla"
                                                                                            value="2 Marla">
                                                                                        <label class="form-check-label" for="2-Marla">2 Marla</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="3-Marla"
                                                                                            value="3 Marla">
                                                                                        <label class="form-check-label" for="3-Marla">3 Marla</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="4-Marla"
                                                                                            value="4 Marla">
                                                                                        <label class="form-check-label" for="4-Marla">4 Marla</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="4.5-Marla"
                                                                                            value="4.5 Marla">
                                                                                        <label class="form-check-label" for="4.5-Marla">4.5 Marla</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="5-Marla"
                                                                                            value="5 Marla">
                                                                                        <label class="form-check-label" for="5-Marla">5 Marla</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="6-Marla"
                                                                                            value="6 Marla">
                                                                                        <label class="form-check-label" for="6-Marla">6 Marla</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="7-Marla"
                                                                                            value="7 Marla">
                                                                                        <label class="form-check-label" for="7-Marla">7 Marla</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="8-Marla"
                                                                                            value="8 Marla">
                                                                                        <label class="form-check-label" for="8-Marla">8 Marla</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="1-Kanal"
                                                                                            value="1 Kanal">
                                                                                        <label class="form-check-label" for="1-Kanal">1 Kanal</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="2-Kanal"
                                                                                            value="2 Kanal">
                                                                                        <label class="form-check-label" for="2-Kanal">2 Kanal</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="4-Kanal"
                                                                                            value="4 Kanal">
                                                                                        <label class="form-check-label" for="4-Kanal">4 Kanal</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="5-Kanal"
                                                                                            value="5 Kanal">
                                                                                        <label class="form-check-label" for="5-Kanal">5 Kanal</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="8-Kanal"
                                                                                            value="8 Kanal">
                                                                                        <label class="form-check-label" for="8-Kanal">8 Kanal</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="plotSize" type="radio" id="16-Kanal"
                                                                                            value="16 Kanal">
                                                                                        <label class="form-check-label" for="16-Kanal">16 Kanal</label>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" name="previous" class="btn btn-primary previous">Back</button>
                                                                                <button type="button" name="next" class="btn btn-primary next">Next</button>
                                                                            </fieldset>
                                                                            <!-- Fieldset - 4 -->

                                                                            <!-- Fieldset - 5 -->
                                                                            <fieldset>
                                                                                <div class="form-card">
                                                                                    <h2 class="fs-title text-center">Price</h2>
                                                                                    <input type="text" class="form-control" name="totalPrice"
                                                                                        placeholder="Total Price" />
                                                                                    <br>
                                                                                    <h2 class="fs-title text-center">Item</h2>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="booking"
                                                                                            value="Booking">
                                                                                        <label class="form-check-label" for="booking">Booking</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="confirmation"
                                                                                            value="Confirmation">
                                                                                        <label class="form-check-label" for="confirmation">Confirmation</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="installment"
                                                                                            value="Installment">
                                                                                        <label class="form-check-label" for="installment">Installment</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="loose-Amount"
                                                                                            value="Loose Amount">
                                                                                        <label class="form-check-label" for="loose-Amount">Loose Amount</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="apr" value="Apr">
                                                                                        <label class="form-check-label" for="apr">Apr</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="kdf-Old"
                                                                                            value="Kdf Old">
                                                                                        <label class="form-check-label" for="kdf-Old">Kdf Old</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="air-Form"
                                                                                            value="Air Form">
                                                                                        <label class="form-check-label" for="air-Form">Air Form</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="raiv" value="Raiv">
                                                                                        <label class="form-check-label" for="raiv">Raiv</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="merging"
                                                                                            value="Merging">
                                                                                        <label class="form-check-label" for="merging">Merging</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="item" type="radio" id="kdf-New"
                                                                                            value="Kdf New">
                                                                                        <label class="form-check-label" for="kdf-New">Kdf New</label>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" name="previous" class="btn btn-primary previous">Back</button>
                                                                                <button type="button" name="next" class="btn btn-primary next">Next</button>
                                                                            </fieldset>
                                                                            <!-- Fieldset - 5 -->

                                                                            <!-- Fieldset - 6 -->
                                                                            <fieldset>
                                                                                <div class="form-card">
                                                                                    <h2 class="fs-title text-center">More Information</h2>
                                                                                    <input type="hidden" name="mergingSize" id="merging-Size-Dropdown">
                                                                                    <div class="dropdown">
                                                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                                                            aria-expanded="false">
                                                                                            Merging Size
                                                                                        </button>
                                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                            <a class="dropdown-item" data-value="2 Marla">2 Marla</a>
                                                                                            <a class="dropdown-item" data-value="3 Marla">3 Marla</a>
                                                                                            <a class="dropdown-item" data-value="4 Marla">4 Marla</a>
                                                                                            <a class="dropdown-item" data-value="4.5 Marla">4.5 Marla</a>
                                                                                            <a class="dropdown-item" data-value="5 Marla">5 Marla</a>
                                                                                            <a class="dropdown-item" data-value="6 Marla">6 Marla</a>
                                                                                            <a class="dropdown-item" data-value="7 Marla">7 Marla</a>
                                                                                            <a class="dropdown-item" data-value="8 Marla">8 Marla</a>
                                                                                            <a class="dropdown-item" data-value="1 Kanal">1 Kanal</a>
                                                                                            <a class="dropdown-item" data-value="2 Kanal">2 Kanal</a>
                                                                                            <a class="dropdown-item" data-value="4 Kanal">4 Kanal</a>
                                                                                            <a class="dropdown-item" data-value="5 Kanal">5 Kanal</a>
                                                                                            <a class="dropdown-item" data-value="8 Kanal">8 Kanal</a>
                                                                                            <a class="dropdown-item" data-value="16 Kanal">16 Kanal</a>
                                                                                        </div>
                                                                                    </div>

                                                                                    <h6 class="fs-title text-center">Verified Status</h6>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input form-check-inline" name="verifiedStatus" type="radio" id="verifiedStatus-true"
                                                                                            value="True">
                                                                                        <label class="form-check-label" for="verifiedStatus-true">True</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input form-check-inline" name="verifiedStatus" type="radio" id="verifiedStatus-false"
                                                                                            value="False">
                                                                                        <label class="form-check-label" for="verifiedStatus-true">False</label>
                                                                                    </div>

                                                                                    <br>
                                                                                    <input type="text" class="form-control" name="quantity" placeholder="Quantity" />
                                                                                    <br>
                                                                                    <input type="text" class="form-control" name="amount" placeholder="Amount" />
                                                                                    <br>
                                                                                    <h6 class="fs-title text-center">Inventory</h6>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="inventory" type="radio" id="booking"
                                                                                            value="Booking">
                                                                                        <label class="form-check-label" for="booking">Booking</label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" name="inventory" type="radio" id="confirmation"
                                                                                            value="Confirmation">
                                                                                        <label class="form-check-label" for="confirmation">Confirmation</label>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" name="previous" class="btn btn-primary previous">Back</button>
                                                                                <button id="formSubmitButton" type="submit" class="btn btn-primary">Submit</button>
                                                                            </fieldset>
                                                                            <!-- Fieldset - 6 -->

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                            <!-- Logout Function -->
                                                            <form action="backend_log_out.php" method="post">
                                                                <button type="submit" class="login100-form-btn">Log Out</button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                    <?php
    } else {
        ?>
                                                    <h1 class="p-2">You must be logged in to access this page.</h1>
    <?php } ?>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <!-- Custom JavaScript File -->
    <script src="js/main.js"></script>
</body>
</html>