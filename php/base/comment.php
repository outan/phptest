<?php

  // ここはコメントとなります。

  # ここはコメントとなります。

  /*
    ここはコメントとなります。
  */
  
   $hello="Hello World";
  print ($hello);
  
  $color[0]="red";
  $color[1]="green";
  $color[2]="blue";
  print_r($color);
  
  $color['cat']="black";
  $color['dog']="white";
  $color['water']="blue";
  print_r($color);
  
  function zeikomi($nedan) {
    $nedan = $nedan * 1.05;
    return $nedan;
  }
  print (zeikomi(100));
  
   $a = 1;
  function localtest(){
    print ($a+1);
  }
  localtest();


?>