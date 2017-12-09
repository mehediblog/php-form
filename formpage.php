<?php
   include "db.php";

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Form In PHP With Validation - reusable form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form action="" method="post"class="montform" >
                        <p class="name">
                            <input name="worker_name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                        <p class="email">
                            <input name="worker_email" type="text" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="email">
                            <input name="worker_id" type="text" required class="feedback-input" id="comment" placeholder="Id no" />
                        </p>
                        <p class="text">
                            <textarea name="worker_mes" class="feedback-input" id="comment" placeholder="Message"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" name="insert_product" class="button-blue">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
   if(isset($_POST['insert_product']))
      {
         $worker_name = $_POST['worker_name']; 
         $worker_email = $_POST['worker_email']; 
         $worker_id = $_POST['worker_id']; 
         $worker_mes = $_POST['worker_mes']; 
       
       $get_information = "insert into practice(worker_name,worker_email,worker_id,worker_mes) values ('$worker_name','$worker_email','$worker_id','$worker_mes')";
       $run_information = mysqli_query($conn,$get_information);
       if($run_information)
       {
           echo "<script>alert('insert successfully!')</script>";
       }
        
      }



?>













