@extends('dashboard.layout')

@section('title', $title)
@section('file', $title)

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Testimonials
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
                        <tbody id="testimonial-table-body" class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
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
    </main>
    <script>
        var count = 0;
        var selectedform = [];
        let currentDate = new Date();

        let year = currentDate.getFullYear();
        let month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
        let day = ("0" + currentDate.getDate()).slice(-2);

        let formattedDate = `${year}-${month}-${day}`;
        var sampledata = {
            "title": "ADD TEXT HERE",
            "name": "ADD TEXT HERE",
            "contents": "ADD TEXT HERE",
            "href": "https://",
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
                EditTestimonialRow(rowId);
            })
        }

        function deleteRow() {
            // onClick BTN DELETE ROW
            $('.delete-row-btn').click(function() {
                var rowId = $(this).parent().attr('data-for');
                alertMessage('delete', '');
                $('#delete-confirm-button').click(function() {
                    DeleteTestimonial(rowId);
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

                    DeleteTestimonials(data);
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
                $('#testimonial-table-body').append(`<tr row-id="${element.id}" class="text-gray-700 w-full dark:text-gray-400 testimonial-row">
                                    
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
        async function EditTestimonialRow(id) {
            var keys;
            var values;
            var dataToUpdate;
            await fetch('http://127.0.0.1:8000/api/testimonials/' + id)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {

                    var editRowData = data.data;
                    dataToUpdate = editRowData;

                    keys = Object.keys(editRowData);

                    values = Object.values(editRowData);




                    var isChecked = '';
                    if (editRowData.status == 'TRUE') {
                        isChecked = 'checked';
                    } else {
                        isChecked = '';
                    }
                    $(`tr[row-id="${id}"]`).html(`
                            <td></td>
                            <td class="px-4  max-w-sm truncate py-3">
                                    <div class="relative  h-8 mr-3 rounded-full md:block">
                                    ${editRowData.id}
                                    </div>
                            </td>`);


                    for (let i = 1; i < (values.length - 1); i++) {
                        const value = values[i];
                        const key = keys[i];
                        $(`tr[row-id="${id}"]`).append(`
                           
                           <td class="px-4  max-w-sm truncate py-3 text-sm">            
                              <input type="text" name="input_${key}_field_${id}" class="bg-gray-50  sm:max-w-sm  mb-1 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:w-56 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="${value}" value="${value}" required />
                            </td>
                          
                   `);

                    }


                    $(`tr[row-id="${id}"]`).append(`
                           
                            <td class="px-4  max-w-sm truncate py-3 text-sm">            
                                       <input type="checkbox" name="input_status_field_${editRowData.id}" ${isChecked} class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="${editRowData.status}"  />
                            </td>
                             <td data-for='${editRowData.id}' class="px-4  max-w-sm truncate py-3 text-xs action-btn">
                                <button
                                    class="px-2 py-1 update-row-btn cursor-pointer font-semibold leading-tight text-yellow-700  bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                                    Update
                                </button> &nbsp;
                                <button
                                    class="px-2 py-1 delete-row-btn cursor-pointer font-semibold leading-tight text-red-700  bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                    Delete
                                </button>
                            
                            </td>
                    `);




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

                UpdateTestimonial(dataToUpdate);

            })
            $('.delete-row-btn').click(function() {
                var rowId = $(this).parent().attr('data-for');
                alertMessage('delete', '');
                $('#delete-confirm-button').click(function() {
                    DeleteTestimonial(rowId);
                })
            })



        }

        // EDIT NOTICE BEFORE UPDATE ENDS HERE




        {{-- DELETE FUNCTION STARTS HERE --}}
        async function DeleteTestimonial(id) {
            var data = {
                "title": "NOTICE HERE 4",
                "name": "DESCRIPTION",
                "date": "2024-10-13",
                "contents": "234",
                "href": "/testimonial/id",
                "status": "TRUE",
            };
            await fetch(`http://127.0.0.1:8000/api/testimonials/${id}`, {
                    method: 'DELETE'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    alertMessage('success', 'One testimonial deleted');

                    PrintTestimonial(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- DELETE FUNCTION ENDS HERE --}}
        // DELETE FUNCTION BY MULTIPLE IDS
        async function DeleteTestimonials(data) {
            // var data = {
            //     "title": "NOTICE HERE 4",
            //     "name": "DESCRIPTION",
            //     "date": "2024-10-13",
            //     "contents": "234",
            //     "href": "/testimonial/id"
            //     "status": "/testimonial/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/testimonials`, {
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
                    alertMessage('success', 'Selected Testimonials deleted!');

                    PrintTestimonial(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- ADD TEXT STARTS HERE --}}
        async function UpdateTestimonial(data) {
            // var data = {
            // "id": "1",
            // "title": "NOTICE HERE 4",
            // "name": "DESCRIPTION",
            // "date": "2024-10-13",
            // "contents": "234",
            // "href": "/testimonial/id"
            // "status": "/testimonial/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/testimonials/${data.id}`, {
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
                    alertMessage('success', 'Testimonial updated successfully!');

                    PrintTestimonial(count);
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });

        }
        {{-- ADD TEXT ENDS HERE --}}
        {{-- CREATE NOTICE STARTS HERE --}}
        async function CreateTestimonial(data) {
            // var data = {
            // "title": "NOTICE HERE 4",
            // "name": "DESCRIPTION",
            // "date": "2024-10-13",
            // "contents": "234",
            // "href": "/testimonial/id"
            // "status": "/testimonial/id"
            // };
            await fetch(`http://127.0.0.1:8000/api/testimonials`, {
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

                    PrintTestimonial(0);
                    alertMessage('info', 'Please update testimonial data!');



                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });



        }
        {{-- CREATE NOTICE ENDS HERE --}}
        async function PrintTestimonial(index) {
            await fetch('http://127.0.0.1:8000/api/testimonials/')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // this will make table body empty
                    $('#testimonial-table-body').html('');
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
                    PrintTestimonial(count);
                } else {
                    count -= 10;
                    PrintTestimonial(count);
                }
            })
            $('.nav-buttons li button[aria-label="Next"]').click(function() {

                count += 10;
                PrintTestimonial(count);
            })


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
                CreateTestimonial(sampledata);


            })

            PrintTestimonial(count);


        });
    </script>
@endsection

@push('script')
    $('.components').children('span').removeClass('hidden');
    $('.components').children('a').addClass('text-gray-800');
    $('.components > ul').toggleClass('hidden');
    $('.components > ul > li:nth-child(3)').css('color', '#9333EA');
@endpush
