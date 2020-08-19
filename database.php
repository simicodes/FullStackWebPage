<?php 
Class database {

    public $connect;
    private $msg = "";
    
    public function __construct() {
        //open connection to database
        // configuration
        $dbhost = "localhost";
        $dbname = "portfolio";
        $dbuser = "root";
        $dbpass = "";
        try {
            $this->connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            $this->msg = "Connection failed";
        }
        return TRUE;
    }
    
    Public function insertNewMessage($name, $email, $mobile, $messageBody) {
        try {
            $sql = "INSERT INTO contact(name, email, phone, message, created_at)" . "VALUES (:name, :email, :phone, :message, NOW())";
            $q = $this->connect->prepare($sql);
            $q->execute(array(
                ':name' => $name, 
                ':email' => $email, 
                ':phone' => $mobile, 
                ':message' => $messageBody
            ));
            
            //$this->msg = 'Your Message has been sent!.';
            return true;

        } catch (PDOException $e) {
            $this->msg = 'An error might have occurred in the System';
            exit();            
        }
    }

    public function getMessages() {
        try{
            $sql = "SELECT name, email, phone, message, created_at FROM contact";
            $smt = $this->connect->query($sql);
            $messages = $smt->fetchALL(PDO::FETCH_ASSOC);
            return $messages;
        } catch (PDOException $e) {
            $this->message = 'Unable to fetch messages!';
            exit();
        }
    }
}