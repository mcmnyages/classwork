<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <title>Future App</title>
</head>

<body>
    <?php
    $amount= $_POST["inv_amount"];
    $rate= $_POST["yri_rate"];
    $year= $_POST["no_year"];
    $output = $amount *(1+($rate/100))**$year
    
    ?>
    <h1 class="w3-xxxlarge w3-blue w3-center w3-container w3-center w3-bg-green">
        Future Value App
    </h1>
    <form action="" method="post" class="w3-form w3-border-purple w3-card-4" id="form">
        <h2 class="w3-center w3-teal w3-xxlarge">Future Value Calculator</h2>
        <label for="inv_amount" class="w3-xlarge w3-text-green">Investment Amount:</label>
        <input type="number" name="inv_amount" id="" class="w3-input" value="<?php echo $amount ?>" disabled />
        <label for="yri_rate" class="w3-xlarge w3-text-green">
            Yearly Intrest Rate:</label>
        <input type="number" name="yri_rate" id="" class="w3-input" value="<?php echo $rate?>" disabled />
        <label for="no_year" class="w3-xlarge w3-text-green">Number of Years:</label>
        <input type="number" name="no_year" id="" class="w3-input" value="<?php echo $year?>" disabled />
        <label for=" ftr_val" class="w3-xlarge w3-text-green">Future Vaue:</label>
        <input type="number" name="output" id="output" class="w3-input w3-grey" value="<?php echo  "$output";?>"
            readonly />
        <div class="w3-center">
            <a href="future_value_app.html" class="w3-btn w3-red ">
                NEW
            </a>
        </div>
    </form>
</body>
<style>
#form {
    width: 40%;
    margin-left: 30%;
    margin-top: 5%;
}
</style>

</html>