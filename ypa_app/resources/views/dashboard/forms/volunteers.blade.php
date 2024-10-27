@extends('dashboard.layout')

@section('title', $title)
@section('file', $title)

@section('content')
    <main class="h-full overflow-y-auto relative">
        <div class=" px-4 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 ">
                Volunteers
            </h2>


            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap relative">
                        <button
                            class="px-2 py-1  z-30 float-right add-row-btn  cursor-pointer font-semibold leading-tight text-sky-700  bg-sky-100 rounded-full ">
                            ADD +
                        </button>
                        <thead class="pt-2">

                            <tr for="table-head"
                                class="text-xs w-full font-semibold relative tracking-wide text-left text-gray-500 uppercase border-b  bg-gray-50 ">




                            </tr>
                        </thead>
                        <tbody id="volunteer-table-body" class="bg-white divide-y ">
                            {{-- fetch data --}}
                        </tbody>
                    </table>
                </div>
                {{-- grid | hidden --}}
                <div
                    class="  px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t  bg-gray-50 sm:grid-cols-9 ">
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
            class="mx-auto hidden pt-20 volunteer-update-form absolute w-full top-0 bg-slate-500 px-4  py-6 sm:px-6 sm:py-12 lg:px-8">
            <button for="close-update-form" class="float-right close-update-form mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16"
                    width="20" height="20">
                    <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                    </path>
                </svg>
            </button>
            <div class="p-10 pt-8">
                <h1 class="mb-8  font-bold font-raleway text-4xl">Volunteer Update Form</h1>
                <form id="forms-group" class="forms-group">

                    <div class="forms-input-group lg:grid-cols-3 grid grid-cols-1 md:grid-cols-2 gap-8">

                    </div>
                    <div class="forms-file-group">

                    </div>
                    <div class="mb-5 pt-3">

                        <div>
                            <button id="submit_volunteer_form"
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

            $('.volunteer-update-form').show();

            var forms = [{
                    "label": "First Name",
                    "type": "text",
                    "placeholder": "",
                    "name": "first_name",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Last Name",
                    "type": "text",
                    "placeholder": "",
                    "name": "last_name",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Email",
                    "type": "email",
                    "placeholder": "",
                    "name": "email",
                    "props": "",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Phone Number",
                    "type": "tel",
                    "placeholder": "",
                    "name": "phone_number",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Date of Birth",
                    "type": "date",
                    "placeholder": "",
                    "name": "dob",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Address",
                    "type": "text",
                    "placeholder": "",
                    "name": "address",
                    "props": "",
                    "required": true
                },
                {
                    "label": "City",
                    "type": "text",
                    "placeholder": "",
                    "name": "city",
                    "props": "",
                    "required": true
                },
                {
                    "label": "State",
                    "type": "text",
                    "placeholder": "",
                    "name": "state",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Zip Code",
                    "type": "text",
                    "placeholder": "",
                    "name": "zip_code",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Country",
                    "type": "text",
                    "placeholder": "",
                    "name": "country",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Emergency Contact Name",
                    "type": "text",
                    "placeholder": "",
                    "name": "emergency_contact_name",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Emergency Contact Phone",
                    "type": "tel",
                    "placeholder": "",
                    "name": "emergency_contact_phone",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Preferred Volunteer Role",
                    "type": "text",
                    "placeholder": "",
                    "name": "volunteer_role",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Availability",
                    "type": "text",
                    "placeholder": "",
                    "name": "availability",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Skills/Qualifications",
                    "type": "textarea",
                    "placeholder": "",
                    "name": "skills",
                    "props": "",
                    "required": true
                },
                {
                    "label": "Why do you want to volunteer?",
                    "type": "textarea",
                    "placeholder": "",
                    "name": "reason",
                    "props": "",
                    "required": true
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
            //     "volunteer_role": "Teacher",
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


            $('#submit_volunteer_form').click(function() {
                event.preventDefault();
                UpdateVolunteer(sampledata);

            })




        }
        $(document).ready(function() {
            $('.volunteer-update-form button[for="close-update-form"]').click(function() {
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
            "email": "john.doe@examaadscplaggse.com",
            "phone_number": "123-456-7890",
            "dob": "1990-01-01",
            "address": "123 Main St",
            "city": "Anytown",
            "state": "Anystate",
            "zip_code": "12345",
            "country": "Country",
            "emergency_contact_name": "Jane Doe",
            "emergency_contact_phone": "098-765-4321",
            "volunteer_role": "Teacher",
            "availability": "Weekdays",
            "skills": "Teaching, Communication",
            "reason": "I love helping others",
            "file_path": "#",
            "status": "FALSE"


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
                EditVolunteerRow(rowId);
            })
        }

        function deleteRow() {
            // onClick BTN DELETE ROW
            $('.delete-row-btn').click(function() {
                var rowId = $(this).parent().attr('data-for');
                alertMessage('delete', '');
                $('#delete-confirm-button').click(function() {
                    DeleteVolunteer(rowId);
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

                    DeleteVolunteers(data);
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
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                        <label for="checkbox-all" class=" ml-3 relative">
                                            <button id="delete-form-selected-row-btn"
                                                class="delete-form-selected-row-btn z-30 absolute top-0 -mt-3 hidden bg-red-600 rounded-md border-2 border-red-600 text-blue-600  hover:underline">
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
                        'text-green-700  bg-green-100 rounded-full  ';
                } else {
                    isChecked =
                        'text-yellow-700  bg-yellow-100 rounded-full lowercase';
                }
                var keys = Object.keys(element);
                var values = Object.values(element);
                $('#volunteer-table-body').append(`<tr row-id="${element.id}" class="text-gray-700 w-full  volunteer-row">
                                    
                                    <td class="p-4 min-w-4 ">
                                        <input id="${element.id}" type="checkbox" for="table-row" value="${element.id}"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                    
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
                                            class="px-2 py-1 edit-row-btn cursor-pointer font-semibold leading-tight text-green-700  bg-green-100 rounded-full ">
                                            Edit
                                        </button> &nbsp;
                                        <button
                                            class="px-2 py-1 delete-row-btn cursor-pointer font-semibold leading-tight text-red-700  bg-red-100 rounded-full ">
                                            Delete
                                        </button>
                                    </td>
                        `);


                $('.row-count').text(` ${startCount} - ${endCount} of ${totalCount}`)
            }
        }

        // EDIT NOTICE BEFORE UPDATE STARTS HERE
        async function EditVolunteerRow(id) {
            var keys;
            var values;
            var dataToUpdate;
            await fetch('http://127.0.0.1:8000/api/volunteers/' + id)
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

                UpdateVolunteer(dataToUpdate);

            })
            $('.delete-row-btn').click(function() {
                var rowId = $(this).parent().attr('data-for');
                alertMessage('delete', '');
                $('#delete-confirm-button').click(function() {
                    DeleteVolunteer(rowId);
                })
            })



        }

        // EDIT NOTICE BEFORE UPDATE ENDS HERE




        {{-- DELETE FUNCTION STARTS HERE --}}
        async function DeleteVolunteer(id) {
            var data = {
                "title": "NOTICE HERE 4",
                "name": "DESCRIPTION",
                "date": "2024-10-13",
                "contents": "234",
                "href": "/volunteer/id",
                "status": "TRUE",
            };
            await fetch(`http://127.0.0.1:8000/api/volunteers/${id}`, {
                    method: 'DELETE'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    alertMessage('success', 'One volunteer deleted');

                    PrintVolunteer(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- DELETE FUNCTION ENDS HERE --}}
        // DELETE FUNCTION BY MULTIPLE IDS
        async function DeleteVolunteers(data) {
            // var data = {
            //     "title": "NOTICE HERE 4",
            //     "name": "DESCRIPTION",
            //     "date": "2024-10-13",
            //     "contents": "234",
            //     "href": "/volunteer/id"
            //     "status": "/volunteer/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/volunteers`, {
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
                    alertMessage('success', 'Selected Volunteers deleted!');

                    PrintVolunteer(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- ADD TEXT STARTS HERE --}}
        async function UpdateVolunteer(data) {
            // var data = {
            // "id": "1",
            // "title": "NOTICE HERE 4",
            // "name": "DESCRIPTION",
            // "date": "2024-10-13",
            // "contents": "234",
            // "href": "/volunteer/id"
            // "status": "/volunteer/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/volunteers/${data.id}`, {
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
                    alertMessage('success', 'Volunteer updated successfully!');

                    PrintVolunteer(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- ADD TEXT ENDS HERE --}}
        {{-- CREATE NOTICE STARTS HERE --}}
        async function CreateVolunteer(data) {
            // var data = {
            // "title": "NOTICE HERE 4",
            // "name": "DESCRIPTION",
            // "date": "2024-10-13",
            // "contents": "234",
            // "href": "/volunteer/id"
            // "status": "/volunteer/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/volunteers`, {
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

                    PrintVolunteer(0);
                    alertMessage('info', 'Please update volunteer data!');



                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });



        }
        {{-- CREATE NOTICE ENDS HERE --}}
        async function PrintVolunteer(index) {
            await fetch('http://127.0.0.1:8000/api/volunteers/')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // this will make table body empty
                    $('#volunteer-table-body').html('');
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
                    PrintVolunteer(count);
                } else {
                    count -= 10;
                    PrintVolunteer(count);
                }
            })
            $('.nav-buttons li button[aria-label="Next"]').click(function() {

                count += 10;
                PrintVolunteer(count);
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
                CreateVolunteer(sampledata);


            })

            PrintVolunteer(count);


        });
    </script>
@endsection

@push('script')
    $('.volunteers').children('span').removeClass('hidden');
    $('.volunteers').children('a').addClass('text-gray-800');
@endpush

@push('script')
    $('.forms').children('span').removeClass('hidden');
    $('.forms').children('a').addClass('text-gray-800');
    $('.forms > ul').toggleClass('hidden');
    $('.forms > ul > li:nth-child(1)').css('color', '#9333EA');
@endpush
