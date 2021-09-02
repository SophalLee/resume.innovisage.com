<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Professional Profile - Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/cf53bba659.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="menu">
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
                <div class="menu-text">Menu</div>
            </div>
            <div class="menu-item">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="education.html">Education</a></li>
                    <li><a href="work-experience.html">Work Experience</a></li>
                    <li><a href="skills.html">Skills</a></li>
                    <li><a href="downloads.html">Downloads</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="utily-bar">        
            <div class="ubar-innerwrap">
                <a href="mailto:sophal.lee@live.com" class="topmail"><i class="fas fa-envelope fa-1x"></i>Mail: sophal.lee@live.com</a>
            </div>
        </div>

        <header>
            <div class="header-container">
                <div class="header-wrapper">
                    <div class="logo-wrapper">
                        <a class="logo" href="index.html">
                            <img src="assets/icon.png" class="icon" alt="CV"/>
                            <h1 class="sophal">Sophal Lee</h1>
                        </a>
                    </div>
                    <div class="navbar">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="education.html">Education</a></li>
                            <li><a href="work-experience.html">Work Experience</a></li>
                            <li><a href="skills.html">Skills</a></li>
                            <li><a href="downloads.html">Downloads</a></li>
                            <li class="current-page">Contact</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </header>

        <div class="title-bar">
            <div class="titlebar-wrapper">
                <h1 class="title-page">Contact</h1>   
            </div>
        </div>        

        <section>  
            <div class="main-content-wrapper">                     
                <?php
                //Import PHPMailer classes into the global namespace
                //These must be at the top of your script, not inside a function
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\Exception;

                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $emailFrom = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                
                    //Load Composer's autoloader
                    require 'vendor/autoload.php';
                    $ini = parse_ini_file('../../config/email_settings.ini');
                    
                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);
                    
                    try {
                        //Server settings
                        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = $ini['email_host'];                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = $ini['email_username'];                     //SMTP username
                        $mail->Password   = $ini['email_password'];                               //SMTP password
                        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                        $mail->Port       = $ini['email_port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom($emailFrom, $name);
                        $mail->addAddress($ini['email_to'], $ini['email_to_name']);     //Add a recipient
                        $mail->addReplyTo($emailFrom, $name);
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = $subject;
                        $mail->Body    = $message;
                        $mail->AltBody = $message;
                    
                        $mail->send();
                        echo '<p>Message has been received.</p>';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }
                ?>     
            </div>
        </section>
        <p class="p-fill">
        </p>

        <footer>
            <div class="footer-wrapper">
                <p>Copyright &copy Sophal Lee</p>
            </div>
        </footer>

        <script src="./js/jquery-3.6.0.js"></script>
        <script src="./js/jquery.waypoints.min.js"></script>
        <script src="js/main.js" type="text/javascript">
        </script>      
    </body>
</html>



