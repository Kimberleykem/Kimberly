<?php
    date_default_timezone_set("Africa/Nairobi");

    echo 'This is my first php code'; 

    print '<br>'; 

    print "Today is <span style = 'color: #FF0040;'>Tuesday</span>"; 

    print '<br>'; 

    print 45611; 

    print '<br>'; 

    print "45644"; 

    print '<br>'; 

    print 4 + 8; 

    print '<br>'; //Using the HTML break line tag

    print "8 + 6"; // This is a string

    print '<br>'; //Using the HTML break line tag

    print date('l');

    print '<br>'; //Using the HTML break line tag

    print "Today is " . date('l, jS F Y H:i:s');

    print '<br>'; //Using the HTML break line tag

    print date('l, jS-F-Y', strtotime('+3 days'));

    print '<br>'; //Using the HTML break line tag

    print date('H:i:s');

    print '<br>'; //Using the HTML break line tag

    // Create (Declare) a PHP variable

    $fname = "Alex Okama";//declaration of a string
    print $fname;

    print '<br>'; //Using the HTML break line tag

    $yob = 2007; //declaration of an integer (or a digit)
    print  $fname . " was born in " . $yob;

    print '<br>'; //Using the HTML break line tag

    $current_year = date('Y'); // Declaring the current year
    print $current_year;

    print '<br>'; //Using the HTML break line tag

    //Using the subtruction operator to find the user's age
    $age = $current_year - $yob;
    // print $fname . " is " . $age . " years old";

    print '<br>'; //Using the HTML break line tag

    $user_dob = "$yob-01-03";
    print  $fname . " was, actually, born on " . date('l, F jS Y', strtotime($user_dob));

    $birthday = new DateTime($user_dob);
    $today = new DateTime('today');

    $interval = $birthday->diff($today);

    print '<br>'; 

    print $fname . " is " . $interval->y . " years, " . $interval->m . " months, and " . $interval->d . " days old.";

    print '<br>'; 
    $adult_age = 18;

    if($interval->y >= $adult_age){
        print $fname . " is an adult"; 
    }else{
        print $fname . " is NOT an adult"; 
    }

    print '<br><br>'; 

    $lname = "Okama";

    echo "My last name is $lname";
    
    print '<br>';
    
    echo 'My last name is $lname';

    print '<br>'; 

    print $lname;

    print '<br>'; 

    $call["lname"] = "Atieno";
    print $call["lname"];

    print '<br>'; //

    define('LNAME', 'Atieno');
    print LNAME;

?>