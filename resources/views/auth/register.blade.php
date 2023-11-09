<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('氏名(カタカナ)')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="タナカ　タロウ" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!--Address-->
        <div>
            <x-input-label for="address" :value="__('住所')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" placeholder="東京都〇〇" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="aaa@gmail.com" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <!--tell_number-->
        <div>
            <x-input-label for="tell_number" :value="__('電話番号')" />
            <x-text-input id="tell_number" class="block mt-1 w-full" type="text" name="tell_number" :value="old('tell_number')" placeholder="080-XXXX-XXXX" required autofocus autocomplete="tell_number" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード再確認')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('既に登録済みの方はこちら') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('登録') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
