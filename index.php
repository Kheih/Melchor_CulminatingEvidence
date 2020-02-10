<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kheihxml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("movie");
 
 ?>
<h2> Best Movies in 2019 </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $director= $data->getElementsByTagName("director")->item(0)->nodeValue;
   $writer = $data->getElementsByTagName("writer")->item(0)->nodeValue;
   $artist = $data->getElementsByTagName("artist")->item(0)->nodeValue;
   $genre= $data->getElementsByTagName("genre")->item(0)->nodeValue;
  
   echo "<li><b>Title:</b> $title
            <ul>
                <li> <b>Director:</b> $director</li>
                <li> <b>Writer:</b> $writer</li>
                <li> <b>Artist:</b> $artist</li>
		            		<li> <b>Genre:</b> $genre</li>
            </ul>
        </li>";
 }
?>
</ul>
