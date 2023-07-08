<?php
require_once "arrays.php";
require_once "header.php";


//BACKEND VALIDATIONS

function backendValidation()
{
    header('Location: user.html');
    die();
}

//email validation
if (!isset($_GET['random'])) {
    if (filter_var($_POST["email-val"], FILTER_VALIDATE_EMAIL) == false) {
        backendValidation();
    }
    //Radio butts and Select Validation
    foreach ($radNames as $name) {
        if (!isset($_POST[$name]) || $_POST[$name] === '') {
            backendValidation();
        } else if (in_array($_POST[$name], $radNamesAnswers[$name]) == false) {
            backendValidation();
        }
    }

    //Range Validation
    if (!isset($_POST['q3-val']) || $_POST['q3-val'] > 100 || $_POST['q3-val'] < 0) backendValidation();
    if (!isset($_POST['q4-val']) || $_POST['q4-val'] > 100 || $_POST['q4-val'] < 0) backendValidation();

    //allergies validation
    if (isset($_POST['allergies']) && is_array($_POST['allergies'])) {
        foreach ($_POST['allergies'] as $elem) {
            if (in_array($elem, $allergiesCheck) == false) {
                backendValidation();
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boba Test</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../stresstest-images/atdp.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="main.js"></script>
</head>

<body>
    <?php printImage(); ?>
    <div class="container">

        <?php printHeader(); ?>

        <div class="result-div">
            <?php
            if (!isset($_GET['random'])) {
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

                $result = "";


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

                //HANDLING RESSULT
                if (empty($goodDrinks)) {
                    $result = reset($drinks);
                } elseif ($special) {
                    $result = $goodDrinks[array_rand($goodDrinks)];
                } else {
                    $result = reset($goodDrinks);
                }

                echo "<img src='../stresstest-images/" . $result . ".png' alt='result img' width='360' height ='360' id='res-img'>";

                //da result

                echo "<p class='res-p'>According to your submission, <b>" . htmlspecialchars($_POST['name-val']) . "</b>, I will recommend you to drink <strong>" . $drinkNames[$result] . "</strong></p>";
                if ($_POST['q1-val'] == "boba") echo "<p class='res-p'>Remember, you can always add boba to your desire</p>";
                if ($_POST['q1-val'] == "lychee") echo "<p class='res-p'>Remember, you can always add Lychee to your desire</p>";
                if ($_POST['q1-val'] == "any") echo "<p class='res-p'>Remember, you can always add any topping to your desire</p>";
                if ($_POST['q1-val'] == "no-topp") echo "<p class='res-p'>If your drink contains toppings, you can always ask to remove them</p>";
                echo "<p class='res-p'><a href = 'https://www.google.com/maps/search/ShareTea+near+" . htmlspecialchars($_POST['city-val']) . "'>Order Boba Near " . htmlspecialchars($_POST['city-val']) . " Now!</a></p>";


                //What do you even think this function does bruh. stop reading my code
                function printBirthday()
                {
                    $birthdate = new DateTime(htmlspecialchars($_POST['dob-val']));
                    $currentDate = new DateTime();
                    $birthdate->modify($currentDate->format('Y') . $birthdate->format('-m-d'));
                    if ($birthdate < $currentDate) $birthdate->modify('+1 year');
                    $interval = $currentDate->diff($birthdate);
                    $years = $interval->y;
                    $months = $interval->m;
                    $days = $interval->d;
                    echo "<p class='res-p'>Your birthday is on " . htmlspecialchars($_POST['dob-val']) . ".</p>";
                    echo "<p class='res-p'>Your next birthday is in: $years years, $months months, and $days days.</p>";
                }

                function printAddress()
                {
                    $encodedAddress = urlencode(htmlspecialchars($_POST['street-val']) . ', ' . htmlspecialchars($_POST['city-val']));

                    // Construct the Google Images search URL
                    $googleImagesUrl = 'https://www.google.com/search?q=' . $encodedAddress . '&tbm=isch';

                    // Echo the link to view the house image on Google Images
                    echo "<p class='res-p'><a href='" . $googleImagesUrl . "'>View your house image on Google Images</a></p>";
                }


                printBirthday();


                echo "<p class='res-p'>If you dont know, your email is " . htmlspecialchars($_POST['email-val']) . "</p>";

                printAddress();

                echo "<p class='res-p'>You identify as a " . htmlspecialchars($_POST['gender-val']) . ", Cool.</p>";
            } else {
                $result = $goodDrinks[array_rand($goodDrinks)];
                echo "<img src='../stresstest-images/" . $result . ".png' alt='result img' width='360' height ='360' id='res-img'>";
                echo "<p class='res-p'>Your random drink is <strong>" . $drinkNames[$result] . "</strong></p>";
                echo "<p class='res-p'>Remember, you can always add/change toppings to your desire</p>";
                echo "<h4 class='res-p'><a href='action.php?random=true'>Frick it, give me another random drink</a></h4>";
            }


            ?>

        </div>


        <p class="res-p"><a href="https://atdpsites.berkeley.edu/validate/">HTML5</a></p>
    </div>
</body>

</html>