<?php

include "../admin/class/config.php";

$query = "SELECT * FROM event";

$EventArray = array();

if ($result = $link->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {

       array_push($EventArray, $row);
    }
  
    if(count($EventArray)){

         createXMLfile($EventArray);

     }

    /* free result set */
    $result->free();
}

/* close connection */
$link->close();

function createXMLfile($EventArray){
  
   $filePath = 'event.xml';

   $dom     = new DOMDocument('1.0', 'utf-8'); 

   $root      = $dom->createElement('event'); 

   for($i=0; $i<count($EventArray); $i++){
     
     $event_id        =  $EventArray[$i]['event_id'];  

     $eventname      =  $EventArray[$i]['eventname']; 
      $description     =  $EventArray[$i]['description']; 

     $date   =         $EventArray[$i]['date']; 

     $time     =      $EventArray[$i]['time']; 

     

     $event = $dom->createElement('event');
     $event->setAttribute('event_id', $event_id);

     $name     = $dom->createElement('EventName', $eventname); 
     $event->appendChild($name); 

     $description   = $dom->createElement('Description', $description); 
     $event->appendChild($description); 

     $date    = $dom->createElement('Date', $date); 
     $event->appendChild($date); 

     $time     = $dom->createElement('Time', $time); 
     $event->appendChild($time); 

     
 
     $root->appendChild($event);

   }

   $dom->appendChild($root); 

   $dom->save($filePath); 

 } 
 ?>