<?php
session_start();
$fullNameValue = "";
$totalValue2 ="";
/*
 * Create a session variable for the mobile number
*/
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * * Allocate the mobile number session variable to a text box
 */

?>
<DOCTYPE html>
    <html>
        <head>
          
        <style>
            body { background-image: url(bluebackground.jpg);
            }
        </style>
    
            <title>Personal Details</title>
        </head>
        <body>
            <div class="form"> 
                <form name="Details" method="post" action="eBus3.php">
                    <center>
                        <table cellspacing="10">
                            <tr>
                                <h1 style="color:White;">Mc Allen Consulting Services</h1> 
        <hr/>
                                <td><b></b></td>
                                <td><b>Please enter in your details below:</b></TD>
                            </TR>
                            <tr>
                                <td>Name:</TD>
                                <td><input type="text" onkeypress="returnOnlyAlphabets(event,this);" id="txtName" name="txtName" value="" /></TD>
                            </tr>
                             <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" id="txtNum" name="txtNum" value="" /></TD>
                            </tr>
                            
                             <tr>
                                <td>Password:</TD>
                                <td><input type="text" id="txtPassword" name="txtPassword" value="" maxlength="4" /></TD>
                            </tr>
                            <tr>
                                <td><input type="hidden" id='txtTotal' name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                            </tr>
                                </table>
                                </centre>
                      
                       <center>
                           <input type="button" name="btnBack" id="btnBack" onclick="window.location.href='eBus1.php'" value="Back"/>
                           <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                       </center
                       </div>
                      </form>
            </body>
            </html>
                
       

