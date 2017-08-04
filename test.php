<?php

$imgpath = "blue.jpg";
//echo $imgpath;

date_default_timezone_set('Asia/Tokyo');
$time_ = date("H:i:s");
$data = array(
  "hour" => date("H"),
  "min" => date("i"),
  "sec" => date("s")
);
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $data["status"] = "Success";
}
echo json_encode($data);

?>