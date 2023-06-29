<?php
$email = $_POST['email-val'];
$pranked = "GET PRANKED";

$success = mail($email, $pranked, $pranked);
if ($success) {
    //echo "<script>alert('Email was sent');</script>";
} else {
    //echo "<script>alert('Email was not sent');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boba Test</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="test.css"> -->
    <script src="main.js"></script>
</head>

<body>
    <div class="container">


        <div class='header'>
            <h1>Welcome to my Boba Test</h1>
            <h2>Created by Stanley Ho</h2>
        </div>
        <div class="result-div">
            <?php

            $result = "";

            function printPost()
            {
                foreach ($_POST as $key => $val) {
                    if (is_array($val)) {
                        echo "<p>" . $key . " :</p>";
                        foreach ($val as $valofval) {
                            echo "<p>" . htmlspecialchars($valofval) . "</p";
                            echo "<br>";
                        }
                        echo "<br>";
                    } else {
                        echo "<p>" . $key . " :" . htmlspecialchars($val) . "</p";
                        echo "<br>";
                    }
                }
            }


            $drinks = array(
                "blackpearlmilktea", "greenpearlmilktea", "honeygreentea", "mangogreentea", "mangoiceblend",
                "peachgreentea", "peachiceblend", "strawberryblacktea", "strawberryiceblend", "taroiceblend", "taromilktea", "thaimilktea", "matchamilktea", "oreoiceblend", "gingertea"
            );
            $goodDrinks = array(
                "blackpearlmilktea", "greenpearlmilktea", "honeygreentea", "mangogreentea", "mangoiceblend",
                "peachgreentea", "peachiceblend", "strawberryblacktea", "strawberryiceblend", "taroiceblend", "taromilktea", "thaimilktea", "matchamilktea", "oreoiceblend", "gingertea"
            );
            $drinkNames = [
                "blackpearlmilktea" => "Black Milk Tea with Boba",
                "greenpearlmilktea" => "Green Milk Tea with Boba",
                "honeygreentea" => "Honey Green Tea",
                "mangogreentea" => "Mango Green Tea",
                "mangoiceblend" => "Mango Ice Blended with Ice Cream",
                "peachgreentea" => "Peach Green Tea",
                "peachiceblend" => "Peach Ice Blended with Lychee Jelly and Ice Cream",
                "strawberryblacktea" => "Strawberry Black Tea",
                "strawberryiceblend" => "Strawberry Ice Blended with Lychee Jelly and Ice Cream",
                "taroiceblend" => "Taro Ice Blended with Pudding",
                "taromilktea" => "Taro Milk Tea with Boba",
                "thaimilktea" => "Thai Milk Tea with Boba",
                "matchamilktea" => "Match Milk Tea with Red bean",
                "oreoiceblend" => "Orea Ice Blended with Ice Cream",
                "gingertea" => "Ginger Tea"
            ];

            $dairy = array("blackpearlmilktea", "greenpearlmilktea", "taromilktea", "thaimilktea", "matchamilktea", "oreoiceblend");
            $caffeine = array("blackpearlmilktea", "greenpearlmilktea", "honeygreentea", "mangogreentea", "peachgreentea", "strawberryblacktea", "taromilktea", "thaimilktea", "matchamilktea");
            $sweet = array("mangoiceblend", "peachiceblend", "strawberryiceblend", "taroiceblend", "oreoiceblend");

            $unhealthy = array("blackpearlmilktea", "greenpearlmilktea", "mangoiceblend", "peachiceblend", "strawberryiceblend", "taroiceblend", "taromilktea", "thaimilktea", "matchamilktea", "oreoiceblend");

            $mango = array("mangogreentea", "mangoiceblend");
            $peach = array("peachgreentea", "peachiceblend");
            $strawberry = array("strawberryblacktea", "strawberryiceblend");
            $nonFruitDrinks = array_diff($drinks, array_merge($mango, $peach, $strawberry));

            $expensive = array("strawberryiceblend", "mangoiceblend", "peachiceblend", "taroiceblend", "oreoiceblend");

            $refreshing = array("honeygreentea", "mangogreentea",  "peachgreentea",  "strawberryblacktea", "gingertea");
            $tasty = array("blackpearlmilktea", "mangoiceblend", "peachiceblend", "strawberryiceblend", "greenpearlmilktea",  "taroiceblend", "thaimilktea", "taromilktea", "matchamilktea", "oreoiceblend");



            // foreach($drinks as $val){
            //     echo "<img src='../stresstest-images/".$val.".png' alt='result img' width='360' height ='360'>";

            // }

            //HANDLING FRUIT PREFERANCE TYPE

            $favoriteFruit = $_POST['q2-val'];

            if ($favoriteFruit === "mango") {
                $drinks = array_merge($mango, array_diff($drinks, $mango));
                $goodDrinks = array_diff($goodDrinks, array_merge($nonFruitDrinks, $peach, $strawberry));
            } elseif ($favoriteFruit === "peach") {
                $drinks = array_merge($peach, array_diff($drinks, $peach));
                $goodDrinks = array_diff($goodDrinks, array_merge($nonFruitDrinks, $mango, $strawberry));
            } elseif ($favoriteFruit === "strawberry") {
                $drinks = array_merge($strawberry, array_diff($drinks, $strawberry));
                $goodDrinks = array_diff($goodDrinks, array_merge($nonFruitDrinks, $peach, $mango));
            } elseif ($favoriteFruit === "no-fruit") {

                $drinks = array_merge($nonFruitDrinks, array_merge($mango, $peach, $strawberry));
                $goodDrinks = array_diff($goodDrinks, array_merge($strawberry, $peach, $mango));
            }

            //HANDLING THE SLIDERS (SWEET TOOTH AND UNHEALTHY)
            if ($_POST['q3-val'] < 25) {
                $drinks = array_diff($drinks, $sweet);
                $goodDrinks = array_diff($goodDrinks, $sweet);
            }
            if ($_POST['q4-val'] > 75) {
                $drinks = array_diff($drinks, $unhealthy);
                $goodDrinks = array_diff($goodDrinks, $unhealthy);
            }




            //QUESTIONS 6, 7, 8, 9. 
            //(6 and 8 are the same things, check if one is true, then sort unusuals first). 
            //(7 sort by array_diff only 6$)
            //(9, sort teas for light, milkteas and blends for taste)

            //HANDLING EXPENSIVE DRINK
            if ($_POST['q7-val'] == 6) {
                $drinks = array_merge(array_diff($drinks, $expensive), $expensive);
                $goodDrinks = array_diff($goodDrinks, $expensive);
            }


            //HANDLING TASTE
            $taste = $_POST['q9-val'];
            if ($taste === 'refresh') {
                $drinks = array_merge(array_diff($drinks, $tasty), $tasty);
                $goodDrinks = array_diff($goodDrinks, $tasty);
            } elseif ($taste === 'sweet') {
                $drinks = array_merge(array_diff($drinks, $refreshing), $refreshing);
                $goodDrinks = array_diff($goodDrinks, $refreshing);
            }

            //HANDLING ALLERGIES
            if (isset($_POST['allergies']) && is_array($_POST['allergies'])) {
                $allergies = $_POST['allergies'];

                // Filtering the drinks array
                if (in_array("sweet", $allergies)) {
                    $drinks = array_diff($drinks, $sweet);
                    $goodDrinks = array_diff($goodDrinks, $sweet);
                }

                if (in_array("caffeine", $allergies)) {
                    $drinks = array_diff($drinks, $caffeine);
                    $goodDrinks = array_diff($goodDrinks, $caffeine);
                }

                if (in_array("milk", $allergies)) {
                    $drinks = array_diff($drinks, $dairy);
                    $goodDrinks = array_diff($goodDrinks, $dairy);
                }
            }


            //HANDLING SPECIAL PEOPLE
            $q6 = $_POST['q6-val'];
            $q8 = $_POST['q8-val'];
            $special = false;

            if ($q6 === 'special' || $q8 === 'yes') {
                $special = true;
            }



            if (empty($goodDrinks)) {
                $result = reset($drinks);
            } elseif ($special) {
                $result = $goodDrinks[array_rand($goodDrinks)];
            } else {
                $result = reset($goodDrinks);
            }
            echo "<img src='../stresstest-images/" . $result . ".png' alt='result img' width='360' height ='360' id='res-img'>";


            // var_dump($drinks);
            // var_dump($goodDrinks);
            //var_dump($result);
            echo "<p class='res-p'>According to you submission, I will recommend you to drink <strong>" . $drinkNames[$result] . "</strong></p>";
            echo "<p class='res-p'>Remember, you can always add/swap toppings to your desire</p>";
            echo "<p class='res-p'><a href = 'https://www.google.com/maps/search/ShareTea+near+me'>Order Boba Now!</a></p>";

            ?>
        </div>
    </div>
</body>

</html>