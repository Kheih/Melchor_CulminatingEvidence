<?php
    $rss = '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820343") or die (mysqli_error($connect));
    $sql = "SELECT * FROM tbl_movie;";
    $query = mysqli_query($connect, $sql) or die (mysqli_error($connect));

    while($records= mysqli_fetch_assoc($query)){
        extract($records);
        
        $rss .= '<movie>';
        $rss .= '<mov_title>' . $mov_title . '</mov_title>';
        $rss .= '<mov_director>' . $mov_director . '</mov_director>';
        $rss .= '<mov_writer>' . $mov_writer . '</mov_writer>';
        $rss .= '<mov_artist>' . $mov_artist . '</mov_artist>';
        $rss .= '<mov_genre>' . $mov_genre . '</mov_genre>';
        $rss .= '</movie>';
    }
    $rss .= '</channel>';
    $rss .= '</rss>';

    echo $rss;
?>
