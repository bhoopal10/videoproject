<?php
/**
 * Created by PhpStorm.
 * User: bhoo
 * Date: 1/11/14
 * Time: 12:30 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>WELCOME</title>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>

    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form">
                <h2 style="text-align:center">Please Sign Up </h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
                </div>
                <div class="form-group">
                    <input type="text" name="organisation" id="organisation" class="form-control input-lg" placeholder="Organistaion" tabindex="4"/>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="5">
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" id="mobile" class="form-control input-lg" placeholder="Mobile" tabindex="6">
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="7">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="8">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="radio">
                            <label>
                            <input type="radio" name="module" value="1"/>Content Provider
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="radio">
                            <label>
                                <input type="radio" name="module" value="2"/>Video Viewer
                            </label>
                        </div>
                    </div>
                </div>
               <hr class="colorgraph">
                <div class="row">
                    <div class="col-md-6"><input type="submit" value="Create My Account" class="btn btn-primary btn-block btn-lg" tabindex="8"></div>
                    <div class="col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign Me In</a></div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>