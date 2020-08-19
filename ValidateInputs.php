<?php

Class ValidateInputs {

    static public function validateInt($intVariable) {
        if ($intVariable != '' && is_int($intVariable)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    static public function validateFloat($floatVariable) {
        if ($floatVariable != '' && is_float($floatVariable)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    static public function validateString($stringVariable) {
        if ($stringVariable != '' && is_string($stringVariable)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    static public function validateBoolean($boolVariable) {
        if ($boolVariable != '' && is_bool($boolVariable)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    static public function validateEmail($emailVariable) {
        if ($emailVariable != '' && filter_var($emailVariable, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    static public function validateUsername($usernameVariable) {
        if ($usernameVariable != '' && preg_match("/^[a-zA-Z0-9]*$/", $usernameVariable)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    static public function validateUrl($urlVariable) {
        if ($urlVariable != '' && preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $urlVariable)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    static public function send_mail($to, $subject, $message)
	{
		$to      	= $to;
		$subject 	= $subject;
		$headers	= "MIME-Version: 1.0" . "\r\n";
		$headers   .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// $headers   .= 'Reply-To: info@mydailytask.com' . "\r\n";
		// $headers   .= 'From: <info@mydailytask.com>' . "\r\n";
		$headers   .= 'X-Mailer: PHP/' . phpversion();

		$message = $message;		

		mail($to, $subject, $message, $headers);
	}

}
