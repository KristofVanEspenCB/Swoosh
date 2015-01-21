<?php
	include('include/cards.include.php');


?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/screen.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
                <h1>Networth: <span>€0</span> </h1>
            </section>

            <section>
                <table id="optionList">
                    <tr onclick="$(location).attr('href','saving.php');">
                        <td class="tableImg">
                              <img class="optionIcon" src="images/savings.svg"/>
                        </td>
                        <td class="tableText">
                            <div class="tableTextTitle">
                                <p>Saving</p>
                            </div>
                            <div class="tableTextNext">
                                <img class="arrow" src="images/arrow.svg" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="tableImg">
                            <img class="optionIcon" src="images/mortgage.svg"/>
                        </td>
                        <td class="tableText" onclick="alert('test')">
                            <div class="tableTextTitle">
                                <p>Mortgage</p>
                            </div>
                            <div class="tableTextNext">
                                <img class="arrow" src="images/arrow.svg" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="tableImg">
                            <img class="optionIcon" src="images/Investments.svg"/>
                        </td>
                        <td class="tableText" onclick="alert('test')">
                            <div class="tableTextTitle">
                                <p>Investment</p>
                            </div>
                            <div class="tableTextNext">
                                <img class="arrow" src="images/arrow.svg" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="tableImg">
                            <img class="optionIcon" src="images/insurance.svg"/>
                        </td>
                        <td class="tableText" onclick="alert('test')">
                            <div class="tableTextTitle">
                                <p>Insurance</p>
                            </div>
                            <div class="tableTextNext">
                                <img class="arrow" src="images/arrow.svg" />
                            </div>
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
</html>