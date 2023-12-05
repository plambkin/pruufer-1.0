<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://www.pruuf.app/css/normalise.css">
    <link rel="stylesheet" type="text/css" href="https://www.pruuf.app/css/pruuf.css">

</head>
<body>

<!-- Your page content goes here -->

<!-- Your Blade view content -->

<div
    class="notification-container-spec fixed top-0 left-0 ml-12 mr-12 "><img
        src="https://uploads-ssl.webflow.com/59318798d83bff2781822428/5e0be3423f3d956e58a20e2d_Hot%20Streaks%20Icon%20(1).svg"
        alt="Hot Streaks Icon">
    <div class="notification-text-spec ">
        <div><strong class="dark-bold-text-spec">

                <script>
                    // Replace 'YOUR_API_TOKEN' with your actual API token
                    const apiToken = '19|IxHiKk9wZlKPg5tbj6ZnHJplfHmgiXULFPMEquD8';

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


<!-- Use the data in your Blade template -->
{{--<div>
    <p>Number: <span id="numberContainer"></span></p>
    <p>Text 1: <span id="text1Container"></span></p>
    <p>Text 2: <span id="text2Container"></span></p>
</div>--}}


</body>
</html>
