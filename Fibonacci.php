<?php

  function fib($limeteSerie){
        if($limeteSerie<2){
        return $limeteSerie;
        }else{ 
        return fib($limeteSerie-1) + fib($limeteSerie-2); 
        }
    }
    for($i=0;$i<12;$i++){ 
    echo fib($i) . " " ; 
    }
