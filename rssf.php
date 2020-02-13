<?php
    $rssf = '<?xml version="1.0" encoding="UTF-8"?>';
    $rssf .= '<rss version="2.0">';
    $rssf .= '<channel>';

    $con = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820343") or die (mysqli_error($con));
    $sql = "SELECT * FROM tbl_movie";
    $q = mysqli_query($con, $sql) or die (mysqli_error($con));

    while($r= mysqli_fetch_assoc($q)){
        extract($r);
        
        $rssf .= '<movie>';
        $rssf .= '<mov_title>' . $mov_title . '</mov_title>';
        $rssf .= '<mov_director>' . $mov_director . '</mov_director>';
        $rssf .= '<mov_artist>' . $mov_artist . '</mov_artist>';
        $rssf .= '<mov_genre>' . $mov_genre . '</mov_genre>';
        $rssf .= '<mov_writer>' . $mov_writer . '</mov_writer>';
        $rssf .= '</movie>';
    }
    $rssf .= '</channel>';
    $rssf .= '</rss>';

    echo $rssf;
?>
