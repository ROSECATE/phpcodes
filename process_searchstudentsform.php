<?php
require "connection.php";   


$svc_no=$_POST['service_no'];


$search_student="SELECT * FROM students_records WHERE
    service_no='$svc_no'";
  
        $find=mysqli_query($con, $search_student); 
  
 if(mysqli_num_rows($find)>0){

    echo"<center>";
    echo"<table cellpadding='0' cellspacing='1' style='color:cyon' border='2'>";
    echo"<tr>";
    echo"<th> # </th>";
    echo"<th> SERVICE NUMBER</th>";
    echo"<th> RANK </th>";
    echo"<th> NAME </th>";
    echo"</tr>";


    while($row=mysqli_fetch_assoc($find)){
        echo"<tr>";
        echo"<td>" .$row["id"]."</td>";
        echo"<td>" .$row["service_no"]. "</td>";
        echo"<td>".$row["rank"]. "</td>";
        echo"<td>" .$row["lname"]. "</td>";
        echo"</tr>";
    }

    echo"</table>";
    
    echo"<br><a href='searchstudentform.html'> SEARCH ANOTHER STUDENT </a>";
    echo"</center>";

    }

  else{
    echo"<center>";
    echo"SERVICE NO  " .$svc_no. " DOES NOT EXIST";
    echo"<br><a href='searchstudentform.html'> TRY AGAIN PLEASE</a>";
    echo"</center>";
  }

   ?> 
        
