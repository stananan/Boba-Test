<?php
    require_once("header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stress Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            printHeader();
        ?>
        <form action="https://atdpsites.berkeley.edu/test.php">
            <div class="name-div">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name-val" required>
            </div>
            
            <div class="date-of-birth-div">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob-val" required>
            </div>
            <div class="gender-div">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender-val" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="email-div">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email-val" required>
            </div>
            <div class="street-div">
                <label for="street">Street: Address</label>
                <input type="text" id="street" name="street-val" required>
            </div>

            <h2>THE TEST</h2>
            <!-- | QUESTIONS | -->
            <div class="questions-div" id="q1-div">
                <h3 id=""></h3>
                
            </div>


            <div class="submit-div">
                <button id="submit-button" type="submit">Submit</button>
            </div>
            <!-- 
                questions:
                1.what is your favorite topping do you like
                    boba, lychee, NO TOPPINGS, any toppings are fine for me.
                2.on a hot day, what fruit do you want to eat the most
                    mangoes, strawberries, apples, tropical fruit(passion, orange, grapefruit), I hate fruit
                3.rank your sweet tooth 1-100 (1 being i hate sweets, 100 being you always want to eat candy)
                    input a num
                4.rank how much you care about your health 1-100 (1 being you don't care if it kills you, 100 beign your a health-freak)
                    input a num
                5. Check off what you can't have
                    caffeine, milk, sugar
                6. Would you rather go the Popular route or be the special person
                    Popular or special
                7. How much do you expect your drink to be
                    money is not a factor, Around 6$, Around 8$, I expect it to be cheaper
                8. Are you willing to try new things (though it might be scary)
                    yes or no
                9. When you drink boba, what do you expect the drink to be
                    refreshing, sweet and tasty, i'm only here for the boba
                10. How many times are you drinken boba
                    first time (that's why im taking this quiz), i drink it occaisanly, everyday


             -->
        </form>
    </div>
    
</body>
</html>