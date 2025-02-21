<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ملف المستخدم</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">ملف المستخدم</h2>
        
        <div class="grid grid-cols-2 gap-4">
            <div><strong>الاسم:</strong> <span id="name">{{ $application->name }}</span></div>
            <div><strong>الإيميل:</strong> <span id="email">{{ $application->email }}</span></div>
            <div><strong>رقم الهاتف:</strong> <span id="phone">{{ $application->phone }}</span></div>
            <div><strong>تاريخ الميلاد:</strong> <span id="dob">{{ $application->dob }}</span></div>
            <div><strong>الرقم القومي:</strong> <span id="national_id">{{ $application->national_number }}</span></div>
            <div><strong>المدرسة الثانوية:</strong> <span id="high_school">{{ $application->high_school }}</span></div>
            <div><strong>تاريخ التخرج:</strong> <span id="graduation_year">{{ $application->year_of_graduation }}</span></div>
        </div>
        
        <div class="mt-6 grid grid-cols-3 gap-4">
            <div class="text-center">
                <strong>الصورة الشخصية</strong>
                <img src="{{ asset($application->user_avatar) }}" alt="الصورة الشخصية" class="mt-2 w-32 h-32 rounded-lg shadow">
            </div>
            <div class="text-center">
                <strong>صورة البطاقة</strong>
                <img src="{{ asset($application->identity_card) }}" alt="صورة البطاقة" class="mt-2 w-32 h-32 rounded-lg shadow">
            </div>
            <div class="text-center">
                <strong>شهادة الثانوية</strong>
                <img src="{{ asset($application->high_school_certificate) }}" alt="شهادة الثانوية" class="mt-2 w-32 h-32 rounded-lg shadow">
            </div>
        </div>
    </div>
</body>
</html>
