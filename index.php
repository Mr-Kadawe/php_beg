<?php
// connection php and mysql
// $servername = "localhost";// or "127.0.0.1"
// $username = "root";
// $password = "";
// $database = "crud_operation";

// $conn = new mysqli($servername, $username, $password, $database);

$conn = new mysqli('127.0.0.1', 'root', '', 'crud_operation');


if(!$conn->connect_error){
    echo " Connection Successfully...";
}else{
    echo " Failed Connection Please Check Your Connection";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <title>CRUD Operation </title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
</head>
<body>
    <!-- 
        CRUD Operation
        C - Create (Insert)
        R - Read (Select or Retrieve ) 
        U - Update
        D - Delete
     -->

     <div class="container ">
        <div class="card mt-3 bg-info">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">Crud Operation</h1>
                    </div>
                </div>

                <div class="row ">
                    <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <label id="name_lb" for=""></label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>
                            <label id="phone_lb" for=""></label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <label id="email_lb" for=""></label>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <label id="password_lb" for=""></label>
                        </div>
                       
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" id="address" class="form-control" required>
                            </div>
                            <label id="address_lb" for=""></label>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">date</label>
                                <input type="date" name="date" id="date" class="form-control" value="<?php echo date('Y-m-d')?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Country</label>
                               <select name="country" id="country" class="form-control" required>
                               <option value="">Select country</option>
                                <option value="Somalia">Somalia</option>
                                <option value="Djbauti">Djbauti</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Kenya">Kenya</option>
                               </select>
                            </div>
                        </div>
                       
                    </div>
                    <div class="float-end mt-3">
                            <button id="submit" type="submit" name="insert" class="btn btn-success  submit">Submit</button>
                            <button id="reset" type="reset" class="btn btn-danger reset">Reset</button>
                         
                    </div>
                    </form>
                </div>
            </div>
        </div>
     </div>
     
     <?php 
        if(isset($_POST['insert'])){
            // echo "Inserted Data to ....";
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $phone = mysqli_real_escape_string($conn,$_POST['phone']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $address = mysqli_real_escape_string($conn,$_POST['address']);
            $date = mysqli_real_escape_string($conn,$_POST['date']);
            $country = mysqli_real_escape_string($conn,$_POST['country']);
            // echo  $name. '    '. $phone.'   '. $address.'   '. $email.'   '. $password.'  '.$date. '   '.$country;

            $insert = "INSERT INTO crud_table(name, phone, email, password, address, date,country)VALUES('$phone','$name', '$email', '$password','$address', '$date', '$country')";

            $qry_insert = mysqli_query($conn, $insert);
            if($qry_insert){
                echo  '<script>alert("Inserted Succesfully")</script>';
            }else{
                echo  '<script>alert("Not Inserted")</script>';
            }
        }
     
     ?>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script> -->

<script src="bootstrap/bootstrap.bundle.min.js"></script>
<script src="jquery/jquery-3.6.1.js"></script>

<script>
     function validateEmail(email) 
        {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    $(document).ready(function(){
        // alert("Hello Php")
        $(".submit").attr('disabled', true);

        $("#country").change(function(){
            // alert("Hello Country");
            let name =  $("#name").val();
            let phone  = $("#phone").val();
            let email = $("#email").val();
            let password =  $("#password").val();
            let address = $("#address").val();

            // Clear css lables and inputs
                $("#name").css({'border':''});
                $("#name_lb").text('');
                $("#phone").css({'border':''});
                $("#phone_lb").text('');
                $("#email").css({'border':''});
                $("#email_lb").text('');
                $("#password").css({'border':''});
                $("#password_lb").text('');
                $("#address").css({'border':''});
                $("#address_lb").text('');
            // Clear end


            if(name == ''){
                $("#name").css({'border':'solid red 2px'});
                $("#name").focus();
                $("#name_lb").text("Name is required!");
                $("#name_lb").css({'color':'red'})
                $("#country").val('');
            } else if(phone == ''){
                $("#phone").css({'border':'solid red 2px'});
                $("#phone").focus();
                $("#phone_lb").text("Phone is required!");
                $("#phone_lb").css({'color':'red'})
                $("#country").val('');
            } 
             else if(email == ''){
                $("#email").css({'border':'solid red 2px'});
                $("#email").focus();
                $("#email_lb").text("email is required!");
                $("#email_lb").css({'color':'red'})
                $("#country").val('');
            }
             else if(!validateEmail(email)){
               
                $("#email").focus();
                $("#email_lb").text("invalid email! please use valid Email :(!");
                $("#email_lb").css({'color':'red'})
                $("#country").val('');
            }
             else if(password == ''){
                $("#password").css({'border':'solid red 2px'});
                $("#password").focus();
                $("#password_lb").text("password is required!");
                $("#password_lb").css({'color':'red'})
                $("#country").val('');
            }
             else if(address == ''){
                $("#address").css({'border':'solid red 2px'});
                $("#address").focus();
                $("#address_lb").text("address is required!");
                $("#address_lb").css({'color':'red'})
                $("#country").val('');
            }

            if($('#country').val() != ''){
                $('.submit').attr('disabled',false);
            }


        })
    })
</script>

</body>
</html>