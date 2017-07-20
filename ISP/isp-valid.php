<?php

interface OnlineOrder{
  public  function acceptOnlineOrder();
}

interface TelephoneOrder {
   public  function takeTelephoneOrder();
}

interface OfflineOrder {
  public  function walkInCustomerOrder();
}


interface OnlinePayment{
  public  function payOnline();
}

interface OfflinePayment{
  public  function payInPerson();
}


class Restaurant {

  public function placeOrder() {
      //Code to add order info in db
  }

  public function makePayment() {
    //Code to add payment info in db
  }

}

class OnlineClientImpl extends Restaurant implements OnlineOrder, OnlinePayment {

  public function acceptOnlineOrder() {
    //logic for placing online order
  }
 
 
  public function payOnline() {
    //logic for paying online       
  }

}

class TelephoneClientImpl extends Restaurant implements TelephoneOrder, OfflinePayment {

  public function takeTelephoneOrder() {
    //Logic for taking online order      
  }

  public function payInPerson() {
    //Logic for taking payment.     
  }

}

class WalkinClientImpl extends Restaurant implements OfflineOrder, OfflinePayment {

  public function walkInCustomerOrder() {
    //Logic for taking order
  }

  public function payInPerson() {
    //Logic for taking payment.     
  }

}