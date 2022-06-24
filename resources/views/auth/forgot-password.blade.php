<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <!-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> -->
        </x-slot>
        <div class="login_txt" style='display: flex;justify-content: center;width: 100%; font-size: 20px; color: rgb(107 114 128);  margin-bottom: 20px;'>
                            忘記密碼
        </div>
        

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{ route('password.email') }}">
       
            @csrf

            <!-- Email Address -->
            <div>
                
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="電子郵件" required autofocus />
            </div>

            <div class="flex items-center justify-center mt-4" >
                <x-button>
                    {{ __('進行驗證') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
