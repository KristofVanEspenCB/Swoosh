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
                    <tr>
                        <td class="tableImg">
                            <img class="optionIcon" src="images/savings.svg"/>
                        </td>
                        <td class="tableText">
                            <input type="text" name="fname" style="width:173px">
                        </td>
                    </tr>
                    <tr>
                        <td class="tableImg">
                              <img class="optionIcon" src="images/bank.svg"/>
                        </td>
                        <td class="tableText">
                            <select id="selectBank">
                                <option value="BANK">-- CHOOSE A BANK</option>
                                <option value="ING">ING</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="tableImg">
                            <img class="optionIcon" src="images/type.svg"/>
                        </td>
                        <td class="tableText">
                                <select id="selectType">
                                    <option value="TYPE">-- CHOOSE A TYPE</option>
                                    <option value="TEST">GREEN BOOK</option>
                                    <option value="TEST">ORANGE ACCOUNT</option>
                                    <option value="TEST">LION DEPOSIT</option>
                                    <option value="TEST">LION PREMIUM</option>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="tableImg">
                            <img class="optionIcon" src="images/term.svg"/>
                        </td>
                        <td class="tableText">
                            <input type="text" name="fname" style="width:120px">
                            <p style="display:inline-block;font-size:14px">months</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="tableImg">
                            <img class="optionIcon" src="images/type.svg"/>
                        </td>
                        <td class="tableText">
                            <select id="selectSave">
                                <option value="REAL">REAL</option>
                                <option value="VIRTUAL">VIRTUAL</option>

                            </select>
                        </td>
                    </tr>
                </table>
                <button class="button">
                        Swoosh it


                </button>
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
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
    $( "select" ).change(function() {
        if($("#selectBank").val()!='BANK' && $("#selectType").val()!='TYPE' && $("#selectTerm").val() != 'undefined' )
        {
            //alert($("#selectTerm").val());
            $(".button").css("background-color","#59cd4c");
            $(".button").css("border-color","#59cd4c");
        }else
        {
            $(".button").css("background-color","#969696");
            $(".button").css("border-color","#969696");
        }
    });

    $(".button").click(function(){
        $(".button").hide();
        $(".spinner").css("display","block");
        var delay = 1000; //Your delay in milliseconds

        setTimeout(function(){ $(location).attr('href','results.php'); }, delay);
    });
</script>
</html>