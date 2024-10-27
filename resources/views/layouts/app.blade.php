<!-- Stored in resources/views/layouts/app.blade.php -->

<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />

    <link rel="icon" type="image/svg+xml" href="/cliparts/logo_ypa.png" />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"
        integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
        integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"
        integrity="sha256-A+2opyqhvbBV8tbd9mIM8w9zvvMYHOawY03BQRtq7Kw=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" charset="UTF-8"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
    <!-- Font Section Here -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Rajdhani:wght@300;400;500;600;700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Youth Power Association - @yield('title')</title>
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
</head>


<body @yield('bg-body')>
    <!-- alert box here -->
    <div id="alert-container" style="z-index: 2001"
        class="flex  gap-8  w-full h-1  bg-transparent fixed top-14 justify-center ">

        <div id="alertbox" class="p-8 space-y-4  ">

        </div>
    </div>
    @yield('content')

    {{-- @include("components.cookie") --}}

    @include('components.requestform')
    <script>
        function alertMessage(status, message) {

            var alert_message = '';
            if (message === '') {
                alert_message = 'Are you sure you want to delete this item?';
            } else {
                alert_message = message;
            }


            switch (status) {
                case 'info':
                    var alertMsg = `<div id="alert-info" class="flex w-96 shadow-lg rounded-lg  alert-pop">
                <div class="bg-blue-500 py-4 px-6 rounded-l-lg flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white" viewBox="0 0 16 16" width="20"
                    height="20">
                    <path fill-rule="evenodd"
                      d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z">
                    </path>
                  </svg>
                </div>
                <div
                  class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                  <div>${message}</div>
                  <button for="close-alert">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="fill-current text-gray-700" viewBox="0 0 16 16" width="20"
                      height="20">
                      <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                      </path>
                    </svg>
                  </button>
                </div>
              </div>`;
                    break;
                case 'success':
                    var alertMsg = ` <div id="alert-success" class="flex w-96 shadow-lg rounded-lg  alert-pop">
                <div class="bg-green-600 py-4 px-6 rounded-l-lg flex items-center"> <svg xmlns="http://www.w3.org/2000/svg"
                    class="text-white fill-current" viewBox="0 0 16 16" width="20" height="20">
                    <path fill-rule="evenodd"
                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z">
                    </path>
                  </svg> </div>
                <div
                  class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                  <div>${message}</div> <button for="close-alert"> <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700"
                      viewBox="0 0 16 16" width="20" height="20">
                      <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                      </path>
                    </svg> </button>
                </div>
              </div>`;
                    break;
                case 'warning':
                    var alertMsg = `
              <div id="alert-warning" class="flex w-96 shadow-lg rounded-lg  alert-pop">
                <div class="bg-yellow-600 py-4 px-6 rounded-l-lg flex items-center"> <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16" class="fill-current text-white" width="20" height="20">
                    <path fill-rule="evenodd"
                      d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z">
                    </path>
                  </svg> </div>
                <div
                  class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                  <div>${message}</div> <button for="close-alert"> <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700"
                      viewBox="0 0 16 16" width="20" height="20">
                      <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                      </path>
                    </svg> </button>
                </div>
              </div>`;
                    break;
                case 'danger':
                    var alertMsg = `
              <div id="alert-danger" class="flex w-96 shadow-lg rounded-lg alert-pop">
                <div class="bg-red-600 py-4 px-6 rounded-l-lg flex items-center"> <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16" class="fill-current text-white" width="20" height="20">
                    <path fill-rule="evenodd"
                      d="M4.47.22A.75.75 0 015 0h6a.75.75 0 01.53.22l4.25 4.25c.141.14.22.331.22.53v6a.75.75 0 01-.22.53l-4.25 4.25A.75.75 0 0111 16H5a.75.75 0 01-.53-.22L.22 11.53A.75.75 0 010 11V5a.75.75 0 01.22-.53L4.47.22zm.84 1.28L1.5 5.31v5.38l3.81 3.81h5.38l3.81-3.81V5.31L10.69 1.5H5.31zM8 4a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 018 4zm0 8a1 1 0 100-2 1 1 0 000 2z">
                    </path>
                  </svg> </div>
                <div
                  class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                  <div>${message}</div> <button for="close-alert"> <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700"
                      viewBox="0 0 16 16" width="20" height="20">
                      <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                      </path>
                    </svg> </button>
                </div>
              </div>`;
                    break;


                case 'delete':
                    var alertMsg = ` 
              <div class="relative p-4 text-center bg-white rounded-lg border shadow dark:bg-gray-800 sm:p-5 alert-pop">
                  <button type="button" for="close-alert" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
                  <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  <p class="mb-4 text-gray-500 dark:text-gray-300">${alert_message}</p>
                  <div class="flex justify-center items-center space-x-4">
                      <button id="cancel-delete-confirm-button" data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                          No, cancel
                      </button>
                      <button  id="delete-confirm-button" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                          Yes, I'm sure
                      </button>
                  </div>
              </div>`;
                    break;
                default:
                    var alertMsg = `<div class="flex w-96 shadow-lg rounded-lg alert-pop">
                <div class="bg-red-600 py-4 px-6 rounded-l-lg flex items-center"> <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16" class="fill-current text-white" width="20" height="20">
                    <path fill-rule="evenodd"
                      d="M4.47.22A.75.75 0 015 0h6a.75.75 0 01.53.22l4.25 4.25c.141.14.22.331.22.53v6a.75.75 0 01-.22.53l-4.25 4.25A.75.75 0 0111 16H5a.75.75 0 01-.53-.22L.22 11.53A.75.75 0 010 11V5a.75.75 0 01.22-.53L4.47.22zm.84 1.28L1.5 5.31v5.38l3.81 3.81h5.38l3.81-3.81V5.31L10.69 1.5H5.31zM8 4a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 018 4zm0 8a1 1 0 100-2 1 1 0 000 2z">
                    </path>
                  </svg> </div>
                <div
                  class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                  <div>Something went wrong!</div> <button for="close-alert"> <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700"
                      viewBox="0 0 16 16" width="20" height="20">
                      <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                      </path>
                    </svg> </button>
                </div>
              </div>`;
                    break;
            }

            $('#alertbox').html(alertMsg);
            $('.alert-pop').fadeIn();

            if (status === 'delete') {

            } else {
                setTimeout(() => {

                    $('.alert-pop').fadeOut();
                }, 2000)

            }

            $("button[for='close-alert']").click(function() {
                $('.alert-pop').fadeOut();
            });

        }

        @stack('static-script')
        $(document).ready(function() {
            @stack('script')

            $('.register-form-waitlist').click(function() {
                $('.request-form-widget').animate({
                    width: "toggle"
                })
            })
        })
    </script>

</body>

</html>
