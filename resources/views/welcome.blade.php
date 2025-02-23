<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة الجامعات المصرية</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold text-blue-700 mb-4">منصة الجامعات المصرية</h1>
        <p class="text-lg text-gray-700 mb-6">بوابتك للتسجيل في  جامعة السادات  بسهولة</p>
        
        <div class="space-x-4">
            @if(Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg 
                shadow-lg hover:bg-blue-700 transition">لوحة التحكم</a>
            @else
            <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-lg hover:bg-blue-700 transition">تسجيل الدخول</a>
            <a href="{{ route('register') }}" class="px-6 py-3 bg-green-600 text-white rounded-lg
             shadow-lg hover:bg-green-700 transition">إنشاء حساب</a>
             @endauth
             @endif
        </div>
    </div>
</body>
</html>
