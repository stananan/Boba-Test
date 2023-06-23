<?php
    require_once("header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boba Test</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <?php
            printHeader();
        ?>
        <!-- https://atdpsites.berkeley.edu/test.php -->
        <form action="action.php" method="post">

            <div class="name-div">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name-val" placeholder="John" required>
            </div>
            
            <div class="date-of-birth-div">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob-val" required>
            </div>
            <div class="gender-div">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender-val">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="email-div">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email-val" placeholder="john@123.com" required>
            </div>
            <div class="street-div">
                <label for="street">Street: Address</label>
                <input type="text" id="street" name="street-val" placeholder="16 Apple Street" required>
            </div>

            
            <!-- | QUESTIONS | -->
            <div class="questions-div" id="q1-div">
                <h3 class="qh" id="q1h">1. What is your favorite topping in your drink</h3>
                <div class="opt-div">
                    <input type="radio" id="q1-boba" name="q1-val" value="boba" required>
                    <label for="q1-boba">Boba (duh)</label>
                </div>
                
                <div class="opt-div">
                    <input type="radio" id="q1-lychee" name="q1-val" value="lychee" required>
                    <label for="q1-lychee">Lychee Jelly</label>
                </div>

                <div class="opt-div">
                    <input type="radio" id="q1-any" name="q1-val" value="any" required>
                    <label for="q1-any">Any Topping</label>
                </div>

                <div class="opt-div">
                    <input type="radio" id="q1-none" name="q1-val" value="no-topp" required>
                    <label for="q1-none">None, I hate toppings</label>
                </div>
            </div>

            <div class="questions-div" id="q2-div">
                <h3 class="qh" id="q2h">2. On a hot day, what fruit would you want to eat the most?</h3>

                <div class="opt-div">
                    <input type="radio" id="q2-mango" name="q2-val" value="mango" required>
                    <label for="q2-mango">Mangoes</label>
                </div>

                <div class="opt-div">
                    <input type="radio" id="q2-strawberry" name="q2-val" value="strawberry" required>
                    <label for="q2-strawberry">Strawberries</label>
                </div>

                <div class="opt-div">
                    <input type="radio" id="q2-peach" name="q2-val" value="peach" required>
                    <label for="q2-peach">Peaches</label>
                </div>

                <div class="opt-div">
                    <input type="radio" id="q2-none" name="q2-val" value="no-fruit" required>
                    <label for="q2-none">I hate fruit</label>
                </div>
            </div>

            <div class="questions-div" id="q3-div">
                <h3 class="qh" id="q3h">3. Rank your sweet tooth 1-100</h3>
                <input type="range" id="q3-slider" min="1" max="100" value="50" name="q3-val" style="width: 30%;">
            </div>

            <div class="questions-div" id="q4-div">
                <h3 class="qh" id="q4h">4. Rank how much you care about your health 1-100 (1 being not at all and 100 being always)</h3>
                <input type="range" id="q4-slider" min="1" max="100" value="50" name="q4-val" style="width: 30%;">
            </div>

            <div class="questions-div" id="q5-div">

                <h3 class="qh" id="q5h">5. Check off the things you CAN'T have</h3>

                <div class="opt-div">
                    <input type="checkbox" id="q5-caffeine" name="allergies[]" value="caffeine">
                    <label for="q5-caffeine">Caffiene</label>
                </div>
                <div class="opt-div">
                    <input type="checkbox" id="q5-milk" name="allergies[]" value="milk">
                    <label for="q5-milk">Milk</label>
                </div>
                <div class="opt-div">
                    <input type="checkbox" id="q5-sweet" name="allergies[]" value="sweet">
                    <label for="q5-sweet">Overly sweet stuff</label>
                </div>
            </div>

            <div class="questions-div" id="q6-div">
                <h3 class="qh" id="q6h">6. Do you usually go with the flow or be special</h3>

                <div class="opt-div">
                    <input type="radio" id="q6-flow" name="q6-val" value="flow" required>
                    <label for="q6-flow">With the flow</label>
                </div>

                <div class="opt-div">
                    <input type="radio" id="q6-spec" name="q6-val" value="special" required>
                    <label for="q6-spec">I am special</label>
                </div>
            </div>

            <div class="questions-div" id="q7-div">
                <h3 class="qh" id="q7h">7. What is your ideal budget for your drink</h3>

                <div class="opt-div">
                    <input type="radio" id="q7-six" name="q7-val" value="6" required>
                    <label for="q7-six">Around 6$</label>
                </div>

                <div class="opt-div">
                    <input type="radio" id="q7-sev" name="q7-val" value="7" required>
                    <label for="q7-sev">Around 7$</label>
                </div>

                <div class="opt-div">
                    <input type="radio" id="q7-not" name="q7-val" value="not-an-issue" required>
                    <label for="q7-not">Money is not an issue</label>
                </div>

            </div>

            <div class="questions-div" id="q8-div">
                <h3 class="qh" id="q8h">8. Are you willing to try new things?</h3>
                <div class="opt-div">
                    <input type="radio" id="q8-yes" name="q8-val" value="yes" required>
                    <label for="q8-yes">Yes</label>
                </div>
                <div class="opt-div">
                    <input type="radio" id="q8-no" name="q8-val" value="no" required>
                    <label for="q8-no">No</label>
                </div>
            </div>

            <div class="questions-div" id="q9-div">
                <h3 class="qh" id="q9h">9. When you drink boba, what do you expect the drink to be?</h3>

                <div class="opt-div">
                    <input type="radio" id="q9-refresh" name="q9-val" value="refresh" required>
                    <label for="q9-refresh">Light and Refreshing</label>
                </div>
                <div class="opt-div">
                    <input type="radio" id="q9-sweet" name="q9-val" value="sweet" required>
                    <label for="q9-sweet">Sweet and Tasty</label>
                </div>
                <div class="opt-div">
                    <input type="radio" id="q9-boba" name="q9-val" value="boba" required>
                    <label for="q9-boba">I'm only here for the boba</label>
                </div>

            </div>

            <div class="questions-div" id="q10-div">
                <h3 class="qh" id="q10h">10. How many times have you had boba?</h3>

                <div class="opt-div">
                    <input type="radio" id="q10-first" name="q10-val" value="first" required>
                    <label for="q10-first">Never</label>
                </div>
                <div class="opt-div">
                    <input type="radio" id="q10-sometimes" name="q10-val" value="sometimes" required>
                    <label for="q10-sometimes">Sometimes</label>
                </div>
                <div class="opt-div">
                    <input type="radio" id="q10-everyday" name="q10-val" value="everyday" required>
                    <label for="q10-everyday">Everyday</label>
                </div>
            </div>

            <!-- 
                questions:
                1.what is your favorite topping do you like
                    boba, lychee, NO TOPPINGS, any toppings are fine for me.
                2.on a hot day, what fruit do you want to eat the most
                    mangoes, strawberries, peaches, tropical fruit(passion, orange, grapefruit), I hate fruit
                3.rank your sweet tooth 1-100 (1 being i hate sweets, 100 being you always want to eat candy)
                    input a num
                4.rank how much you care about your health 1-100 (1 being you don't care if it kills you, 100 beign your a health-freak)
                    input a num
                5. Check off what you can't have
                    caffeine, milk, overly-sugar
                6. Would you rather go the Popular route or be the special person
                    Popular or special
                7. How much do you expect your drink to be
                    money is not a factor, Around 6$, Around 8$, 
                8. Are you willing to try new things 
                    yes or no
                9. When you drink boba, what do you expect the drink to be
                    refreshing, sweet and tasty, i'm only here for the boba
                10. How many times are you drinken boba
                    first time (that's why im taking this quiz), i drink it occaisanly, everyday


             -->
            <div class="submit-div">
                <button id="submit-button" type="submit">Submit</button>
            </div>
            
        </form>


        <p><a href="https://atdpsites.berkeley.edu/validate/">HTML5</a></p>
    </div>
    
</body>
</html>