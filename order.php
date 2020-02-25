<!DOCTYPE html>
<!--
Burhanuddin Lokhandwala
Student Id - 991523243
SYST-10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        
        <?php
        echo  "<img src='images/Tim-Hortons.jpg'  width=100% height=200px; >";
        echo "<center><h2>Welcome To Tim Hortons!</h2></center>";
//        if($_REQUEST['size']==='S')
//        {
//            echo "<image src='images/cup.jpg' alt='TIM' height=100px width=45px>";
//        }
//        else if($_REQUEST['size']==='M')
//        {
//            echo "<image src='images/cup.jpg' alt='TIM' height=150px width=55px >";
//        }
//
//        else if ($_REQUEST['size']==='L')
//        {
//         echo "<image src='images/cup.jpg' alt='TIM' height=200px width=65px >";
//        }
//        else 
//        {
//        echo "<image src='assignment-images/cup.jpg' alt='TIM' height=250px width=75px>";
//        }
        
        $num=$_POST['coffee'];
        $cream=$_POST['cream'];
        $sugar=$_POST['sugar'];
        $size=$_REQUEST['size_coffee'];
        
        if(!($num==0))
         {
            if($_REQUEST['size']==='S')
            {
                for($row =0 ;$row<$num;$row++)
                 {
                 echo "<image src='images/cup.jpg' alt='TIM' height=80px width=30px>";
                 echo "   ";
                 }
            }
            else if($_REQUEST['size']==='M')
            {
                for($row =0 ;$row<$num;$row++)
                 {
                 echo "<image src='images/cup.jpg' alt='TIM' height=100px width=40px >";
                 echo "   ";
                 }   
            }
            else if ($_REQUEST['size']==='L')
            {
                for($row =0 ;$row<$num;$row++)
                 {
                 echo "<image src='images/cup.jpg' alt='TIM' height=120px width=50px >";
                 echo "   ";
                 }
            }
            else
            {
                for($row =0 ;$row<$num;$row++)
                 {
                 echo "<image src='images/cup.jpg' alt='TIM' height=140px width=50px >";
                 echo "   ";
                 } 
            }
         }
        
        
        if(!($cream==0))
         {
             echo "<image src='images/plus.jpg'>";
             echo "   ";
             for($row =0 ;$row<$cream;$row++)
             {
             echo "<image src='images/cream.jpg'>";
             echo "   ";
             }
         }
         
         if(!($sugar==0))
        {
             echo "<image src='images/plus.jpg'>";
             echo "   ";
             for($row =0 ;$row<$sugar;$row++)
             {
             echo "<image src='images/sugar.jpg'>";
             echo "   ";
             }
         }     
         
         if($_REQUEST['size']==='S')
        {
            $tax=1.29+(13/100);
            $cost=$num*($tax);
            echo "<h3>Total Amount =$ $cost </h3>";
        }
        else if($_REQUEST['size']==='M')
        {
            $tax=1.59+(13/100);
            $cost=$num*($tax);
           echo "<h3>Total Amount =$ $cost </h3>";
        }

        else if($_REQUEST['size']==='L')
        {
            $tax=2.10+(13/100);
            $cost=$num*($tax);
            echo "<h3>Total Amount =$ $cost </h3>";
        }


        else{
            $tax=2.59+(13/100);
            $cost=$num*($tax);
           echo "<h3>Total Amount =$ $cost </h3>";
        }
        ?>
    </body>
</html>
