<?php
$msg = $msgClass = $name = $message = $email = "";


if (filter_has_var(INPUT_POST, 'submit')) {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $message = test_input($_POST['message']);

    if (!empty($email) && !empty($name) && !empty($message)) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $msg = 'Only letters and white spaces allowed in Name column';
            $msgClass = 'alert-danger';
        } else {

            $toEmail = 'ivanradojevic.gm@gmail.com';
            $subject = 'Contact Request From ' . $name;
            $body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>' . $name . '</p>
					<h4>Email</h4><p>' . $email . '</p>
					<h4>Message</h4><p>' . $message . '</p>
        ';


            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
                $name = '';
                $email = '';
                $message = '';
            } else {
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
        }
    } else {

        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="manifest" href="/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="description" content="Easy way to make and track your orders! Contact us on Q8-project@hotmail.com 00965 99191834 or find us at Kuwait City - Sharq - Mazaya Tower 3 Floor 6." />
    <meta name="keywords" content="q8 project, q8-project, q8_project contact us, contact us q8, q8 contact, q8-project contact us" />
    <meta name="author" content="Ivan Radojevic ivanradojevic.gm@gmail.com" />
    <title>Q8 project | Contact page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <script src="js/wow.js" defer></script>
    <script src="js/lightbox.js" defer></script>
</head>

<body class="loading">
    <div class="loader-wrap-svg">
        <svg id="svglogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <defs>
                <style>
                    .cls-1 {
                        fill: #f5a51f;
                    }

                    .cls-2 {
                        fill: #fff;
                    }
                </style>
            </defs>
            <title>svgCopy</title>
            <g id="Layer_2" data-name="Layer 2">
                <circle id="svg_circle-2" class="cls-1" cx="50" cy="51" r="28.79" />
                <circle id="svg_circle-1" class="cls-1" cx="50" cy="51" r="28.79" />
                <g id="svg_mark">
                    <path class="cls-2" d="M61.48,48.67l-.88-.05c-.17,0-.26,0-.26.22a6.34,6.34,0,0,0,1.38,4.54A5.17,5.17,0,0,0,64.64,55a19.73,19.73,0,0,0,2.25.28,1.19,1.19,0,0,1,.94,1.62,1,1,0,0,1-1,.72,9.65,9.65,0,0,1-5.38-1.4,7.12,7.12,0,0,1-3.05-4.07c-.13-.44-.13-.44-.59-.44H42.17c-.47,0-.46,0-.6.45A7.28,7.28,0,0,1,38.93,56a8.2,8.2,0,0,1-3.7,1.49,18.19,18.19,0,0,1-2,.18,1.09,1.09,0,0,1-1.12-1.13,1.13,1.13,0,0,1,1.11-1.21,9.17,9.17,0,0,0,3.29-.66,4.87,4.87,0,0,0,3-3.69,16,16,0,0,0,.22-2c0-.29-.08-.35-.37-.34-.45,0-.91,0-1.37,0a1.09,1.09,0,0,1-1.11-1.16,1.13,1.13,0,0,1,1.09-1.18c.56,0,1.13,0,1.68-.13a5.21,5.21,0,0,0,3-1.4,5.13,5.13,0,0,0,1.09-1.62,8.23,8.23,0,0,0,.67-3.26c0-.29,0-.58,0-.87a1.15,1.15,0,0,1,1-1.16,1.14,1.14,0,0,1,1.31.89,7.48,7.48,0,0,1,.07,1.16c0,.35,0,.39.39.39H53c.34,0,.36,0,.37-.37s0-.65,0-1a1.16,1.16,0,0,1,1.16-1.11A1.11,1.11,0,0,1,55.67,39a11.58,11.58,0,0,0,.21,2.72,5.79,5.79,0,0,0,1.68,3.17A5.08,5.08,0,0,0,59.68,46a8.74,8.74,0,0,0,2.33.28,1.17,1.17,0,1,1,0,2.34h-.54ZM50,49.36h6.92c.26,0,.52,0,.78,0S58,49.27,58,49s0-.54,0-.81a.3.3,0,0,0-.2-.34,5.68,5.68,0,0,1-.57-.3A7.44,7.44,0,0,1,54,43.48c-.29-.83-.29-.84-1.16-.83l-3.38,0h-2.7c-.42,0-.41,0-.53.4a7.18,7.18,0,0,1-3.41,4.46A1.21,1.21,0,0,0,42,49c.06.39,0,.41.42.41Z" />
                    <path class="cls-2" d="M53.36,64.38c0-1.55,0-3.11,0-4.66a.52.52,0,0,0-.35-.56,10.37,10.37,0,0,1-2.83-1.83.23.23,0,0,0-.37,0,12.38,12.38,0,0,1-2.95,1.9.53.53,0,0,0-.21.31,1.3,1.3,0,0,0,0,.38q0,4.46,0,8.91a1.54,1.54,0,0,1-.25,1,1.13,1.13,0,0,1-1.3.44,1.15,1.15,0,0,1-.8-1.16q0-4.09,0-8.18c0-.57,0-.58-.55-.4-.38.12-.76.25-1.15.35A1.14,1.14,0,0,1,41.25,60a1.12,1.12,0,0,1,.61-1.42c.63-.25,1.29-.44,1.92-.67a15.75,15.75,0,0,0,4-2,3,3,0,0,0,1-1.06,1.37,1.37,0,0,0,.11-.27,1.15,1.15,0,0,1,1.07-.9,1.11,1.11,0,0,1,1.19.8,3,3,0,0,0,1.28,1.54,14.16,14.16,0,0,0,3.1,1.59c.83.31,1.67.59,2.5.89a1.18,1.18,0,0,1,.51,1.92,1,1,0,0,1-1,.37,12,12,0,0,1-1.33-.4c-.36-.13-.4-.11-.4.27q0,4,0,8.1a1.38,1.38,0,0,1-.38,1.11,1.16,1.16,0,0,1-2-.84c0-1.2,0-2.4,0-3.6Q53.36,64.94,53.36,64.38Z" />
                    <path class="cls-2" d="M62.6,65.16q0-1.92,0-3.84a1.18,1.18,0,0,1,1.09-1.23,1.13,1.13,0,0,1,1.25,1.15c0,.59,0,1.17,0,1.76q0,2.9,0,5.79a1.59,1.59,0,0,1-.21,1,1.16,1.16,0,0,1-1.29.49,1.19,1.19,0,0,1-.86-1.15c0-1.25,0-2.51,0-3.76Q62.6,65.24,62.6,65.16Z" />
                    <path class="cls-2" d="M35.06,65.14q0-1.94,0-3.87a1.09,1.09,0,0,1,.75-1.12,1.12,1.12,0,0,1,1.3.36,1.28,1.28,0,0,1,.25.69q0,4,0,7.9a1.14,1.14,0,0,1-1.17,1.16,1.19,1.19,0,0,1-1.16-1.2c0-1.31,0-2.62,0-3.93Z" />
                    <path class="cls-2" d="M57.36,36.19c-3.85,0-6-1.59-7.18-3-2.1,2.61-6.58,2.94-7.51,2.87a1.14,1.14,0,0,1,.18-2.27c1,.08,5.6-.51,6.11-3.18a1.13,1.13,0,0,1,2.18-.14c0,.13,1.24,3.41,6.22,3.41h.09a1.14,1.14,0,0,1,0,2.28Z" />
                </g>
            </g>
        </svg>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.html" class="navbar-left"><img src="img/mainlogo.png" alt="q8-project logo" /></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="navbarc">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li class="active"><a href="contact.php">Contact</a></li>
                    <li>
                        <a href="https://www.instagram.com/q8_project/" target="_blank">Instagram
                            <svg aria-hidden="true" width="12px" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="lang-bar">
        <div class="container">
            <div class="flags"><img src="img/china.png" alt="China flag" /></div>
            <div class="flags"><img src="img/kuwait.png" alt="Kuwait flag" /></div>
            <div class="flags">
                <img src="img/england.png" alt="England flag" />
            </div>
        </div>
    </div>

    <section id="title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us Today!</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-md-8">
                    <?php if ($msg != '') : ?>
                        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                    <?php endif; ?>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="main-form">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" autofocus value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" placeholder="Enter Message" rows="4" type='text' name='message' value="<?php echo isset($_POST['message']) ? $message : ''; ?>"></textarea>
                        </div>

                        <button type=" submit" name="submit" class="btn btn-default">Submit</button>
                    </form>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.8566769616696!2d47.987439014962995!3d29.374485456863553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf849625089aed%3A0xf82553009d614bb6!2sMazaya+Towers!5e0!3m2!1ssr!2srs!4v1558879926539!5m2!1ssr!2srs" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 support">
                    <img src="img/demo1.png" alt="Costumer service in office" class="demo imgshadow1" />
                    <h2 class="em-text ">Customer service</h2>
                    <p>
                        <a href="mailto:Q8-project@hotmail.com">Q8-project@hotmail.com</a><br />
                        Phone: 00965 99191834<br /><br />
                        <b class="em-text">Address:</b> <br />
                        Kuwait City - Sharq - Mazaya Tower 3 Floor 6
                    </p>
                    <br />
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row footall">
                <div class="footinfo support">
                    <h4 class="em-text"><b>Contact Us</b></h4>
                    <p>
                        <a href="mailto:Q8-project@hotmail.com">Q8-project@hotmail.com</a><br />
                        00965 99191834<br /><br />
                        <b class="em-text">Address:</b> <br />
                        Kuwait City - Sharq - Mazaya Tower 3 Floor 6
                    </p>
                    <br />
                    <p>
                        Follow us:
                        <a href="https://www.instagram.com/q8_project/" target="_blank"><svg aria-hidden="true" width="13px" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14 svgicon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg></a>
                    </p>
                </div>
            </div>
            <div class="row footct">
                <p>
                    Copyright &copy; 2019, All Rights Reserved
                    <span class="em-text">Q8-project</span>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>