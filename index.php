<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kheihxml.herokuapp.com/rssf.php");//XML page URL

 $content = $domOBJ->getElementsByTagName("movie");
?>

<h1>Best Movies in 2019</h1>

<?php
 foreach($content as $data){
     $title = $data->getElementsByTagName("mov_title")->item(0)->nodeValue;
     $director = $data->getElementsByTagName("mov_director")->item(0)->nodeValue;
     $writer = $data->getElementsByTagName("mov_writer")->item(0)->nodeValue;
     $artist = $data->getElementsByTagName("mov_artist")->item(0)->nodeValue;
     $genre = $data->getElementsByTagName("mov_genre")->item(0)->nodeValue;
  
     echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>Director: $director </li>
                  <li>Writer: $writer</li>
                  <li>Artist: $artist </li>
                  <li>Genre: $genre </li>
              </ul>
          </ul>";
 }
?>
