<?php
require_once 'config.php';

// this function initiates a search into the prototype database, it is still under dev....

function search(){
    $item = $_GET['item'];
    $cat = $_GET['category'];
    $min_len = 3;
    global $link;

    if (strlen($item) >= $min_len){
        $item = htmlspecialchars($item);
        // $item = mysqli_real_escape_string($item);

        $sql = "SELECT * FROM $cat WHERE post_title LIKE '%".$item."%' OR post_body LIKE '%".$item."%' OR post_image LIKE '%".$item."%' ";
        $query = mysqli_query($link, $sql);

        if (mysqli_num_rows($query) > 0){
            // while($rslt = mysqli_fetch_array($query)){
                // echo "<p><h3>".$rslt['post_title']."</h3>".$rslt['post_body']."</p>";
            // }
            return $query;
        }
        else {
            $msg = "no results";
            return $msg;
        }
    }
    else{
        $ms = "Min Length is".$min_len;
        return $ms;
    }
}