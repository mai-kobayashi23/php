<?php
for ($i = 1; $i < 15; $i++) {
    if ($i % 15 === 0) {
        break;
    }
    if ($i % 2 === 0) {
        continue;
    }
    echo $i . "\n";
}

for ($i = 1; $i < 15; $i++) {
    if ($i === 13)
        echo "for_out" . "\n";
}
