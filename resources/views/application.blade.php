<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج التقديم للجامعة</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    @if(session('success'))
    <script>
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            gravity: "top",
            position: 'right',
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
            stopOnFocus: true,
        }).showToast();
    </script>
        @endif
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <h2 class="text-2xl font-bold mb-6 text-center">نموذج التقديم للجامعة</h2>
        
        <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <!-- المعلومات الشخصية -->
            <div>
                <label class="block font-medium">الاسم الكامل</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 border rounded" required>
            </div>
            
            <div>
                <label class="block font-medium">تاريخ الميلاد</label>
                <input type="date" name="dob" value="{{ old('dob') }}" class="w-full p-2 border rounded" required>
            </div>
            
            <div>
                <label class="block font-medium">الرقم القومي</label>
                <input type="text" name="national_number" value="{{ old('national_number') }}" class="w-full p-2 border rounded" required>
            </div>
            
            <div>
                <label class="block font-medium">رقم الهاتف</label>
                <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full p-2 border rounded" required>
            </div>
            
            <div>
                <label class="block font-medium">البريد الإلكتروني</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full p-2 border rounded" required>
            </div>
            
            <!-- المعلومات الأكاديمية -->
            <div>
                <label class="block font-medium">اسم المدرسة الثانوية</label>
                <input type="text" name="high_school" value="{{ old('high_school') }}" class="w-full p-2 border rounded" required>
            </div>
            
            <div>
                <label class="block font-medium">سنة التخرج</label>
                <input type="number" name="year_of_graduation" value="{{ old('year_of_graduation') }}" class="w-full p-2 border rounded" required>
            </div>
            
      
            
            <!-- المستندات المطلوبة -->
            <div>
                <label class="block font-medium">صورة شهادة الثانوية العامة</label>
                <input type="file" name="high_school_certificate" class="w-full p-2 border rounded" accept="image/*,application/pdf" required>
            </div>
            
            <div>
                <label class="block font-medium">صورة البطاقة الشخصية</label>
                <input type="file" name="identity_card" class="w-full p-2 border rounded" accept="image/*" required>
            </div>
            
            <div>
                <label class="block font-medium">صورة شخصية حديثة</label>
                <input type="file" name="user_avatar" class="w-full p-2 border rounded" accept="image/*" required>
            </div>
            
            <!-- اختيار التخصص الجامعي -->
            <div>
                <label class="block font-medium">اختر التخصص الجامعي</label>
                <select id="university" name="university" class="mt-2 p-3 border rounded-lg w-64">
                    <option value="اختر الكليه" selected disabled> اختر الجامعه</option>
                <option value="حاسبات ومعلومات">حاسبات ومعلومات</option>
                <option value="طب">طب</option>
                <option value="صيدلة">صيدلة</option>
                <option value="هندسة">هندسة</option>
                <option value="علوم">علوم</option>
                <option value="تجارة">تجارة</option>
                <option value="حقوق">حقوق</option>
                <option value="آداب">آداب</option>
                <option value="تمريض">تمريض</option>
                <option value="تربية">تربية</option>
                <option value="زراعة">زراعة</option>
                <option value="إعلام">إعلام</option>
                <option value="سياحة وفنادق">سياحة وفنادق</option>
                <option value="فنون جميلة">فنون جميلة</option>
                <option value="فنون تطبيقية">فنون تطبيقية</option>
                <option value="دار العلوم">دار العلوم</option>
                <option value="الألسن">الألسن</option>
                <option value="الدراسات الإسلامية">الدراسات الإسلامية</option>
                <option value="التربية الرياضية">التربية الرياضية</option>
            </select>
            </div>
            
            <!-- إرسال الطلب -->
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">إرسال الطلب</button>
            </div>
        </form>
    </div>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> -->
</body>
</html>