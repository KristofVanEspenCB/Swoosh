<?php
	include('include/cards.include.php');


?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/screen.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="js/js.js"></script>
</head>
<body>
	
	<section id="iphone">	
		<div id="container">
			<section id="upperNav">
				<div id="navBack">
                    <a href="#">Back</a>
                </div>
					<!-- <div id="locationIcon"></div> -->
                <div id="navTitle"><h1>Swoosh</h1></div>
				<div id="navSetting"><a href="countries.php">Settings</a></div>
			</section>
            <section id="networthSection">
                <h1>Networth: <span>€2.000</span> </h1>
            </section>

            <section>
                <table id="resultsList">
                    <tr onclick="showDetail()">
                        <td class="tablePrice">
                              <h1>€99,50</h1>
                        </td>
                        <td class="tableCompany">
                              <h1>MeDirect</h1>
                              <h2>ME3 Spaarrekening</h2>
                        </td>
                    </tr>
                    <tr class="detailed" style="display:none;background-color: #59cd4c; border:none;">
                        <td>
                            Base rate
                        </td>
                        <td>
                            1,95%
                        </td>
                    </tr>
                    <tr class="detailed" style="display:none;background-color: #59cd4c; border:none;">
                        <td>
                            Fidelity-Premium
                        </td>
                        <td>
                            0%
                        </td>
                    </tr>
                    <tr class="detailed" style="display:none;background-color: #59cd4c; border:none;">
                        <td>
                            User-rating
                        </td>
                        <td>
                            *****
                        </td>
                    </tr>
                    <tr class="detailed" style="display:none;background-color: #59cd4c; border:none;">
                        <td>
                            Guarantee
                        </td>
                        <td>
                            €100.000
                        </td>
                    </tr>
                    <tr class="detailed" style="display:none;background-color: #59cd4c; border:none;">
                        <td>
                            Country
                        </td>
                        <td>
                            Malta
                        </td>
                    </tr>
                    <tr class="detailed" style="display:none;background-color: #59cd4c; border:none;">
                        <td>

                        </td>
                        <td>
                            <button onclick="$(location).attr('href','indexUpdated.php')";> Add to action list</button>
                        </td>
                    </tr>
                    <tr >
                        <td class="tablePrice">
                            <h1>€85,96</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>PSA BANK</h1>
                            <h2>Distingo Plus</h2>
                        </td>
                    </tr>

                    <tr>
                        <td class="tablePrice">
                            <h1>€84,99</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>PSA BANK</h1>
                            <h2>Distingo</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tablePrice">
                            <h1>€68,10</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>MoneYou</h1>
                            <h2>Plus sparen</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tablePrice">
                            <h1>€66,59</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>MoneYou</h1>
                            <h2>Flex sparen</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tablePrice">
                            <h1>€66,56</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>Evi</h1>
                            <h2>Getrouwheidsrekening</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tablePrice">
                            <h1>€65,85</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>MoneYou</h1>
                            <h2>Direct sparen</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tablePrice">
                            <h1>€65,54</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>NIBC Direct</h1>
                            <h2>Getrouwheidsrekening</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tablePrice">
                            <h1>€63,53</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>NIBC Direct</h1>
                            <h2>Spaarrekening</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tablePrice">
                            <h1>€63,28</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>MeDirect</h1>
                            <h2>Express Spaarrekening</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="tablePrice">
                            <h1>€62,52</h1>
                        </td>
                        <td class="tableCompany">
                            <h1>Evi</h1>
                            <h2>Spaarrekening</h2>
                        </td>
                    </tr>



                </table>

            </section>




		</div>
        <div id="footer">
            <div id="footerProfile">
                <a href="#">Back</a>
            </div>
            <div id="footerBoost">

            </div>
            <div id="footerAction">
                <a href="countries.php">Settings</a>
            </div>
        </div>
	</section>

</body>
<script>
    function showDetail(){
        $( ".detailed" ).show();
       /* $( "#detailed" ).animate({
            backgroundColor: "#59cd4c",

        }, 300, function()
        {
            $( "#detailed .tablePrice h1").css("color","white");
        });
        */
    }
</script>
</html>