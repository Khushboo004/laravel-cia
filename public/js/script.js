function myFunction() {
    var x = document.getElementById("myNavbar");
    if (x.className === "header_navbar") {
        x.className += " responsive";
    } else {
        x.className = "header_navbar";
    }
}


// Function to display errors for a specific field
function displayError(field, error) {
    var errorHtml = '<div class="text-danger">';
    if (error.responseJSON.errors.hasOwnProperty(field)) {
        errorHtml += '<p>' + error.responseJSON.errors[field][0] + '</p>';
    }
    errorHtml += '</div>';
    $('#' + field + '_errors').html(errorHtml);

    // Clear error when the field is clicked or changed
    $('#' + field).on('input change', function() {
        $('#' + field + '_errors').html('');
    });

    // Check for radio buttons and clear errors when selected
    if (field === 'terms_acknowledged' || field === 'privacy_acknowledged') {
        $('input[name="' + field + '"]').on('change', function() {
            $('#' + field + '_errors').html('');
        });
    }
}
