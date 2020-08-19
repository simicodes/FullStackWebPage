<?php
    include('database.php');
    $connect = new database();
?>
<!DOCTYPE html>
<html>

    <head>
        <title>About - Simicodes</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <style>
    /*body{*/
        /*background: #e2e2e2;*/
        /*background: #EEEEEE;*/
    /*}*/
    
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
                        <h3 class="display-3">Contact Messages</h3>
                        <div class="table-responsive">
                            <table class="table-bordered">
                                <tr>
                                    <td>S/N</td>
                                    <td>Name</td>
                                    <td>Phone Number</td>
                                    <td>Email</td>
                                    <td>Message</td>
                                    <td>Date</td>
                                </tr>
                                <?php
                                    $counter = 1;
                                    $allMessages = $connect->getMessages();
                                    foreach ($allMessages as $oneMessage) :
                                ?>
                                    <tr>
                                        <td><?= $counter++ ?></td>
                                        <td><?= $oneMessage['name']?></td>
                                        <td><?= $oneMessage['phone']?></td>
                                        <td><?= $oneMessage['email']?></td>
                                        <td><?= $oneMessage['message']?></td>
                                        <td><?= $oneMessage['created_at']?></td>
                                    </tr>
                                <?php
                                    endforeach;
                                ?>
                            </table>
                        </div>
                        <br>
                        <br>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="index.php" role="button">Home</a>
                            <a class="btn btn-primary btn-lg" href="contact.php" role="button">Contact</a>
                            <a class="btn btn-primary btn-lg" href="about.php" role="button">About</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
