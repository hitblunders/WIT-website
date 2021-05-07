<!doctype html>
<html lang="en">

<head>
    <title>SheCodes-Think and Do-Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
$(function()
{
    function after_form_submitted(data)
    {
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' );
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });

        }
    }

	$('#reused_form').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        $('button[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','button' );
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });
      });
});
</script>
    <style>
	#form_container
	{
		padding:15px 15px;
		margin-top:15px;
 		background-image: linear-gradient( to left, rgba(123, 37, 234, 0.18), rgba(111, 0, 255, 0.616), rgba(111, 0, 255, 0.384), rgba(156, 89, 242, 0) );
		color:#fff;
	}
	.upload-btn-wrapper 
	{
  	position: relative;
  	overflow: hidden;
  	display: inline-block;
	}

	.upload-btn-wrapper input[type=file] 
	{
  	font-size: 100px;
  	position: absolute;
  	left: 0;
  	top: 0;
  	opacity: 0;
	}
	.btn{
	background: #B9DFFF;
	color: #fff;
	border: 1px solid #eee;
	border-radius: 20px;
	box-shadow: 5px 5px 5px #eee;
	text-shadow:none;
	}
    	img {
        opacity: 0.6;
      	}

      	h1 {
        color: black;
        font-family: "Times New Roman", Times, serif;
      	}
      	body {
        background-image: url("./bimage.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        color: white;
        text-align:center;
      	}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SheCodes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./about.html">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Technology
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"
                            href="https://github.com/30DaysofWebDEV/DSC-30-Days-of-Web/blob/main/HTML">HTML </a>
                        <a class="dropdown-item"
                            href="https://github.com/30DaysofWebDEV/DSC-30-Days-of-Web/blob/main/CSS">CSS</a>
                        <a class="dropdown-item"
                            href="https://github.com/30DaysofWebDEV/DSC-30-Days-of-Web/tree/main/Bootstrap">Bootstrap</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">More to come</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./contact.php">Contact us</a>
                </li>

            </ul>
            <script async src="https://cse.google.com/cse.js?cx=007019498718139788174:amtiepdpgeg">
            </script>
            <div class="gcse-search"></div>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

        <div class="card text-center my-4">
            <div class="card-header">
                CONTACT FORM
            </div>
            <div class="card-body">
                <div class="row">
        <div class="col-md-6 " id="form_container">
            <h2>Contact Us</h2>
            <p>
               Please send your message below. We will get back to you at the earliest!
            </p>
            <form role="form" method="post" id="reused_form">
    
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="message">
                            Message:</label>
                        <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="name">
                            Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required size="32">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="email">
                            Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required size="32">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button type="submit" class="btn btn-lg btn-default pull-right" >Send </button>
                    </div>
                </div>
    
            </form>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
                <h3>Posted your message successfully!</h3>
            </div>
            <div id="error_message"
                    style="width:100%; height:100%; display:none; ">
                        <h3>Error</h3>
            </div>
        </div>
    </div>
</body>
<footer class="container">
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>© 2021 SheCodes <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>
</html>

            
<?php
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = "Hi I am ".$name." ".$_POST['message'];
    $subject = "Need help";
    $headers = "From:" . $_POST['email'];
    $to = "codingninja576@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Successfully sent!";
    } else {
        echo 'oops! Somthing went wrong';
    }
}

?>
