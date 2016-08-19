<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New site</title>

    <style>
        label{
            color: darkred;
            vertical-align:sub;
        }
    </style>

</head>
<body>
<form method="get" action="10.php">
    <textarea name="text" id="text" cols="30" rows="5"></textarea>
    <label for="text">Add your comment</label><br>
    <input type="submit" value="Submit"><br>

</form>



<?php
//Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются
//пробелами. Текст должен вводиться с формы.

function countUniqueWords($text){
    $text = mb_strtolower($text);
    $newArr = explode(' ',$text);
    $uniqueWords = array_unique($newArr);
    $result = count($uniqueWords);
    return $result;
}
if (isset($_GET['text'])) {
    echo countUniqueWords($_GET['text']);
}