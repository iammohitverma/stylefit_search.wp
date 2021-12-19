<?php



function my_login_logo_one() { 
    ?> 


    <style type="text/css"> 


    body.login h1 a {
        background-image: url(<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>);
        width: auto !important;
        margin: 0;
        padding: 0;
        background-size: auto;
		height: 55px;
    }
	.login #login_error, .login .message, .login .success {
    border-left: 4px solid #f6924e !important;
	}

    #login {
        width: 100% !important;
        max-width: 400px;
    }

    .login form {
        background: #fff;
        border-radius: 5px;
    }
    .login form input:focus {
        box-shadow: 0 0 0 1px #000000 !important;
    }

    .login label {
        font-weight: 500;
        font-size: 16px;
        margin-bottom: 5px;
    }

    .login #nav, .login #backtoblog {
        padding: 0 !important;
    }

    .login #nav a, .login #backtoblog a {
    background: #F6924E !important;
    color: #fff !important;
    padding: 10px;
    border-radius: 5px;
    font-weight: 500;
    display: block;
    text-align: center;
    font-size: 16px;
    transition: 0.3s;
    }
    .login #nav a:hover, 
    .login #backtoblog a:hover,
    .login #nav a:focus, 
    .login #backtoblog a:focus {
       background: #FFF3EB !important;
    color: #F6924E !important;
    box-shadow: 0 0 0 1px #f6924e, 0 0 2px 1px rgb(246 146 78/80%) !important;
    }

    .login form input[type="submit"] {
	background: #f6924e;
    color: #ffffff;
    font-weight: 600;
    transition: 0.3s;
    }   
    .login form input[type="submit"]:hover,
    .login form input[type="submit"]:focus {
	color: #f6924e;
    background: #fff3eb;
    border-color: #f6924e !important;
    }

    .login .button.wp-hide-pw{
        color: #000 !important;
    }
    </style>
    

     <?php 

    } add_action( 'login_enqueue_scripts', 'my_login_logo_one' );




?>