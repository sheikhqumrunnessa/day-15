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



    //Arithmetic Operator
    //Binary(+,-,*,/,%)
    // Unary(++,--,(-))-----
    //Assignment Operator
    // =, +=, -=, *=, /=, %=
    //>, >=, <, <=, !=, ===, !==
    //Logical Operator
    //&&, ||, !
// Arithmetic Operator
//    Binary(+,-,*,/,%)
        $x=10;
        $y=20;
        echo ($x+$y);
        echo ('<br/>');
        echo ($x-$y);
        echo ('<br/>');
        echo ($x*$y);
        echo ('<br/>');
        echo ($x/$y);
        echo ('<br/>');
        echo ($x%$y);
        echo ('<br/>');
//Unary
        $x=10;
        $y=20;
        echo ($x++);
        echo ('<br/>');
        echo ($x);
        echo ('<br/>');
        echo (++$x);
        echo ('<br/>');
        echo ($x);
        echo ('<br/>');
        echo ($x--);
        echo ('<br/>');
        echo ($x);
        echo ('<br/>');
        echo (--$x);
        echo ('<br/>');
        echo ($x);
        echo ('<br/>');
//-----------------------------
  //Assignment Operator

        $x=40;
        $y=40;
        echo ($x+=$y);
        echo ('<br/>');
        echo ($x-=$y);
        echo ('<br/>');
        echo ($x*=$y);
        echo ('<br/>');
        echo ($x/=$y);
        echo ('<br/>');
        echo ($x%=$y);
        echo ('<br/>');
//-------------
//Conditional operator
            $x=10;
            $y=20;
            echo($x>$y);
            echo('<br/>');
            echo($x>=$y);
            echo('<br/>');
            echo($x<$y);
            echo('<br/>');
            echo($x<=$y);
            echo('<br/>');
            echo($x==$y);
            echo('<br/>');
            echo($x!=$y);
            echo('<br/>');
            $x='20';
            $x=20;
            echo($x===$y);
            echo('<br/>');
            echo($x!==$y);
            echo('<br/>');
//-------------------------------
echo 'Logical Operator';
        $x=10;
        $y=20;
        $z=30;
        echo(($x>$y)&&($y>$z));
        echo('<br/>');
        echo(($x>$y)&&($y<$z));
        echo('<br/>');
        echo(($x<$y)&&($y>$z));
        echo('<br/>');
        echo(($x<$y)&&($y<$z));
        echo('<br/>');
        echo(($x>$y)||($y>$z));
        echo('<br/>');
        echo(($x>$y)||($y<$z));
        echo('<br/>');
        echo(($x<$y)||($y>$z));
        echo('<br/>');
        echo(($x<$y)||($y<$z));
        echo('<br/>');

        $a=true;
        echo (!$a);
        echo('<br/>');
        $a=false;
        echo (!$a);
        echo('<br/>');
//----------------------------------
//statement
/*
 * Single line statement
 * Conditional statement
     * if
     * if else
     *if else if
     * switch
 * Repeated statement
     *for
     * while
     * do while
     * foreach
 *
 */
 echo 'Conditional Statement';

        $x=10;
        $y=20;
        $z =$x+$y;
        if($x>$y){
            echo $z;
        }
echo('<br/>');
        $x=10;
        $y=20;
        if($x>$y){
        echo ('Hello World');
        }else{
        echo ('Hello Javascript');
        }

echo('<br/>');
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


echo('<br/>');
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
echo('<br/>');

           $x;
              for ($x=10; $x<=15; $x++){
           echo('Hello World<br/>');
        }
         $x=10;
        while ($x<15){
            echo('Hello World<br/>');
            $x++
        }

            $x=10;
             do {
    echo('Hello World<br/>');
           $x++
        }while ($x<=15)




//?>
<!---->
<?php
//
//function demo(){
//    echo "Hello World";
//}
//demo();
//?>