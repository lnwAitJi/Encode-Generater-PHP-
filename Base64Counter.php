<?php
# ! I allow you free use but Give me a credit!! #
//* Add Readline Function *//
function readline($prompt = ""):string{
    if($prompt){
        if(is_array($prompt)){
            var_dump($prompt);
        }else {
            echo $prompt."";
        }
    }
    $fp = fopen("php://stdin","r");
    $line = rtrim(fgets($fp, 1024));
    if(empty($line)){
        return '';
    }
    return $line;    
}
// ------------------------------------ \\
#Start!! (～￣▽￣)～
echo("--- > Start!!< ---\n");
Back01:
$code = readline("Enter Code Here > "); # I support to only 1 line code #
if ($code === "") {
    echo("look like you 'Code' is space only\n");
    goto Back01;}
Back02:
$encode = $code;
// ------------------------------------ \\
$count = readline("Enter Count of encode > ");
if ($count === "") {
    echo("look like you 'count' is space only\n");
    goto Back02;
}
if ( is_numeric($count) ) {
    for ($c = 0; $c >= 26; $c++) {
        $sure = readline("Hey ".$count." time, Is maybe lag Are u sure?\n 1) Not Sure\n 2) Sure\nEnter Here > ");
        switch ($sure){
            case 1:
                echo("OKAY, I Understand Let Chang Your Count!!\n");
                goto Back02;
                break;
            case 2:
                echo("☠️ Lag Warning ☠️\n");
                sleep(1);
                break;
            default;
               echo("Sorry I don't Understand ?-?\n");
               goto Back02;
        }
    }
} else {
    goto Back02;
}

// ------------------------------------ \\
for ($c = 0; $c <= $count; $c++) {
    echo("Ending in ".$c."/".$count."\n");
    $encoded = (base64_encode($encode));
    $encode = ('eval(base64_decode("'.$encoded.'"));');
  }
echo($encode);

# SEE ME How To RUN CODE!! #

# To Echo #
# echo(Press You Result Here); #
# This is ex. #
# echo(eval(base64_decode("This Is Very long"))); #

# TO Run it to var #
# $idk = Press You result here #

# dont forget to ";" use this #

# ! I allow you free use but Give me a credit!! #
?>