<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author NguyenQuangKhai
 */
$_HOST = "db.hostvn.net";
$_USERNAME = "mothoith_kyniem";
$_PASSWORD = "quangkhai273";
$_DATABASE = "mothoith_kyniem";

$conn = mysql_connect($_HOST, $_USERNAME, $_PASSWORD);
if (!$conn) {
    die('Could not connect to MySQL: ' . mysql_error());
}
$data = mysql_select_db($_DATABASE);
if(!$data){
    die('Database connection error : ' . mysql_error());
}
mysql_query("SET NAMES 'utf8'");
?>
