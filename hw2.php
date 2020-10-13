<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hw-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<?php

$cities = array (
    'New York'=> 'NY(8,175,133 people)',
    'Los Angeles' => 'CA(3,792,621)',
    'Chicago' => 'IL(2,695,598)',
    'Houston' => 'TX (2,100,263)',
    'Philadelphia' => 'PA(1,526,006)',
    'Phoenix' => 'AZ(1,445,632)',
    'San Antonio' => 'TX(1,327,407)',
    'San Diego' => 'CA(1,307,402)',
    'Dallas' => 'TX(1,197,816)',
    'San Jose' => 'CA(945,942)',
);
?>
<h1 class="text text-center text-dark">HOMEWORK 2</h1>
    <div class="offset-md-2 col-md-8">
        <table class="table table-bordered text-center">
            <?php
            echo "<thead class='thead-dark'> <th colspan=2> total population of 10 largest cities </th></thead>";
                foreach ($cities as $key => $value)
                {
                    echo "<tr><td>$key<td>$value</tr>";
                }

            ?>
        </table>
    </div>

    <div class="offset-md-2 col-md-8">
        <table class="table table-bordered text-center">
            <?php
            $population = asort($cities);
            echo "<thead class='thead-dark'> <th colspan=2> sort by 10 largest cities by population </th></thead>";
            foreach ($cities as $key => $value)
            {
                echo "<tr><td>$key<td>$value</tr>";
            }

            ?>
        </table>
    </div>

    <div class="offset-md-2 col-md-8">
        <table class="table table-bordered text-center">
            <?php
            $city_name = ksort($cities);
            echo "<thead class='thead-dark'> <th colspan=2> sort by 10 largest cities by name </th></thead>";
            foreach ($cities as $key => $value)
            {
                echo "<tr><td>$key<td>$value</tr>";
            }

            ?>
        </table>
    </div>
</body>
</html>
