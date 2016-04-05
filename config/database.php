<?php

$config['database'] = array(
  'host'     => 'localhost',
  'username' => 'gtass',
  'password' => 'gtass',
  'dbname'   => 'gtass'
);

$db = new mysqli(
  $config['database']['host'],
  $config['database']['username'],
  $config['database']['password'],
  $config['database']['dbname']
);

if ( $db->connect_errno )
  die( 'Failed to connect to MySQL: (' . $db->connect_errno . ') ' . $db->connect_error );
