<style>
    .gradient-background {
        background: linear-gradient(270deg, #ff007a32, #ff00ff32, #007aff32);
        background-size: 200% 200%;
        animation: gradientFlow 15s ease infinite;
    }

    @keyframes gradientFlow {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
</style>
<div class="grid grid-cols-1 pt-1 lg:grid-cols-3 ">
    <div class=" rounded-none md:rounded-lg lg:col-span-2">
        <div class="slider-box m-0  mt-0   h-[500px] rounded-none md:rounded-md overflow-hidden">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list slider_image_container" id="slider_image_container">
                        {{-- @foreach ($slides as $slider)
                            <li class="splide__slide bg-gradient-to-r from-gray-100 to-gray-500/[0.3] h-[500px] ">
                                <img class="object-fill h-[500px] w-full" src="/uploads/slider/{{ $slider[0] }}" />
                            </li>
                        @endforeach --}}
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <div class="hidden lg:block notice-container rounded-lg ">
        <div class=" h-[500px] ">
            <div class="notice-box m-1 mt-0  bg-red-900 rounded-md overflow-hidden">
                <div class="bg-red-600 flex flex-row  h-10 rounded-t-md">
                    <div class="bg-white m-1  pt-0 pl-5 pr-5 text-xl rounded-t-md text-black">Notice</div>
                </div>
                <div class="bg-yellow-100 h-[420px] overflow-y-scroll">

                    <ul class="notice-list-group">
                        {{-- append code fetch api --}}

                    </ul>
                </div>
                <div class="bg-red-600 flex flex-row  h-10 rounded-b-md"></div>
            </div>
        </div>
    </div>
</div>
<div class="w-full flex justify-center lg:hidden">
    <div class="my-2 w-1/2 ">
        <button type="submit" id="see-notice-btn"
            class="uppercase text-sm font-bold tracking-wide bg-[#145589] text-gray-100 p-3 rounded-lg w-full 
          focus:outline-none focus:shadow-outline">
            see notice
        </button>
    </div>
</div>

<script>
    $('#see-notice-btn').click(function() {
        // $('.notice-container').fadeIn();
        $('.notice-container').animate({
            height: 'toggle'
        })
    })
    async function fetchNotice() {
        await fetch('http://127.0.0.1:8000/api/notices/')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                var isChecked = '';
                data.data.forEach(element => {
                    if (element.status == 'TRUE') {
                        isChecked = '';
                    } else {
                        isChecked = 'hidden';
                    }


                    $('.notice-list-group').append(`
                            <a class="h-full w-full ${isChecked} hover:cursor-pointer" href="/uploads/notices/${element.id}">
                                <li
                                    class="position-relative p-2 gradient-background  transition delay-150 duration-150 ease-in-out   hover:bg-[#145589] hover:text-white border border-cyan-200 mb-1">
                            
                                    <h2 class="font-rajdhani-bold text-lg w-full">${element.title}</h2>
                                    <small class="font-rajdhani-bold w-full ">${element.date}</small>
                                    <p class="font-playwrite-de-grund text-sm w-full">${element.description}</p>
                            
                                </li>
                            </a>`);
                })
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error (e.g., show an error message)
            });
    }
    async function fetchSlide() {
        await fetch('http://127.0.0.1:8000/api/slides/')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // $('#slider_image_container').html('');
                var isChecked = '';
                data.data.forEach(element => {
                    if (element.status == 'TRUE') {
                        isChecked = '';
                    } else {
                        isChecked = 'hidden';
                    }

                    $('#slider_image_container').append(`<li class="splide__slide ${isChecked} bg-gradient-to-r from-gray-100 to-gray-500/[0.3] h-[500px] ">
                                <img class="object-fill h-[500px] w-full" src="${element.href}" />
                            </li>`);
                })
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error (e.g., show an error message)
            });

        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 1,
            autoplay: true,
        });
        splide.mount();
        $(window).on('scroll', function() {
            $('.animated-div').each(function() {
                if ($(this).is(':visible') && $(this).offset().top < $(window).scrollTop() + $(
                        window).height()) {
                    $(this).addClass('visible');
                }
            });
        });
    }
    fetchNotice();
    fetchSlide();
</script>
@push('script')
@endpush
