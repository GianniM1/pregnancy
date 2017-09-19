<?php

class Token {

  protected $uid;
  private $TIME_ALLOTTED = 3600; //60 minutes before it expires


  public function __construct($randKey=null, $token = null){
    if($token) {
      $tokenArray = json_decode($this->_decode($token,$randKey),true);
      if(!$this->_checkExp($tokenArray['exp'])) throw new Exception('Token Expired');
      $this->uid = $tokenArray['uid'];
    }
  }

  public function __get($var) {
    return $this->$var;
  }

  public function __set($var, $val) {
    $this->$var = $val;
  }

  private function _decode($token,$randKey) {
    //TODO: add decoding algorithm here lol
    return htmlspecialchars_decode($token);
  }

  private function _checkExp($exp) { //returns false if expired token
    $date = new DateTime();
    $cur_time = $date->getTimeStamp();
    $timeRemaining = $exp - $cur_time;
    if($timeRemaining>=0) {

      return true;
    } else {return false;}
  }

  private function _makeExp(){
    $date = new DateTime();
    $cur_time = $date->getTimeStamp();
    return $cur_time + $this->TIME_ALLOTTED;
  }

  public function genToken() {
    $token = json_encode([
      'uid' => $this->uid,
      'exp' => $this->_makeExp()
    ]);
    //TODO: add token encoding , encrypting , and signing code here...
    //return $token;
    return $token;
  }




}


 ?>
