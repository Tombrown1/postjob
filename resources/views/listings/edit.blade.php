<x-layouts>
<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit Posted Job</h2>
    </header>

    <form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @Method('PUT');
        
        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
            <input type="text" value="{{$listing->company}}" class="border border-gray-200 rounded p-2 w-full" name="company">
            @error('company')  
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
      
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Job Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{$listing->title}}" name="title">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Job Location</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{$listing->location}}" name="location">
            @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{$listing->email}}" name="email">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="website" class="inline-block text-lg mb-2">Website/Application Url</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{$listing->website}}" name="website">
            @error('website')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags"s class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{$listing->tags}}" name="tags">
            @error('tag')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">Company Logo</label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo">
                <img class="w-48 mr-6 mb-6" src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('images/c-logo.png')}}" alt="">
            @error('logo')
                <p class="text-red 500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">Description</label>
            <textarea cols="3" row="5" type="text" class="border border-gray-200 rounded p-2 w-full" name="description">{{$listing->description}}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
       <div class="mb-6">
           <a href="/" class="text-black ml-4">Back</a>
           <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Update Listing </button>
           
       </div>

    </form>

</x-card>
</x-layouts>