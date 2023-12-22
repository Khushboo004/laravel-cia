const createSweetAlert = (status, message) => {
    let icon, iconColor;

    switch (status) {
        case "success":
            icon = "<i class='fa fa-check-circle' aria-hidden='true'></i>";
            iconColor = "green";
            break;
        case "info":
            icon = "<i class='fas fa-info-circle'></i>";
            iconColor = "blue";
            break;
        case "error":
            icon = "<i class='fas fa-times-circle'></i>";
            iconColor = "red";
            break;
        case "warning":
            icon = "<i class='fas fa-exclamation-circle'></i>";
            iconColor = "yellow";
            break;
        default:
            icon = "info";
            iconColor = "blue";
            break;
    }

    Swal.fire({
        icon,
        title: `<span style="color: ${iconColor};">${icon}</span> `,
        text: message,
        confirmButtonColor: iconColor,
    });
};

// Example of using the createSweetAlert function
const sweetAlertFunction = (status, message) => {
    createSweetAlert(status, message);
};

// Usage example
