<?php
    $rss = '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $con = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820343") or die (mysqli_error($con));
    $sql = "SELECT * FROM tblmovie;";
    $q = mysqli_query($con, $sql) or die (mysqli_error($con));
    
    while($r= mysqli_fetch_assoc($q)){
        extract($r);
        
        $rss .= '<movie>';
        $rss .= '<mov_title>' . $mus_title . '</mov_title>';
        $rss .= '<mov_director>' . $mus_artist . '</mov_director>';
        $rss .= '<mov_writer>' . $mus_genre . '</mov_writer>';
        $rss .= '<mov_artist>' . $mus_writer . '</mov_artist>';
        $rss .= '<mov_genre>' . $mus_writer . '</mov_genre>';
        $rss .= '</movie>';
    }
    $rss .= '</channel>';
    $rss .= '</rss>';
    echo $rss;
?>
