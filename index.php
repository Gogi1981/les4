<?php
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 1) {
        continue;
    }
    echo $i . '<br>';
}

for ($a=1; $a<=10; $a++) {
    for ($b=1;$b<=10;$b++) {
        echo $a.'*'.$b.'='.($a*$b).'<br>'; }
}

?>
