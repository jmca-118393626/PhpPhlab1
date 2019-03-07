<!DOCTYPE html>
<html>
    <head>
        <style>
            body { background-image: url(bluebackground.jpg);
            }
            div {
                text-align: center
            }
        </style>
    </head>
    <body>
        <!-- //Starting the session to get the session variable from last page-->
        <div>
           <center>
        <h1 style="color:White;">Mc Allen Consulting Services</h1> </hr>
        </div>
          <div>
<?php
session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "Customer Name : ",$fullNameValue.".";
echo "<br><br>";
echo "Your Total is : ",$totalValue2.".";
?>
          </div>
  <center>
      <br> </br>
      <br></br>
                           <input type="button" name="btnBack" id="btnBack" onclick="window.location.href='eBus2.php'" value="Back"/>
                           <input type="button" name="btnFinish" id="btnFinish" onclick="window.location.href='consulting.html'" value="Finish"/>
                       </center

    </body>
</html>

