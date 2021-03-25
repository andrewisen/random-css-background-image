<?php
/**
 * Edit this
 */
$IMAGE_PATH = "./img/";
/**
 * Main Function
 */
function main($IMAGE_PATH){
    $images = getAllImages($IMAGE_PATH);
    $image = getRandomImage($IMAGE_PATH,$images);
    updateHeader($image);
  
}
/**
 * Searches for all the pathnames matching pattern according to the rules, in this case "*"
 */
function getAllImages($IMAGE_PATH){
    $images = array();
    foreach(glob($IMAGE_PATH .'*') as $file_name){
        array_push($images, basename($file_name));
    }
    return $images;
}
/**
 * Shuffle the array and get the first item
 */
function getRandomImage($IMAGE_PATH,$images){
    shuffle($images);
    $image = $IMAGE_PATH.$images[0];
    return $image;
}
/**
 * Simple and dirty way to point the user to the file
 */
function updateHeader($image){
    header('Location: '.$image);
}
/**
 * Call the main function
 */
main($IMAGE_PATH)
?>
