<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>Tax Calculator</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

    <?php
        // Check if the "Calculate" button was pressed, then get the data from inputs
        if (isset($_POST['monetaryAmmount']) && isset($_POST['taxPercentage']) && isset($_POST['date'])) {
            $monetaryAmmount = (float) $_POST['monetaryAmmount'];
            $taxPercentage = (float) $_POST['taxPercentage'];
            $date=(float) $_POST['date'];
            
        } else {
            $monetaryAmmount = 0;
            $taxPercentage = 0;
            $date=0;
            $ssf=0;
        }
        // Make the calculations
        if($monetaryAmmount<10000){
            $taxAmount = round(($monetaryAmmount * 0));
            $ssf=0;
        }
        elseif($monetaryAmmount<25000 && $monetaryAmmount>10000){
            $taxAmount = round(($monetaryAmmount * 11) / 100, 2);
            $ssf = round(($monetaryAmmount * 4 ) /100 ,2);
        }
        elseif($monetaryAmmount<50000 && $monetaryAmmount>25000){
            $taxAmount = round(($monetaryAmmount * 30) / 100, 2);
            $ssf = round(($monetaryAmmount * 4 ) /100 ,2);
        }
        else{$taxAmount = round(($monetaryAmmount * 45) / 100, 2);
            $ssf = round(($monetaryAmmount * 4 ) /100 ,2);

        }
        $finalAmount = round($monetaryAmmount - $taxAmount-$ssf, 2);
    ?>

    <div class="content">
        <h1>Tax Calculator</h1>
        <form action="" method="POST" id="myForm">
            <label for="monetary">Salary in USD</label>
            <br>
            <input type="number" id="monetaryAmmount" name="monetaryAmmount" 
            value="<?=$monetaryAmmount ?>" required pattern="[0-9]" step="0.01" min="0">
            <br>
            
            <label for="tax">Tax percentage</label>
            <br>
            <input type="number" id="taxPercentage" name="taxPercentage" 
            value="<?=$taxPercentage ?>" required pattern="[0-9]" step="0.01" min="0" max="100"><br><br>
            <label>Tax free</label>
            <input type="checkbox"><br>
            <br><label>Month/Year</label><br>
              <input type="radio" id="year" name="date" value="year" required>
                 <label fo
                 r="male">year</label><br>
                <input type="radio" id="month" name="date" value="month" required>
                <label for="month">month</label><br>


            <input type="Submit" value="Calculate" id="calculateBtn">
        </form>
        <div id="summary">
             <p>Total Salary: 
                <span id="totalsalary">
                    <?=$monetaryAmmount ?>
                </span>
            </p>

            <p>Tax Ammount: 
                <span id="taxAmmount">
                    <?=$taxAmount ?>
                </span>
            </p>
             <p>social security fee: 
                <span id="ssf">
                    <?=$ssf ?> 
                </span>
            </p>
            <p>Final Ammount: 
                <span id="finalAmmount">
                    <?=$finalAmount ?> 
                </span>
            </p>
           
        </div>
    </div>
</body>
</html>