<?php
/*
//Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
// которые есть и в первом и во втором поле ввода.
//Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет
// возвращать массив с общими словами.
*/
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
    <form method="get" action="1.php">
    <textarea name="firstText" id="firstText" cols="30" rows="5"></textarea>
    <label for="firstText">Add your comment</label><br>
    <textarea name="secondText" id="secondText" cols="30" rows="5"></textarea>
    <label for="secondText">Add your comment</label><br>
    <input type="submit" value="Submit"><br>

</form>
    </body>
</html>

<?php
var_dump($_GET);
echo '<br>';

function getCommonWords($text1,$text2){
    $textArr1 = explode(' ',$text1);
    $textArr2 = explode(' ',$text2);
    $result = array_intersect($textArr1,$textArr2);
    $result = array_unique($result);
    return $result;
}
if(isset($_GET['firstText']) || isset($secondText)) {
    var_dump(getCommonWords($_GET['firstText'], $_GET['secondText']));
}