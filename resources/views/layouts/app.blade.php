<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
            <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

            <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

            
            <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
            <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
            <script src="{{asset('datatable/datatables.js')}}"></script>
    
            <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
      
        <link rel="stylesheet" href="tailwind.css">
      
        <style>
          .hei1{
            height: 60vh;
          }
          body{
            background-color: #525151;
          }
      
          .weig1{
            width: 58.5vw;
          }

          .bg1{
            background-color: #232323;
          }
          .bg2{
            background-color: #545353;
          }
          .minwidth{
            min-width:240px;
          }
          .gap1{
            gap: 40rem;
          }
          .minheight{
            min-height: 350px;
          }
          .borders{
            border-bottom: 1px solid #656565;
          }
        </style>




    </head>
 <body>


    <header>
        <div class="bg-gray-600 h-14 border-b-2 border-gray-700 shadow-lg">
         <div class="flex justify-around text-center pt-2 gap1">
          <h1 class="text-black text-3xl pl-20 font-black">NEXOR.</h1>

          <div class="inline-flex text-center gap-4 ml-36">
            <a href="#" class="text-lg font-medium text-center">Message</a>
            <a href="#" class="text-lg font-medium text-center">Notification</a>

            <div class="-mt-1 dropdown relative inline-block">
              <a href="" class="dropdown-toggle block " >
                <img src="" alt="" class="w-10 h-10 rounded-full">
                </a>

                <ul class="dropdown-menu absolute top-full -left-52 z-10 list-none bg1 shadow-md minwidth minheight rounded">
                  <div class="m-2">
                  <li class="pt-4 pl-4"><a href="#" class="flex justify-start gap-2"><img src="logo.png" alt="" class="w-8 h-8 rounded-full"> <span class="text-slate-200 text-lg mt-2 font-medium">Arjun Shrestha</span></a></li>
                  <div class="mt-3 ml-3 mr-3 borders"></div>
                

                  <div class="w-full h-12 hover:bg-gray-500 pt-2 pl-4 mt-6 inline-flex text-center gap-2 text-2xl hover:rounded">
                    <a href="" class="inline-flex text-white gap-4"> <span class="bg2 rounded-full h-8 w-8"><i class="ri-settings-5-fill"></i></span>
                      <h4 class="text-base text-white font-medium pt-1">Setting</h4>
                    </a>
                  </div>
                  <div class="w-full h-12 hover:bg-gray-500 pt-2 pl-4 inline-flex text-center gap-2 text-2xl hover:rounded">
                    <a href="" class="inline-flex  text-white gap-4"> <span class="bg2 rounded-full h-8 w-8"><i class="ri-question-fill"></i></span>
                      <h4 class="text-base font-medium pt-1">Help</h4>
                    </a>
                  </div>
                  <div class="w-full h-12 hover:bg-gray-500 pt-2 pl-4 inline-flex text-center gap-2 text-2xl hover:rounded">
                    <a href="" class="inline-flex  text-white gap-4"> <span class="bg2 rounded-full h-8 w-8"><i class="ri-feedback-fill"></i></span>
                      <h4 class="text-base text-white font-medium pt-1">Give Feedback</h4>
                    </a>
                  </div>
                  <div class="w-full h-12 hover:bg-gray-500 pt-2 pl-4 inline-flex text-center text-2xl hover:rounded">
                    <a href="" onclick="logout()" class="inline-flex  text-white gap-4"> <span class="bg2 rounded-full h-8 w-8"><i class="ri-logout-box-line"></i></span>
                      <h4 class="text-base text-white font-medium pt-1">Logout</h4>
                    </a>
                  </div>
                </div>
                </ul>  
            </div>                
            </a> 
          </div>
         </div>
        </div>
    </header>
    






    <div class="w-full relative mx-auto flex justify-items-start gap-3 mt-10">
     <!-- sidebar1 -->
     
     <div class="w-48 h-96 bg1 rounded-xl blur-3xl ml-14">
    </div>

    <div class="absolute inset-0 flex">
     <div class="container1 h-96 w-48 block rounded-xl ml-14 shadow-2xl fixed">

      <div class="pt-10 ml-6 inline-flex text-center gap-2 text-2xl  backdrop-blur-md">
        <a href="" class="inline-flex gap-4 hover:scale-105"> <span><i class="ri-home-3-fill"></i></span>
          <h4 class="text-lg text-white font-medium pt-1 hover:text-blue-400">Home</h4>
        </a>
      </div>
    
      <div class="pt-3 ml-6 inline-flex text-center gap-2 text-2xl">
        <a href="" class="inline-flex gap-4 hover:scale-105"> <span><i class="ri-pages-fill"></i></span>
          <h4 class="text-lg text-white font-medium pt-1 hover:text-blue-400">Pages</h4>
        </a>
      </div>
    
      <div class="pt-3 ml-6 inline-flex text-center gap-2 text-2xl">
        <a href="" class="inline-flex gap-4 hover:scale-105"> <span><i class="ri-dashboard-fill"></i></span>
          <h4 class="text-lg text-white font-medium pt-1 hover:text-blue-400">Dashboard</h4>
        </a>
      </div>
    
      <div class="pt-3 ml-6 inline-flex text-center gap-2 text-2xl">
        <a href="" class="inline-flex gap-4 hover:scale-105"> <span><i class="ri-contacts-book-2-fill"></i></span>
          <h4 class="text-lg text-white font-medium pt-1 hover:text-blue-400">Contact</h4>
        </a>
      </div>
    
      <div class="pt-3 ml-6 inline-flex text-center gap-2 text-2xl">
        <a href="" class="inline-flex gap-4 hover:scale-105"> <span><i class="ri-question-fill"></i></span>
          <h4 class="text-lg text-white font-medium pt-1 hover:text-blue-400">Help</h4>
        </a>
      </div>
    
      <div class="pt-3 ml-6 inline-flex text-center gap-2 text-2xl">
        <a href="" class="inline-flex gap-4 hover:scale-105"> <span><i class="ri-settings-5-fill"></i></span>
          <h4 class="text-lg text-white font-medium pt-1 hover:text-blue-400">Setting</h4>
        </a>
      </div>
    
      {{-- <div class="mt-14 ml-8 block hover:scale-105">
        <a href="" class="text-gray-400 font-medium"><span><i class="ri-logout-box-line"></i></span> Logout</a>
    </div> --}}
  </div>
        
  </div>
        
    
    
    
        

    
          <!-- container -->
    
        <div class="bg-slate-300 weig1 rounded-xl">
          @yield('content')
      </div>
      
    
    
    
    
    
        <!-- sidebar2 -->
        <div class="relative mr-14">
          <div class="w-48 h-96 bg1 rounded-md blur-2xl">
          </div>
          <div class="absolute inset-0 flex p-3 shadow-2xl rounded-md pt-10">
            <div class="bg-transparent text-slate-200 pl-3 font-medium text-base">
              <h2>This is overlapped content</h2>
            </div>
          </div>
        </div>
        
    </div>















        <script>

$(document).ready(function() {
  $('.dropdown-menu').removeClass('show');
  
  $('.dropdown-toggle').click(function(e) {
    e.preventDefault();
    $(this).next('.dropdown-menu').toggle();
  });
});




        </script>
        
    </body>
    </html>
    