<x-layouts>
<x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Login </h2>
                <p class="mb-4">Login to your Job Listing Account</p>
        </header>

        <form action="/users/authenticate" method="post">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" name="email" value="{{old('email')}}" class="border border-gray-200 rounded p-2 w-full">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">Password</label>
                <input type="password" name="password" value="{{old('password')}}" class="border border-gray-200 rounded p-2 w-full">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-laravel py-2 px-4 rounded text-white hover:black">
                    Signin
                </button>
            </div>
            <div class="mb-8">
                <p>
                    Don't have an Account
                    <a href="/register" class="text-red-500">Register</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layouts>