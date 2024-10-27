@extends('pages.donation.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')



    <style>
        .-z-1 {
            z-index: -1;
        }

        .origin-0 {
            transform-origin: 0%;
        }

        input:focus~label,
        input:not(:placeholder-shown)~label,
        textarea:focus~label,
        textarea:not(:placeholder-shown)~label,
        select:focus~label,
        select:not([value='']):valid~label {
            /* @apply transform; scale-75; -translate-y-6; */
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-scale-x: 0.75;
            --tw-scale-y: 0.75;
            --tw-translate-y: -1.5rem;
        }

        input:focus~label,
        select:focus~label {
            /* @apply text-black; left-0; */
            --tw-text-opacity: 1;
            color: rgba(0, 0, 0, var(--tw-text-opacity));
            left: 0px;
        }
    </style>

    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2 p-0 sm:p-12 py-5">
        <div class="p-1">
            <h1 class="text-center text-yellow-400 text-7xl mt-10 py-7 font-bold font-raleway uppercase">
                Donations even if it is a <span
                    class="bg-[url(/cliparts/clipyellow.png)] bg-no-repeat bg-bottom bg-contain pb-4 text-[#145589] ">small</span>
                can
                bring <span
                    class="bg-[url(/cliparts/clipyellow.png)] bg-no-repeat bg-bottom bg-contain pb-4 text-red-700">bigger</span>
            </h1>
        </div>
        <div>
            <div
                class="mx-auto max-w-md px-6 py-3 md:absolute md:right-4 bg-white border-0 rounded-md shadow-lg sm:rounded-3xl">
                <h1 class="text-2xl font-bold mb-2  text-center font-raleway text-[#145589]">Secured
                    Donation<br />

                </h1>
                <div class="flex justify-center">
                    <i class="text-sm">Powered by</i> <img
                        src="http://127.0.0.1:8000/api/ab9eb226c43410d699a105c9124740c9.png"
                        class="h-20 -mt-4 mix-blend-multiply" />
                </div>
                <form id="form" novalidate>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="name" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter
                            name</label>
                        <span class="text-sm text-red-600 hidden" id="name-error">Name is required</span>
                    </div>

                    <div class="relative z-0 w-full mb-5">
                        <input type="email" name="email" placeholder=" "
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter email
                            address</label>
                        <span class="text-sm text-red-600 hidden" id="email-error">Email address is required</span>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" max="11" name="phone" placeholder=" "
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="phone" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter mobile
                            number</label>
                        <span class="text-sm text-red-600 hidden" id="phone-error">Mobile number is required</span>
                    </div>


                    <fieldset class="relative z-0 w-full p-px mb-5">
                        <legend class="absolute text-gray-500 transform scale-75 -top-3 origin-0">Choose an option</legend>
                        <div class="block pt-3 pb-2 space-x-4">
                            <label>
                                <input type="radio" name="option" value="1"
                                    class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black" />
                                One Time
                            </label>
                            <label>
                                <input type="radio" name="option" value="2"
                                    class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black" />
                                Monthly
                            </label>
                        </div>
                        <span class="text-sm text-red-600 hidden" id="option-error">Option has to be selected</span>
                    </fieldset>

                    <div class="relative z-0 w-full mb-5">
                        <select name="select" value=""
                            class="pt-3 pb-2 pl-2 min-h-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200">
                            <option value="" selected disabled hidden></option>
                            <option value="1">Jak Rakshak (Water Conservation Program)</option>
                            <option value="2">Jaago (Health & Wellbeing Awareness/Campaign)</option>
                            <option value="3">Paryavaran Mitra (Plantation & Go Green Campaign/Program)</option>
                            <option value="4">Smart Yuva (Youth Development)</option>
                        </select>
                        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Select an
                            option</label>
                        <span class="text-sm text-red-600 hidden" id="select-error">Please select Campaign/Program</span>
                    </div>


                    <div class="relative z-0 w-full mb-5">
                        <input type="number" name="amount" placeholder=" "
                            class="pt-3 pb-2 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <div class="absolute top-0 left-0 mt-3 ml-1 text-gray-400">₹ </div>
                        <label for="amount"
                            class="absolute duration-300 top-3 left-5 -z-1 origin-0 text-gray-500">Amount</label>
                        <span class="text-sm text-red-600 hidden" id="error">Amount is required</span>
                    </div>

                    <div class="w-full  flex justify-center">
                        <button id="donation_btn" type="button"
                            class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none">
                            DONATE

                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script>
        'use strict'
        var option = ['', 'One Time', 'Monthly'];
        var select = ['', 'Jak Rakshak (Water Conservation Program)', 'Jaago (Health & Wellbeing Awareness/Campaign)',
            'Paryavaran Mitra (Plantation & Go Green Campaign/Program)', 'Smart Yuva (Youth Development)'
        ];



        $('#donation_btn').click(toggleError);

        function toggleError() {
            var formdata = {
                name: $('input[name="name"]').val(),
                email: $('input[name="email"]').val(),
                phone: $('input[name="phone"]').val(),
                option: option[$('input[type="radio"]:checked').val()],
                donation_for: select[$('select[name="select"] option:selected').val()],
                amount: $('input[name="amount"]').val()
            }
            $('input[name="option"]').change(function() {
                $('#option-error').addClass('hidden');
            })

            if (formdata.name == '') {
                $('#name-error').removeClass('hidden');
                return 0;
            } else {
                $('#name-error').addClass('hidden');
            }
            if (formdata.email == '') {
                $('#email-error').removeClass('hidden');
                return 0;
            } else {
                $('#email-error').addClass('hidden');
            }
            if (formdata.phone == '') {
                $('#phone-error').removeClass('hidden');
                return 0;
            } else {
                $('#phone-error').addClass('hidden');
            }
            if (formdata.option == '' || formdata.option == undefined) {
                $('#option-error').removeClass('hidden');
                return 0;
            } else {
                $('#option-error').addClass('hidden');
            }
            if (formdata.select == '') {
                $('#select-error').removeClass('hidden');
                return 0;
            } else {
                $('#select-error').addClass('hidden');
            }

            console.log(formdata);
            $('#donation_btn').parent().html(`   <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill" />
                        </svg>`);

            setTimeout(() => {
                alertMessage('info', 'Payment Initiated!')
            }, 2000);

            // code to fetch api razorpay

        }
    </script>

@endsection
