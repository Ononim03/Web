<?php
    function find_min($x1, $x2, $x3 = 2e9, $x4 = 2e9, $x5 = 2e9) {
        $m12 = $x1 < $x2 ? $x1 : $x2;
        $m34 = $x3 < $x4 ? $x3 : $x4;
        $m14 = $m12 < $m34 ? $m12 : $m34;
        return $m14 < $x5 ? $m14 : $x5;
    }

