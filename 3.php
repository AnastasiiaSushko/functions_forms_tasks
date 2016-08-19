<?php
//Есть текстовый файл. Необходимо удалить из него все слова, длина 
//которых превыщает N символов. Значение N задавать через форму. 
//Проверить работу на кириллических строках - найти ошибку, найти 
//решение.
?>
<form method="get" action="3.php">
    <input type="number" name ="number" id="number">
    <label for="number">Введите количество символов</label>
    <br>
    <input type="submit" value="Отправить">
</form>

<?php
$text = file_get_contents("1.txt");
echo $text.'<br><br>';

function deleteLongWords($text, $numb){
    $words = explode(' ',$text);
    foreach ($words as $key=>$val ){
        if(strlen($val)>$numb){
            unset($words[$key]);
        }
    }$newStr = implode(' ',$words);
    return $newStr;
}

if(isset($_GET['number'])){
echo deleteLongWords($text,$_GET['number']);
}

