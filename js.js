function updateDate() {
    const dateElement = document.getElementById("dateDisplay");
    const currentDate = new Date();

    const options = {
        weekday: 'long', // عرض اسم اليوم بالكامل
        year: 'numeric', // عرض السنة بالأرقام
        month: 'long', // عرض اسم الشهر بالكامل
        day: 'numeric' // عرض اليوم بالأرقام
    };

    dateElement.textContent = currentDate.toLocaleDateString('ar-EG', options);
}

// تحديث التاريخ عند تحميل الصفحة
window.onload = function () {
    updateDate();
};

// تحديث التاريخ كل ثانية
setInterval(updateDate, 1000);

$('.my-date').hijriDate();
                $('.my-date2').hijriDate({gregorian: true, showWeekDay: true,
                showGregDate: true,
                separator: '&nbsp;|&nbsp;',
                weekDayLang: 'en',
                hijriLang: 'en',
                gregLang: 'en',
                correction: +1});
                
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36251023-1']);
                _gaq.push(['_setDomainName', 'jqueryscript.net']);
                _gaq.push(['_trackPageview']);
                
                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
                
                try {
                fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
                    return true;
                }).catch(function(e) {
                    var carbonScript = document.createElement("script");
                    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                    carbonScript.id = "_carbonads_js";
                    document.getElementById("carbon-block").appendChild(carbonScript);
                });
                } catch (error) {
                console.log(error);
                }

                function getCurrentTime() {
                    const now = new Date();
                    const hours = now.getHours();
                    const minutes = now.getMinutes();
                    const seconds = now.getSeconds();
                    const ampm = hours >= 12 ? 'مساءً' : 'صباحًا';
                    const formattedHours = hours % 12 || 12; // تنسيق الساعات بتنسيق 12 ساعة
                
                    const timeString = `${formattedHours}:${addLeadingZero(minutes)}:${addLeadingZero(seconds)} ${ampm}`;
                    return timeString;
                }
                
                function addLeadingZero(number) {
                    return number < 10 ? '0' + number : number;
                }
                
                function updateTime() {
                    const currentTimeElement = document.getElementById("current-time");
                    currentTimeElement.textContent = getCurrentTime();
                }
                
                // تحديث الوقت كل ثانية
                setInterval(updateTime, 1000);
                
                // تحديث الوقت عند تحميل الصفحة لأول مرة
                updateTime();
                
                const canvas = document.getElementById("signature-canvas");
const context = canvas.getContext("2d");
let isDrawing = false;

canvas.addEventListener("mousedown", startDrawing);
canvas.addEventListener("mousemove", draw);
canvas.addEventListener("mouseup", stopDrawing);
canvas.addEventListener("mouseout", stopDrawing);

function startDrawing(e) {
    isDrawing = true;
    draw(e);
}

function draw(e) {
    if (!isDrawing) return;

    const x = e.offsetX;
    const y = e.offsetY;

    context.lineWidth = 3;
    context.strokeStyle = "#000";
    context.lineCap = "round";
    context.lineTo(x, y);
    context.stroke();
    context.beginPath();
    context.moveTo(x, y);
}

function stopDrawing() {
    isDrawing = false;
    context.beginPath();
}

function clearCanvas() {
    context.clearRect(0, 0, canvas.width, canvas.height);
}

function saveSignature() {
    const savedSignatureElement = document.getElementById("saved-signature");
    const dataURL = canvas.toDataURL();
    savedSignatureElement.innerHTML = `<img src="${dataURL}" alt="التوقيع المحفوظ">`;
}
