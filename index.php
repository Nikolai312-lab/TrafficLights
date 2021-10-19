<?php

$roadMap = [
  'distance'=> "9", 'time'=>"10",
  'distance'=> "13", 'time'=>"14",
  #'distance'=> "167", 'time'=>"35",
  #'distance'=> "211", 'time'=>"11",
  #'distance'=> "289", 'time'=>"46"
];

if ($roadMap['distance'] < $roadMap['time']) {
      $roadMap['time'] --;
      echo "In that much time you are going to pass the last traffic light:  " . $roadMap['time'] . " seconds";
    }
    else {
      while ($roadMap['time'] <= $roadMap['distance']) {
           $roadMap['time'] += $roadMap['time'];
        }
       echo "In that much time you are going to pass the last traffic light:  " . $roadMap['time'] . " seconds";
    }
