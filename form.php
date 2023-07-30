<!DOCTYPE html>
<html>

<head>
  <title>PDF Example</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style/show.css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
</head>

<body dir="rtl">




  <main>

    <header>
      <h1 id="line">
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

    <!-- <h1>الرجاء تعبئة جميع الحقول</h1> -->
    <div class="form_container">
      <form method="GET" action="generate-pdf.php">

        <div class="input">
          <select id="type" name="select" required>
            <option value="محضر: اغلاق">محضر: اغلاق</option>
            <option value="محضر: مراجعة">محضر: مراجعة</option>
            <option value="محضر: كشف ميداني">محضر: كشف ميداني</option>
            <option value="محضر: فتح">محضر: فتح</option>
          </select>
          <label for="type">اختر نوع المحضر</label>
        </div>
        <div class="input">
          <input type="text" name="Company" id="Company" required />
          <label for="Company">المنشأة</label>
        </div>
        <div class="input">
          <input type="text" name="City" id="City" required/>
          <label for="City">المنطقة</label>
        </div>
        <div class="input">
          <input type="text" name="Citizin" id="Citizin" required />
          <label for="Citizin">المواطن</label>
        </div>

        <div class="input">
          <input type="text" name="National" id="National" required />
          <label for="National">رقم (سجل / إقامة)</label>
        </div>
        <div class="input">
          <input type="text" name="Phone" id="Phone" required/>
          <label for="Phone">رقم الجوال</label>
        <!-- </div>
        <div> -->
        </div>
        <div class="input span">
          <input type="text" name="note" id="note"  required/>
          <label for="note">ملاحضات</label>
        </div>
        
        <input type="hidden" id="current-time" name="time" />
        <input type="hidden" id="day" name="day" />
        <input type="hidden" id="date" name="date" />
        <input type="hidden" id="month" name="month" />
        <input type="hidden" id="year" name="year" />


        <div class="row">
          <button type="submit" name="pdf">PDF</button>

        </div>
      </form>
    </div>

  </main>










  <script>
    let m = new Date();
    let year = document.querySelector('#year');
    let month = document.querySelector('#month');
    let time = document.querySelector("#current-time");
    let hijriDate = document.querySelector("#date");
    let day = document.querySelector("#day");

    
    time.value = m.toLocaleString("en-US", {
      hour: "numeric",
      minute: "numeric",
      hour12: true,
    });

    year.value = new Date().getFullYear();
    month.value = new Date().getMonth();
    console.log(month.value);
    hijriDate.value = new Date().getDate();
    day.value = new Date().getDay();
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="jquery.hijri.date.js"></script>
  <script src="js.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>

<!-- <canvas
        id="signature-canvas"
        name="signature"
        width="200"
        height="100"
        style="
          background-color: aliceblue;
          margin-right: 0.5em;
          margin: 1em 0.5em;
        "
        ><p>lsdplsdcl</p></canvas
      > -->