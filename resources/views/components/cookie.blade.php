<div style="z-index: 2001" class="mx-auto px-20 fixed bottom-4 end-4 cookie-box ">
    <div style='background-color:rgb(255, 255, 255)'>
        <div class="w-72 bg-white rounded-lg shadow-md p-6" style="cursor: auto;">
            <div class="w-16 mx-auto relative -mt-10 mb-3">
                <img class="-mt-1" src="https://www.svgrepo.com/show/30963/cookie.svg" alt="Cookie Icon SVG">
            </div>
            <span class="w-full sm:w-48  block leading-normal text-gray-800 text-md mb-3">We use cookies to provide a
                better user experience.</span>
            <div class="flex items-center justify-between">
                <a class="text-xs text-gray-400 mr-1 hover:text-gray-800" href="#">Privacy Policy</a>
                <div class="w-1/2">
                    <button type="button"
                        class="py-2 px-4 accept_cookie bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">Accept</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        if ($.cookie('acceptCookie')) {
            $('.cookie-box').hide()
        } else {
            $('.cookie-box').show()
        }

        $('.accept_cookie').click(function() {
            $.cookie('acceptCookie', true, {
                expires: 7,
                path: '/'
            });
            $('.cookie-box').hide()
        })


        // $('.accept_cookie').toggleClass('hidden')
    })
</script>
