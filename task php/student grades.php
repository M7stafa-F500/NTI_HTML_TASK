<?php 

$students = [
    ["Ahmed", 95],
    ["Mohamed", 82],
    ["Ali", 74],
    ["Sara", 61],
    ["Mona", 48]
];

 $n=count($students);
$successful=0;
$sum=0;
$max_grade=0;
$the_better="";

foreach($students as $value  ){
    $name=$value[0];
    $grade=$value[1];

    echo "$name  : $grade ";
    

if($grade >= 90){

    echo   "$name=> A <br>";
    }

    if($grade >= 80  && $grade<=89 ){
    echo  "$name  => B <br>";
    }

     if($grade >= 70  && $grade<=79 ){
    echo "$name => C <br>";
    }

     if($grade >= 60  && $grade<=69 ){
    echo "$name=> D <br>";
    }

    if($grade < 60){
    echo "$name=>F  <br>";
    }

    if($grade >=60){
        $successful++;

    }

    if($grade > $max_grade){
        $max_grade=$grade;
        $the_better=$name;
        
    }

    $sum+=$grade;

   

}

echo 'successful: '. $successful . "<br>";

$fail=$n-$successful;
 echo 'failure: '. $fail . "<br>";

 
 $avrg= $sum/$n;
 echo  'avrg: ' . $avrg . "<br>";
 
 echo  ' TheBetter student: ' .  $the_better . '=>'. $max_grade;




?>