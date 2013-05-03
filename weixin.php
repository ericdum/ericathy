<?php
   $token = "jadhi21kdsalnlpkjw12ig2j1khlolas183ah";

   $signature = @$_GET['signature'];
   $timestamp = @$_GET['timestamp'];
   $nonce = @$_GET['nonce'];
   $echostr = @$_GET['echostr'];

   $validation = array(
       $token,
       $timestamp,
       $nonce,
   );

   sort($validation, SORT_STRING);
   $validation = sha1(implode('', $validation));

   if( $validation == $echostr ) {
       echo $echostr;
   }
