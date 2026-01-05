<?php
$conn = mysqli_connect('localhost', 'root', '', 'books');
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM doct"; // الحالة الافتراضية عرض الكل
// الكود المسؤول عن تبديل الاستعلام بين (عرض الكل) و (البحث)
if (isset($_POST['submit_search'])) {
    $search_text = mysqli_real_escape_string($conn, $_POST['search_text']);
    $sql = "SELECT * FROM doct WHERE ENAME LIKE '%$search_text%'";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة دينية</title>
    <link rel="stylesheet" href="تابع المكتبة.css">
    <link rel="stylesheet" href="تابع المكتبة.js">
</head>
<body>

     <fieldset>
    
        <header>
    <h2 >
        <a href="العقيدة.html" class="M">&nbsp➩</a>
        <a href="index.php" ><img src="للتنسيقات/الصفحة الرئسية.png" alt="logo" width="28" ></a>
    </h2>
<span>
        <h4 id="shar1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspكل كتاب يضيف شمعة في الظلام</h4>
    </span>

  <span >
       <img class="shar" src="للتنسيقات/شعار مكتبة1.png" alt="logo" width="30px">
       <h2 id="click" onclick="WADA()"><img id="click1" src="للتنسيقات/فاتح.png" alt="" width="25" height="25"></h2>
        <script src="تابع المكتبة.js"></script>
  </span>  
    </header>
  </fieldset>

    <style>
#b1{
    background-color: #0088ff;
      /* تاثير تحريك الماوس */
}
.book{
    display: flex;   /* ترتيب العناصر افقي */
}

.subjects{   /* المواضيع للبطائق */
    grid-template-columns: repeat(auto-fit, minmax(135px,1fr));/* اصغر حجم يكون 130 للبطائق */
}

.anwan{
padding: 100px 0px 0px 0px;
  color:#0088ff;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

      }  
.subjects{
     margin: 20px auto;
}
.card{
    height: 260px;}
                        /* تنسيقات النافذة للقراءة */
/* ---------------------------------------------------------------- */
/* خلفية النافذة (تغطي الشاشة كاملة) */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7); /* سواد خفيف للخلفية */
}

/* صندوق المحتوى */
.modal-content {
    background-color: #fff;
    margin: 2% auto;
    width: 80%;
    height: 90%;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

/* الرأس والتذييل باللون السماوي */
.modal-header, .modal-footer {
    background-color: #007bff; /* اللون السماوي الخاص بمكتبتك */
    color: white;
    padding: 15px;
    text-align: center;
}
.modal-header {
    background-color: #007bff; /* اللون للخلفية السماوي */
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between; /* لتوزيع العناصر بين الطرفين */
    flex-direction: row; /* العودة للترتيب الطبيعي من اليمين لليسار */
}

/* لجعل اسم الكتاب في المنتصف تماماً */
#modalTitle {
    flex-grow: 1;
    text-align: center;
    margin: 0;
}

/* زر الإغلاق X في الجهة الشمال (اليسار) */
.close-btn {
    order: -1; /* هذا الأمر ينقل العنصر إلى البداية (أقصى الشمال في RTL) */
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
    line-height: 1;
}

.close-btn:hover {
    color: #ff4d4d;
}

/* مكان عرض الـ PDF */
.modal-body {
    flex: 1;
}

#pdfViewer {
    width: 100%;
    height: 100%;
}
/* هذا التنسيق مخصص للشاشات الصغيرة مثل مقاس 360 */
@media screen and (max-width: 580px) {
    .modal-content {
        width: 95%;    /* يأخذ كامل عرض الشاشة */
        height: 95%;   /* يأخذ كامل طول الشاشة */
        /* margin: 0;      إلغاء الهوامش */
       /* border-radius: 0; إلغاء انحناء الزوايا لملء الشاشة */
    }
    .modal-body {
        -webkit-overflow-scrolling: touch; /* سلاسة التصفح في آيفون */
        overflow-y: scroll;
    }

    #pdfViewer {
        width: 100%;
        height: 100%;
        border: none;
    }
}
/* -------------------------------------------------------- */
  </style>
    
<main id="main1">
  
    <section>
<fieldset id="A2">
    <ul>
        <li><a href="العقيدة.html" class="M" ><h4 id="b1">العقيدة</h4></li></a>
        <li><a href="الفقة.html" class="M"><h4 id="b2">الفقه</h4></li></a>
        <li><a href="#" class="M"><h4 id="b3">اللغة العربية</h4></li></a>
        <li><a href="#" class="M"><h4 id="b4">علم التفسير</h4></li></a>
        <li><a href="#" class="M"><h4 id="b5">علم الحديث </h4></li></a>
        <li><a href="#" class="M"><h4 id="b6">التاريخ والسير </h4></li></a>
        <li><a href="#" class="M"><h4 id="b7">علم القراءات </h4></li></a>
        <li><a href="#" class="M"><h4 id="b8">علم أسباب النزول </h4></li></a>
        <li><a href="#" class="M"><h4 id="b9">أحكام القرآن </h4></li></a>
        <li><a href="#" class="M"><h4 id="b10">علم التجويد </h4></li></a>
        <li><a href="#" class="M"><h4 id="b11">علم مصطلح الحديث </h4></li></a>
        <li><a href="#" class="M"><h4 id="b12">تهذيب السلوك </h4></li></a>
        <li><a href="#" class="M"><h4 id="b13">أصول الفقه وقواعدة ومقاصد الشرعية </h4></li></a>
        <li><a href="#" class="M"><h4 id="b14">الفتاوى </h4></li></a>
        <li><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h4></li>

    </ul>
</fieldset>
  </section>
</main> 
    <section>
                             <!-- مكان البحث -->
       <!----------------------------------------------------------------> 
        <center> 
            <h1 class="anwan">كتب العقيدة</h1>
            
    <form action="" method="POST" style="text-align: center; margin-bottom: 30px;">
    <input type="text" name="search_text" placeholder="ابحث عن كتاب..."
           style="padding: 10px; width: 200px; border-radius: 5px; border: 1px solid #007bff; text-align:center;" >
   
    <button type="submit" name="submit_search" class="open-modal-btn" style="cursor:pointer;">
        بحث
    </button>

    <?php if(isset($_POST['submit_search'])): ?>
        <a href="كتب العقيدة.php"><button type="button" class="open-modal-btn" style="background: #6c757d;">إلغاء</button></a>
    <?php endif; ?>
    </form>
        </center>
     </section>
      <!---------------------------------------------------------------->
  <center>
    <div class="scroll-arrow">&nbsp <img src="للتنسيقات/سهم حلو.png" alt="" width="30" height="37"></div>
 </center>
    <section class="subjects">
                   <!-- هنا استخدام الوايل لإضافة الكتب -->
        <!---------------------------------------------------------------->
    <?php
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
           
            // تجهيز مسارات المجلدات العميقة التي أنشأتها
            $imagePath = "الصور للكتب/العقيدة/الصور لكتب العقيدة/" . $row['IMAGE_PATH'];
            $filePath  = "الكتب الموجودة/كتب العقيدة/كتب العقيدة/" . $row['FILE_PATH'];
    ?>
       
        <div class="card">
            <div class="card-header">
                <h4><?php echo $row['ENAME']; ?></h4>
            </div>
           
            <div class="card-body">
                <img src="<?php echo $imagePath; ?>" alt="صورة الكتاب">
            
            </div>
           <br> 
           <center>
            <div class="book" >
                
                <a> <button class="open-modal-btn" onclick="openBook('<?php echo $filePath; ?>', '<?php echo $row['ENAME']; ?>')">
                    <h3>&nbspقراءة&nbsp</h3>
                </button> </a>
                   
              
                <a href="<?php echo $filePath; ?>" download>
                    <button class="open-modal-btn"><h3>تحميل</h3></button></a>
            </div>
            <center>
        </div>

    <?php
        } // نهاية الـ while
    } else {
        echo "<p>لا توجد كتب مضافة حالياً في قاعدة البيانات.</p>";
    }
    ?>
                         <!-- هيكلية نافذة القراءة -->
        <!---------------------------------------------------------------->
        <div id="readerModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close-btn">&times;</span>
            <h3 id="modalTitle">قراءة الكتاب</h3>
        </div>
        <div class="modal-body">
           
<iframe id="pdfViewer" src="" frameborder="0" type="application/pdf"></iframe>
        </div>
        <div class="modal-footer">
            <p>مكتبة أبو أسوة&nbsp&nbsp&nbsp&nbspقراءة مفيدة</p>
        </div>
    </div>
</div>                 <!-- جافاسكربت نافذة القراءة -->    
        <!---------------------------------------------------------------->
<script>
    var modal = document.getElementById("readerModal");
    var span = document.getElementsByClassName("close-btn")[0];
    var iframe = document.getElementById("pdfViewer");

 function openBook(fileUrl, bookName) {
    var modal = document.getElementById("readerModal");
    var iframe = document.getElementById("pdfViewer");
    var title = document.getElementById("modalTitle");

    // إصلاح المسار ليفهمه المتصفح (تبديل المسافات برموز)
    var fixedUrl = encodeURI(fileUrl);

    modal.style.display = "block";
    iframe.src = fixedUrl;
    title.innerText = "قراءة: " + bookName;
   
    // منع أي سلوك افتراضي
    if (event) event.preventDefault();
}


    // إغلاق النافذة عند الضغط على X
    span.onclick = function() {
        modal.style.display = "none";
        iframe.src = ""; // تفريغ الرابط لإيقاف التحميل
    }

    // إغلاق النافذة عند الضغط خارجها
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            iframe.src = "";
        }
    }
</script>
        <!---------------------------------------------------------------->
 
         </section>

</main>
<footer>
    <hr>
   <center>
    <a href="#"><img src="للتنسيقات/سهم الرجوع الى الاعلى.png" alt="للاعلى" width="40px" height="40px"></a>
    <br>
    <img src="للتنسيقات/شعار مكتبة.png" alt="logo" width="200px" >
    </center>
    <h2 >&nbsp&nbspهدف الموقع</h2>
    <h4>أبو أسوة هو موقع مكتبة إلكترونية يهتم بالعلوم الشرعية
        ويقدم إليك  الكتب بشكل سهل ومرتب ،
        وهو المكان المناسب لأي شخص يطمح بأن يتعلم
        أمور الدين ويصبح عالم من علما هذة الامة باذن الله.</h4>
</footer>


</body>
</html>
