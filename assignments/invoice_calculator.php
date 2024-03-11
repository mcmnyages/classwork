<?php 
$customer_type = $_POST['customer_type'];
$invoice_subtotal = $_POST['invoice_subtotal'];

switch ($customer_type) {
    case 'Regular':
        if ($invoice_subtotal < 100) {
            $discount_percentage = 0;
        } elseif ($invoice_subtotal >= 100 && $invoice_subtotal < 250) {
            $discount_percentage = 10;
        } elseif ($invoice_subtotal >= 250 && $invoice_subtotal < 500) {
            $discount_percentage = 25;
        } else {
            $discount_percentage = 30;
        }
        break;
    case 'Loyalty Program':
        $discount_percentage = 30;
        break;
    case 'Honored Citizen':
        if ($invoice_subtotal < 500) {
            $discount_percentage = 40;
        } else {
            $discount_percentage = 50;
        }
        break;
}

$discount_amount = ($invoice_subtotal * $discount_percentage) / 100;
$total_amount = $invoice_subtotal - $discount_amount;
/*
echo "Discount Percentage: " . $discount_percentage . "%<br>";
echo "Discount Amount: $" . number_format($discount_amount, 2) . "<br>";
echo "Invoice Total: $" . number_format($total_amount, 2);
*/



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <title>Invoice Calculator</title>
</head>

<body>
    <h1 class="w3-xxxlarge w3-purple w3-center w3-container w3-center ">
        Invoice Calculator App
    </h1>
    <form action="" method="post" class="w3-form w3-border-purple w3-card-4" id="form">
        <h2 class="w3-center w3-khaki w3-xxlarge">Invoice Calculator</h2>
        <div class="w3-bg-yellow">
            <label for="inv_amount" class="w3-xlarge w3-text-green">Customer Type:</label>
            <select name="cstm_type" id="option" class="w3-select">
                <option value="" disabled selected><?php echo $customer_type?></option>
                <option value=" regular">Regular</option>
                <option value="l_prg">Loyalty Program</option>
                <option value="h_ctz">Honoured Citizen</option>
            </select>

            <label for="inv_subt" class="w3-xlarge w3-text-green">
                Invoice Subtotal:</label>
            <input type="number" name="inv_subt" id="" class="w3-input" value="<?php echo $invoice_subtotal?>"
                disabled />
            <hr class="w3-teal">
        </div>
        <label for="dsc_pnt" class="w3-xlarge w3-text-green">Discount Percentage:</label>
        <input type="number" name="dsc_pnt" id="" class="w3-input" value="<?php echo $discount_percentage?>" disabled />
        <label for="dsct_amnt" class="w3-xlarge w3-text-green" disabled>Dicount Amount:</label>
        <input type="number" name="dsct_amount" id="disc_output" class="w3-input" value="<?php 
echo $discount_amount;?>" disabled />
        <label for="inv_ttl" class="w3-xlarge w3-text-green" disabled>Invoice Total:</label>
        <input type="number" name="inv_ttl" id="invt_output" class="w3-input" value="<?php 
echo $total_amount;?>" disabled />
        <div class="w3-container w3-center">
            <a href="invoice_calculator.html" class="w3-btn w3-red">NEW</a>
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