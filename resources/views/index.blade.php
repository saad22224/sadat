<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/images (12).jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>جامعة السادات</title>
    <style>
        html {
            /* overflow-y: hidden; */
            overflow-x: hidden;
        }

        header {
            position: relative;
            /* ضروري ليعمل الـ ::before بشكل صحيح */
            background-image: url(assets/صورة\ واتساب\ بتاريخ\ 1446-09-12\ في\ 18.42.40_b9709584.jpg);
            background-size: cover;
            background-position: center;
            height: 100vh;
            /* يمتد ليشمل الـ Navbar والـ Hero */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: white;
        }

        /* الطبقة الداكنة */
        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* 0.5 يعني شفافية 50% */
            z-index: 1;
            /* يجعل الطبقة فوق الصورة */
        }

        /* التأكد من أن المحتوى داخل الهيدر يظهر فوق الظل */
        header * {
            position: relative;
            z-index: 2;
        }

        .white-line {
            position: absolute;
            top: 0;
            left: 50%;
            /* في منتصف الصفحة */
            width: 1px;
            /* سمك الخط */
            height: 25vh;
            /* يمتد لربع الصفحة */
            background-color: rgba(255, 255, 255, 0.685);
            z-index: 50;
            /* فوق كل العناصر */
            z-index: 2;
        }
        .white-line2 {
            position: absolute;
            bottom: 0;
            left: 50%;
            /* في منتصف الصفحة */
            width: 1px;
            /* سمك الخط */
            height: 25vh;
            /* يمتد لربع الصفحة */
            background-color: rgba(255, 255, 255, 0.685);
            z-index: 50;
            z-index: 2;
            /* فوق كل العناصر */
        }

        .nav-link {
            position: relative;
            padding-bottom: 4px;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .search-container {
            position: relative;
        }

        .search-box {
            display: none;
            position: absolute;
            top: -35%;
            width: 500px !important;
            height: 70px;
            right: 0;
            background: black;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 200px;
        }
        .search-box input:focus{
            outline: none;
            border: none;
        }
        #mobileMenu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
            background-opacity: 100%;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: start;
            padding: 6px;
            transform: translateY(-100%);
            transition: transform 0.5s ease-in-out;
            z-index: 10;
        }

      @media (max-width: 650px) {

        html , body{
            overflow-x: hidden;
        }
        .search-box{
            width: 90% !important;
        }
        #searchBtn{
            
            overflow-x: hidden;
         width: 65%;
         margin-left: 50px;
        }
     
        .sada{
            margin-bottom: 20px;
        }
        .logo{
            margin-bottom: 20px;
        }
        .sadat-icons{
            margin-bottom: 20px;
        }
        }

    </style>
</head>

<body class="">
    <div class="white-line"></div>


    <header>
        <nav class="p-4 flex justify-between items-center h-20 ">
            <!-- Left Section: Logo -->
         <a href="{{url('/')}}" style="cursor: pointer">
            <div data-aos="fade-right" data-aos-duration="2000" style="display: flex; justify-content: center; align-items: center;">
                <img src="./assets/images (12).jpg" alt="Logo" class="h-20" style="margin-top: 20px;" >
                <p style="margin-left: 10px; font-weight: bolder; font-size: 20px; display: flex; flex-direction: column;">    جامعة <span>السادات</span></p>
            </div>
        </a>
            <!-- Right Section: Menu Button & Search -->
            <div class="flex h-full" data-aos="fade-left" data-aos-duration="2000">
                <!-- Search Button & Box -->
                <div class="relative h-full">
                    <button id="searchBtn" style="margin-top: -20px; margin-right: -20px; height: 70px;"
                        class="text-white hover:bg-gray-700 text-xl px-4 bg-black w-36 h-full flex items-center justify-center border-r border-gray-400">
                        🔍 Search
                    </button>
                    <div id="searchBox" class="search-box">
                        <input type="text" placeholder="بحث..." class="border-black bg-black  p-2 rounded-md w-full">
                    </div>
                </div>

                <!-- Menu Button -->
                <button id="menuBtn" style="margin-top: -20px; margin-right: -20px; height: 70px;"
                    class="text-white hover:bg-gray-700 text-2xl px-4 bg-black w-36 h-full flex items-center justify-center">
                    ☰ Menu
                </button>
            </div>
        </nav>
        <section class="h-screen bg-cover bg-center "  data-aos="fade-down"
        data-aos-easing="linear" data-aos-duration="2000" style="display: flex; justify-content:
     center; align-items: center; flex-direction: column;">
            <h1 style="font-size: 30px; margin-bottom: 20px; font-weight: bolder;">جامعة السادات</h1>
            <p style="font-size: 20px;">جامعة مدينة السادات، جامعة مصرية حكومية مقرها مدينة السادات شمال غرب القاهرة
                الكبرى، أُنشئت بموجب القرار الجمهوري بتاريخ 25 مارس 2013م</p>
        </section>
    </header>
    <div class="white-line2"></div>
    <!-- Hidden Menu (Slide Down) -->
    <div id="mobileMenu"
        class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-90 text-white hidden flex flex-col items-start p-6">
        <div class="w-full flex justify-between items-center">
            <div style="display: flex; justify-content: center; align-items: center;">

                <img src="./assets/images (12).jpg"  style="margin-left: 40px; margin-top: 30px;" alt="Logo" class="h-12">
                <p style="margin-left: 10px; font-weight: bolder; font-size: 20px; display: flex;  margin-top: 30px; flex-direction: column;">    جامعة <span>السادات</span></p>
            </div>

            <button id="closeMenu" class="text-white bg-gray-700 rounded-full w-10 h-10 flex items-center
             justify-center text-xl">&times;</button>

        </div>
        <div class="mt-8 flex flex-col space-y-4" >
            <a href="{{url('/')}}" class="text-3xl nav-link hover:text-yellow-200 " style="margin-left: 40px; margin-top: 30px;">الرئيسية</a>
            <!-- <a href="#" class="text-xl nav-link hover:text-yellow-200"> عنا</a> -->
            <a href="{{route('application.index')}}" class="text-3xl nav-link hover:text-yellow-200 "  style="margin-left: 40px; margin-top: 30px;">التقديم</a>
            <a href="https://credit.usc.edu.eg/static/index.html" target="_blank" class="text-3xl nav-link hover:text-yellow-200 " style="margin-left: 40px; margin-top: 30px;">ابن الهيثم</a>
            <a href="https://al-zahraa.mans.edu.eg/studentApplications" target="_blank" class="text-3xl nav-link hover:text-yellow-200 "  style="margin-left: 40px; margin-top: 30px;">موقع الزهراء</a>

            @if(Route::has('login'))
            @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="text-3xl nav-link hover:text-yellow-200" style="margin-left: 40px; margin-top: 30px; background: none; border: none; cursor: pointer;">
                    تسجيل الخروج
                </button>
            </form>
            
            @else
            <a href="{{route('register')}}" class="text-3xl nav-link hover:text-yellow-200 " style="margin-left: 40px; margin-top: 30px;">إنشاء حساب</a>
            <a href="{{route('login')}}" class="text-3xl nav-link hover:text-yellow-200 " style="margin-left: 40px; margin-top: 30px;">تسجيل الدخول</a>
             @endauth
             @endif
      
        </div>
    </div>

<!-- start first  news-->
    <div class="p-8">
        <div class="container mx-auto px-4 py-16 bg-white rounded-lg flex flex-col md:flex-row items-center gap-12 p-8">
            <!-- صورة الخبر -->
            <div class="w-full md:w-1/2"  data-aos="flip-left" data-aos-duration="1000">
                <img src="assets/صورة واتساب بتاريخ 1446-09-11 في 21.19.34_1f9cd4fe.jpg" alt="صورة التعاون"
                    class="w-full h-auto rounded-lg">
            </div>
    
            <!-- محتوى الخبر -->
            <div class="w-full md:w-1/2 text-center md:text-right" data-aos="fade-up-left" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    بروتوكول تعاون مشترك بين جامعة مدينة السادات وجامعة بورسعيد
                </h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed" style="line-height: 1.8;">
                    وقّعت الدكتورة شادن معاوية، رئيس جامعة مدينة السادات، والدكتور شريف صالح، رئيس جامعة بورسعيد، بروتوكول تعاون مشترك في الاستشارات الهندسية والإشراف الفني على المشروعات الإنشائية الجديدة.
                </p>
                <a href="{{url('new1')}}" class="inline-block bg-blue-600 text-white text-lg px-8 py-3 rounded-lg hover:bg-blue-700 transition-all"
                style="margin-top: 20px;">
                    اقرأ المزيد
                </a>
            </div>
        </div>
    </div>
    
<!-- end first  news-->
    
<!-- start second  news-->
    <div class="p-8" >
        <div class="container mx-auto px-4 py-16 bg-white rounded-lg flex flex-col md:flex-row items-center gap-12 p-8">
         
    
            <!-- محتوى الخبر -->
            <div class="w-full md:w-1/2 text-center md:text-right" data-aos="fade-down" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    رئيس جامعة مدينة السادات تهنئ الرئيس السيسي وقواتنا المسلحة بذكرى انتصارات العاشر من رمضان

                </h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed" style="line-height: 1.8;">
                    تبعث الدكتورة شادن معاوية، رئيس جامعة مدينة السادات، بأصدق التهاني للرئيس عبد الفتاح السيسي، ولقواتنا المسلحة الباسلة، بمناسبة ذكرى انتصارات العاشر من رمضان
                </p>
                <a href="{{url('new2')}}" style="margin-top: 20px;" class="inline-block bg-blue-600 text-white text-lg px-8 py-3 rounded-lg hover:bg-blue-700 transition-all">
                    اقرأ المزيد
                </a>
            </div>
               <!-- صورة الخبر -->
               <div class="w-full md:w-1/2" data-aos="flip-right" data-aos-duration="1000">
                <img src="assets/صورة واتساب بتاريخ 1446-09-11 في 21.19.34_7ad6e6b0.jpg" alt="صورة التعاون"
                    class="w-full h-auto rounded-lg">
            </div>
        </div>
    </div>
    
<!-- end second  news-->
    

<!-- start third  news-->
<div class="p-8">
    <div class="container mx-auto px-4 py-16 bg-white rounded-lg flex flex-col md:flex-row items-center gap-12 p-8">
        <!-- صورة الخبر -->
        <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
            <img src="assets/صورة واتساب بتاريخ 1446-09-11 في 21.19.34_472f25bd.jpg" alt="صورة التعاون"
                class="w-full h-auto rounded-lg">
        </div>

        <!-- محتوى الخبر -->
        <div class="w-full md:w-1/2 text-center md:text-right" data-aos="fade-left" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">
               انتظام سير العمل بمركز التحول الرقمي بالجامعة بنفس المواعيد الرسمية خلال شهر رمضان المبارك

            </h2>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed" style="line-height: 1.8;">
                أكد مركز التحول الرقمي بالجامعة استمراره في تقديم خداماته خلال شهر رمضان المبارك في نفس مواعيد العمل الرسمية ؛ وأنتظم المركز اليوم  في أعمال  الاختبارات الإلكترونية للمجموعة            </p>
            <a href="{{url('new3')}}" style="margin-top: 20px;" class="inline-block bg-blue-600 text-white text-lg px-8 py-3 rounded-lg hover:bg-blue-700 transition-all">
                اقرأ المزيد
            </a>
        </div>
    </div>
</div>

<!-- end third  news-->
<!-- start footer -->
<footer class="bg-black text-white py-6">
    <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-between px-6">
        <!-- حقوق الملكية -->
        <div class="text-right text-sm md:text-base sada">
            &copy; 2025 جامعة مدينة السادات - جميع الحقوق محفوظة
        </div>

        <!-- شعار الجامعة -->
        <div class="flex justify-center">
            <img src="assets/images (12).jpg" alt="شعار جامعة السادات"
                class="h-20 w-auto rounded-lg shadow-lg logo">
        </div>

        <!-- أيقونات وسائل التواصل -->
        <div class="flex gap-6 sadat-icons">
            <a href="https://www.facebook.com/share/1ABj7adGgH/" target="_blank" class="text-white hover:text-gray-400 transition">
                <i class="fab fa-facebook text-4xl"></i>
            </a>
            <a href="https://x.com/Univ_SadatCity?t=TdSD-iheDGBAjeMzYeNdow&s=08" target="_blank" class="text-white hover:text-gray-400 transition">
                <i class="fab fa-twitter text-4xl"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-400 transition">
                <i class="fab fa-instagram text-4xl"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-400 transition">
                <i class="fab fa-linkedin text-4xl"></i>
            </a>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Font Awesome للأيقونات -->


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.getElementById("menuBtn").addEventListener("click", function () {
            document.getElementById("mobileMenu").style.transform = "translateY(0)";
        });

        document.getElementById("closeMenu").addEventListener("click", function () {
            document.getElementById("mobileMenu").style.transform = "translateY(-100%)";
        });


        // زر البحث
        document.getElementById("searchBtn").addEventListener("click", function (event) {
            let searchBox = document.getElementById("searchBox");
            searchBox.style.display = searchBox.style.display === "block" ? "none" : "block";
            event.stopPropagation();
        });

        // إغلاق البحث عند الضغط خارج الزر
        document.addEventListener("click", function (event) {
            let searchBox = document.getElementById("searchBox");
            if (!document.getElementById("searchBtn").contains(event.target) && !searchBox.contains(event.target)) {
                searchBox.style.display = "none";
            }
        });
    </script>
</body>

</html>

</html>