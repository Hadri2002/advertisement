<?php
class Advertisement {

// Attributes //

  public $id;
  public $title;
  public $user;

// Functions //
  
  function __construct($title, $id, $user){
  $this->title = $title;
  $this->id = $id;
  $this->user = $user;
}

  function set_title($title) {
    $this->title = $title;
  }

  function get_title() {
    return $this->title;
  }

  function get_id() {
    return $this->id;
  }

  function set_id($id) {
    $this->id = $id;
  }

  function get_user() {
    return $this->user;
  }

  function set_user($user) {
    $this->user = $user;
  }

}
?>
