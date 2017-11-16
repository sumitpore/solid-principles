<?php

class Reporter {
  public function sendReport(){
      $message = '';
    //Create new DB connection
      $dbhandler = new MySQLDbConnect('localhost', 'root', 'root'); 

      $users = $dbhandler->query('SELECT id, username FROM users where last_logged_in_at >= 23/05/2016 00:00:00'); //getting list of all users

      foreach($users as $singleUser){
          $message .= "Id: {$singleUser->id} \n";
          $message .= "Username: {$singleUser->username} \n";
      }

      //Sending Email
      $this->sendEmail('testuser@gmail.com', 'Authentication Report', $message);
  }

  private function sendEmail ($to, $subject, $message) {
      //sends email
  }

}
