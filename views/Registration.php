<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 4/29/2020
 * Time: 3:13 PM
 *
 * $_Server[SELF]
 */
//include("../model/Validation.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dating Site</title>
    <link href="/328X2/dating/styles/styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"
          href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
</head>
<body class="bg-info">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar position-absolute bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Obeagle</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-primary" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Profile</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <h2>Personal Information</h2><hr>
    <section  class="bg-faded cb-background-reg" id="about">
        <form method="post" id ='form' action="#">
            <div class="row">
                <div class="col-6" >
                    <fieldset class="form-group" id="register">

                        <div class="form-group">
                            <label class="col-md-5 col-lg-8 control-label">First Name</label>
                            <div class="inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-user-alt"></i></span>
                                    <input id="firstName" name="firstName" placeholder="First Name" class="form-control" value = "<?php echo $fname?>" type="text">
                                    <span  class="err" id="err-fname"><?php echo $_SESSION['firstName'] ?></span>
                                </div>
                            </div>
                        </div>

                <div class="form-group">
                    <label class="col-md-5 col-lg-8 control-label">Last Name</label>
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-user-alt"></i></span>
                            <input id="lastName" name="lastName" placeholder="Last Name" class="form-control" value = "<?php echo $lname?>" type="text">
                            <span  class="err" id="err-lname"><?php echo $_SESSION['lastName'] ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-5 col-lg-8 control-label">Age</label>
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-key"></i></span>
                            <input id="age" name="age" placeholder="Enter Age" class="form-control" value="<?php echo $age?>" type="number">
                            <span  class="err" id="err-Age"><?php echo $_SESSION['age'] ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-5 col-lg-8 control-label">Gender</label>
                    <div class=" text-dark" >
                        <div class="radio" >
                            <label class="mr-3">
                                <input type="radio" name="sex" value="M" id="male"/> Male
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" value="F" id="female"/> Female
                            </label>
                        </div>
                        <span  class="err" id="err-Age"><?php echo $_SESSION['sex'] ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-5 col-lg-8 control-label">Phone Number</label>
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="far fa-envelope"></i></span>
                            <input  class="form-control mx-sm-2" type="text" name="phone" id="phone" size="20"
                                    pattern="^\d{10}$|^(\(\d{3}\)\s*)?\d{3}[\s-]?\d{4}$" value="<?php echo $phone?>"/>
                            <span  class="err" id="err-phone"><?php echo $_SESSION['phone'] ?></span>
                        </div>
                    </div>
                </div>
                </fieldset>
            </div>
            <div class="col-6" >
                    <h6>Premium Membership</h6><hr>
                        <label>
                            <input type="checkbox" value="Premium" id="membership"
                                   name="membership[]">&nbsp;Sign me up For a Premium Account!
                        </label><br>

                    <br>
                    <button class='btns' type='submit' name="submit1" value="submit">Next</button>
                </div>
            </div>
        </form>
    </section>
</div>

</body>
</html>