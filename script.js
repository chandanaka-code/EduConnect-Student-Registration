$(document).ready(function () {
    $("#registrationForm").on("submit", function (event) {
        let valid = true;
        $(".error").text("");
        $("input, select, textarea").removeClass("invalid");

        function showError(id, message) {
            $(id).addClass("invalid");
            $(id).closest(".field").find(".error").first().text(message);
            valid = false;
        }

        const name = $("#fullname").val().trim();
        const dob = $("#dob").val();
        const email = $("#email").val().trim();
        const phone = $("#phone").val().trim();
        const address = $("#address").val().trim();

        if (name.length < 3) showError("#fullname", "Enter at least 3 characters.");
        if (!dob) showError("#dob", "Please select your date of birth.");
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) showError("#email", "Enter a valid email address.");
        if (!/^[6-9][0-9]{9}$/.test(phone)) showError("#phone", "Enter a valid 10-digit Indian mobile number.");
        if (!$("input[name='gender']:checked").val()) {
            $("#genderError").text("Please select your gender.");
            valid = false;
        }
        if (address.length < 8) showError("#address", "Enter your complete address.");
        if (!$("#qualification").val()) showError("#qualification", "Select your qualification.");
        if (!$("#course").val()) showError("#course", "Select a course.");

        if (!valid) {
            event.preventDefault();
            $(".invalid").first().trigger("focus");
        }
    });

    $("#registrationForm").on("reset", function () {
        setTimeout(function () {
            $(".error").text("");
            $("input, select, textarea").removeClass("invalid");
        }, 0);
    });
});
