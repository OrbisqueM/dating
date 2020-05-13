<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 4/29/2020
 * Time: 10:10 AM
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

session_start();

//Create an instance of the Base Class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {

    $view = new Template();
    echo $view->render('views/home.html');
});


//Define a form1 route
$f3->route('GET|POST /date', function($f3) {
    $_SESSION = array();

    if(isset($_POST['submit']))
    {
        $isValid=true;

        if (!empty($_POST['firstName'])) {
            $_SESSION['firstName'] = $_POST['firstName'];
        } else {
            $f3->set("errors['first']", "Please enter a first name");
            $isValid= false;
        }

        if (!empty($_POST['lastName'])) {
            $_SESSION['lastName'] = $_POST['lastName'];
        } else {
            $f3->set("errors['last']", "Please enter a last name");
            $isValid = false;
        }

        if (!empty($_POST['age'])) {
            $_SESSION['age'] = $_POST['age'];
        } else {
            $f3->set("errors['age']", "Please enter an age");
            $isValid = false;
        }

        if (!empty($_POST['sex'])) {
            $_SESSION['sex'] = $_POST['sex'];
        } else {
            $f3->set("errors['sex']", "Please enter a sex");
            $isValid = false;
        }

        if (!empty($_POST['phone'])) {
            $_SESSION['phone'] = $_POST['phone'];
        } else {
            $f3->set("errors['phone']", "Please enter a phone number");
            $isValid = false;
        }

        if ($isValid)
        {
            $f3->reroute('date2');
        }
    }

    $template = new Template();
    echo $template->render('views/registration.html');
});

//Define a form2 route
$f3->route('GET|POST /date2', function($f3) {

    $f3->set('states', array('AL'=>"Alabama",
        'AK'=>"Alaska",
        'AZ'=>"Arizona",
        'AR'=>"Arkansas",
        'CA'=>"California",
        'CO'=>"Colorado",
        'CT'=>"Connecticut",
        'DE'=>"Delaware",
        'DC'=>"District Of Columbia",
        'FL'=>"Florida",
        'GA'=>"Georgia",
        'HI'=>"Hawaii",
        'ID'=>"Idaho",
        'IL'=>"Illinois",
        'IN'=>"Indiana",
        'IA'=>"Iowa",
        'KS'=>"Kansas",
        'KY'=>"Kentucky",
        'LA'=>"Louisiana",
        'ME'=>"Maine",
        'MD'=>"Maryland",
        'MA'=>"Massachusetts",
        'MI'=>"Michigan",
        'MN'=>"Minnesota",
        'MS'=>"Mississippi",
        'MO'=>"Missouri",
        'MT'=>"Montana",
        'NE'=>"Nebraska",
        'NV'=>"Nevada",
        'NH'=>"New Hampshire",
        'NJ'=>"New Jersey",
        'NM'=>"New Mexico",
        'NY'=>"New York",
        'NC'=>"North Carolina",
        'ND'=>"North Dakota",
        'OH'=>"Ohio",
        'OK'=>"Oklahoma",
        'OR'=>"Oregon",
        'PA'=>"Pennsylvania",
        'RI'=>"Rhode Island",
        'SC'=>"South Carolina",
        'SD'=>"South Dakota",
        'TN'=>"Tennessee",
        'TX'=>"Texas",
        'UT'=>"Utah",
        'VT'=>"Vermont",
        'VA'=>"Virginia",
        'WA'=>"Washington",
        'WV'=>"West Virginia",
        'WI'=>"Wisconsin",
        'WY'=>"Wyoming"));

    print_r($_SESSION);

    if(isset($_POST['submit']))
    {
        $isValid=true;

        if (!empty($_POST['email'])) {
            $_SESSION['email']  = $_POST['email'];
        } else {
            $f3->set("errors['email']", "Please enter a phone number");
            $isValid = false;
        }

        if (!empty($_POST['state'])) {
            $_SESSION['state'] = $_POST['state'];
        } else {
            $f3->set("errors['state']", "Please enter a state");
            $isValid = false;
        }

        if (!empty($_POST['seeking'])) {
            $_SESSION['seeking'] = $_POST['seeking'];
        } else {
            $f3->set("errors['seeking']", "Please enter a phone number");
            $isValid = false;
        }

        if ($isValid)
        {
            $f3->reroute('date3');
        }
    }

    $template = new Template();
    echo $template->render('views/profile.html');
});

//Define a form3 route
$f3->route('GET|POST /date3', function($f3) {

    if(isset($_POST['color']))
    {
        $color = $_POST['color'];
        if (validColor($color))
        {
            $_SESSION['color'] = $color;
            $f3->reroute('results');
        }
        else
        {
            $f3->set("errors['color']", "Please choose a color.");
        }
    }

    $template = new Template();
    echo $template->render('views/Interests.html');
});

//Define a form4 route
$f3->route('GET|POST /date4', function($f3) {
    print_r($_SESSION);

    $template = new Template();
    echo $template->render('views/Summary.php');
});

//Run fat free
$f3->run();