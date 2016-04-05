<?php

require_once('Model.php');

class User extends Model {

  protected static $table = 'users';

  public $id;
  public $email;
  public $name;
  public $password;
  public $is_administrator;
  public $created_at;
  public $updated_at;

}
