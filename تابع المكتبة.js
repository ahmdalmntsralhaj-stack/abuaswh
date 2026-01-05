 
//لشريط الي فوق
            const thumbnail = document.getElementById('thumbnail');
            const menu = document.getElementById('popupMenu');

thumbnail.addEventListener('click',() =>{
  if (menu.style.display === 'block') {
    menu.style.display = 'none';
  }else{
    menu.style.display = 'block';
  }
   });

      
        var isTrue = false;
        function WADA(){
    
            if(isTrue){
            document.body.style.backgroundColor = '#fff';
            document.body.style.color = '#000';
            document.getElementById('click1').src = "للتنسيقات/فاتح.png";
            localStorage.setItem('theme', 'light');
             }
            else{
            document.body.style.backgroundColor = '#141212';
            document.body.style.color = '#bebebe';
            document.getElementById('click1').src = "للتنسيقات/غامق.png";
             localStorage.setItem('theme', 'dark');
            }
         isTrue =!isTrue;
        }

        // const shuruhat = document.getElementById('shuruhat');
        // const baed1 = document.getElementById('baed');

        // shuruhat.addEventListener('click',() =>

        //      {
        //         if (baed1.style.display === 'block')
        //           {
        //              baed1.style.display = 'none';
        //           }
        //         else
        //           {
        //              baed1.style.display = 'block';
        //           }
        //      }
        //      );

   
// إغلاق النافذة عند الضغط على X
closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
});

// إغلاق النافذة عند الضغط خارج المحتوى
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

     //-----------------------------------------------
      // إظهار النافذة عند الضغط على الزر
        document.querySelector('.open-modal-btn').addEventListener('click', function() {
            document.getElementById('modalOverlay').style.display = 'flex';
        });

        // إغلاق النافذة عند الضغط على زر الإغلاق
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modalOverlay').style.display = 'none';
        });

        // إغلاق النافذة عند الضغط على الخلفية
        document.getElementById('modalOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                document.getElementById('modalOverlay').style.display = 'none';
            }
        });




        
        
