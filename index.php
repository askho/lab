<!DOCTYPE html>

<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
 <html>
     <head>
         <meta charset="UTF-8">
         <title>Hello World</title>
     </head>
     <body>
         <?php
            include ('student.php'); 
            //Creating the first student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            
            //Creating the second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            
            //Creating the third student
            $third = new Student();
            $third->surname = "Parry";
            $third->first_name = "Jim";
            $third->add_grade(0);
            $third->add_grade(40);
            $third->add_email('work', 'jim_perry@bcit.ca');
            
            //Add to array and sort
            $students = array();
            $students['j123'] = $first;
            $students['a456'] = $second;
            $students["b212"] = $third;
            ksort($students);
            
            //Display the students
            foreach($students as $student){
                echo $student->toString();
            }
         ?>
     </body>
 </html>
