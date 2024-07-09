<h1>Numeric Arrays</h1>

<?php
// Index Array or Numeric Array
$color = array("Black", "Green", "White", "Red", "Black", 45, 78, 78.58);

$item = [45, 78, 45, 'Book', 'Pen', 'Ruler'];
?>

<pre>
    <?php print_r($color); ?>
</pre>

<?php print $color[1]; ?>
<br>
<?php print $item[4]; ?>

<pre>
    <?php var_dump($item); ?>
</pre>

<h1>Associative Arrays</h1>

<?php
    $user_emails = array(
        "Angie" => "AngieCarol@gmail.com",
        "Charles" => "CharlesKariuki@gmail.com",
        "Ashley" => "AshleyOtieno@gmail.com"
    );
?>

<pre>
    <?php print_r($user_emails); ?>
</pre>

<?php print $user_emails["Charles"]; ?>

<h1>Multidimensional Arrays</h1>

<?php

$user_details = [
    "Director" => [
        "Fullname" => "Angie Carol",
        "Email" => "ACarol@gmail.com",
        "Address" => "Mada",
        "Phone" => [
            "Mobile" => "+254700886699",
            "Cell" => "+254700886699",
            "Work" => "+254700886699"
        ],
    ],
    "Secretary" => [
        "Fullname" => "Joseph Kamau",
        "Email" => "Jkamau@gmail.com",
        "Address" => "Mada",
        "Phone" => [
            "Mobile" => "+254778566699",
            "Cell" => "+254796576699",
            "Work" => "+25471287599"
        ],
    ],
    "Manager" => [
        "Fullname" => "Charles Kariuki",
        "Email" => "CharlesKariuki@gmail.com",
        "Address" => "Mada",
        "Phone" => [
            "Mobile" => "+25477957699",
            "Cell" => "+254796146399",
            "Work" => "+25471286845"
        ],
    ]
    ];

?>
<?php print $user_details["Secretary"]["Phone"]["Cell"]; ?>
<pre>
    <?php print_r($user_details); ?>
</pre>

<?php

$call["fname"] = "Ashley";
$call["lname"] = "Otieno";
$call["email"] = "Ashleyotieno@gmail.com";

?>

<pre>
    <?php print_r($call); ?>
</pre>





















