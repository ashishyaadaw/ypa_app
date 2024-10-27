<section class="h-screen request-form-widget w-96 hidden fixed end-0 top-0 bg-green-300" style="z-index: 2001">
    <div id="off-request-form-widget" class="absolute  top-2 start-2 cursor-pointer">
        <div class="relative flex h-8 w-8 ">
            <span
                class="animate-ping absolute inline-flex h-full w-full rounded-full hover:bg-red-500 bg-sky-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-8 w-8 p-[5px]  text-md border bg-red-50 border-red-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16"
                    width="20" height="20">
                    <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                    </path>
                </svg></span>

        </div>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 pb-8 pt-16 sm:px-6 lg:px-8 ">

        <div class="flex">
            <h1 class="font-bold uppercase text-5xl">Send us a <br /> message</h1>
        </div>
        <div class="grid grid-cols-1 gap-5  mt-5 register-form-group">
            <input name="request-form-name"
                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="Name*" />
            <input name="request-form-other"
                class="w-full hidden bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="Last Name*" />
            <input name="request-form-email"
                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                type="email" placeholder="Email*" />
            <input name="request-form-mobile"
                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                type="number" placeholder="Phone*" />
        </div>
        <div class="my-4">
            <textarea name="request-form-description" placeholder="Message*"
                class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="my-2 w-1/2 ">
            <button type="submit" id="submit_register_form"
                class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
              focus:outline-none focus:shadow-outline">
                Send Message
            </button>
        </div>
    </div>


</section>
<script>
    async function AddContacts(data) {
        // var data = {
        // "title": "NOTICE HERE 4",
        // "name": "DESCRIPTION",
        // "date": "2024-10-13",
        // "contents": "234",
        // "href": "/slide/id"
        // "status": "/slide/id"
        // };
        await fetch(`http://127.0.0.1:8000/api/contacts`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {

                alertMessage('success', 'Thanks you! Request submitted');



            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error (e.g., show an error message)
            });



    }
    $(document).ready(function() {
        function sanitizeString(str) {
            return str.replace(/[^\w\s]/gi, '');
        }


        $('#off-request-form-widget').click(function() {
            $('.request-form-widget').animate({
                width: "toggle",
            })
        })

        $('#submit_register_form').click(function(e) {
            e.preventDefault();
            // Example usage:
            var name = sanitizeString($('input[name="request-form-name"]').val());
            var email = $('input[name="request-form-email"]').val();
            var mobile = sanitizeString($('input[name="request-form-mobile"]').val());
            var description = sanitizeString($('textarea[name="request-form-description"]').val());
            // var other = sanitizeString($('input[name="request-form-other"]').val());
            var other = 'NULL';

            function validateEmail(email) {
                let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return regex.test(email);
            }


            if (name === '') {
                alertMessage('warning', 'Please enter Name!');
                return 0;
            }
            if (email === '') {
                alertMessage('warning', 'Please enter Email!');
                return 0;
            }
            if (validateEmail(email)) {

            } else {
                alertMessage('warning', 'Please enter valid Email!');
                return 0;
            }
            if (mobile === '') {
                alertMessage('warning', 'Please enter Mobile!');
                return 0;
            }
            if (description === '') {
                alertMessage('warning', 'Please enter Description!');
                return 0;
            }


            var formData = {
                "name": name,
                "description": description,
                "email": email,
                "mobile": mobile,
                "other": other,
                "status": "NOT VERIFIED",
            }


            if (validateEmail(email)) {
                $('.request-form-widget').animate({
                    width: "toggle",
                })
                AddContacts(formData);

                // console.log("Valid email address");
            } else {
                alertMessage('danger', 'Invalid Email!');
                // console.log("Invalid email address");
            }



        })
    })
</script>
