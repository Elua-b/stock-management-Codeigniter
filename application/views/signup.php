<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" href="styles.css">

<body>

    <!-- <div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div> -->
    <div>
        <div>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <title>Bootstrap Example</title>
                <style>
                    input[type=email],input[type=password],input[type=text]{
    height: 5vh;
    width: 100%;
    border: none;
    /* background-color: rgb(222, 213, 213); */
}
.form-group{
    padding-top: 20px;
}
#left{
    background-color:#47ad83;
    width: 50%;
    height: 87vh;

}
p{
    color: black;
}
.container{
    padding-top: 0px;
    margin-top: 50px;
    box-shadow: 5px 5px 5px #e7e2e2; 
    border-radius: 5px; 
}
input{
    border:2px ;
}
#pwd{
    border-bottom: 1px solid  rgb(77, 73, 73);
}
#email{
    border-bottom: 1px solid  rgb(77, 73, 73);
}

.container{
   
    border: 1px solid rgb(77, 73, 73);
    /* background-color: pink; */
}
button{
    height: 50px;
    width: 100%;
    background-color:#47ad83;
    color: white;
    border-radius: 5px;
    border: none;
    margin-top: 20px;
}
h1{
    text-align: center;
    position: relative;
    top: 35%;
}
h2{
    text-align: center;  
}
form{
    /* background-color: pink; */
    height: 80vh;
    width: 50%;
    padding-right: 90px;
    padding-top: 30px;
    
}
.par{
    color: white;
    padding-top: 10px;
}
input{
    padding-left: 20px;
}

                </style>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                
            </head>

            <body>


                <div class="container">
                    <div class="row">
                        <div class="col-sm-8" id="left">
                            <h1>Stock</h1>
                        </div>

                        <form action="<?php echo base_url() . 'index.php/Signup/registerNow'; ?>" method="POST" class="col-sm-6">
                            <h2>Sign up </h2>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="" id="email" placeholder="Enter email" name="email">
                               <p><?php echo form_error('email') ?></p> 
                            </div>
                            <div class="form-group">
                                <label for="email">Username:</label>
                                <input type="text" class="" id="email" placeholder="Enter username" name="username">
                               <p> <?php echo form_error('username') ?></p>

                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="" id="pwd" placeholder="Enter password" name="password">
                               <p><?php echo form_error('password') ?></p> 

                            </div>

                            <button type="submit">
                                <p class="par">Submit</p>
                            </button>
                        </form>
                    </div>
                </div>
        </div>
</body>

</html>

</div>

</body>

</html>