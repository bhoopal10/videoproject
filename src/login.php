<?php
/**
 * Created by PhpStorm.
 * User: bhoo
 * Date: 1/11/14
 * Time: 2:32 PM
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
                <fieldset>
                    <h2>Sign In</h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input type="txt" name="username" id="username" class="form-control input-lg" placeholder="Username / Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                    </div>
				<span class="button-checkbox">
					<a href="" class="btn btn-link">Forgot Password?</a>
				</span>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="" class="btn btn-lg btn-primary btn-block">Register</a>
                        </div>
                    </div>
                </fieldset>
                </div>
        </div>