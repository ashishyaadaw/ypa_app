@extends('pages.joinus.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')

    <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Component -->
            <div class="bg-gray-100 p-8 text-center sm:p-10 md:p-16">
                <!-- Title -->
                <h2 class="mb-4 text-3xl font-bold md:text-5xl"> Thank you for your Interest </h2>
                <p class="mx-auto mb-6 max-w-2xl text-sm text-gray-500 sm:text-base md:mb-10 lg:mb-12">Currently We're not
                    taking request for campus ambassedor program online. Call us for appointment or give your email. We'll
                    inform you as
                    soon as our online registration of campus ambassedor program started. </p>
                <div class="mx-auto mb-4 flex max-w-lg justify-center">
                    <form name="email-form" method="get" class="flex w-full flex-col gap-3 sm:flex-row">
                        <input type="email"
                            class="h-9 w-full rounded-md border request-email-input-field border-solid border-black px-3 py-6 text-sm text-gray-500"
                            placeholder="Enter your email" />
                        <input id="submit_campus_waitlist_form" type="submit" value="Notify me"
                            class="cursor-pointer rounded-md bg-black px-6 py-2 font-semibold text-white" />
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
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
    $('#submit_campus_waitlist_form').click(function(e) {
    e.preventDefault();

    function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
    }

    // Example usage:
    const email = $('.request-email-input-field').val();
    var formData = {
    "name": "",
    "description": "FOR CAMPUS AMBASSADOR PROGRAM REGISTRATION MAIL REQUEST",
    "email": email,
    "mobile": "",
    "other": "",
    "status": "NOT VERIFIED",
    }

    if (email === '') {
    alertMessage('warning', 'Please enter Email!');
    return 0;
    }
    if (validateEmail(email)) {
    AddContacts(formData);
    // console.log("Valid email address");
    } else {
    alertMessage('danger', 'Invalid Email!');
    // console.log("Invalid email address");
    }



    })
@endpush
