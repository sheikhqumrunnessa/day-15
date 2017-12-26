<?php
//echo "Helo World";
//    echo "<html>";
//      echo "<head>";
//          echo "<title>";
//            echo "HOME";
//          echo "</title>";
//      echo "</head>";
//      echo "<body>";
//          echo "<h1>This is a heading</h1>";
//          echo "<p>This is a paragraph</p>";
//      echo "<body>";
//    echo "<html>";
?>
    <!--<html>-->
    <!--  <head>-->
    <!--    <title> --><?php //echo "Home";?><!--</php></title>-->
    <!--  </head>-->
    <!--  <body>-->
    <!--     <h1>--><?php //echo "This is a heading."; ?><!--</h1>-->
    <!--     <p>--><?php //echo "This is a paragraph."; ?><!--</p>-->
    <!--  <input type="text" value="--><?php //echo "Hello World";?><!--"/>-->
    <!--  </body>-->
    <!--</html>-->
<?php
            //$ standerd rules for variable creating
            //    start with $ sign
            //A-Z,a-z,0-9,_
            //No number in first



            // In creating variable standerd rules

            //small letter
            //meaningfull
            //readable

            //$Name;
            //$NAME;
            //$name;
            //$NaMe;
            //$_9name;
            //$name9;
            //
            //$number=100;
            //$firstName="Rakib";
            //$lastName="Hasan";
            // echo $firstName.' '.$lastName;
            //variable
            //$name="Rakib";
            //ctrl+spacebar



            /*Arithmetic Operator
            Binary(+,-,*,/,%)
             Unary(++,--,(-))-----
            Assignment Operator
             =, +=, -=, *=, /=, %=
            Conditional Operator
            >, >=, <, <=, !=, ===, !==
            Logical Operator
            &&, ||, !
            */          echo 'Binary operator';
            $x=10;
            $y=20;
            echo ($x+$y);
            echo ('<hr/>');
            echo ($x-$y);
            echo ('<hr/>');
            echo ($x*$y);
            echo ('<hr/>');
            echo ($x/$y);
            echo ('<hr/>');
            echo ($x%$y);
            echo ('<hr/>');
            echo 'Unary operator';
            $x=10;
            $y=20;
            echo ($x++);
            echo ('<hr/>');
            echo ($x);
            echo ('<hr/>');
            echo (++$x);
            echo ('<hr/>');
            echo ($x);
            echo ('<hr/>');
            echo ($x--);
            echo ('<hr/>');
            echo ($x);
            echo ('<hr/>');
            echo (--$x);
            echo ('<hr/>');
            echo ($x);
            echo ('<hr/>');
            //-----------------------------
            echo 'Assignment Operator';

            $x=40;
            $y=40;
            echo ($x+=$y);
            echo ('<hr/>');
            echo ($x-=$y);
            echo ('<hr/>');
            echo ($x*=$y);
            echo ('<hr/>');
            echo ($x/=$y);
            echo ('<hr/>');
            echo ($x%=$y);
            echo ('<hr/>');
            //-------------
            echo 'Conditional operator';
            $x=10;
            $y=20;
            echo('<hr/>');
            echo($x>$y);
            echo('<hr/>');
            echo($x>=$y);
            echo('<hr/>');
            echo($x<$y);
            echo('<hr/>');
            echo($x==$y);
            echo('<hr/>');
            echo($x!=$y);
            echo('<hr/>');
            $x='20';
            $y=20;
            echo($x===$y);
            echo('<hr/>');
            echo($x!==$y);
            echo('<hr/>');
            echo 'Logical Operator';
            $x=10;
            $y=20;
            $z=30;
            echo('<hr/>');
            echo(($x>$y)&&($y>$z));
            echo('<hr/>');
            echo(($x>$y)&&($y<$z));
            echo('<hr/>');
            echo(($x<$y)&&($y>$z));
            echo('<hr/>');
            echo(($x<$y)&&($y<$z));
            echo('<hr/>');
            echo(($x>$y)||($y>$z));
            echo('<hr/>');
            echo(($x>$y)||($y<$z));
            echo('<hr/>');
            echo(($x<$y)||($y>$z));
            echo('<hr/>');
            echo(($x<$y)||($y<$z));
            echo('<hr/>');

            $a=true;
            echo (!$a);
            echo('<hr/>');
            $a=false;
            echo (!$a);
            echo('<hr/>');
            //----------------------------------
            ////statement
            ///*
            // * Single line statement
            // * Conditional statement
            //     * if
            //     * if else
            //     *if else if
            //     * switch
            // * Repeated statement
            //     *for
            //     * while
            //     * do while
            //     * /

            echo 'Single line statement';
            echo ('<hr/>');
            $x=10;
            $y=20;
            $z=$x+$y;
            echo $z;
            echo ('<hr/>');
            echo 'Conditional Statement';
            echo ('<hr/>');
            $x=10;
            $y=20;
            $z =$x+$y;
            if($x>$y){
                echo $z;
            }
            echo ('<hr/>');
            $x=10;
            $y=20;
            if($x>$y){
                echo ('Hello World');
            }else{
                echo ('Hello Javascript');
            }
            echo ('<hr/>');

            $x=100;
            $y=20;
            $z=40;
            if($x>$y){
                echo ('Hello World');
            }else if ($y>$z){
                echo ('Hello Javascript');
            }else if ($z<$x){
                echo ('Hello BITM');
            }else{
                echo ('Hello Dhaka');
            }
            echo ('<hr/>');


            $x=10;
            switch ($x) {
                case 5:
                    echo('Hello World');
                    break;
                case 10:
                    echo('Hello Bangladesh');
                    break;
                case 15:
                    echo('Hello Dhaka');
                    break;
                default:
                    echo ('Hello Khulna');
            }

            echo ('<hr/>');

//RepeatetStatement:
// for
// while
// do while
// for in
           echo 'Repeatet statement (for)';
             echo ('<hr/>');

                   $x;
              for ($x=10; $x<=15; $x++){
                  echo ('Hello World<br/>');
              }

             echo ('<hr/>');
                   $x;
                for ($x=56; $x<=61; $x++){
                    echo ($x.'<br/>');
                }
             echo ('<hr/>');
                 $x;
                for ($x=99; $x>=88; $x--){
                    echo ($x.'<br/>');
                }

             echo ('<hr/>');

             echo 'while';
                 $x=10;
                while ($x<15){
                    echo ('Hello World<br/>');
                    $x++;
                }
             echo ('<hr/>');
             echo 'do while';
                $x=10;
            do {
                echo ('Hello World<br/>');
                $x++;
                    }while ($x<=14);

            echo ('<hr/>');


?>
    <!---->
<?php
//
//function demo(){
//    echo "Hello World";
//}
//demo();
//?>