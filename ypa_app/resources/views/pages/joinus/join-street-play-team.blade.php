@extends('pages.joinus.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('bg-body')
    style="background-image: url('/uploads/event.png');
    background-attachment: fixed; "

@endsection
@section('page-content')

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 sm:py-12 lg:px-8">
        <h3 class="bg-pink-300 text-center text-slate-700 w-full form-status"></h3>
        <div class="p-10 pt-4">
            <h1 class="mb-8 font-bold font-raleway text-4xl form-title">StreetPlayArtist Request Form</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <form id="{{ $formId }}" class="forms-group">

                    <div class="forms-input-group  grid grid-cols-1 md:grid-cols-2 gap-8">

                    </div>
                    <div class="forms-file-group">

                    </div>
                    <div class="mb-5 pt-3">

                        <div>
                            <button id="submit_streetPlayArtists_form"
                                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Submit
                            </button>
                        </div>
                    </div>

                </form>

                <aside class="">
                    <div class="bg-gray-100 p-8 rounded ">
                        <h2
                            class="font-bold text-2xl bg-clip-text text-transparent bg-gradient-to-r from-red-500 via-pink-600 to-orange-600">
                            Instructions</h2>
                        <p class="text-sm font-medium mt-1 text-gray-500 ">
                            Thank you for your interest in joining the Youth Power Association’s team of street artists. We
                            are excited to welcome individuals of all experience levels, including fresh talent, to be part
                            of our dynamic team. Before you proceed with filling out the application form, please take a
                            moment to read the following important information:
                        </p>
                        <ul
                            class="list-decimal mt-4 list-inside font-medium bg-clip-text text-transparent bg-gradient-to-r from-red-500 via-pink-600 to-orange-600">

                            <li> Commitment and Availability:</li>
                            <ul class="font-normal text-sm pl-6 list-disc text-gray-500 ">
                                <li>
                                    Participation requires a minimum commitment of 6 hours per week/month.
                                </li>
                                <li>
                                    Please ensure that you are available to meet this commitment before applying.
                                </li>
                            </ul>

                            <li>Responsibilities</li>
                            <ul class="font-normal text-sm pl-6 list-disc text-gray-500">
                                <li>Street artists will be involved in performing street plays, engaging with the community,
                                    and promoting social awareness through art.</li>
                                <li>Responsibilities may include scriptwriting, acting, directing, and organizing
                                    performances.</li>
                            </ul>

                            <li>Training and Orientation</li>

                            <ul class="font-normal text-sm pl-6 list-disc text-gray-500">
                                <li>All artists are required to attend a mandatory orientation session.</li>
                                <li>Additional training sessions will be provided to help you develop your skills and
                                    prepare for performances.</li>
                            </ul>

                            <li>Code of Conduct</li>
                            <ul class="font-normal text-sm pl-6 list-disc text-gray-500">
                                <li>Artists are expected to adhere to the organization’s code of conduct, which includes
                                    maintaining professionalism, respecting confidentiality, and promoting a positive
                                    environment.</li>
                                <li>Any breach of the code of conduct may result in termination of the street_artist
                                    agreement.
                                </li>
                            </ul>



                            <li>Health and Safety</li>
                            <ul class="font-normal text-sm pl-6 list-disc text-gray-500">
                                <li>Your health and safety are our top priority. Please inform us of any medical conditions
                                    or special requirements you may have.</li>
                                <li>Follow all health and safety guidelines provided during your participation.</li>
                            </ul>

                            <li>Benefits of interning</li>
                            <ul class="font-normal text-sm pl-6 list-disc text-gray-500">
                                <li>Gain valuable experience and skills in performing arts.</li>
                                <li>Make a positive impact in the community through creative expression.</li>
                                <li>Receive a certificate of appreciation upon completion of your participation.</li>
                            </ul>



                        </ul>
                        <p class="text-sm font-medium pt-3 text-gray-500 ">By submitting the application form, you
                            acknowledge that you have read and understood the above information and agree to comply with the
                            requirements and guidelines set forth by Youth Power Association.

                            We look forward to welcoming you to our team and working together to make a difference through
                            the power of art!
                        </p>
                        <p>
                            <strong
                                class="mt-1 bg-clip-text text-transparent bg-gradient-to-r from-red-500 via-pink-600 to-orange-600"><br>Sincerely,<br>
                                Youth Power Association</strong>
                        </p>

                    </div>
                </aside>

            </div>
        </div>

    </div>
    <script>
        {{-- CREATE NOTICE STARTS HERE --}}
        async function CreateStreetPlayArtist(data) {
            // var data = {
            // "title": "NOTICE HERE 4",
            // "name": "DESCRIPTION",
            // "date": "2024-10-13",
            // "contents": "234",
            // "href": "/streetPlayArtists/id"
            // "status": "/streetPlayArtists/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/street-play-artists`, {
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

                    alertMessage('success', data.message);



                })
                .catch(error => {

                    alertMessage('warning', 'Either StreetPlayArtist already registered or ' + error);
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });



        }
        {{-- CREATE NOTICE ENDS HERE --}}
        var forms = {
            "registrationForm": {
                "fields": [{
                        "label": "First Name",
                        "type": "text",
                        "name": "first_name",
                        "required": true
                    },
                    {
                        "label": "Last Name",
                        "type": "text",
                        "name": "last_name",
                        "required": true
                    },
                    {
                        "label": "Email",
                        "type": "email",
                        "name": "email",
                        "required": true
                    },
                    {
                        "label": "Phone Number",
                        "type": "tel",
                        "name": "phone_number",
                        "required": true
                    },
                    {
                        "label": "Date of Birth",
                        "type": "date",
                        "name": "dob",
                        "required": true
                    },
                    {
                        "label": "Address",
                        "type": "text",
                        "name": "address",
                        "required": true
                    },
                    {
                        "label": "City",
                        "type": "text",
                        "name": "city",
                        "required": true
                    },
                    {
                        "label": "State",
                        "type": "text",
                        "name": "state",
                        "required": true
                    },
                    {
                        "label": "Zip Code",
                        "type": "text",
                        "name": "zip_code",
                        "required": true
                    },
                    {
                        "label": "Country",
                        "type": "text",
                        "name": "country",
                        "required": true
                    },
                    {
                        "label": "Preferred Role",
                        "type": "text",
                        "name": "preferred_role",
                        "required": true
                    },
                    {
                        "label": "Experience Level",
                        "type": "text",
                        "name": "experience_level",
                        "required": true
                    },
                    {
                        "label": "Skills/Qualifications",
                        "type": "textarea",
                        "name": "skills",
                        "required": false
                    },
                    {
                        "label": "Previous Performances",
                        "type": "textarea",
                        "name": "previous_performances",
                        "required": false
                    },

                    {
                        "label": "Motivation to Join",
                        "type": "textarea",
                        "name": "motivation",
                        "required": false
                    },
                    {
                        "label": "Upload Headshot",
                        "type": "file",
                        "name": "file_path",
                        "required": false
                    }
                ]
            }
        }
        async function CheckFormStatus(id) {
            await fetch('http://127.0.0.1:8000/api/forms/' + id)
                .then(response => response.json())
                .then(data => {

                    if (data.data.status === 'FALSE' || data.data.status === 'false') {
                        $('.form-status').html(data.data.message)
                        // $('.form-title').html(data.data.form_name)
                        $('#submit_streetPlayArtists_form').prop('disabled', true)
                        alertMessage('info', data.data.message)
                    }

                    // console.log('Success:', data);
                    // Handle the success response (e.g., show a success message)
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle the error response (e.g., show an error message)
                });

        }

        var sampledata = {
            "first_name": "John",
            "last_name": "Doe",
            "email": "john.doe@exxmple.com",
            "phone_number": "123-456-7890",
            "dob": "1990-01-01",
            "address": "123 Main St",
            "city": "Anytown",
            "state": "Anystate",
            "zip_code": "12345",
            "country": "Country",
            "preferred_role": "Lead Actor",
            "experience_level": "Intermediate",
            "skills": "Acting, Singing",
            "previous_performances": "Performed in various street plays and community theater productions.",
            "motivation": "I want to use my skills to bring awareness to social issues through street performances.",
            "file_path": "#"
        };
        // if (forms.registrationForm.status) {} else {

        //     $('.form-status').html(forms.registrationForm.message)
        //     $('#submit_streetPlayArtists_form').prop('disabled', true)
        //     alert(forms.registrationForm.message)
        // }


        forms.registrationForm.fields.forEach(element => {
            if (element.type === 'file') {
                $('.forms-file-group').append(`             
                <div class="mb-5" >
                        <label for="${element.name}" class="mb-3 block text-base font-medium text-[#07074D]">
                        ${element.label}
                        </label>
                        <input type="${element.type}" name="${element.name}" id="${element.name}" placeholder="${element.label}"
                            class="w-full streetPlayArtists-input-field  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <div class="display_upload"></div>
                    
                            </div>`);
            } else if (element.type === 'textarea') {
                $('.forms-file-group').append(`
                 
                
                <div class="mb-5">
                        <label for="${element.name}" class="mb-3 block text-base font-medium text-[#07074D]">
                        ${element.label}
                        </label>
                        <textarea  name="${element.name}" id="${element.name}" placeholder="${element.label}"
                            class="w-full streetPlayArtists-input-field  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                            
                    
                            </div>`);
            } else {
                $('.forms-input-group').append(`<div class="mb-5">
                        <label for="${element.name}" class="mb-3 block text-base font-medium text-[#07074D]">
                        ${element.label}
                        </label>
                        <input type="${element.type}" name="${element.name}" id="${element.name}" placeholder="${element.label}"
                            class="w-full streetPlayArtists-input-field rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>`);
            }


        });

        $('.streetPlayArtists-input-field').change(function() {
            if ($(this).attr('type') === 'file') {
                var this_key = $(this).attr('name');
                var this_parent = $(this).parent();

                // const formData = new FormData();
                const fileInput = document.querySelector('input[type="file"]');
                // const fileInput = document.getElementById("fileInput");
                const file = fileInput.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const base64File = e.target.result.split(",")[1];

                        fetch("http://127.0.0.1:8000/api/upload.php", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                },
                                body: JSON.stringify({
                                    file: base64File,
                                    filename: file.name,
                                }),
                            })
                            .then((response) => response.json())
                            .then((data) => {
                                sampledata[this_key] = data.file_path;
                                this_parent.append(`<img class="h-20" src="${data.file_path}" alt="Your Image">
                                     `)
                                console.log("Success:", sampledata);
                            })
                            .catch((error) => {
                                console.error("Error:", error);
                            });
                    };
                    reader.readAsDataURL(file);
                } else {
                    alert("Please select a file to upload.");
                }



            } else if ($(this).attr('type') === 'checkbox') {
                if ($(this).is(':checked')) {

                    sampledata[$(this).attr('name')] = 'TRUE';
                } else {

                    sampledata[$(this).attr('name')] = 'FALSE';
                }
            } else {

                sampledata[$(this).attr('name')] = $(this).val();
            }
        });


        $(document).ready(function() {
            var formId = $('form').attr('id');
            CheckFormStatus(formId);

            $('#submit_streetPlayArtists_form').click(function(e) {

                e.preventDefault();
                if ($('input[type="text"]').val() === '') {
                    alertMessage('warning', 'Please fill all required fields!');
                    return 0;
                }
                CreateStreetPlayArtist(sampledata);
                // setTimeout(() => {
                //     $('.success-alert').toggleClass('hidden')
                //     $('.success-alert strong').text("Thank you for register")
                //     $('.success-alert p').text("Your form has been accepted")
                // }, 1000)
            })

        })
    </script>
@endsection
@push('script')
    $('footer').removeClass('bg-[#145589]')
    $('#submit_intern_form').click(function (e) {
    e.preventDefault();
    setTimeout(() => {
    $('.success-alert').toggleClass('hidden')
    $('.success-alert strong').text("Thank you for register")
    $('.success-alert p').text("Your form has been accepted")
    }, 1000)
    })
@endpush
