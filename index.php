<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kheih17.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("movie");
?>

 <h1>Best Movies in 2019</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $director = $data->getElementsByTagName("director")->item(0)->nodeValue;
     $writer = $data->getElementsByTagName("writer")->item(0)->nodeValue;
     $artist = $data->getElementsByTagName("artist")->item(0)->nodeValue;
     $genre = $data->getElementsByTagName("genre")->item(0)->nodeValue;
 
 echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>director: $director </li>
                  <li>writer: $writer </li>
                  <li>artist: $artist </li>
		  <li>genre: $genre </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
