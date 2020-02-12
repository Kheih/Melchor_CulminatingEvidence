<?php 
    $conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_1820343");

    if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
    }
    $sql = "SELECT * FROM tblmovie";
    $q = mysqli_query($conn, $sql);

    header("Content-type: text/xml");

    echo "<?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'><channel>";
    
    while($r = mysqli_fetch_array($q)){

        $title = $r['title'];
        $writer = $r['writer'];
        $director = $r['director'];
        $artist = $r['artist'];
		$genre = $r['genre'];

        echo "<movie>
        <title>$title</title>
        <writer>$writer</writer>
        <director>$director</director>
        <artist>$artist</artist>
		<genre>$genre</genre>
        </movie>";
    }
    echo "</channel></rss>";
?>
