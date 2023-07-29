<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use mikehaertl\wkhtmlto\Pdf;

require 'vendor/autoload.php';

session_start();



// You can pass a filename, a HTML string, an URL or an options array to the constructor

if (isset($_GET["pdf"])) {

    $Company = $_GET["Company"];
    $City = $_GET["City"];
    $Citizin = $_GET["Citizin"];
    $National = $_GET["National"];
    $Phone = $_GET["Phone"];
    $time = $_GET["time"];
    $year = $_GET["year"];
    $date = $_GET["date"];
    $day = $_GET["day"];
    $note = $_GET["note"];
    $select = $_GET["select"];

    $_SESSION['Company'] = $Company;
    $_SESSION['City'] = $City;
    $_SESSION['Citizin'] = $Citizin;
    $_SESSION['National'] = $National;
    $_SESSION['Phone'] = $Phone;
    $_SESSION['time'] = $time;
    $_SESSION['year'] = $year;
    $_SESSION['date'] = $date;
    $_SESSION['day'] = $day;
    $_SESSION['note'] = $note;
    $_SESSION['select'] = $select;

    header("Location:template.php");
}

if (isset($_GET["send"])) {


    //Load Composer's autoloader

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP

        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through

        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

        $mail->Username   = 'doctors.drs1@gmail.com';                     //SMTP username

        $mail->Password   = 'wqgkurnthxkpggvc';                               //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients

        $mail->setFrom('doctors.drs1@gmail.com', 'وزارة الري و الصرف'); //from

        $mail->addBCC('7ssanie2014@gmail.com');                     //Name is optional

        $mail->isHTML(true);     
        
        $mail->addAttachment('template1.pdf' , 'template1.pdf');//Set email format to HTML

        $mail->Subject = ' hi bitch وزارة الري و الصرف' ;

        $mail->Body    = 'سوف يتم <b>تفجير عبود!</b>';

        $mail->send();

        echo 'Message has been sent';
    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}



























// require __DIR__ . "/vendor/autoload.php";
// require_once 'vendor/src/Arabic.php';
// use Dompdf\Dompdf;
// use Dompdf\Options;





// $Arabic = new ArPHP\I18N\Arabic();

// /**
//  * Set the Dompdf options
//  */
// $options = new Options;
// $options->setChroot(__DIR__);
// $options->setIsRemoteEnabled(true);
// $options->set('defaultFont', 'Arabic');
// // $options->set
// // $options->

// $dompdf = new Dompdf($options);

// $dompdf->set_base_path("style/template.css");
// /**
//  * Set the paper size and orientation
//  */
// $dompdf->setPaper("A4");

// /**
//  * Load the HTML and replace placeholders with values from the form
//  */

// $html = file_get_contents("template.html");

// $html = str_replace(["{{ Company }}" , "{{ City }}", "{{ Citizin }}", "{{ National }}", "{{ Phone }}", "{{ time }}" , "{{ date }}" , "{{ day }}" , "{{ note }}" , "{{ select }}"], [$Company,$City  ,$Citizin , $National, $Phone ,$time , $date , $day ,$note ,$select], $html);

// $p = $Arabic->arIdentify($html);

// for ($i = count ($p) -1; $i >= 0; $i-=2) {

//     $utf8ar = $Arabic->utf8Glyphs(substr($html, $p[$i-1], $p[$i] - $p[$i-1]));

//     $html = substr_replace ($html, $utf8ar, $p[$i-1], $p[$i] - $p[$i-1]);

// }

// $dompdf->loadHtml($html);
// // $dompdf->loadHtml("السلام");
// //$dompdf->loadHtmlFile("template.html");

// /**
//  * Create the PDF and set attributes
//  */
// $dompdf->render();

// $dompdf->addInfo("Title", "Report"); // "add_info" in earlier versions of Dompdf

// /**
//  * Send the PDF to the browser
//  */
// $dompdf->stream("report.pdf", ["Attachment" => 0]);

// /**
//  * Save the PDF file locally
//  */
// $output = $dompdf->output();
// file_put_contents("file.pdf", $output);