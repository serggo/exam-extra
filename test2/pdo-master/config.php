<?php

/**
 * Configuration for database connection
 *
 */

$host       = "testhost";
$username   = "serg";
$password   = "changeme88";
$dbname     = "testhost";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
