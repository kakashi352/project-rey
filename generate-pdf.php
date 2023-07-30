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
    $month = $_GET["month"] + 1;
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
    $_SESSION['month'] = $month;
    $_SESSION['date'] = $date;
    $_SESSION['day'] = $day;
    $_SESSION['note'] = $note;
    $_SESSION['select'] = $select;

    if ($day == 0) {
      $days = 'الاحد';
    }
    if ($day == 1) {
      $days = 'الاثنين';
    }
    if ($day ==2 ) {
      $days = 'الثلاثاء';
    }
    if ($day == 3) {
      $days = 'الاربعاء';
    }
    if ($day == 4) {
      $days = 'الخميس';
    }
    if ($day == 5) {
      $days = 'الجمعة';
    }
    if ($day == 6) {
      $days = 'السبت';
    }

    $day += 1;
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    // $mail->setLanguage('ar' , 'PHPMailer/language/phpmailer.lang-ar.php');
    $mail->CharSet = 'UTF-8';
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
        
        $mail->addBCC('7ssanie2014@gmail.com');  //<-- غير هنا                   //Name is optional
        
        $mail->isHTML(true);     
        
        $mail->addAttachment('template.php' , 'template.php');//Set email format to HTML
        
        $mail->Subject = 'وزارة الري و الصرف' ;
        
        $mail->Body    = "

        <!DOCTYPE html>
        <html>  
        <head>
          <link rel=stylesheet href=./style/template.css />
        
        </head>   
        <body dir=rtl>
          <header  >
            <h1 style=text-align: center;>
              <div class=blob></div>
              <div class=blob-white></div>
              اللجنة التنفيذية <br />
              للمحافظة على الواحة
            </h1>
            
          </header>
        
        
          <div style=text-align: center;>
            <h1 >$select</h1>
            <article>
              <div class=compine>
                <p> اشارة الى خطاب محافظ الاحساء وتاريخ 1441/4/5<span>هـ</span> </p>
                <p> بشأن الجولة الميدانية </p>
                <p>ليوم $days

                  

                <p> الموافق $year/$month/$date </p>
                <p> ساعة $time</p>
                <p>وبحضور لجنة الميدانية للمحافظة على الواحة من</p>
                <p>,التعديات وعليها</p>
                <p>تم الوقوف على المنشأة  $Company </p>
                <p>والواقعة في $City </p>
                <p>والعائد للمواطن  $Citizin </p>
                <p>رقم (سجل / إقامة) $National</p>
                <p>رقم الجوال: $Phone</p>
                <p>ملاحضات $note</p>
              </div>
        
              <hr />
        
              <h1 dir=rtl><u>أعضاء اللجنة الميدانية</u></h1>
              <div class=members >
                <p class=p14>
                  <b>مندوب مكتب العمل </b>
                  <br />
                  مرتضى امين البقشي
                </p>
                <p class=p15>
                  <b>مندوب الأمانة</b>
                  <br />
                  احمد سعد الذياب
                </p>
                <p class=p16>
                  <b>مندوب المؤسسة العامة للري </b>
                  <br />
                  م.فهد عبدالرحمن الذكرالله
                  <br />
                  عبدالحكيم عبدالله البريك
                </p>
                <p class=p17>
                  <b>مندوب وزارة البيئة والمياه والزراعة </b>
                  <br />
                  م.احمد علي العباد
                </p>
                <p class=p18>
                  <b>مندوب الشرطة </b>
                  <br />
                  رقيب أول/خالد سعد المحارفي
                </p>
                <p class=p19>
                  <b>مندوب وزارة التجاة بالأحساء </b>
                  <br />
                  سمير عبدالوهاب البراهيم
                </p>
                <p class=p20>
                  <b>مندوب الدفاع المدني </b>
                  <br />
                  الرقيب/عبدالله سالم بالطيور
                </p>
              </div>
              <hr style=width: 100%; margin: 2em 0; />
              <ul dir=rtl>
                <li>نموذج اغلاق: تعني إغلاق المنشأة وعدم مزاولة النشاط المخالف.</li>
                <li>
                  نموذج فتح: تعني فتح المنشأة بحضور اعضاء لجنة المحافظة على الواحة.
                </li>
                <li>
                  تنبيه: معاودة النشاط المخالف يعرضك لقطع التيار الكهربائي والمسألة
                  القانونية.
                </li>
                <li>
                  تنويه: مراجعة مقر اللجنة بالمؤسسة العامة للري (لجنة المحافظة على
                  الواحةالزراعية من التعديات) كل اربعاء من 8:30 إلى 12ظهراً.
                </li>
                <li>
                  اثناءالمراجعة: يتم احضار المستندات الثبوتية لصاحب المنشأة ومنها
                  بطاقة الاحوال أو من ينوب عنه بوكالة الشرعية . <br />
                  للاستفسارات الاتصال على رقم جوال (0504847856).(0583305484)
                </li>
              </ul>
            </article>
          </div>
        

        </body>
        
        </html>
        ";
        
        $mail->send();
        
        header("Location:template.php");
        echo 'Message has been sent';
    } catch (Exception $e) {
        
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}



// <h1 style=text-align: center ; > السلام عليكم ورحمة الله وبركاته </h1>

// <p style=text-align: right ; > تم ارسال $select </p>


// <p> </p>























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