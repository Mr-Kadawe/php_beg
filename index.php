<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <title>CRUD Operation </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" id="address" class="form-control" required>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">date</label>
                                <input type="date" name="date" id="date" class="form-control" required>
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
                            <button id="submit" type="submit" class="btn btn-success  submit">Submit</button>
                            <button id="reset" type="reset" class="btn btn-danger reset">Reset</button>
                         
                    </div>
                    </form>
                </div>
            </div>
        </div>
     </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>
</html>