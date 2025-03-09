<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect('/user_profile');
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label class="text-2xl text-black" for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block w-full h-10 p-1 mt-5 text-base border-2"
                type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-2xl text-black" for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block w-full p-1 mt-5 text-base border-2"
                type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center ">
                <input wire:model="form.remember" id="remember" type="checkbox"
                    class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="text-sm text-black ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>


        <a wire:navigate class="text-red-800" href="/register">Click here to signup</a>


        <div class="flex flex-col mt-5">

            <span class="text-xs">
                <span class="font-bold uppercase">Guest login -</span>

                Email: user@gmail.com
                Password: user1234
                Email: user1@gmail.com
                Password: user1234


            </span>
            <span class="text-xs">
                <span class="font-bold uppercase">ADMIN login -</span>


                Email: admin@gmail.com
                Password: admin1234

            </span>

        </div>

    </form>

    <a href="/">
        <div class="mt-5 hover:cursor-pointer">
            <span class="px-2 py-1 text-white bg-red-800 rounded-md">
                return</span>
        </div>
    </a>
</div>
