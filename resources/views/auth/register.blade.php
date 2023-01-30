<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <img class="rounded-circle" src="image/icon.jpg" alt=" Sebeya station" width="80" height="70">
        </x-slot>

        <form method="POST" action="{{ '/User' }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="firstname" :value="__('Firstname')" />

                <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />

                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="lastname" :value="__('Lastname')" />

                <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />

                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>
           
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="gender" :value="__('Gender')" />

                <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required />

                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="address" :value="__('Address')" />

                <x-text-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required />

                <x-input-error :messages="$errors->get('adress')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="position" :value="__('Position')" />

                <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" required />

                <x-input-error :messages="$errors->get('position')" class="mt-2" />
            </div>
            {{-- <div class="mt-4">
                <x-input-label for="role" :value="__('Role')" />

                <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required />

                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div> --}}
            <div class="mt-4">
            <select name="role" class="form-control">
                @foreach($roles as $role)
            <option value="{{$role->name}}">{{$role->name}}</option>
            @endforeach
           </select></br>
        </div>
            <div class="mt-4">
                <x-input-label for="mobile" :value="__('Mobile')" />

                <x-text-input id="mobile" class="block mt-1 w-full" type="number" name="mobile" :value="old('mobile')" required />

                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="username" :value="__('Username')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
