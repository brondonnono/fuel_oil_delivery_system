<nav class="navbar bootsnav">

    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href=""><img class="logo" src="images/logo.png" alt=""></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav menu">
                <li><a href="">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact_form">Contact Us</a></li>
                <?php
                    if (!isset($_SESSION['username'])) {
                ?>
                <li><a href="./login.php" class="btn btn-info">Sign in</a></li>
                <li><a href="./signup.php" class="btn btn-warning">Sign up</a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
