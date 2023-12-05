<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<!-- Your page content goes here -->

<script>

    function updatePage() {
        var token = "14|aGJ7I45i6fTY2ubsDpwsHAzPHLKPv86mEjSAig8C";
        var apiUrl = "http://www.pruuf-1.0.test/api/updatePage";

        // Get the current URL
        var currentUrl = window.location.href;

        // Request data
        var requestData = {
            currentUrl: currentUrl
        };

        // AJAX request using jQuery
        $.ajax({
            url: apiUrl,
            type: "POST",
            headers: {
                "Authorization": "Bearer " + token,
                "Content-Type": "application/json"
            },
            data: JSON.stringify(requestData), // Include the current URL in the request body
            dataType: "json",
            success: function (data) {
                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Log the error details for debugging
                console.error('There was a problem with the AJAX request:', textStatus, errorThrown);
                console.error('Response:', jqXHR.responseText); // Log the response for debugging
            }
        });
    }

    // Call the updatePage function when the page loads
    document.addEventListener("DOMContentLoaded", function () {
        updatePage();
    });


</script>

</body>
</html>
