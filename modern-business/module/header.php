<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img class="img-responsive  img-hover" src="pioc-logo.jpg" vspace="5%">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($PageNo == 'home') echo 'class="active-test" ' ?> >
                        <a href="#">
                            <span <?php if($PageNo == 'home') echo 'class="glyphicon glyphicon-home" ' ?>></span>
                            Home
                        </a>
                    </li>
                    <li <?php if($PageNo == 'about') echo 'class="active-test" ' ?> >
                        <a href="#">
                            <span <?php if($PageNo == 'about') echo 'class="glyphicon glyphicon-bullhorn" ' ?> ></span>
                            About
                        </a>
                    </li>
                    <li <?php if($PageNo == 'services') echo 'class="active-test" ' ?> >
                        <a href="#">
                            <span <?php if($PageNo == 'services') echo 'class="glyphicon glyphicon-cog" ' ?>></span>
                            Services
                        </a>
                    </li>
                    <li <?php if($PageNo == 'contact') echo 'class="active-test" ' ?>>
                        <a href="#">
                            <span <?php if($PageNo == 'contact') echo 'class="glyphicon glyphicon-user" ' ?>></span>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>