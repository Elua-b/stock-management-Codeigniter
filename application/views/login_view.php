<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


    <section class="vh-100" style="background-color:#47ad83;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>
                                <form action="<?php echo base_url()."index.php/login_controller/login"; ?>" method="POST">
                            <div class="form-outline mb-4">
                                <input type="email" id="typeEmailX-2" value="<?php echo set_value('email'); ?>" name="email" class="form-control form-control-lg" />

                                <label class="form-label" for="typeEmailX-2">Email</label>
                                <?php echo form_error('email'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="password" value="<?php echo set_value('password'); ?>" id="typePasswordX-2" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX-2">Password</label>
                                <?php echo form_error('password'); ?>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-block justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-check-label" for="form1Example3"> Remember password </label>
                                <p> don't have account</p>
                                <a href="<?php echo base_url().'index.php'; ?>">Sign up</a>
                                <!-- <a href=""></a> -->
                            </div>

                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Login" name="login" style="background-color: #47ad83;">
                            <?php echo $this->session->flashdata('login_error'); ?>
                        </form>
                            <hr class="my-4">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>