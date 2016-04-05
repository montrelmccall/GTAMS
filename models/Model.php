<?php

require_once('config/database.php');

abstract class Model {

  public static function get($params) {
    $sql = 'SELECT * FROM ' . static::$table . ' WHERE';
    foreach ($params as $key => $val) {
      $sql .= ' ' . $key . '=?';
    }

    if ( ! $stmt = $GLOBALS['db']->prepare( $sql ) ) {
      echo 'MySQL prepared statement failed: (' . $GLOBALS['db']->errno . ') ' . $GLOBALS['db']->error;
      return;
    }

    foreach ($params as $key => $val) {
      if (is_int($val))
        $stmt->bind_param('i', $val);
      else if (is_numeric($val))
        $stmt->bind_param('d', $val);
      else
        $stmt->bind_param('s', $val);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    $results = [];

    while ($object = $result->fetch_object(get_called_class())) {
      $results[] = $object;
    }

    return $results;
  }

}
