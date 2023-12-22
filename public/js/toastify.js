// Add this JavaScript to your script

const icon_success = "<i class='fas fa-check-circle'></i>";
const icon_info = "<i class='fas fa-info-circle'></i>";
const icon_error = "<i class='fas fa-times-circle'></i>";
const icon_warning = "<i class='fas fa-exclamation-circle'></i>";

const getToastIcon = (status) => {
    switch (status) {
        case "success":
            return '<span style="color: green;">' + icon_success + "</span>";
        case "info":
            return '<span style="color: blue;">' + icon_info + "</span>";
        case "error":
            return '<span style="color: red;">' + icon_error + "</span>";
        case "warning":
            return '<span style="color: yellow;">' + icon_warning + "</span>";
        default:
            return "";
    }
};

const createToastElement = (status, message, dismiss, animation) => {
    const toast = document.createElement("div");

    toast.classList.add("toast_wrapper");
    toast.innerHTML = `
        <div class="flexibles">
            <div class="toast_icon" id="toast_icon">
                ${getToastIcon(status)}
            </div>
            <div class="toast_content">
            <p class="toast_status" id="toast_status">${capitalizeFirstLetter(status)}</p>
                           <p class="toast_message" id="toast_message">${message}</p>
            </div>
            <i class="fas fa-times toast_close" id="toast_close"></i>
        </div>
    `;

    document.getElementById("cv_upload_toastify").appendChild(toast);

    setTimeout(() => {
        toast.classList.add("active");
        setTimeout(() => {
            toast.classList.remove("active");
            setTimeout(() => {
                toast.remove();
            }, 250);
        }, dismiss);
    });

    toast.style.borderLeftColor = getBorderColor(status);
};

const getBorderColor = (status) => {
    switch (status) {
        case "success":
            return "green";
        case "info":
            return "blue";
        case "error":
            return "red";
        case "warning":
            return "yellow";
        default:
            return "";
    }
};

/**
 * Function to show a toast message
 */
const toast_function = (status, message, dismiss = 5000, animation = "5000ms") => {
    createToastElement(status, message, dismiss, animation);
};

/**
 * Add an event listener to close a toast when the X button is clicked
 */
document.addEventListener("click", (e) => {
    if (e.target.classList.contains("toast_close")) {
        const toast = e.target.closest(".toast_wrapper");
        if (toast) {
            toast.classList.remove("active");
            setTimeout(() => {
                toast.remove();
            }, 250);
        }
    }
});

// Function to capitalize the first letter of a string
const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
};
