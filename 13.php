<?php
//Есть строка $string = 'яблоко черешня вишня вишня черешня
// груша яблоко черешня вишня яблоко вишня вишня черешня
// груша яблоко черешня черешня вишня яблоко вишня вишня
// черешня вишня черешня груша яблоко черешня черешня вишня
// яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$sting = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня черешня черешня вишня черешня груша яблоко черешня черешня вишня';


function statisticWords($text){
    $words = explode(' ',$text);
    foreach ($words as $key=>$val)
    {
        if(empty($val))
        {
            unset($words[$key]);}
    }
    $statistic = array_count_values($words);
    return $statistic;
}

function listWords($arr){
    ?>
<ol>
    <?php foreach ($arr as $key => $value)
    {?>
<li><?php echo $key.' - '.$value ?></li>
    <?php } ?>
</ol>
<?php }

//listWords($newArr);

$newArr = statisticWords($sting);
listWords($newArr);