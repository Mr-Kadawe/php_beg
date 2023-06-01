<?php
// connection php and mysql
// $servername = "localhost";// or "127.0.0.1"
// $username = "root";
// $password = "";
// $database = "crud_operation";

// $conn = new mysqli($servername, $username, $password, $database);

$conn = new mysqli('127.0.0.1', 'root', '', 'crud_operation');
if(!$conn->connect_error){
    echo "Connection Successfully...";
}else{
    echo " Failed Connection Please Check Your Connection";
}
?>

<?php
    $read_qry = "SELECT * FROM crud_table";
    $read_data = mysqli_query($conn, $read_qry);
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
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
                                    <input type="date" name="date" id="date" class="form-control"
                                        value="<?php echo date('Y-m-d')?>" required>
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
                            <button id="submit" type="submit" name="insert"
                                class="btn btn-success  submit">Submit</button>
                            <button id="reset" type="reset" class="btn btn-danger reset">Reset</button>

                        </div>
                    </form>
                </div>

                <table class="table table-dark table-bordered border-primary">
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Country</th>
                    <th>Action</th>
                    <tbody>
                        <?php foreach($read_data as $key=>$value){?>
                        <tr>
                           <td><?php echo $value['id']?></td>
                           <td><?php echo $value['name']?></td>
                           <td><?php echo $value['phone']?></td>
                           <td><?php echo $value['email']?></td>
                           <td><?php echo $value['password']?></td>
                           <td><?php echo $value['address']?></td>
                           <td><?php echo $value['date']?></td>
                           <td><?php echo $value['country']?></td>
                           <td>
                           <button type="button" data-toggle="modal"
                                    data-target="#editModal<?php echo $value['id']?>"
                                    class="btn btn-success">Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#deleteModal<?php echo  $value['id']?>">Delete </button>
                           </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <?php foreach($read_data as $value){?>
    <div class="modal fade" id="deleteModal<?php echo  $value['id']?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>

                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" id="delete_id" name="delete_id" value="<?php echo $value['id']?>">
                        <h5 class="text-danger">Are You Sure! Your want to delete This ID = <?php echo $value['id']?> ?
                        </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="delete" class="btn btn-danger">Yes! Delete It</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php }?>

    <?php foreach($read_data as $row){?>
    <div class="modal fade" id="editModal<?php echo $row['id']?>" tabindex="-1" role="dialog"
        aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>

                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" id="update_id" name="update_id" value="<?php echo $row['id']?>">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="form-control"
                                    value="<?php echo  $row['name']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $row['phone']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="<?php echo  $row['email']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="<?php echo $row['address']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Date</label>
                                <input type="date" name="date" id="date" class="form-control"
                                    value="<?php echo  $row['date']?>">
                            </div>
                            <div class="col-md-6">
                            <label for="">Country</label>
                                    <select name="country" id="country" class="form-control" required>
                                        <option value="<?php echo $row['country']?>"><?php echo  $row['country']
                                        ?></option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="Djbauti">Djbauti</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Kenya">Kenya</option>
                                    </select>
                            </div>
                        </div>
                        </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-success">Yes! Update It</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php }?>
    <?php 
    // Insert data to database mysql
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

            $insert = "INSERT INTO crud_table(name, phone, email, password, address, date,country)VALUES('$name','$phone', '$email', '$password','$address', '$date', '$country')";

            $qry_insert = mysqli_query($conn, $insert);
            if($qry_insert){
                echo  '<script>alert("Inserted Succesfully")</script>';
                echo  '<script>window.location.href="index.php"</script>';
            }else{
                echo  '<script>alert("Not Inserted")</script>';
            }
        }

        // Delete data from Database mysql
        if(isset($_POST['delete'])){
            $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
            // echo  $delete_id;
            $qry_delete = "DELETE FROM crud_table WHERE id = '$delete_id'";
            $delete = mysqli_query($conn,$qry_delete);
            if($delete){
                echo  '<script>alert("Delete Has Been Suucessfully...")</script>';
                echo  "<script>window.location.href='index.php'</script>";
            }else{
                echo  '<script>alert("Not Deleted...")</script>';
            }
        }
     
        // Updated Data to mysql database
        if(isset($_POST['update']))
        {
            $update_id = mysqli_real_escape_string($conn,$_POST['update_id']);

            $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
            $phone  = mysqli_real_escape_string($conn, $_POST['phone']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);
            $date = mysqli_real_escape_string($conn, $_POST['date']);
            $country = mysqli_real_escape_string($conn, $_POST['country']);
            $update_date = date('Y-m-d h:i:s A');
            // echo $date;
            $update_qry = "UPDATE crud_table SET name = '$fullname', phone ='$phone', email = '$email', address ='$address', date = '$date', country = '$country', updated_at ='$update_date' WHERE id = '$update_id'";
            $update = mysqli_query($conn, $update_qry);
            if($update){
                echo  '<script>alert("Updated Successfully")</script>';
                echo  '<script>window.location.href="index.php"</script>';
            }else{
                echo  "<script>alert('Not Updated')</script>";
            }

        }
     ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script> -->

    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="jquery/jquery-3.6.1.js"></script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <script>
    function validateEmail(email) {
        var re =
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    $(document).ready(function() {
        // alert("Hello Php")
        $(".submit").attr('disabled', true);

        $("#country").change(function() {
            // alert("Hello Country");
            let name = $("#name").val();
            let phone = $("#phone").val();
            let email = $("#email").val();
            let password = $("#password").val();
            let address = $("#address").val();

            // Clear css lables and inputs
            $("#name").css({
                'border': ''
            });
            $("#name_lb").text('');
            $("#phone").css({
                'border': ''
            });
            $("#phone_lb").text('');
            $("#email").css({
                'border': ''
            });
            $("#email_lb").text('');
            $("#password").css({
                'border': ''
            });
            $("#password_lb").text('');
            $("#address").css({
                'border': ''
            });
            $("#address_lb").text('');
            // Clear end


            if (name == '') {
                $("#name").css({
                    'border': 'solid red 2px'
                });
                $("#name").focus();
                $("#name_lb").text("Name is required!");
                $("#name_lb").css({
                    'color': 'red'
                })
                $("#country").val('');
            } else if (phone == '') {
                $("#phone").css({
                    'border': 'solid red 2px'
                });
                $("#phone").focus();
                $("#phone_lb").text("Phone is required!");
                $("#phone_lb").css({
                    'color': 'red'
                })
                $("#country").val('');
            } else if (email == '') {
                $("#email").css({
                    'border': 'solid red 2px'
                });
                $("#email").focus();
                $("#email_lb").text("email is required!");
                $("#email_lb").css({
                    'color': 'red'
                })
                $("#country").val('');
            } else if (!validateEmail(email)) {

                $("#email").focus();
                $("#email_lb").text("invalid email! please use valid Email :(!");
                $("#email_lb").css({
                    'color': 'red'
                })
                $("#country").val('');
            } else if (password == '') {
                $("#password").css({
                    'border': 'solid red 2px'
                });
                $("#password").focus();
                $("#password_lb").text("password is required!");
                $("#password_lb").css({
                    'color': 'red'
                })
                $("#country").val('');
            } else if (address == '') {
                $("#address").css({
                    'border': 'solid red 2px'
                });
                $("#address").focus();
                $("#address_lb").text("address is required!");
                $("#address_lb").css({
                    'color': 'red'
                })
                $("#country").val('');
            }

            if ($('#country').val() != '') {
                $('.submit').attr('disabled', false);
            }


        })
    })
    </script>

</body>

</html>