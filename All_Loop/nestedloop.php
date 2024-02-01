<?php

for ($outer_list = 1; $outer_list <= 3; $outer_list++) {
    echo "List $outer_list <br>";

    for ($inner_list = 1; $inner_list <= 2; $inner_list++) {
        echo "-----------Inner LIst $inner_list<br>";
        if ($outer_list == 2 && $inner_list == 1) {
            break 2;
        }
    }
}
