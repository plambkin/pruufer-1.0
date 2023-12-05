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

    $(document).ready(function () {
        // Fetch the user's API token and current URL from the backend
        var userToken = "19|IxHiKk9wZlKPg5tbj6ZnHJplfHmgiXULFPMEquD8"; // Replace with your method to fetch the user's token
        var currentUrl = window.location.href;

        // API endpoint URL
        var apiUrl = "http://www.pruuf-1.0.test/api/updatePage";

        // Request data
        var requestData = {
            url: currentUrl
        };

        // AJAX request using jQuery
        $.ajax({
            url: apiUrl,
            type: "POST",
            headers: {
                "Authorization": "Bearer " + userToken,
                "Content-Type": "application/json"
            },
            data: JSON.stringify(requestData),
            dataType: "json",
            success: function (data) {
                console.log(data);
                // Handle success if needed
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('There was a problem with the AJAX request:', textStatus, errorThrown);
                console.error('Response:', jqXHR.responseText);
                // Handle errors if needed
            }
        });
    });


</script>

</body>
</html>
