<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            الملف الشخصي
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">  {{ Auth::user()->name }} 👋مرحبا بك</h3>
                    <p class="text-lg text-gray-600">طالب في {{ auth()->user()->university }}</p>
                    <p class="mt-2 text-gray-700">نسعى دائمًا للتميز والإبداع في مجال دراستنا، ونطمح لتحقيق إنجازات علمية ومهنية مميزة.</p>

                    <div class="mt-6">
                        <a href="{{ route('profile.edit') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            تعديل الملف الشخصي
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
