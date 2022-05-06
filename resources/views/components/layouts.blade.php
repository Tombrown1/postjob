<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/base.css" integrity="sha512-z66y0PypNStA/ynlSM3kk1/SDr1n7pIBpQO86uxkHAtBYOJJzXAAFq9rjFz8Egh25cpv3EPcrS4Y8nVHyKB9Dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel:'#60AB30',
                    }
                }
            }
        }
    </script> 
 <title>Job Listing Portal | Find Laravel Jobs and Projects </title>  
</head>
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/">
            <img class="w-24" src="{{asset('images/g-logo.png')}}" alt="" class="logo"> 
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold uppercase">
                    Welcome {{auth()->user()->name}}
                </span>
            </li>
            <li>
                <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Manage Listing</a>
            </li>
            <li>
                <form class="inline" action="/logout" method="post">
                    @csrf
                    <button type="submit" >Logout</button>
                </form>
            </li>
            @else
            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
            </li>
            @endauth
        </ul>
    </nav>


   <main>
        {{$slot}}
   </main>
   <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved </p>
    
    <a href="/listings/create-job" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
   </footer> 
   <x-flash-message/>
</body>
</html>