<?php
echo "start";
echo $_GET["sv"];
var_dump($_SERVER);
/* $conn = mysqli_connect($_GET["sv"],"24014377_1","7)6Sxp7[qN","epiz_24014377_w858");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$dayNumber = date("z") + 1;
$sql = "SELECT round from wprf_pc28 ORDER BY round DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
$content=file_get_contents("https://www.pc28yc.com/data.php");
preg_match('/<table([\s\S]*)table>/', $content, $matches, PREG_OFFSET_CAPTURE);
preg_match_all('/>\s*?(\d{6,7})\s*?<.*?>(\d{2,2})</',$matches[0][0],$final);
$length=count($final[1])-1;
for($i=$length;$i>=0;$i--){
if($final[1][$i]>$row['round']){
$insertsql="INSERT INTO wprf_pc28 (round,winner)VALUES (".$final[1][$i].",".$final[2][$i].")";
if ($conn->query($insertsql)===FALSE){
die("error");
}
}
}
}
echo "OK";
$conn->close();
*/
?>
