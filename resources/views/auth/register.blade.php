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
@if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <a href="{{ route('home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @auth

            <div class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" disabled> {{auth()->user()->name;}}</div>
            <a href="{{route('logout')}}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">logout </a>

            @else
            <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          {{-- <img class="w-8 h-8 mr-2" src="https://e7.pngegg.com/pngimages/845/884/png-clipart-email-address-newsletter-text-messaging-company-email-miscellaneous-angle-thumbnail.png" alt="logo">
          newsletter     --}}
          <svg width="317.505" class ='w-24    sm:w-44 '  height="85.303" viewBox="0 0 317.505 85.303" xmlns="http://www.w3.org/2000/svg">
            <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="#8a0000"
                stroke-width="0.25mm" fill="#2b0000"  style="stroke:#8a0000;stroke-width:0.25mm;fill:#2b0000">
                <path
                    d="M 73.294 66.284 A 11.452 11.452 0 0 0 72.405 66.601 A 60.22 60.22 0 0 1 70.469 67.382 Q 67.485 68.528 64.015 69.518 A 109.573 109.573 0 0 1 56.555 71.351 A 97.151 97.151 0 0 1 50.308 72.461 A 79.641 79.641 0 0 1 39.005 73.301 Q 30.318 73.301 24.863 71.803 A 20.047 20.047 0 0 1 20.605 70.151 A 14.345 14.345 0 0 1 19.14 69.241 Q 14.805 66.161 14.805 60.801 A 10.712 10.712 0 0 1 15.399 57.267 A 12.452 12.452 0 0 1 17.255 53.851 A 12.01 12.01 0 0 1 18.932 52.059 Q 20.173 50.97 21.832 50.041 A 25.789 25.789 0 0 1 25.155 48.501 Q 28.583 47.18 33.137 46.611 A 57.856 57.856 0 0 1 38.905 46.201 Q 43.604 46.122 44.623 42.057 A 10.548 10.548 0 0 0 44.905 39.501 Q 44.905 38.237 44.579 37.408 A 2.615 2.615 0 0 0 44.005 36.501 Q 43.344 35.84 41.982 35.61 A 8.949 8.949 0 0 0 40.905 35.501 A 48.27 48.27 0 0 1 39.383 35.425 Q 34.701 35.115 31.575 33.923 A 12.083 12.083 0 0 1 28.355 32.151 A 12.281 12.281 0 0 1 27.559 31.464 A 9.326 9.326 0 0 1 24.505 24.401 Q 24.505 18.301 29.605 14.701 Q 32.952 12.338 37.763 11.526 A 32.734 32.734 0 0 1 43.205 11.101 A 32.409 32.409 0 0 1 44.406 11.122 Q 49.77 11.321 52.205 13.351 Q 54.905 15.601 54.905 19.201 Q 54.905 20.401 54.405 23.701 A 17.917 17.917 0 0 0 54.046 25.51 A 13.382 13.382 0 0 0 53.905 27.401 A 6.309 6.309 0 0 0 54.046 28.775 A 4.02 4.02 0 0 0 55.505 31.151 Q 56.568 31.981 58.159 32.26 A 10.13 10.13 0 0 0 59.905 32.401 A 8.644 8.644 0 0 0 60.068 32.399 Q 63.949 32.326 66.055 28.751 A 13.156 13.156 0 0 0 67.049 26.645 Q 68.205 23.528 68.205 19.201 A 22.34 22.34 0 0 0 68.167 17.892 A 17.258 17.258 0 0 0 62.005 5.351 A 18.95 18.95 0 0 0 56.508 2.1 Q 51.173 0.001 43.405 0.001 Q 34.205 0.001 26.505 3.001 A 35.009 35.009 0 0 0 22.211 5.007 A 27.266 27.266 0 0 0 14.255 11.551 Q 9.705 17.101 9.705 24.301 Q 9.705 29.601 12.855 33.901 A 15.056 15.056 0 0 0 17.269 37.916 A 19.201 19.201 0 0 0 21.905 39.901 Q 11.105 42.601 5.555 48.651 Q 0.005 54.701 0.005 63.301 Q 0.005 69.601 4.155 74.601 A 19.378 19.378 0 0 0 6.569 77.023 Q 8.674 78.802 11.475 80.237 A 38.581 38.581 0 0 0 16.805 82.451 A 45.188 45.188 0 0 0 21.015 83.63 Q 24.71 84.482 29.032 84.9 A 92.482 92.482 0 0 0 37.905 85.301 Q 47.005 85.301 56.405 83.651 A 91.865 91.865 0 0 0 60.953 82.739 Q 64.111 82.018 66.788 81.139 A 42.187 42.187 0 0 0 71.705 79.201 A 20.271 20.271 0 0 0 73.426 78.266 Q 75.592 76.941 76.655 75.401 A 7.903 7.903 0 0 0 77.828 72.753 A 10.35 10.35 0 0 0 78.105 70.301 Q 78.105 69.378 77.917 68.621 A 4.494 4.494 0 0 0 77.305 67.201 A 2.549 2.549 0 0 0 75.911 66.142 A 3.371 3.371 0 0 0 74.905 66.001 Q 74.218 66.001 73.294 66.284 Z M 282.405 1.801 Q 285.505 2.401 287.055 3.901 A 5.288 5.288 0 0 1 288.128 5.336 A 4.56 4.56 0 0 1 288.605 7.401 A 9.273 9.273 0 0 1 288.444 9.191 Q 288.246 10.197 287.803 10.966 A 4.402 4.402 0 0 1 286.755 12.201 A 4.933 4.933 0 0 1 285.189 13.033 Q 283.499 13.595 280.905 13.401 Q 274.014 12.865 269.439 12.593 A 261.493 261.493 0 0 0 266.855 12.451 Q 262.338 12.227 255.3 12.123 A 671.4 671.4 0 0 0 253.605 12.101 Q 249.905 30.501 246.805 49.101 Q 245.705 55.901 244.505 64.851 Q 243.432 72.857 242.998 78.102 A 122.559 122.559 0 0 0 242.905 79.301 A 6.511 6.511 0 0 1 242.428 81.397 A 5.419 5.419 0 0 1 240.505 83.751 A 8.433 8.433 0 0 1 236.8 85.19 A 11.101 11.101 0 0 1 235.205 85.301 Q 231.905 85.301 230.105 83.701 A 5.269 5.269 0 0 1 228.316 79.901 A 7.187 7.187 0 0 1 228.305 79.501 Q 228.305 77.691 228.731 74.092 A 156.38 156.38 0 0 1 229.055 71.551 Q 229.805 66.001 230.805 59.901 A 316.042 316.042 0 0 0 231.56 55.551 Q 231.845 53.832 232.081 52.269 A 171.143 171.143 0 0 0 232.505 49.301 Q 233.605 41.701 235.005 34.201 Q 236.405 26.701 237.805 20.001 Q 238.105 18.501 238.505 16.551 Q 238.905 14.601 239.405 12.201 A 138.602 138.602 0 0 0 233.69 12.486 Q 228.471 12.863 224.839 13.617 A 36.936 36.936 0 0 0 224.005 13.801 A 30.163 30.163 0 0 0 221.112 14.615 Q 218.197 15.607 216.54 17.006 A 7.794 7.794 0 0 0 216.055 17.451 A 7.93 7.93 0 0 0 213.757 22.432 A 10.773 10.773 0 0 0 213.705 23.501 A 11.586 11.586 0 0 0 215.236 29.221 A 14.176 14.176 0 0 0 215.705 30.001 Q 216.105 30.701 216.105 31.501 A 3.407 3.407 0 0 1 215.509 33.39 Q 215.162 33.921 214.614 34.429 A 8.6 8.6 0 0 1 213.855 35.051 A 9.129 9.129 0 0 1 211.858 36.179 A 7.073 7.073 0 0 1 209.205 36.701 A 4.734 4.734 0 0 1 207.889 36.526 A 3.7 3.7 0 0 1 206.405 35.701 Q 204.593 34.16 203.355 31.429 A 18.514 18.514 0 0 1 203.105 30.851 A 16.991 16.991 0 0 1 201.988 26.581 A 21.937 21.937 0 0 1 201.805 23.701 A 21.081 21.081 0 0 1 202.686 17.459 A 16.64 16.64 0 0 1 207.355 10.051 Q 212.905 4.901 224.255 2.501 Q 235.605 0.101 253.405 0.101 Q 262.794 0.101 268.941 0.392 A 148.328 148.328 0 0 1 270.955 0.501 A 121.637 121.637 0 0 1 276.371 0.946 Q 278.829 1.207 280.994 1.557 A 67.021 67.021 0 0 1 282.405 1.801 Z M 158.031 84.717 A 5.504 5.504 0 0 0 160.605 85.301 A 10.201 10.201 0 0 0 161.592 85.255 Q 163.947 85.026 165.155 83.651 A 5.867 5.867 0 0 0 165.806 82.727 Q 166.859 80.916 167.705 77.301 Q 169.205 71.201 171.655 65.701 Q 173.186 62.263 174.679 59.666 A 37.022 37.022 0 0 1 176.455 56.851 A 26.699 26.699 0 0 1 177.049 56.035 Q 178.974 53.501 180.105 53.501 A 1.452 1.452 0 0 1 180.165 53.502 Q 180.996 53.536 181.163 54.537 A 3.445 3.445 0 0 1 181.205 55.101 A 10.115 10.115 0 0 1 181.201 55.379 Q 181.15 57.237 180.443 61.062 A 135.129 135.129 0 0 1 179.905 63.801 A 187.798 187.798 0 0 0 179.707 64.832 Q 178.819 69.54 178.587 72.186 A 18.845 18.845 0 0 0 178.505 73.801 A 21.172 21.172 0 0 0 178.593 75.772 Q 178.756 77.507 179.217 78.937 A 9.508 9.508 0 0 0 181.105 82.351 Q 182.872 84.356 185.794 84.998 A 14.03 14.03 0 0 0 188.805 85.301 Q 195.105 85.301 200.055 81.901 Q 205.005 78.501 209.305 73.201 A 6.749 6.749 0 0 0 210.208 71.851 Q 211.205 69.898 211.205 67.001 Q 211.205 65.77 210.948 64.849 A 4.376 4.376 0 0 0 210.455 63.701 A 3.165 3.165 0 0 0 210.155 63.293 A 2.225 2.225 0 0 0 208.405 62.501 A 3.137 3.137 0 0 0 206.545 63.118 A 4.764 4.764 0 0 0 205.705 63.901 Q 201.105 69.401 198.355 71.851 A 18.563 18.563 0 0 1 197.79 72.335 Q 196.315 73.546 195.069 74.011 A 4.196 4.196 0 0 1 193.605 74.301 A 4.066 4.066 0 0 1 193.476 74.299 Q 191.27 74.229 190.82 71.736 A 8.127 8.127 0 0 1 190.705 70.301 A 12.459 12.459 0 0 1 190.742 69.4 Q 190.913 67.074 191.865 62.325 A 209.257 209.257 0 0 1 192.605 58.801 Q 194.272 51.071 194.676 46.959 A 23.598 23.598 0 0 0 194.805 44.701 A 9.576 9.576 0 0 0 194.528 42.294 Q 193.762 39.349 190.877 38.523 A 9.357 9.357 0 0 0 188.305 38.201 A 10.337 10.337 0 0 0 186.57 38.352 Q 183.993 38.79 181.055 40.501 A 18.98 18.98 0 0 0 178.734 42.11 Q 175.907 44.379 173.005 48.201 A 39.284 39.284 0 0 0 171.357 50.55 Q 168.228 55.364 165.605 62.201 A 103.09 103.09 0 0 1 165.875 59.587 Q 166.193 56.863 166.605 54.801 A 111.739 111.739 0 0 1 167.019 52.828 Q 167.518 50.551 168.205 47.801 A 131.293 131.293 0 0 0 168.71 45.862 Q 169.438 42.966 169.633 41.492 A 7.037 7.037 0 0 0 169.705 40.601 Q 169.705 39.939 169.526 39.478 A 1.541 1.541 0 0 0 168.905 38.701 A 2.213 2.213 0 0 0 168.489 38.503 Q 167.659 38.201 166.105 38.201 A 17.019 17.019 0 0 0 164.294 38.292 Q 163.202 38.409 162.293 38.677 A 7.202 7.202 0 0 0 160.355 39.551 A 6.654 6.654 0 0 0 158.242 41.844 A 9.683 9.683 0 0 0 157.405 43.801 A 76.942 76.942 0 0 0 156.85 45.637 A 81.944 81.944 0 0 0 153.705 68.501 A 85.718 85.718 0 0 0 153.757 71.553 Q 153.908 75.802 154.506 78.671 A 16.809 16.809 0 0 0 155.255 81.301 A 8.457 8.457 0 0 0 155.996 82.789 Q 156.824 84.09 158.031 84.717 Z M 69.505 47.501 L 69.505 44.001 Q 69.605 40.701 71.305 39.401 A 5.431 5.431 0 0 1 72.893 38.583 Q 73.652 38.329 74.588 38.209 A 14.283 14.283 0 0 1 76.405 38.101 A 9.341 9.341 0 0 1 77.813 38.199 Q 79.371 38.438 80.255 39.251 A 3.358 3.358 0 0 1 81.087 40.497 Q 81.308 41.049 81.413 41.746 A 9.201 9.201 0 0 1 81.505 43.101 A 246.872 246.872 0 0 0 81.642 50.962 Q 81.938 60.202 82.875 72.6 A 774.738 774.738 0 0 0 82.905 73.001 Q 87.85 65.665 90.758 60.775 A 107.385 107.385 0 0 0 91.905 58.801 A 12.999 12.999 0 0 1 90.692 55.19 A 17.937 17.937 0 0 1 90.405 51.901 Q 90.405 48.501 91.905 45.301 A 14.381 14.381 0 0 1 94.452 41.505 A 13.143 13.143 0 0 1 96.005 40.101 Q 98.605 38.101 101.905 38.101 A 6.656 6.656 0 0 1 104.213 38.486 A 5.819 5.819 0 0 1 106.605 40.151 Q 108.405 42.201 108.405 46.101 A 20.519 20.519 0 0 1 107.978 50.129 Q 107.594 52.044 106.864 54.147 A 41.389 41.389 0 0 1 106.005 56.401 A 40.387 40.387 0 0 0 108.624 56.168 Q 111.331 55.847 114.91 55.142 A 136.123 136.123 0 0 0 116.105 54.901 L 118.805 54.401 Q 119.035 54.324 119.498 54.306 A 7.948 7.948 0 0 1 119.805 54.301 A 3.595 3.595 0 0 1 120.754 54.419 A 2.544 2.544 0 0 1 122.105 55.301 Q 122.811 56.183 122.894 57.611 A 6.722 6.722 0 0 1 122.905 58.001 A 13.047 13.047 0 0 1 122.788 59.806 Q 122.652 60.777 122.358 61.571 A 5.83 5.83 0 0 1 121.705 62.851 A 6.207 6.207 0 0 1 119.551 64.773 A 8.563 8.563 0 0 1 118.105 65.401 A 30.965 30.965 0 0 1 109.596 66.877 A 35.299 35.299 0 0 1 108.305 66.901 Q 103.905 66.901 100.005 65.701 A 192.82 192.82 0 0 1 95.526 72.612 A 223.807 223.807 0 0 1 93.605 75.401 Q 89.605 81.101 86.705 83.201 Q 83.805 85.301 80.105 85.301 Q 76.043 85.301 73.698 82.159 A 9.49 9.49 0 0 1 73.655 82.101 A 11.492 11.492 0 0 1 72.26 79.498 Q 71.218 76.853 70.793 72.905 A 44.155 44.155 0 0 1 70.705 72.001 A 379.934 379.934 0 0 1 69.974 61.993 Q 69.681 57.037 69.571 52.615 A 206.121 206.121 0 0 1 69.505 47.501 Z M 160.555 63.293 A 2.225 2.225 0 0 0 158.805 62.501 A 3.137 3.137 0 0 0 156.945 63.118 A 4.764 4.764 0 0 0 156.105 63.901 Q 151.905 69.001 146.155 72.151 A 34.393 34.393 0 0 1 143.454 73.487 Q 139.32 75.301 135.905 75.301 A 19.888 19.888 0 0 1 134.928 75.277 Q 133.057 75.185 131.539 74.732 A 8.254 8.254 0 0 1 126.405 70.701 Q 134.16 68.795 138.957 66.003 A 20.43 20.43 0 0 0 143.155 62.851 Q 148.105 57.901 148.105 51.001 A 16.681 16.681 0 0 0 147.797 47.713 A 11.46 11.46 0 0 0 144.605 41.651 Q 141.105 38.201 135.305 38.201 Q 128.805 38.201 123.655 41.701 Q 118.505 45.201 115.605 51.151 Q 112.705 57.101 112.705 64.001 A 27.897 27.897 0 0 0 113.286 69.845 A 18.867 18.867 0 0 0 118.505 79.601 Q 124.305 85.301 134.805 85.301 Q 142.505 85.301 149.255 81.501 A 53.631 53.631 0 0 0 151.019 80.464 Q 156.504 77.094 159.705 73.201 A 6.749 6.749 0 0 0 160.608 71.851 Q 161.605 69.898 161.605 67.001 Q 161.605 65.77 161.348 64.849 A 4.376 4.376 0 0 0 160.855 63.701 A 3.165 3.165 0 0 0 160.555 63.293 Z M 316.464 54.886 A 2.055 2.055 0 0 0 314.805 54.101 A 4.008 4.008 0 0 0 314.538 54.11 Q 314.033 54.144 313.405 54.301 A 89.607 89.607 0 0 1 310.398 55.034 Q 305.781 56.072 302.205 56.301 A 27.657 27.657 0 0 0 301.858 53.94 A 21.86 21.86 0 0 0 296.755 43.351 A 14.981 14.981 0 0 0 290.343 39.018 A 17.814 17.814 0 0 0 284.505 38.101 Q 278.305 38.101 273.205 41.451 A 21.614 21.614 0 0 0 269.556 44.465 A 24.072 24.072 0 0 0 265.205 50.751 A 27.572 27.572 0 0 0 263.112 56.744 A 34.036 34.036 0 0 0 262.305 64.301 A 28.272 28.272 0 0 0 262.308 64.737 A 24.553 24.553 0 0 0 264.505 74.701 Q 266.705 79.501 270.955 82.401 A 16.069 16.069 0 0 0 276.127 84.705 A 20.705 20.705 0 0 0 281.205 85.301 A 18.053 18.053 0 0 0 287.756 84.106 A 19.822 19.822 0 0 0 293.905 80.251 A 22.918 22.918 0 0 0 298.811 73.94 A 28.513 28.513 0 0 0 301.405 66.801 A 52.306 52.306 0 0 0 305.815 66.434 A 42.89 42.89 0 0 0 314.605 64.401 A 3.589 3.589 0 0 0 316.857 62.367 Q 317.496 60.989 317.505 58.766 A 15.748 15.748 0 0 0 317.505 58.701 A 10.564 10.564 0 0 0 317.489 58.117 Q 317.449 57.39 317.306 56.767 A 5.429 5.429 0 0 0 316.805 55.401 A 3.16 3.16 0 0 0 316.464 54.886 Z M 284.605 48.701 L 284.105 48.701 A 7.373 7.373 0 0 0 278.587 51.145 A 11.395 11.395 0 0 0 277.455 52.551 A 13.286 13.286 0 0 0 275.715 56.279 Q 274.805 59.299 274.805 63.401 A 22.559 22.559 0 0 0 275.01 66.548 Q 275.469 69.796 276.955 71.801 A 8.845 8.845 0 0 0 278.372 73.33 A 5.53 5.53 0 0 0 282.005 74.701 A 7.088 7.088 0 0 0 287.031 72.638 A 9.727 9.727 0 0 0 287.555 72.101 A 10.806 10.806 0 0 0 289.341 69.329 Q 289.916 68.072 290.305 66.54 A 22.846 22.846 0 0 0 290.705 64.601 Q 287.605 62.501 285.955 59.101 Q 284.305 55.701 284.305 51.901 Q 284.305 50.301 284.605 48.701 Z M 124.805 62.701 L 124.805 62.901 A 31.232 31.232 0 0 0 128.84 61.669 Q 130.886 60.879 132.509 59.852 A 15.789 15.789 0 0 0 134.105 58.701 A 10.841 10.841 0 0 0 136.041 56.669 A 7.5 7.5 0 0 0 137.505 52.201 A 5.579 5.579 0 0 0 137.358 50.884 A 3.877 3.877 0 0 0 136.455 49.151 A 3.462 3.462 0 0 0 134.357 48.056 A 4.943 4.943 0 0 0 133.605 48.001 A 6.081 6.081 0 0 0 129.429 49.68 Q 128.311 50.688 127.355 52.301 Q 124.805 56.601 124.805 62.701 Z"
                    vector-effect="non-scaling-stroke" />
            </g>
        </svg>
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              Register
              </h1>

<form action="/register" method="post">
    @csrf 
    <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <input type="text" id="name" name="name"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('name')}}" autofocus>
        @if ($errors->has('name'))
            <div class="alert alert-danger">
                <p class="text-red-600">{{ $errors->first('name') }}</p>
            </div>
            @endif
    </div>
    <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" id="email" name="email" value="{{old('email')}}">
            @if ($errors->has('email'))
            <div class="alert alert-danger">
                <p class="text-red-600">{{ $errors->first('email') }}</p>
            </div>
            @endif
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('password')}}">
            @if ($errors->has('password'))
            <div class="alert alert-danger">
                <p class="text-red-600">{{ $errors->first('password') }}</p>
            </div>
            @endif
        </div>
        <div>
            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password Confirmation</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('password_confirmation')}}">
        </div>
   
    <div>
    <div class="m-3 flex w-full justify-center">
            <button class="px-4 py-2 border border-blue-500 border-4  rounded-md bg-blue-200">Register</button>
        </div>
    </div>

</form>
</body>
</html>