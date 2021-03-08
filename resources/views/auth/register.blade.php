<?php /*<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> */?>




@extends('header')

<div class="container">
<h1>Login</h1>


@if ($errors->any())
    <div >
        <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form  method="POST" action="register">
@csrf
<div class="form-group">
    <label for="name">Name:</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Name" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input name="email" type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="login_type">Login Type:</label>
    <input name="login_type" type="login_type" class="form-control" placeholder="Enter login type" id="login_type">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input name="password" type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>

  
  <div class="form-group">
    <label for="password_confirmation">Confirm Password:</label>
    <input name="password_confirmation" type="password" class="form-control" placeholder="Enter password" id="password_confirmation">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@extends('footer')

