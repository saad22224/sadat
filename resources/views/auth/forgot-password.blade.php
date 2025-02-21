<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 text-right" >
        {{ __(' هل نسيت كلمة المرور؟ لا مشكلة. فقط أخبرنا بعنوان بريدك الإلكتروني، وسنرسل لك رابطًا لإعادة تعيين كلمة المرور، مما يتيح لك اختيار كلمة مرور جديدة.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('البريد الإلكتروني')"  class="text-right"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('إرسال رابط إعادة تعيين كلمة المرور عبر البريد الإلكتروني') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
