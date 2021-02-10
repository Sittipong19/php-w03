<?php
function CalTax($income){
    $tax = 0;
    if($income <= 150000){
        $tax = 0;
    }else if($income <= 300000){
        $tax =($income - 150000) * 0.5;
    }else if($income <=500000){
        $tax =($income - 300000) * 0.1 + 7500;
    }else if($income <=750000){
        $tax =($income - 500000) * 0.15 + 20000 + 7500;
    }else if($income <=1000000){
        $tax =($income - 750000) * 0.2 + 37500 + 20000 + 7500;
    }else if($income <=2000000){
        $tax =($income - 1000000) * 0.25 + 50000 + 37500 + 20000 + 7500;
    }else if($income <=5000000){
        $tax =($income - 2000000) * 0.3 + 250000 + 50000 + 37500 + 20000 + 7500;
    }else {
        $tax =($income -5000000 ) * 0.35 + 900000 + 250000 + 50000 + 37500 +20000 + 7500;
    }
    return $tax;
}
?>