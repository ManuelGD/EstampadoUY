<?php
if(isset($_GET['num'])){
    $n = $_GET['num'];
}else{
    $n = 1;
}
$init = ($n * 15) - 15 ;
$end = $n * 15;

for ($i = $init; $i < $end; $i++){
    echo "</br>";
    for($o=0; $o<5; $o++){
        $i++;
        echo "Articulo $i ";
    }
    echo "</br>";
}
echo "</br>";
$numTotal = 100;
for ($e=1; $e<$numTotal/10; $e++){ ?>
    <a href="calc.php?num=<?php echo $e ?>"><?php echo $e ?></a>
<?php } ?>