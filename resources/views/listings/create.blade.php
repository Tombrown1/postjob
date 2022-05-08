<x-layouts>
<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Create Job</h2>
        <p class="mb-4">Post a Job to find an Artisan</p>
    </header>

    <form action="/listings" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
            <input type="text" value="{{old('company')}}" class="border border-gray-200 rounded p-2 w-full" name="company">
            @error('company')  
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
      
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Job Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{old('title')}}" name="title">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Job Location</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{old('location')}}" name="location">
            @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{old('email')}}" name="email">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="website" class="inline-block text-lg mb-2">Website/Application Url</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{old('website')}}" name="website">
            @error('website')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags"s class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{old('tags')}}" name="tags">
            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">Company Logo</label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo">
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">Description</label>
            <textarea cols="3" row="5" type="text" class="border border-gray-200 rounded p-2 w-full" name="description">{{old('description')}}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
       <div class="mb-6">
           <a href="/" class="text-black ml-4">Back</a>
           <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Create Job </button>
           
       </div>

    </form>

</x-card>
</x-layouts>