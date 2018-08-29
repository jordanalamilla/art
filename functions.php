<?php

function sanitize( $db, $string )
{
  $string = mysqli_real_escape_string( $db, strip_tags( trim( $string ) ) );
  return $string;
}

function getAllItems( $db, $table )
{
  $all_items = [];

  //SANITIZE AND QUERY DATABASE
  $table    = sanitize( $db, $table );
  $query    = "SELECT * FROM $table";
  $result   = mysqli_query( $db, $query ) or die( mysqli_error( $db ) . '<br>' . $query );
  
  //ADD ITEMS FROM DATABASE INTO ARRAY TO RETURN
  while ( $item = mysqli_fetch_assoc( $result ) ) {
    
    array_push( $all_items, $item );
    
  }

  return $all_items;
}

function getItem( $db, $table, $id )
{
  //SANITIZE
  $table    = sanitize( $db, $table );
  $id       = sanitize( $db, $id );

  //QUERY DATABASE
  $query    = "SELECT * FROM $table WHERE id=$id";
  $result   = mysqli_query( $db, $query ) or die( mysqli_error( $db ) . '<br>' . $query );
  $item     = mysqli_fetch_assoc( $result );

  return $item;
}