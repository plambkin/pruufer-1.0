<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Include jQuery from CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <div class="flex justify-center mb-10 mr-10 ml-10 pl-10 pr-10">


        <div class="mb-4 mr-10">
            <!-- Name Input -->
            <label class="block font-medium text-sm text-gray-700" for="name"> Name</label>
            <input type="text" id="name" name="name" value="{{ $name ?? '' }}"
                   class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300
                    focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
        </div>

        <div class="mb-4 ml-10 mr-10">
            <!-- API Token Input -->
            <label class="block font-medium text-sm text-gray-700" for="api_token">API Token</label>
            <input type="text" id="api_token" name="api_token" value="{{ $token ?? '' }}"
                   class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
        </div>

    </div>

    <div class="flex justify-between mb-10 mt-6 mr-10 ml-10 pl-3 pr-4">

        <div>
            <label class="block font-medium text-sm text-gray-700" for="api_token">Code 1</label>

            <textarea id="textarea1"
                      class="border p-2 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                rows="4" placeholder="JavaScript Code 1"> <script>document.addEventListener("DOMContentLoaded", function () {
                        var token = "{{ $token ?? '' }}";
                        var apiUrl = "http://www.pruuf-1.0.test/api/updatePage";
                        $.ajax({
                            url: apiUrl,
                            type: "POST",
                            headers: {
                                "Authorization": "Bearer " + token,
                                "Content-Type": "application/json"
                            },
                            data: JSON.stringify({currentUrl: window.location.href}),
                            dataType: "json",
                            success: console.log,
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.error('AJAX request error:', textStatus, errorThrown);
                                console.error('Response:', jqXHR.responseText);
                            }
                        });
                    });</script>
            </textarea>
            <button class="copy-btn bg-gray-500 text-black px-4 py-2 rounded-md focus:outline-none" data-textarea="textarea1" >Copy Text</button>

        </div>



        <div>

            <label class="block font-medium text-sm text-gray-700" for="api_token">Code 2</label>

            <textarea id="textarea2"
                      class="border p-2 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                rows="4" placeholder="JavaScript Code 2">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://www.pruuf.app/css/normalise.css">
    <link rel="stylesheet" type="text/css" href="https://www.pruuf.app/css/pruuf.css">

<div
    class="notification-container-spec fixed top-0 left-0 ml-12 mr-12 "><img
        src="https://uploads-ssl.webflow.com/59318798d83bff2781822428/5e0be3423f3d956e58a20e2d_Hot%20Streaks%20Icon%20(1).svg"
        alt="Hot Streaks Icon">
    <div class="notification-text-spec ">
        <div><strong class="dark-bold-text-spec">

                <script>
                    // Replace 'YOUR_API_TOKEN' with your actual API token
                    const apiToken = "{{ $token ?? '' }}";

                    // Replace 'YOUR_CURRENT_URL' with the current URL or get it dynamically if needed
                    var currentUrl = window.location.href;

                    // Make the API call
                    $.ajax({
                        url: `/api/getEnrolls24Gamma`,
                        type: 'GET',
                        headers: {
                            Authorization: `Bearer ${apiToken}`,
                        },
                        success: function (response) {
                            const {number, text1, text2} = response;

                            // Use the response data in your Blade template
                            $('#numberContainer').text(number);
                            $('#text1Container').text(text1);
                            $('#text2Container').text(text2);
                        },
                        error: function (error) {
                            console.error('Error:', error);

                            // Handle errors and update UI accordingly
                        }
                    });
                </script>

                <span id="numberContainer"></span>
            people </strong> enrolled in a course
        </div>
        <div>in the last 24 hours</div>
        <div class="verified-container-spec"><img
                src="https://uploads-ssl.webflow.com/59318798d83bff2781822428/5e0be3421520077020700b59_Check%20Icon%20(1).svg"
                alt="Pulse Verified Check" class="verified-check-spec">
            <div>Verified by Pruuf</div>
        </div>
    </div>
</div>


<script>
    // You can use jQuery for any dynamic interactions
    // For example, you can hide the notification after a few seconds
    $(document).ready(function () {
        setTimeout(function () {
            $(".notification-container-spec").fadeOut(1000);
        }, 5000); // Hides the notification after 5 seconds
    });
</script>

            </textarea>

            <button class="copy-btn bg-gray-500 text-black px-4 py-2 rounded-md focus:outline-none" data-textarea="textarea2" >Copy Text</button>

        </div>

    </div>

    <script>
        $(document).ready(function () {
            $('.copy-btn').on('click', function () {
                // Get the ID of the corresponding textarea
                const textareaId = $(this).siblings('textarea').attr('id');

                // Select the corresponding textarea and copy its content
                const textarea = $('#' + textareaId);
                textarea.select();
                document.execCommand('copy');

                // Change button style and text
                const button = $(this);
                button.css('background-color', 'blue').text('Copied!');

                // Reset button style and text after 5 seconds
                setTimeout(function () {
                    button.css('background-color', 'bg-gray-500').text('Copy Text');
                }, 2000);
            });
        });
    </script>



</x-app-layout>
