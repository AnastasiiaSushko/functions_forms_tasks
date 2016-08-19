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
<form method="get" action="9.php">
    <textarea name="text" id="text" cols="30" rows="5"></textarea>
    <label for="text">Add your comment</label><br>
    <input type="submit" value="Submit"><br>

</form>


<?php
//Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
// Ввод текста реализовать с помощью формы.

function reverseString($text){
    $reverseStr = strrev($text);
    return $reverseStr;
}

    if (isset($_GET['text'])) {
        $result = reverseString($_GET['text']);
        echo $result;
    }
