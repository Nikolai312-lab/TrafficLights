<?php

$roadMap = [
  'distance'=> "1", 'time'=>"2",
  'distance'=> "3", 'time'=>"2"
];

foreach ($roadMap as $time) {
  while ($roadMap['time'] <= $roadMap['distance'] ) {
    $roadMap['time'] += $roadMap['time'];
  }
}

echo "In that much time you are going to pass the last traffic light:  " . $roadMap['time'] . " seconds";
