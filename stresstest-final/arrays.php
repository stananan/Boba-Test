<?php

// go away. this is private information.


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

$radNames = array("gender-val", "q1-val", "q2-val", "q6-val", "q7-val", "q8-val", "q9-val", "q10-val");

$radNamesAnswers = [
    "gender-val" => array("male", "female", "other"),
    "q1-val" => array("boba", "lychee", "any", "no-topp"),
    "q2-val" => array("mango", "strawberry", "peach", "no-fruit"),
    "q6-val" => array("flow", "special"),
    "q7-val" => array("6", "7", "not-an-issue"),
    "q8-val" => array("yes", "no"),
    "q9-val" => array("refresh", "sweet", "boba"),
    "q10-val" => array("first", "sometimes", "everyday")
];

$allergiesCheck = array("caffeine", "milk", "sweet");
