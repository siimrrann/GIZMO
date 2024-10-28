<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>Gizmo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <!-- alert message -->
    <?php if(@$_GET['w']) { echo '<script>alert("'.@$_GET['w'].'");</script>'; } ?>
    <!-- alert message end -->
    <style>
       /* Back to Home Button */
        .btn-success {
            background-color: #5cb85c;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-success:hover {
            background-color: #4cae4c;
        }

    </style>

</head>

<body>


<!-- Header start -->
<div class="row header" style="background-color:#1b475d;" >
    <div class="col-lg-6">
        <span class="logo">Quick Quiz</span>
    </div>
    <div class="col-md-4" style="float:right;" >
        <?php
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        session_start();
        if (!isset($_SESSION['email'])) {
            echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';
        } else {
            echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';
        }
        ?>
        <a href="account.php?q=1" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Quiz</a>&nbsp;
    </div>
</div>
<!-- Header end -->

<!-- Sign in Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content title1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="login.php?q=quiz.php" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email"></label>  
                            <div class="col-md-6">
                                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="password"></label>
                            <div class="col-md-6">
                                <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password" required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </fieldset>
                </form> 
            </div>
        </div>
    </div>
</div>
<!-- Sign in modal closed -->

<!-- Feedback form section -->
<div class="bg1">
    <div class="row" style="min-height:611px;" >
        <div class="col-md-3"></div>
        <div class="col-md-6 panel" style="background-image:url('image/bgnew.jpg') !important; background-size:cover; min-height:430px;">
            <h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
            <div style="font-size:14px">
                <?php if(@$_GET['q']) {
                    echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
                } else { ?>
                    <p style="text-align:center;">You can send us your feedback through e-mail on the following e-mail id: </p>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" style="text-align:center;">
                            <a href="mailto:simran221204@gmail.com" style="color:#000000">simran221204@gmail.com</a><br/>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <p style="text-align:center;">Or you can directly submit your feedback by filling the entries below:</p>
                    <form role="form" method="post" action="feed.php?q=feedback.php" onsubmit="resetForm()">

                        <div class="row">
                            <div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" required autocomplete="off"><br />    
                                    <input id="subject" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" required autocomplete="off">    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3"><b>E-Mail address:</b></div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required autocomplete="off">    
                                </div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..." required autocomplete="off"></textarea>
                        </div>

                        <div class="form-group" align="center">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<!-- Footer start -->
<div class="row footer">
    <div class="col-md-3 box">
        <!-- <a href="index.php" target="">Home</a> -->
         <!-- commented because user should not go to home without signout  -->
    </div>
    <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
        <!-- <a href="#" data-toggle="modal" data-target="#login">Admin Login</a> -->
         <!-- commented because user should not access the admin login  -->
    </div>
    <div class="col-md-3 box">
        <a href="mailto:simran221204@gmail.com" target="_blank">Contact Us</a>
        <!-- <a href="#" data-toggle="modal" data-target="#developers">Developers</a> -->
    </div>
    <div class="col-md-3 box">
        <!-- <a href="mailto:simran221204@gmail.com" target="_blank">Contact Us</a> -->
    </div>
</div>
<!-- Footer end -->

<!-- Modal for developers -->
<div class="modal fade title1" id="developers">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-5">
                        <a href="" style="color:#202020; font-family:'typo'; font-size:18px">Simran and Krishna</a>
                        <h4 style="color:#202020; font-family:'typo';font-size:16px" class="title1">9766480704 | 9594013216</h4>
                        <h4 style="font-family:'typo' ">simran221204@gmail.com</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for admin login -->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
            </div>
            <div class="modal-body title1">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form role="form" method="post" action="admin.php?q=quiz.php">
                            <div class="form-group">
                                <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" required/>
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" name="login" value="Login" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script to reset the form after submission and avoid loading with history -->
<script>
    window.onload = function() {
        // Clear the form data if the page is loaded with history
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    };
    function resetForm() {
    setTimeout(function() {
        document.querySelector('form').reset();
    }, 100); // Delay added to ensure the form submits before resetting
}
</script>

</body>
</html>
