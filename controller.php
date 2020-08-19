<?php
    include('ValidateInputs.php');
    include('database.php');
    $connect = new database();
    $ui_msg = "";
    $ui_msg_color = "";

    if (isset($_POST['btnSubmit'])) {
        $name = htmlentities(trim($_POST['txtName']), ENT_QUOTES, 'UTF-8');
        $email = htmlentities(trim($_POST['txtEmail']), ENT_QUOTES, 'UTF-8');
        $mobile = htmlentities(trim($_POST['numMobile']), ENT_QUOTES, 'UTF-8');
        $messageBody = htmlentities(trim($_POST['txtMsg']), ENT_QUOTES, 'UTF-8');

        $validName = ValidateInputs::validateString($name);
        $validEmail = ValidateInputs::validateEmail($email);
        $validMobile = ValidateInputs::validateString($mobile);
        $validMessage = ValidateInputs::validateString($messageBody);

        if ($validName == true && $validEmail == true && $validMobile == true && $validMessage == true) {
            $sendInfo = $connect->insertNewMessage($name, $email, $mobile, $messageBody);
            // $to = "simeonoffiong@gmail.com"; 
            // $subject = "Contact - Simicodes";
            // $message = "Mobile Number : ".$mobile.". Email : ".$email.". " . "\r\n" .$messageBody;
            // ValidateInputs::send_mail($to, $subject, $message);
            if ($sendInfo) {
                $ui_msg = "Your Message has been sent!.";
                $ui_msg_color = "text-success";
            } else {
                $ui_msg = "Something's not right! Please try again later.";
                $ui_msg_color = "text-danger";
            }
        } else {
            echo('bad data');
            exit();
        }

    }