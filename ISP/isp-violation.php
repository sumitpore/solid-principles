<?php

interface RestaurantInterface {
  public  function acceptOnlineOrder();
  public  function takeTelephoneOrder();
  public  function payOnline();
  public  function walkInCustomerOrder();
  public  function payInPerson();
}

class OnlineClientImpl implements RestaurantInterface{

  public function acceptOnlineOrder() {
    //logic for placing online order
  }
 
  public function takeTelephoneOrder() {
    //Not Applicable for Online Order
    throw new UnsupportedOperationException();      
  }
 
  public function payOnline() {
    //logic for paying online       
  }
  
  public function walkInCustomerOrder() {
    //Not Applicable for Online Order
    throw new UnsupportedOperationException();
  }

  public function payInPerson() {
    //Not Applicable for Online Order
    throw new UnsupportedOperationException();      
  }

}

class TelephoneClientImpl implements RestaurantInterface{

  public function acceptOnlineOrder() {
    throw new UnsupportedOperationException();  
  }
 
  public function takeTelephoneOrder() {
    //Logic for taking online order      
  }
 
  public function payOnline() {
    throw new UnsupportedOperationException();       
  }
  
  public function walkInCustomerOrder() {
    throw new UnsupportedOperationException();
  }

  public function payInPerson() {
    //Logic for taking payment.     
  }

}

class WalkinClientImpl implements RestaurantInterface{

  public function acceptOnlineOrder() {
    throw new UnsupportedOperationException();  
  }
 
  public function takeTelephoneOrder() {
    throw new UnsupportedOperationException();      
  }
 
  public function payOnline() {
    throw new UnsupportedOperationException();       
  }
  
  public function walkInCustomerOrder() {
    //Logic for taking order
  }

  public function payInPerson() {
    //Logic for taking payment.     
  }

}