<?php
$student = array(
    'fname'=>'Jamal',
    'lname'=>'Ahmed',
    'age'=>'15',
    'class'=>8,
    'section'=>'B',
);

print_r($student);

echo $student['fname']." ".$student['lname']."\n";

printf("%s %s \n",$student['fname'],$student['lname']);

$serialized = serialize($student);
echo $serialized;
echo "\n";

$newStudent = unserialize($serialized);
print_r($newStudent);

$jsonData = json_encode($student);
echo $jsonData;
echo "\n";
$newStudent2 = json_decode($jsonData, true);
print_r($newStudent2);