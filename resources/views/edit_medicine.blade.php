<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>pharmacy managment system</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            @vite('resources/css/app.css')

       
    </head>
    <body >
            <!-- component -->
<!-- follow me on twitter @asad_codes -->

<div class="flex flex-wrap ">
  <section class="relative mx-auto">
      <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
      <div class="px-5 xl:px-12 py-6 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
          <!-- <img class="h-9" src="logo.png" alt="logo"> -->
         Pharmacy Managment System
        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-gray-200" href="catagory_view">Category</a></li>
          <li><a class="hover:text-gray-200" href="madicine_view">Medicine</a></li>
          <li><a class="hover:text-gray-200" href="#">Stock</a></li>
          <li><a class="hover:text-gray-200" href="#">Users</a></li>
        </ul>
      
        
          
    
      </div>
      <!-- Responsive navbar -->
     
      <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </a>
    </nav>

  </section>
</div>




    


        <!-- medicine Form  -->

  <form method="post" action="{{route('update.medicine')}}">
  @csrf       
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto">
    <div>
       <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <p class="font-medium text-lg">Update Medicine</p>
          <hr>
           <br>

          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
              <input type="hidden" name="id" value="{{$medicine->id}}">
                <input type="text" name="medicine_name" id="medicine_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="medicine_name" value="{{$medicine->medicine_name}}" />
                
                <input type="text" name="catagory" id="catagory" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="catagory" value="{{$medicine->catagory}}" />
                
                <input type="text" name="price" id="price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Price" value="{{$medicine->price}}" />
                
                <input type="text" name="quantity" id="quantity" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="quantity" value="{{$medicine->quantity}}" />
                
                <input type="text" name="discount" id="discount" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="discount" value="{{$medicine->discount}}" />
                
                <input type="date" name="expiry_date" id="expiry_date" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="expiry_date" value="{{$medicine->expiry_date}}" />
              </div>

              
              <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                <input type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                </div>
              </div>
          </div>
        </div>
      </div>
      
                

    </div>
  </div>
    </div>
  </form>




    </body>
</html>