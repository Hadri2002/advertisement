<?php
class User {

// Attributes //

  public $id;
  public $name;

// Functions //

  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

  function get_id() {
    return $this->id;
  }

  function set_id($id) {
    $this->id = $id;
  }


}

?>