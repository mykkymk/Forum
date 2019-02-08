<?php include 'includes/header.php'; ?>
    <form action="register.php" method="post" enctype="multipart/form-data" role="form">
        <div class="form-group">
            <label>Name*</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
            <label>Email Address*</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
        </div>
        <div class="form-group">
            <label>Username*</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
        </div>
        <div class="form-group">
            <label>Password*</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
        </div>
        <div class="form-group">
            <label>Confirm Password*</label>
            <input type="password" name="password2" class="form-control" placeholder="Enter Your Password Again">
        </div>
        <div class="form-group">
            <label>Upload Avatar</label>
            <input type="file" name="avatar">
            <p class="help-block"></p>
        </div>
        <div class="form-group">
            <label>About Me</label>
            <textarea name="about" id="about" cols="80" rows="6" class="form-control" placeholder="Tell us about yourself(optional)"></textarea>
        </div>
        <input type="submit" value="Register" name="register" class="btn btn-default" />
    </form>
<?php include 'includes/footer.php'; ?>