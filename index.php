<?php

$roadMap = [
  'distance'=> "24", 'time'=>"7",
  'distance'=> "31", 'time'=>"15",
  'distance'=> "50", 'time'=>"41",
];

#while ($roadMap[0]['time'] <= $roadMap[0]['distance']) {
#  $roadMap[0]['time'] += $roadMap[0]['time'];
#}
#while ($roadMap[1]['time'] <= $roadMap[1]['distance']) {
#  $roadMap[1]['time'] += $roadMap[1]['time'];
#}
#echo "You will reach the end of the first stotlight at: " . $roadMap[0]['time'] ."<br> ";
#echo "You'll reach the end of the second stotligh at: " . $roadMap[1]['time'];
foreach ($roadMap as $distance) {
  while ( $roadMap['time']<= $roadMap['distance']) {

    $roadMap['time'] += $roadMap['time'];

  }

}
echo "In that much time you are going to pass the last traffic light:  " . $roadMap['time'] . " seconds";
