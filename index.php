             <?php
session_start(); /* بدء الجلسة في أعلى الصفحة تماماً */
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة دينية</title>
    <link rel="stylesheet" href="تابع المكتبة.css">
   
</head>
<body>

     <fieldset>
        <header>
            
    <h2>
        <img src="للتنسيقات/شريط المعلومات.png"alt="logo" width="20" id="thumbnail" style="float: left;">
             <div id="popupMenu">
                <p> سوف تكون خطة تعليم هنا إن شا الله </p>
                <br>
                <!-- -----------------------||||||||||||||||--------------------- -->

<div class="user-area">
    <?php if(isset($_SESSION['user_name'])): ?>
        <span style="color: #0088ff; font-weight: bold;">مرحباً، <?php echo $_SESSION['user_name']; ?> 👤</span>
        <a href="logout.php" style="margin-right: 10px; color: red; text-decoration: none; font-size: 12px;">تسجيل خروج</a>
    <?php else: ?>
        <button onclick="openLoginModal()" class="login-trigger" style="display:flex; padding: 5px 10px;margin:5px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">تسجيل الدخول</button>
    <?php endif; ?>
</div>

<div id="loginModal" class="modal-overlay">
    <div class="modal-card">
        <div class="modal-header">
            <h2 id="modalTitle">تسجيل دخول</h2>
            <span class="close-btn" onclick="closeLoginModal()">&times;</span>
        </div>

        <form id="loginForm" action="auth_logic.php" method="POST">
            <input type="number" name="phone" placeholder="رقم الهاتف" class="srh" required>
            <input type="password" name="password" placeholder="كلمة المرور" class="srh" required>
            <button type="submit" name="login_btn" class="btn-action btn-upd">دخول</button>
            <p onclick="toggleForm()" class="toggle-text">ليس لديك حساب؟ سجل الآن</p>
        </form>

        <form id="registerForm" action="auth_logic.php" method="POST" style="display:none;">
            <input type="text" name="full_name" placeholder="الاسم الكامل" class="srh" required>
            <input type="number" name="phone" placeholder="رقم الهاتف" class="srh" required>
            <input type="password" name="password" placeholder="كلمة المرور الجديدة" class="srh" required>
            <button type="submit" name="register_btn" class="btn-action btn-add">إنشاء حساب</button>
            <p onclick="toggleForm()" class="toggle-text">لديك حساب بالفعل؟ دخول</p>
        </form>

        <button onclick="closeLoginModal()" class="btn-later">التسجيل لاحقاً</button>
    </div>
</div>

<style>
/* التنسيقات المطلوبة */
.modal-overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.75); z-index: 10000; }
.modal-card { background: white; width: 340px; margin: 80px auto; padding: 25px; border-radius: 15px; border: 3px solid #007bff; text-align: center; position: relative; }
.srh { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
.btn-action { width: 100%; padding: 10px; border: none; border-radius: 5px; color: white; cursor: pointer; font-weight: bold; margin-top: 10px; }
.btn-add { background: #28a745; } .btn-upd { background: #007bff; }
.btn-later { background: none; color: #888; border: none; margin-top: 15px; cursor: pointer; text-decoration: underline; }
.toggle-text { color: #007bff; cursor: pointer; margin-top: 10px; font-size: 13px; }
.close-btn { position: absolute; top: 10px; right: 15px; font-size: 24px; cursor: pointer; }
</style>

<script>
function openLoginModal() { document.getElementById("loginModal").style.display = "block"; }
function closeLoginModal() { document.getElementById("loginModal").style.display = "none"; }
function toggleForm() {
    var loginF = document.getElementById("loginForm"), regF = document.getElementById("registerForm"), title = document.getElementById("modalTitle");
    if (loginF.style.display === "none") { loginF.style.display = "block"; regF.style.display = "none"; title.innerText = "تسجيل دخول"; }
    else { loginF.style.display = "none"; regF.style.display = "block"; title.innerText = "إنشاء حساب جديد"; }
}
</script>
<!-- -----------------------||||||||||||||||--------------------- --> 
             </div>  
    
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
    
<main id="main1">
  
    <section >
<fieldset class="ALSHRET">
    <ul>
        <li><a href="العقيدة.html" class="M"><h4>العقيدة</h4></li></a>
        <li><a href="الفقة.html" class="M"><h4>الفقه</h4></li></a>
        <li><a href="#" class="M"><h4>اللغة العربية</h4></li></a>
        <li><a href="#" class="M"><h4>علم التفسير</h4></li></a>
        <li><a href="#" class="M"><h4>علم الحديث </h4></li></a>
        <li><a href="#" class="M"><h4>التاريخ والسير </h4></li></a>
        <li><a href="#" class="M"><h4>علم القراءات </h4></li></a>
        <li><a href="#" class="M"><h4>علم أسباب النزول </h4></li></a>
        <li><a href="#" class="M"><h4>أحكام القرآن </h4></li></a>
        <li><a href="#" class="M"><h4>علم التجويد </h4></li></a>
        <li><a href="#" class="M"><h4>علم مصطلح الحديث </h4></li></a>
        <li><a href="#" class="M"><h4>تهذيب السلوك </h4></li></a>
        <li><a href="#" class="M"><h4>أصول الفقه وقواعدة ومقاصد الشرعية </h4></li></a>
        <li><a href="#" class="M"><h4>الفتاوى </h4></li></a>
        <li><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h4></li>
    </ul>
</fieldset>
  </section>
</main> 
<center>
    <div class="scroll-arrow">&nbsp <img src="للتنسيقات/سهم حلو.png" alt="" width="30" height="37"></div>
</center>

 <main class="main2">

    <section class="subjects">

        <!---------------------------------------------------------------->
        <a href="العقيدة.html" class="A" >
        <div class="card" >
        <div class="card-header"><h4>العقيدة</h4></div>
        <div class="card-body">
        <img src="للتنسيقات/كتب بنج1.png" alt="العقيدة" >
        <br>
        <p>الفن المختص بالبحث في الأحوال المتعلقة بمسائل بأصول الإيمان، وما يقترن بها، اعتمادًا على الأدلة الشرعية المعتبرة .</p>
        </div>
        </div></a>
        <!---------------------------------------------------------------->
        <a href="الفقة.html" class="A">
        <div class="card" >
        <div class="card-header"><h4>الفقه</h4></div>
        <div class="card-body">
        <img src="للتنسيقات/كتب بنج1.png" alt="الفقه" >
        <br>
        <p> معرفة أحكام الله في أفعال المكلفين بالوجوب والحظر والإباحة والندب والكراهة ، وهي منتقاة من الكتاب والسنة وما نصبه الشرع لمعرفتها من الأدلة .</p>
        </div>
        </div></a>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>اللغة العربية</h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" اللغة العربية" >
        <br>
        <p>تعلم اللغة العربية وقواعد النحو والبلاغة لفهم القرآن والحديث</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>علم التفسير</h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" علم التفسير" >
        <br>
        <p>تفسير آيات القرآن الكريم وبيان معانيها</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>علم الحديث</h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" علم الحديث" >
        <br>
        <p>جمع وتحقيق ودراسة أحاديث النبي ﷺ</p>
        </div>
        </div>
        <!---------------------------------------------------------------->  
        <div class="card" >
        <div class="card-header"><h4>التاريخ والسير</h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" التاريخ والسير" >
        <br>
        <p>دراسة حياة النبي ﷺ وحياة الصحابة وأحداث التاريخ الإسلامي</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>علم القراءات</h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" علم القراءات" >
        <br>
        <p>علم تلاوة القرآن الكريم بصوتيات وطرق مجازية شرعية</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>علم أسباب النزول</h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" علم أسباب النزول" >
        <br>
        <p>دراسة السياقات التي نزل فيها بعض آيات القرآن</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>أحكام القرآن </h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt="  أحكام القرآن" >
        <br>
        <p>دراسة الآيات التي تحكم بقدر من الأحكام الشرعية</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>علم التجويد </h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt="  علم التجويد" >
        <br>
        <p>تعليم قواعد تلاوة القرآن بصوت صحيح وجميل</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>علم مصطلح الحديث </h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" علم مصطلح الحديث" >
        <br>
        <p>علم تحليل صحة الحديث وتصنيفه من حيث الضعف أو الصحة</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>تهذيب السلوك </h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt="  تهذيب السلوك" >
        <br>
        <p>تربية النفس وتحسين الأخلاق والسلوك حسب تعاليم الإسلام</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><h4>أصول الفقه وقواعدة ومقاصد الشرعية </h4></div>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" أصول الفقه وقواعدة ومقاصد الشرعية ">
        <br>
        <p>مصدر التشريع وقواعد الاستنباط والمقاصد العليا للشريعة</p>
        </div>
        </div>
        <!---------------------------------------------------------------->
        <div class="card" >
        <div class="card-header"><a href="#" ><h4>الفتاوى </h4></div></a>
        <div class="card-body">
        <img src="للتنسيقات/book.png" alt=" الفتاوى ">
        <br>
        <p>إجابات العلماء على الأسئلة الشرعية في المسائل الحالية</p>
        </div>
        </div>
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

<!-- <h4>&nbsp&nbsp🢤&nbsp&nbsp</h4> -->

</body>
</html>
?>
