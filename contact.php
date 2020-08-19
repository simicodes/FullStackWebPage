<?php
    include('controller.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact - Simicodes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.min.css">
   <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
   <!-- <script src="https://kit.fontawesome.com/a9ed225484.js" crossorigin="anonymous"></script>  -->
   
</head>
<style>
        
    /* .body {*/
        /*background: #e2e2e2;*/
        /*background: #EEEEEE;*/
    /* }*/
        
        
    .profile {
        /*background: #e2e2e2;*/
        margin-bottom: 20px;
    }
    
    .profile-top {
        min-height: 200px;
        /*background: #999;*/
        background: #337AB7;
    }
    
    .profile-image {
        margin-top: -100px;
        height: 200px;
        width: 200px;
        border-radius: 100px;
        border: 8px solid #eee;
    }
    
    .profile-body {
        padding: 20px;
        text-align: center;
        color: #666;
    }
        
    /* .form-input{
        width: 40%;
        height: 40px;
        padding: 0 10px;
        border: 1xp solid white;
        margin: 20px;
    } */

        .footer{
            width: 100%;
            height: 100%;
            background-color:
            #337AB7;
            margin-top: -20px;
        }
    /* footer */

    .footer-section{
        display: grid;
        grid-gap: 3px;
        grid-template-columns: repeat(3, 1fr);
        list-style: none;
        color: white;
        text-align: center;
        padding: 10px;
    } 
    .display-2{
        font-size: 11px;
        color: #ffffff;
    }

    .fa-linkedin-in{
        color:white;
    }
    .fa-facebook{
        color:white;
        
        
        
    }
    .fa-twitter{
        color:white;
        
    }

    .footer-section1{
        display: grid;
        grid-template-columns: auto 40px 40px 200px auto;
        margin-top: -10px;
    }
    .pr-2{
        padding-right: 1.5em;
    }
</style>
    <body>
        <div class="profile">
            <div class="profile-top"></div>
            <div class="text-center">
                <img src="images/hipster.jpg" class="profile-image">
            </div>
            <div class="profile-body">
                <h3>Simeon Offiong
                    <br>
                    <small>Intern Software Engineer</small>
                </h3>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-12">
                <div class="panel panel-default" style="background: #eee;">
                    <div class="jumbotron text-center">
                        <h1 class="display-3">Get in Touch!</h1>
                        <p class="lead">Want to talk about developing a new project for your business or do you have questions?</p>
                        <p class="Lead">Regardless, feel free to contact me.</p>
                        <hr class="m-y-md">
                        <div class="from row">
                            <div class="col-md-12">
                                <h4 class="<?=$ui_msg_color;?>"><?=$ui_msg;?></h4>
                                <form action="" method="post" id="contactForm">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <input type="text" name="txtName" placeholder="Name" class="form-input form-control txtName"><br>
                                            <span id="name_err" class="text-danger"></span>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="email" name="txtEmail" placeholder="Email Address " class="form-input form-control txtEmail"><br>
                                            <span id="email_err" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <input type="text" name="numMobile" placeholder="Phone Number" class="form-input form-control numMobile"><br>
                                            <span id="mobile_err" class="text-danger"></span>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="txtMsg" placeholder="Message" class="form-input form-control txtMsg"><br>
                                            <span id="msg_err" class="text-danger"></span>
                                        </div>
                                    </div>
                                    
                                    <p class="lead">
                                        <input type="submit" name="btnSubmit" value="Send" id="btnSubmit" class="btn btn-primary btn-lg" />
                                    </p>
                                </form>
                                <hr class="m-y-md">
                            </div>
                        </div>
                        
                        <br>
                        <br>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="index.php" role="button">Home</a>
                            <a class="btn btn-primary btn-lg" href="about.php" role="button">About</a>
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="display-2 text-center">LOCATION</h1>
                    <p style="color: white; text-align: center; font-size: 11px; ">200 Goldie Street, Calabar, Nigeria</p>
                </div>
                <div class="col-md-4">
                    <h1 class="display-2 text-center">AROUND THE WEB</h1>
                    <p class="text-center">
                        <a href="https://www.facebook.com/simicodes" class="pr-2"> <i class="fab fa-facebook" class="font"></i></a>
                        <a href="https://www.linkedin.com/in/simicodes" class="pr-2"><i class="fab fa-linkedin-in" class="font"></i></a>
                        <a href="https://www.twitter.com/simicodes"><i class="fab fa-twitter" class="font"></i></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h1 class="display-2 text-center">MY PORTFOLIO</h1>
                    <p style="color:white; text-align: center; font-size: 11px;" >You can hire me and my team for any kind of programming work!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p style="color: white" class="text-center">Copyright &copy; Simeon Offiong 2020</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="css/fontawesome/js/all.min.js"></script>
        <script type="text/javascript">
            $('input#btnSubmit').on('click', function(e){
                e.preventDefault;
                // get input elements
                let txtname = $('input.txtName').val();
                let txtemail = $('input.txtEmail').val();
                let num_mobile = $('input.numMobile').val();
                let txtmsg = $('input.txtMsg').val();

                // get input error elements
                let nameErr = $('span#name_err');
                let emailErr = $('span#email_err');
                let mobileErr = $('span#mobile_err');
                let msgErr = $('span#msg_err');

                if(txtname == ''){
                    $(nameErr).text('Please input your name!');
                    return false;
                } 
                else if(txtemail == ''){
                    $(emailErr).text('Please input a valid email address!');
                    return false;
                } 
                else if(num_mobile == ''){
                    $(mobileErr).text('Please input a valid phone number!');
                    return false;
                } 
                else if(txtmsg == ''){
                    $(msgErr).text('Please specify your message!');
                    return false;
                } 
                else {
                    return true;
                }
            })
        </script>
    </body>
</html>