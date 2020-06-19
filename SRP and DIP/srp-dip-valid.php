<?php

/**
 * This class is refactored to achieve Single Responsibility Principle
 */
class Reporter {

  public function sendReport(DBConnectionInterface $dbHandler, EmailInterface $emailHandler){

    $report = $this->generateReport($dbHandler);

    //Sending Email
    $emailHandler->sendEmail('testuser@gmail.com', 'Authentication Report', $report);
  }

  public function generateReport(DBConnectionInterface $dbHandler) {
      $message = '';

      //getting list of all users
      $users = $dbHandler->query('SELECT id, username, last_logged_in_at FROM users where last_logged_in_at >= 23/05/2016 00:00:00'); 

      foreach($users as $singleUser){
          $message .= "Id: {$singleUser->id} " . PHP_EOL;
          $message .= "Username: {$singleUser->username} " . PHP_EOL;
      }

      return $message;
  }

}


/**
 * This interface is to achieve Dependency Inversion Principle
 */
interface DBConnectionInterface {
    public function query();
    public function connect();
} 

class MySQLConnection implements DBConnectionInterface {

    public function __construct($server, $userName, $password, $port){
      $this->connect($server, $userName, $password, $port);
    }

    public function connect($server, $userName, $password, $port){
        //Code to create connection in MySQL
    }

    public function query($queryToBeExecuted) {
        //Code to execute DB Query in MySQL
    }
}

class OracleConnection implements DBConnectionInterface {

    public function __construct($server, $userName, $password, $port){
      $this->connect($server, $userName, $password, $port);
    }

    public function connect($server, $userName, $password, $port){
        //Code to create connection in Oracle
    }

    public function query($queryToBeExecuted) {
        //Code to execute DB Query in Oracle
    }
}

/**
 * This interface is to achieve Dependency Inversion Principle
 */
interface EmailInterface {
  public function sendEmail($to, $subject, $message);
}

class PlainEmail implements EmailInterface {
  public function sendEmail($to, $subject, $message) {
    //code to send Plain Emails
  }
}

class HTMLEmail implements EmailInterface {
  public function sendEmail($to, $subject, $message) {
    //code to send HTML Emails
  }
}

$emailHandler = isSendingToSystem() ? new PlainEmail() : new HTMLEmail();
$dbHandler = new OracleConnection();
$reporter = new Reporter($dbHandler, $emailHandler);
