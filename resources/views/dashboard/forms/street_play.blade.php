@extends('dashboard.layout')

@section('title', $title)
@section('file', $title)

@section('content')
    <main class="h-full overflow-y-auto relative">
        <div class=" px-4 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                StreetPlays
            </h2>


            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap relative">
                        <button
                            class="px-2 py-1  z-30 float-right add-row-btn  cursor-pointer font-semibold leading-tight text-sky-700  bg-sky-100 rounded-full dark:bg-sky-700 dark:text-sky-100">
                            ADD +
                        </button>
                        <thead class="pt-2">

                            <tr for="table-head"
                                class="text-xs w-full font-semibold relative tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">




                            </tr>
                        </thead>
                        <tbody id="street_play-table-body" class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            {{-- fetch data --}}
                        </tbody>
                    </table>
                </div>
                {{-- grid | hidden --}}
                <div
                    class="  px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="flex items-center col-span-3">
                        Showing &nbsp;<span class="row-count">01-10 of 100</span>
                    </span>
                    <span class="col-span-2"></span>
                    <!-- Pagination -->
                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                            <ul class="inline-flex items-center nav-buttons">
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                        aria-label="Previous">
                                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>

                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                        aria-label="Next">
                                        <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                            <path
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
            </div>

        </div>
        <div
            class="mx-auto hidden street_play-update-form absolute w-full top-0 bg-slate-500 px-4 py-6 sm:px-6 sm:py-12 lg:px-8">
            <button for="close-update-form" class="float-right close-update-form">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16"
                    width="20" height="20">
                    <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                    </path>
                </svg>
            </button>
            <div class="p-10 pt-4">
                <h1 class="mb-8 font-bold font-raleway text-4xl">StreetPlay Update Form</h1>
                <form id="forms-group" class="forms-group">

                    <div class="forms-input-group lg:grid-cols-3 grid grid-cols-1 md:grid-cols-2 gap-8">

                    </div>
                    <div class="forms-file-group">

                    </div>
                    <div class="mb-5 pt-3">

                        <div>
                            <button id="submit_street_play_form"
                                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Submit
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </main>
    <script>
        function PrintUpdateForm(sampledata) {

            $('.street_play-update-form').show();

            var forms = [{
                    "label": "First Name",
                    "type": "text",
                    "name": "first_name",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Last Name",
                    "type": "text",
                    "name": "last_name",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Email",
                    "type": "email",
                    "name": "email",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Phone Number",
                    "type": "tel",
                    "name": "phone_number",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Date of Birth",
                    "type": "date",
                    "name": "dob",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Address",
                    "type": "text",
                    "name": "address",
                    "props": "",
                    "required": true
                },
                {
                    "label": "City",
                    "type": "text",
                    "name": "city",
                    "props": "",
                    "required": true
                },
                {
                    "label": "State",
                    "type": "text",
                    "name": "state",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Zip Code",
                    "type": "text",
                    "name": "zip_code",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Country",
                    "type": "text",
                    "name": "country",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Preferred Role",
                    "type": "text",
                    "name": "preferred_role",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Experience Level",
                    "type": "text",
                    "name": "experience_level",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Skills/Qualifications",
                    "type": "textarea",
                    "name": "skills",
                    "props": "",
                    "required": false
                },
                {
                    "label": "Previous Performances",
                    "type": "textarea",
                    "name": "previous_performances",
                    "props": "",
                    "required": false
                },

                {
                    "label": "Motivation to Join",
                    "type": "textarea",
                    "name": "motivation",
                    "props": "",
                    "required": false
                },
                {
                    "label": "Update Photo",
                    "type": "file",
                    "placeholder": "",
                    "name": "file_path",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Availibility",
                    "type": "checkbox",
                    "placeholder": "",
                    "name": "status",
                    "props": "",
                    "required": true
                }
            ];
            // var sampledata = {
            //     "first_name": "John",
            //     "last_name": "Doe",
            //     "email": "john.doe@examaadscplaggse.com",
            //     "phone_number": "123-456-7890",
            //     "dob": "1990-01-01",
            //     "address": "123 Main St",
            //     "city": "Anytown",
            //     "state": "Anystate",
            //     "zip_code": "12345",
            //     "country": "Country",
            //     "emergency_contact_name": "Jane Doe",
            //     "emergency_contact_phone": "098-765-4321",
            //     "street_play_role": "Teacher",
            //     "availability": "Weekdays",
            //     "skills": "Teaching, Communication",
            //     "reason": "I love helping others",
            //     "file_path": "#",
            //     "status": "FALSE"


            // };

            var values = Object.values(sampledata);


            for (let i = 0; i < values.length && i < forms.length; i++) {
                forms[i]['placeholder'] = values[i + 1];

            }
            console.log(forms);
            $('.forms-file-group').html('');

            $('.forms-input-group').html('');

            forms.forEach(element => {

                if (element.type === 'file') {
                    $('.forms-file-group').append(`             
                    <div class="mb-5">
                        <label for="${element.name}" class="mb-3 block text-base font-medium text-[#07074D]">
                        ${element.label}
                        </label>
                        <input type="${element.type}" ${element.props} name="${element.name}" id="${element.name}" placeholder="${element.label}"
                            class="w-full update-input-field  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <img src="${element.placeholder}" class="h-32 border" alt="Your Image">

                            
                    
                            </div>`);
                } else if (element.type === 'checkbox') {
                    var ischecked = '';
                    if (sampledata.status === 'TRUE' || sampledata.status === 'true') {
                        ischecked = 'checked';
                    }


                    $('.forms-input-group').append(`<div class="mb-5">
                        <label for="${element.name}" class="mb-3 block text-base font-medium text-[#07074D]">
                        ${element.label}
                        </label>
                        <input type="${element.type}" ${ischecked} ${element.props} name="${element.name}" id="${element.name}" placeholder="${element.placeholder}" value="${element.placeholder}"
                            class="w-full update-input-field rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>`);
                } else {

                    $('.forms-input-group').append(`<div class="mb-5">
                        <label for="${element.name}" class="mb-3 block text-base font-medium text-[#07074D]">
                        ${element.label}
                        </label>
                        <input type="${element.type}" ${element.props} name="${element.name}" id="${element.name}" placeholder="${element.placeholder}" value="${element.placeholder}"
                            class="w-full update-input-field rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>`);
                }


            });




            $('.update-input-field').change(function() {
                if ($(this).attr('type') === 'file') {


                    const formData = new FormData();
                    const fileField = document.querySelector('input[type="file"]');

                    formData.append('photo', fileField.files[0]);

                    fetch('/api/upload-photo', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            // $(this).val(data.file_path)
                            sampledata[$(this).attr('name')] = data.file_path;
                            $(this).parent().append(`<img class="h-20" src="{{ asset('storage/${data.file_path}') }}" alt="Your Image">
                    `)
                            // console.log('Success:', data);
                            // Handle the success response (e.g., show a success message)
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            // Handle the error response (e.g., show an error message)
                        });

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


            $('#submit_street_play_form').click(function() {
                event.preventDefault();

                UpdateStreetPlay(sampledata);

            })




        }
        $(document).ready(function() {
            $('.street_play-update-form button[for="close-update-form"]').click(function() {
                $(this).parent().hide();
            })
        })
    </script>
    <script>
        var count = 0;
        var selectedform = [];
        let currentDate = new Date();

        let year = currentDate.getFullYear();
        let month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
        let day = ("0" + currentDate.getDate()).slice(-2);

        let formattedDate = `${year}-${month}-${day}`;
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
            "file_path": "#",
            "status": "false"
        };

        if (sampledata.date) {
            sampledata['date'] = formattedDate;
        }


        function selector() {
            $('input[type="checkbox"][for="select-all"]').click(function() {
                if ($(this).is(':checked')) {
                    $('#delete-form-selected-row-btn').fadeIn();
                    $('#delete-form-selected-row-btn').prop('disabled', false)
                    $('input[type="checkbox"][for="table-row"]').prop('checked', true);
                } else {
                    $('#delete-form-selected-row-btn').fadeOut();
                    $('#delete-form-selected-row-btn').prop('disabled', true)
                    $('input[type="checkbox"][for="table-row"]').prop('checked', false);
                }
            })


            $('input[type="checkbox"][for="table-row"]').click(function() {
                $('#checkbox-all').prop('checked', false);
                if ($(this).is(':checked')) {
                    $('#delete-form-selected-row-btn').fadeIn();
                    $('#delete-form-selected-row-btn').prop('disabled', false)
                }
            })



        }

        function editRow() {
            // onClick BTN EDITROW
            $('.edit-row-btn').click(function() {
                var rowId = $(this).parent().attr('data-for');
                EditStreetPlayRow(rowId);
            })
        }

        function deleteRow() {
            // onClick BTN DELETE ROW
            $('.delete-row-btn').click(function() {
                var rowId = $(this).parent().attr('data-for');
                alertMessage('delete', '');
                $('#delete-confirm-button').click(function() {
                    DeleteStreetPlay(rowId);
                })
                $("#cancel-delete-confirm-button").click(function() {
                    $('.alert-pop').fadeOut();
                })
            })
        }

        function deleteSelectedRow() {
            $('#delete-form-selected-row-btn').click(function() {
                var checkedValues = [];


                $('input[type="checkbox"][for="table-row"]:checked').each(function() {
                    checkedValues.push($(this).val());
                });

                // console.log(checkedValues); // This will log the array of checked values

                alertMessage('delete', 'Are you sure to delete all selected rows permanentaly?');
                $('#delete-form-selected-row-btn').prop('disabled', true);
                $('#delete-form-selected-row-btn').fadeOut();


                $("#delete-confirm-button").click(function() {
                    // acceptin and delete code here

                    var data = {
                        "ids": checkedValues
                    };
                    DeleteStreetPlays(data);
                })

                $("#cancel-delete-confirm-button").click(function() {
                    $('.alert-pop').fadeOut();
                })
            });

        }



        function printTableHead(thead) {
            // this will select option
            $('tr[for="table-head"]').append(`<th scope="col" class="p-4 w-4">
                                    <div class="flex items-center ">
                                        <input id="checkbox-all" type="checkbox" for="select-all"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all" class=" ml-3 relative">
                                            <button id="delete-form-selected-row-btn"
                                                class="delete-form-selected-row-btn z-30 absolute top-0 -mt-3 hidden bg-red-600 rounded-md border-2 border-red-600 text-blue-600 dark:text-blue-500 hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 "
                                                    fill="currentColor">
                                                    <path d="M10 12V17" stroke="#ffffff" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14 12V17" stroke="#fffff" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M4 7H20" stroke="#ffffff" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10"
                                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z"
                                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></button>
                                        </label>
                                    </div>
                                </th>`);

            for (let i = 0; i < thead.length; i++) {
                const element = thead[i];
                // print keys
                $('tr[for="table-head"]').append(`
                    <th class="px-4  max-w-sm truncate py-3">${element}</th>`);

            }
            // action print
            $('tr[for="table-head"]').append(` <th class="px-4  max-w-sm truncate py-3 flex justify-between">
                        <span>action</span>
                    </th>`);


        }

        function printTableBody(startCount, endCount, newData) {

            var i = startCount;
            var totalCount = newData.length;
            for (i; i < totalCount && i < endCount; i++) {
                const element = newData[i];
                var isChecked = '';
                if (element.status == 'TRUE') {
                    isChecked =
                        'text-green-700  bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100';
                } else {
                    isChecked =
                        'text-yellow-700  bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100 lowercase';
                }
                var keys = Object.keys(element);
                var values = Object.values(element);
                $('#street_play-table-body').append(`<tr row-id="${element.id}" class="text-gray-700 w-full dark:text-gray-400 street_play-row">
                                    
                                    <td class="p-4 min-w-4 ">
                                        <input id="${element.id}" type="checkbox" for="table-row" value="${element.id}"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    
                                    </td></tr>`);
                for (let i = 0; i < (values.length - 1); i++) {
                    const value = values[i];
                    $(`tr[row-id="${element.id}"]`).append(`
                                <td class="px-4  max-w-sm truncate py-3 text-sm">
                                        ${value}
                                    </td>
                            `);
                }



                $(`tr[row-id="${element.id}"]`).append(`
                                    <td class="px-4  max-w-sm truncate py-3 text-sm flex justify-center text-center">
                                        <h3 class="text-xs h-3 w-3 rounded-full ${isChecked}"></h3>
                                        
                                    </td>
                                    <td data-for='${element.id}' class="px-4  max-w-sm truncate py-3 text-xs action-btn">
                                        <button
                                            class="px-2 py-1 edit-row-btn cursor-pointer font-semibold leading-tight text-green-700  bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            Edit
                                        </button> &nbsp;
                                        <button
                                            class="px-2 py-1 delete-row-btn cursor-pointer font-semibold leading-tight text-red-700  bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                            Delete
                                        </button>
                                    </td>
                        `);


                $('.row-count').text(` ${startCount} - ${endCount} of ${totalCount}`)
            }
        }

        // EDIT NOTICE BEFORE UPDATE STARTS HERE
        async function EditStreetPlayRow(id) {
            var keys;
            var values;
            var dataToUpdate;
            await fetch('http://127.0.0.1:8000/api/street-play-artists/' + id)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {

                    var editRowData = data;

                    console.log(editRowData);

                    PrintUpdateForm(editRowData);
                    // dataToUpdate = editRowData;

                    // keys = Object.keys(editRowData);

                    // values = Object.values(editRowData);






                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });


            // button after click edit
            $('.update-row-btn').click(function() {


                var rowId = $(this).parent().attr('data-for');
                var status = '';
                if ($(`input[name="input_status_field_${rowId}"]`).is(':checked')) {
                    status = 'TRUE';
                } else {
                    status = 'FALSE';
                }
                for (let i = 1; i < (keys.length - 1); i++) {
                    const element = keys[i];
                    dataToUpdate[element] = $(`input[name="input_${element}_field_${rowId}"]`).val();

                }
                dataToUpdate['status'] = status;

                UpdateStreetPlay(dataToUpdate);

            })
            $('.delete-row-btn').click(function() {
                var rowId = $(this).parent().attr('data-for');
                alertMessage('delete', '');
                $('#delete-confirm-button').click(function() {
                    DeleteStreetPlay(rowId);
                })
            })



        }

        // EDIT NOTICE BEFORE UPDATE ENDS HERE




        {{-- DELETE FUNCTION STARTS HERE --}}
        async function DeleteStreetPlay(id) {
            var data = {
                "title": "NOTICE HERE 4",
                "name": "DESCRIPTION",
                "date": "2024-10-13",
                "contents": "234",
                "href": "/street_play/id",
                "status": "TRUE",
            };
            await fetch(`http://127.0.0.1:8000/api/street-play-artists/${id}`, {
                    method: 'DELETE'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    alertMessage('success', 'One street_play deleted');
                    PrintStreetPlay(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- DELETE FUNCTION ENDS HERE --}}
        // DELETE FUNCTION BY MULTIPLE IDS
        async function DeleteStreetPlays(data) {
            // var data = {
            //     "title": "NOTICE HERE 4",
            //     "name": "DESCRIPTION",
            //     "date": "2024-10-13",
            //     "contents": "234",
            //     "href": "/street_play/id"
            //     "status": "/street_play/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/street-play-artists`, {
                    method: 'DELETE',
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
                    alertMessage('success', 'Selected StreetPlays deleted!');

                    PrintStreetPlay(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- ADD TEXT STARTS HERE --}}
        async function UpdateStreetPlay(data) {
            // var data = {
            // "id": "1",
            // "title": "NOTICE HERE 4",
            // "name": "DESCRIPTION",
            // "date": "2024-10-13",
            // "contents": "234",
            // "href": "/street_play/id"
            // "status": "/street_play/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/street-play-artists/${data.id}`, {
                    method: 'PUT',
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
                    alertMessage('success', 'StreetPlay updated successfully!');

                    PrintStreetPlay(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- ADD TEXT ENDS HERE --}}
        {{-- CREATE NOTICE STARTS HERE --}}
        async function CreateStreetPlay(data) {
            // var data = {
            // "title": "NOTICE HERE 4",
            // "name": "DESCRIPTION",
            // "date": "2024-10-13",
            // "contents": "234",
            // "href": "/street_play/id"
            // "status": "/street_play/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/street_plays`, {
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

                    PrintStreetPlay(0);
                    alertMessage('info', 'Please update street_play data!');



                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });



        }
        {{-- CREATE NOTICE ENDS HERE --}}
        async function PrintStreetPlay(index) {
            await fetch('http://127.0.0.1:8000/api/street-play-artists/')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // this will make table body empty
                    $('#street_play-table-body').html('');
                    // this make head empty
                    $('tr[for="table-head"]').html('');

                    var newData = data.data.reverse();
                    var thead = Object.keys(newData[0]);
                    // sampledata = newData[0];

                    printTableHead(thead);

                    // values printing
                    var startCount = index;
                    var endCount = startCount + 10;

                    printTableBody(startCount, endCount, newData)



                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

            editRow();

            deleteRow();

            selector();

            deleteSelectedRow();

        }


        $(document).ready(function() {

            $('.nav-buttons li button[aria-label="Previous"]').click(function() {
                if (count <= 10) {
                    count = 0;
                    PrintStreetPlay(count);
                } else {
                    count -= 10;
                    PrintStreetPlay(count);
                }
            })
            $('.nav-buttons li button[aria-label="Next"]').click(function() {

                count += 10;
                PrintStreetPlay(count);
            })

            $('.add-row-btn').hide();
            $('.add-row-btn').click(function() {


                // let keys = Object.keys(sampledata);

                // for (let i = 1; i < (keys.length - 1); i++) {
                //     const element = keys[i];
                //     sampledata[element] = 'ADD TEXT';

                // }

                // if (sampledata.date) {
                //     sampledata['date'] = formattedDate;
                // }
                // var data = {
                //     "title": "required|string|max:255",
                //     "description": "required",
                //     "date": formattedDate,
                //     "priority": "required",
                //     "href": "string",
                //     "status": "string"
                // };
                CreateStreetPlay(sampledata);


            })

            PrintStreetPlay(count);


        });
    </script>
@endsection

@push('script')
    $('.street_plays').children('span').removeClass('hidden');
    $('.street_plays').children('a').addClass('text-gray-800');
@endpush

@push('script')
    $('.forms').children('span').removeClass('hidden');
    $('.forms').children('a').addClass('text-gray-800');
    $('.forms > ul').toggleClass('hidden');
    $('.forms > ul > li:nth-child(4)').css('color', '#9333EA');
@endpush
