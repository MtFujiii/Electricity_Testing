<?php
include "calculation.php"
    ?>


<html>

<head>
    <Title>Calculate House Bill</Title>


</head>

<body>
    <h2>Calculate House Electricity Bill</h2>

    <?php

    if ($error != "") {
        echo "<p><b>Warning: </br>" . $error . "</p>";
    }

    ?>

    <div style="margin-bottom: 50px">
        <table border="1" <tr>
            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td>Block Tariff (per month)</td>
                    <td>Unit</td>
                    <td>Rate</td>
                </tr>

                <tr>
                    <td>For the first 200 kWh (1-200 kWh) per month</td>
                    <td>sen/kWh</td>
                    <td>0.218</td>
                </tr>

                <tr>
                    <td>For the next 100 kWh (201-300 kWh) per month</td>
                    <td>sen/kWh</td>
                    <td>0.344</td>
                </tr>

                <tr>
                    <td>For the next 300 kWh (301-600 kWh) per month</td>
                    <td>sen/kWh</td>
                    <td>0.516</td>
                </tr>

                <tr>
                    <td>For the next 300 kWh (601-900 kWh) per month</td>
                    <td>sen/kWh</td>
                    <td>0.546</td>
                </tr>

                <tr>
                    <td>For the next kWh (901 kWh onwards) per month</td>
                    <td>sen/kWh</td>
                    <td>0.571</td>
                </tr>

                <tr>
                    <td colspan="3">The minimum monthly charge is RM3.00</td>
                </tr>

            </table>
    </div>

    <form method="post">
        Enter your first 200 kWh (1-200 kWh) per month :
        <input type="text" name="block1" value=""><br><br>

        Enter next 100 kWh (201 - 300 kWh) per month :
        <input type="text" name="block2" value=""><br><br>

        Enter next 300 kWh (301 - 600 kWh) per month :
        <input type="text" name="block3" value=""><br><br>

        Enter next 300 kWh (601 - 900 kWh) per month :
        <input type="text" name="block4" value=""><br><br>

        Enter next kWh (901 kWh onwards) per month :
        <input type="text" name="block5" value=""><br><br>

        <input type="submit" name="calculate" value="Calculate">

        <input type="submit" name="calculate" value="reset">

    </form>


    <?php

    if ($showBill) {

        echo "<h3>Your electricity bill</h3>";

        echo "1 - 200 Kwh : " . $block1 . "Kwh x 0.218 = RM " . number_format($charge1, 2) . "<br>";
        echo "201 - 300 Kwh : " . $block2 . "Kwh x 0.344 = RM " . number_format($charge2, 2) . "<br>";
        echo "301 - 600 Kwh : " . $block3 . "Kwh x 0.516 = RM " . number_format($charge3, 2) . "<br>";
        echo "601 - 900 Kwh : " . $block4 . "Kwh x 0.546 = RM " . number_format($charge4, 2) . "<br>";
        echo "901 Kwh onwards : " . $block5 . "Kwh x 0.571 = RM " . number_format($charge5, 2) . "<br>";

        echo "<br>";

        //summary
        echo "Total electricity consumption: " . $totalKwh . "kWh<br>";
        echo "TOtal consumption : RM" . number_format($totalCharge, 2) . "<br>";
        echo "SST 6% : RM " . number_format($sst, 2) . "<br>";
        echo "<b>Total Current Bill : RM " . number_format($totalBill, 2) . "</b><br>";
    }

    ?>

</body>

</html>