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
    // Function to update the page using the REST API
    function updatePage() {
        // Get the owner's token from Laravel Sanctum (replace 'YOUR_TOKEN' with the actual token)
        var token = '4|HoXyB2v7zKRD28tqmWVL5UvIKfRrrT8ibUTmXEbk';

        // Get the current page URL
        var currentPageUrl = window.location.href;

        // Your REST API endpoint
        var apiUrl = 'http://www.pruuf-1.0.test/api/updatePage'; // Update the port if needed

        // Make an AJAX request
        $.ajax({
            type: 'POST',
            url: apiUrl,
            data: {
                token: token,
                pageUrl: currentPageUrl
            },
            success: function (response) {
                // Handle the success response from the server
                console.log('Page updated successfully:', response);
            },
            error: function (error) {
                // Handle errors
                console.error('Error updating page:', error);
            }
        });
    }

    // Call the updatePage function when the page loads
    $(document).ready(function () {
        updatePage();
    });
</script>

</body>
</html>
