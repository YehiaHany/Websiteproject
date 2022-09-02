<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#ef3b2d',
            },
          },
        },
      }
  </script>
  <title>Find Laravel Jobs & Projects</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz-qHX77A3moHUZgzTT7L0mZ5sz47rx9x4IHIowgAEAwK1SRDQHrO6Zwuszn84_x95i4w&usqp=CAU" />
</head>

<body class="mb-48">
  <nav class="bg-black flex justify-between items-center mb-4">
      <a href="/"><img class="w-24" src="{{asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmcNunrvtML7LFza0hypPdEIK7LjftMjI5nJxAVdLbDiwt8AdK2c8bY1l6jdJ3MycPB6Q&usqp=CAU')}}" alt="" class="logo" /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
      @auth
      <li>
        <span  class="  inline-block border-2 border-black text-white py-2 px-5 font-bold uppercase" >
          Welcome {{auth()->user()->name}}
        </span>
      </li>
      <li>
        <a href="/listings/manage" class=" bg-white rounded-xl inline-block border-2 border-black text-black py-2 px-5" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>
      </li>
      <li>
        <form  class=" bg-white rounded-xl inline-block border-2 border-black text-black py-2 px-5" class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit">
            <i  class="fa-solid fa-door-closed"></i> Logout
          </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register"  class=" bg-white rounded-xl inline-block border-2 border-black text-black py-2 px-5" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
      </li>
      <li>
        <a href="/login"  class=" bg-white rounded-xl inline-block border-2 border-black text-black py-2 px-5" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
      </li>
      @endauth
    </ul>
  </nav>

  <main>
    {{$slot}}
  </main>
  <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    <a href="/listings/create" class="absolute top-1/3 right-10 bg-white rounded-xl inline-block border-2 border-black text-black py-2 px-5">Post Job</a>
  </footer>

  <x-flash-message />
</body>

</html>
