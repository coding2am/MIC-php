<?php
$hamburger = 4.95;
$Total_hamburger = $hamburger * 2;
$chocolate_milkshake = 1.95;
$cola = 0.85;
$tax_rate = 7.5;
$pre_tax = 16;

//sub total
$sub_total = $Total_hamburger + $chocolate_milkshake + $cola;
//tax_rate
$cutting_tax = ($sub_total * $tax_rate) / 100;
//pre-tax
$cutting_preTax = ($cutting_tax * $pre_tax) / 100;
//cost
$totalCost = $sub_total + $cutting_tax + $cutting_preTax;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hw-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <h1 class="text text-dark text-center my-5">HOMEWORK 1</h1>
    <div class="offset-2 col-md-8">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <th>No</th>
                <th>Recipe</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </thead>
            <tbody>
               <tr>
                   <td>1.</td>
                   <td><?php echo "Hamburger"; ?></td>
                   <td>$ <?php echo $hamburger; ?></td>
                   <td>x2</td>
                   <td>$ <?php echo $Total_hamburger; ?></td>
               </tr>
               <tr>
                   <td>2.</td>
                   <td><?php echo "Chocolate milkshake"; ?></td>
                   <td>$ <?php echo $chocolate_milkshake; ?></td>
                   <td>x1</td>
                   <td>$ <?php echo $chocolate_milkshake; ?></td>
               </tr>
               <tr>
                   <td class="base">3.</td>
                   <td class="base"><?php echo "Cola"; ?></td>
                   <td class="base">$ <?php echo $cola; ?></td>
                   <td class="base">x1</td>
                   <td class="base">$ <?php echo $cola; ?></td>
               </tr>
                <tr>
                    <td colspan="4">Total Price</td>
                    <td>$ <?php echo $sub_total; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Tax (7.5%)</td>
                    <td>$ <?php echo $cutting_tax; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Pre-tax (16%)</td>
                    <td>$ <?php echo $cutting_preTax; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Total Cost</td>
                    <td>$ <?php echo $totalCost; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

