<?php
include 'generate-pdf.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <!-- <link rel="stylesheet" href="https://unpkg.com/gutenberg-css@0.6" /> -->
  <link rel="stylesheet" href="./style/template.css" />

</head>

<body dir="rtl">
  <header>
    <h1 id="line">
      <div class="blob"></div>
      <div class="blob-white"></div>
      اللجنة التنفيذية <br />
      للمحافظة على الواحة
    </h1>
    <div class="logos">
      <div class="line2">
        <img src="imge/img4.png" alt="" srcset="" />
        <img src="imge/img7.png" alt="" srcset="" />
        <img src="imge/img8.png" alt="" srcset="" />
        <img src="imge/img6.png" alt="" srcset="" />
      </div>
      <div class="line1">
        <img src="imge/img3.png" alt="" srcset="" />
        <img src="imge/img2.png" alt="" srcset="" />
        <img src="imge/img5.png" alt="" srcset="" />
        <img src="imge/img1.png" alt="" srcset="" />
      </div>
    </div>
  </header>


  <div class="content">
    <h1 style="text-align: center; margin:.5em;"><?php echo $_SESSION['select'] ?></h1>
    <article>
      <div class="compine">
        <p> اشارة الى خطاب محافظ الاحساء وتاريخ 1441/4/5<span>هـ</span> </p>
        <p> بشأن الجولة الميدانية </p>
        <p>ليوم
          <?php
          if ($_SESSION['day'] == 0) {
            echo 'الاحد';
          }
          if ($_SESSION['day'] == 1) {
            echo 'الاثنين';
          }
          if ($_SESSION['day'] ==2 ) {
            echo 'الثلاثاء';
          }
          if ($_SESSION['day'] == 3) {
            echo 'الاربعاء';
          }
          if ($_SESSION['day'] == 4) {
            echo 'الخميس';
          }
          if ($_SESSION['day'] == 5) {
            echo 'الجمعة';
          }
          if ($_SESSION['day'] == 6) {
            echo 'السبت';
          }
          ?> </p>
        <p> الموافق <?php echo $_SESSION['year'].'/'.$_SESSION['month'].'/'.$_SESSION['date'] ?> </p>
        <p> ساعة <?php echo $_SESSION['time'] ?> </p>
        <p>وبحضور لجنة الميدانية للمحافظة على الواحة من</p>
        <p>,التعديات وعليها</p>
        <p>تم الوقوف على المنشأة <?php echo $_SESSION['Company'] ?></p>
        <p>والواقعة في <?php echo $_SESSION['City'] ?></p>
        <p>والعائد للمواطن <?php echo $_SESSION['Citizin'] ?></p>
        <p>رقم (سجل / إقامة) <?php echo $_SESSION['National'] ?></p>
        <p>رقم الجوال: <?php echo $_SESSION['Phone'] ?></p>
        <p>ملاحضات <?php echo $_SESSION['note'] ?></p>
      </div>

      <hr style="width: 100%; margin: 2em 0;" />

      <h1 dir="rtl"><u>أعضاء اللجنة الميدانية</u></h1>
      <div class="members">
        <p class="p14">
          <b>مندوب مكتب العمل </b>
          <br />
          مرتضى امين البقشي
        </p>
        <p class="p15">
          <b>مندوب الأمانة</b>
          <br />
          احمد سعد الذياب
        </p>
        <p class="p16">
          <b>مندوب المؤسسة العامة للري </b>
          <br />
          م.فهد عبدالرحمن الذكرالله
          <br />
          عبدالحكيم عبدالله البريك
        </p>
        <p class="p17">
          <b>مندوب وزارة البيئة والمياه والزراعة </b>
          <br />
          م.احمد علي العباد
        </p>
        <p class="p18">
          <b>مندوب الشرطة </b>
          <br />
          رقيب أول/خالد سعد المحارفي
        </p>
        <p class="p19">
          <b>مندوب وزارة التجاة بالأحساء </b>
          <br />
          سمير عبدالوهاب البراهيم
        </p>
        <p class="p20">
          <b>مندوب الدفاع المدني </b>
          <br />
          الرقيب/عبدالله سالم بالطيور
        </p>
      </div>
      <hr style="width: 100%; margin: 2em 0;" />
      <ul dir="rtl">
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

  <div></div>
  <footer></footer>

  <script>
    setTimeout(window.print(), 10000000);
  </script>
</body>

</html>