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
                 New Password
              </h1>
<form action="{{ route('password.update') }}" class="space-y-6" method="post">
                    @csrf
                    <input name="token" type="text" hidden value="{{ $token }}">
                    <div>
                        <label for="" class="block text-sm font-medium">Email</label>
                        <div class="mt-1">
                            <input name="email" type="email" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            <div class="text-red-500">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium">Enter New Password</label>
                        <div class="mt-1">
                            <input name="password" type="password" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            <div class="text-red-500">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="" class="block text-sm font-medium">Confirm Password</label>
                        <div class="mt-1">
                            <input name="password_confirmation" type="password" class="text-black px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                            <div class="text-red-500">
                                @error('password_confirmation')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                                class="flex w-full justify-center rounded-md border border-transparent bg-green-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">Register
                            Account
                        </button>
                    </div>
                </form>
                </div>
      </div>
  </div>
</section>

</body>
</html>