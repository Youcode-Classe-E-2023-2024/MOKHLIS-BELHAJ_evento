<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
</head>
<script src="https://cdn.tailwindcss.com"></script>

<body>
<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-8 h-8 mr-2" src="https://e7.pngegg.com/pngimages/845/884/png-clipart-email-address-newsletter-text-messaging-company-email-miscellaneous-angle-thumbnail.png" alt="logo">
          newsletter    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              Réinitialisation du mot de passe
              </h1>
    
    <form  class="space-y-4 md:space-y-6" action="{{route('password.email')}}" method="post">
        @csrf
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" id="email" name="email" value="{{old('email')}}">
            @if ($errors->has('email'))
            <div class="alert alert-danger">
                <p class="text-red-600">{{ $errors->first('email') }}</p>
            </div>
            @endif
        </div>
       
       

        <div class="flex w-full justify-center">
            <button type="submit" class="px-4 py-2 border border-blue-500 border-4  rounded-md bg-blue-200">send</button>
        </div>

    </form>
          </div>
      </div>
  </div>
</section>

</body>
</html>