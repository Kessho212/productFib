<?php
    /*
        Given a number, say prod (for product), we search two Fibonacci numbers F(n) and F(n+1) verifying

        F(n) * F(n+1) = prod.

        Your function productFib takes an integer (prod) and returns an array:

        [F(n), F(n+1), true] or {F(n), F(n+1), 1} or (F(n), F(n+1), True)
        depending on the language if F(n) * F(n+1) = prod.
        
        If you don't find two consecutive F(m) verifying F(m) * F(m+1) = prodyou will return
        [F(m), F(m+1), false] or {F(n), F(n+1), 0} or (F(n), F(n+1), False)
    */
  
    function productFib($prod) {
        $fib[]=0;
        $fib[]=1;
        $fib[]=1;
        $i=3;
        $while = true;
        while($while){
            $fib[] = $fib[$i-1]+$fib[$i-2];
            $fibi = $fib[$i-1]*$fib[$i];
            if($fibi >= $prod){
                $while = false;
                return array($fib[$i-1], $fib[$i], $fib[$i-1]*$fib[$i] == $prod);
            }
            $i++;
        }
    }
    print_r(productFib(4895));