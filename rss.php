<?php 

$rss= '<?xml version="1.0" encoding="UTF-8"?>';
$rss .= '<rss version="2.0">';
$rss .= '<channel>';

$connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820343") or die (mysqli_error($connect));
$sql = "SELECT * FROM tbl_movie";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));


while($record= mysqli_fetch_assoc($query)) {
    extract($record);
    
    $rss .= '<movie>';
    $rss .= '<title>' . $title. '</title>';
    $rss .= '<director>' . $director . '</director>';
    $rss .= '<writer>' . $writer . '</writer>';
    $rss .= '<artist>' . $artist . '</artist>';
	$rss .= '<genre>' . $genre . '</genre>';
    $rss .= '</movie>';
}
$rss .= '</channel>';
$rss .= '</rss>';

echo $rss; 
?>
