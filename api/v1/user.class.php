<?php

class User {

  protected $uid = null;

  public function __construct($id=null) {
    $this->uid = $id;
 }

  public function __get($name) {
    return $this->$name;
  }

}


?>
