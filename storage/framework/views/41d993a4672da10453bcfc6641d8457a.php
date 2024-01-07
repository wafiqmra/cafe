<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <!-- Image -->
                <img src="<?php echo e(asset('images/cafe.jpeg')); ?>">
            </div>

            <div class="col-md-6 right">
                <div class="input-box">
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e(Session::get('error')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <header>Login</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" name="email" required="" autocomplete="off">
                            <label for="email">Email</label> 
                        </div> 
                        <div class="input-field">
                            <input type="password" class="input" id="pass" name="password" required="">
                            <label for="pass">Password</label>
                        </div> 
                        <div class="input-field">
                            <input type="submit" class="submit" value="Log In">
                        </div> 
                    </form>
                    <div class="signin">
                    <span>Don't have an account? <a href="<?php echo e(route('register')); ?>">Register here</a></span>
                    <div>
                </div>  
            </div>
        </div>
    </div>
  </div>
</body>
</html><?php /**PATH E:\laragon\laragon\www\mainpage\resources\views/login.blade.php ENDPATH**/ ?>