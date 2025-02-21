<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('الإسم')" class="text-right" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('البريد الإلكتروني ')" class="text-right" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('كلمة المرور')" class="text-right" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" class="text-right" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور ')" class="text-right" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="mt-6 flex flex-col items-end">
            <label for="university" class="block text-lg font-medium text-gray-700 text-right">اختر تخصصك
                الجامعي:</label>
            <select id="university" name="university" class="mt-2 p-3 border rounded-lg w-64">
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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __(' هل تمتلك حسابا بالفعل؟') }}
            </a>

            <x-primary-button class="ms-4">
                تسجيل
            </x-primary-button>

        </div>
    </form>
</x-guest-layout>