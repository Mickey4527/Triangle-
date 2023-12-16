<?php

    // a + b > c , b + c > a , c + a > b -> triangle
    // a = b = c -> equilateral
    // a = b != c or a = c != b or b = c != a -> isosceles
    // a != b != c -> scalene
    // a^2 + b^2 = c^2 -> right angle triangle


    // 0.00 <= (a = b = c) => 100.00


    function Triangle($side_one, $side_two, $side_three){
        // check value is numeric or not
        if(is_numeric($side_one) && is_numeric($side_two) && is_numeric($side_three)){
            // decimal to 2 digit
            $side_one  = round($side_one, 2);
            $side_two  = round($side_two, 2);
            $side_three  = round($side_three, 2);
            // if value < 100
            if(($side_one <= 100 && $side_two <= 100 && $side_three <= 100) && ($side_one >= 0 && $side_two >= 0 && $side_three >= 0)){
                if($side_one + $side_two > $side_three && $side_two + $side_three > $side_one && $side_three + $side_one > $side_two){
                    if($side_one == $side_two && $side_two == $side_three){
                        echo "Equilateral Triangle";
                    }
                    elseif($side_one == $side_two || $side_two == $side_three || $side_three == $side_one){
                        echo "Isosceles Triangle";
                    }
                    elseif($side_one != $side_two && $side_two != $side_three && $side_three != $side_one){
                        echo "Scalene Triangle";
                    }
                    elseif(pow($side_one, 2) + pow($side_two, 2) == pow($side_three, 2) || pow($side_two, 2) + pow($side_three, 2) == pow($side_one, 2) || pow($side_three, 2) + pow($side_one, 2) == pow($side_two, 2)){
                        echo "Right Angle Triangle";
                    }
                }
                else{
                    echo "Not a Triangle";
                }
            }
            else{
                echo "Please enter value between 0 to 100";
            }
        }
        else{
            echo "Please enter numeric value";
        }
    }

    Triangle($_POST['side_one'], $_POST['side_two'], $_POST['side_three']);
    
?>