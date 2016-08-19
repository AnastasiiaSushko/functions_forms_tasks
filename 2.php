<?php

//Создать форму с элементом textarea. При отправке формы
// скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.

?>
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
    <form method="get" action="2.php">
        <textarea name="text" id="text" cols="30" rows="5"></textarea>
        <label for="text">Add your comment</label><br>
        <input type="submit" value="Submit"><br>

    </form>
    </body>
    </html>

<?php
var_dump($_GET);
echo '<br>';

function getThreeLongestWords($text,$topCount=3){
    $textArr = explode(' ',$text);
    usort($textArr,'cmp');
    $words = array_unique($textArr);
    return  array_slice($words,0,$topCount);
    
}

function cmp($a,$b){
    if(strlen($a)==strlen($b)){
        return 0;
    }
    return (strlen($a)<strlen($b))? -1 :1;
}

if(isset($_GET['text'])){
print_r(getThreeLongestWords($_GET['text']));}