<?php
  $name = $_POST["name"];
  $score = $_POST["score"];
  $level = $_POST["level"];
  
  $data = json_decode(file_get_contents("highscores.json"));
  $object = new stdClass();
  
  $object->name = $name;
  $object->level = $level;
  $object->score = $score;
  
  array_push($data, $object);
  $data = json_encode($data);
  $file = fopen("highscores.json", "w");
  fwrite($file, $data);
  fclose($file);
  echo "Saved!";
?>