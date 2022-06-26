<?php
   $response ='';
    $server="localhost";
        $username="root";
            $password="";
                $database="zalego";

                // connect to database and form
$conn=mysqli_connect($server,$username,$password,$database);
   



if( isset($_POST[ 'submitButton'] ) )
{
    //1fetch form data
    
    
    $firstName = $_POST['firstName'];
         $lastName = $_POST['lastName'];
          $phoneNumber = $_POST['phoneNumber'];
             $Email = $_POST['Email'];
               $Message = $_POST['Message'];
  
  
  
                 //2submit form data




  $insertData = mysqli_query($conn, "INSERT INTO contactus(firstName,lastName,Email,phoneNumber,Message)
   
    VALUES('$firstName' , '$lastName' , '$Email' , '$phoneNumber' , '$Message')");
        if($insertData)
{
    $response = "Data submitted successfully .";
}

else{
    $response = "Error occurred";
}


}


?>