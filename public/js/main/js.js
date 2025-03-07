document.addEventListener("DOMContentLoaded", function () {
    // Toggle Dropdown Menu
    const menuIcon = document.querySelector(".menu-icon");
    const dropdownMenu = document.getElementById("dropdown-menu");

    if (menuIcon && dropdownMenu) {
        menuIcon.addEventListener("click", function () {
            dropdownMenu.classList.toggle("show");
        });

        // Ubah background dropdown saat menu diklik
        const dropdownLinks = dropdownMenu.querySelectorAll("a");
        dropdownLinks.forEach(link => {
            link.addEventListener("click", function () {
                dropdownMenu.style.backgroundColor = "#f0f0f0";
                setTimeout(() => {
                    dropdownMenu.style.backgroundColor = "white";
                }, 300);
            });
        });
    }

    // Fungsi Klik untuk Icon Cart
    const cartIcon = document.querySelector(".icon_cart");
    if (cartIcon) {
        cartIcon.addEventListener("click", function () {
            alert("Cart Clicked! Tambahkan logika lain di sini.");
        });
    }

    // Hover Effect pada Footer Icon
    const iconLinks = document.querySelectorAll('.icon-link');
    iconLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            const footerIcon = link.querySelector('.footer-icon');
            if (footerIcon) {
                footerIcon.classList.add('icon-hover');
            }
        });
        link.addEventListener('mouseleave', () => {
            const footerIcon = link.querySelector('.footer-icon');
            if (footerIcon) {
                footerIcon.classList.remove('icon-hover');
            }
        });
    });

    // Memutar video otomatis setelah halaman dimuat
    let video = document.querySelector(".background-video");
    if (video) {
        video.play().catch(error => console.log("Autoplay failed:", error));
    }

    // Product description toggle
    document.querySelectorAll('.description-toggle').forEach(button => {
        button.addEventListener('click', function () {
            const content = document.querySelector(this.dataset.target);
            if (content) {
                content.classList.toggle('active');
            }
            // Caret up and down toggle
            this.classList.toggle('active');
        });
    });

    // Toggle password visibility
    const togglePassword = document.getElementById('toggle-password');
    if (togglePassword) {
        togglePassword.addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const confirmPasswordField = document.getElementById('confirm-password');

            if (passwordField && confirmPasswordField) {
                // Toggle password visibility
                if (passwordField.type === "password" && confirmPasswordField.type === "password") {
                    passwordField.type = "text";
                    confirmPasswordField.type = "text";
                } else {
                    passwordField.type = "password";
                    confirmPasswordField.type = "password";
                }
            }
        });
    }

        const input = document.querySelector("#phone");
            window.intlTelInput(input, {
                initialCountry: "id",
                preferredCountries: ["id", "us", "gb"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });

    function updateDays() {
        const month = document.getElementById("month").value;
        const daySelect = document.getElementById("day");

        daySelect.innerHTML = '';


        let daysInMonth = 31;

        switch (month) {
            case "february":
                daysInMonth = 28;
                break;
            case "april":
            case "june":
            case "september":
            case "november":
                daysInMonth = 30;
                break;
        }
        
        for (let i = 1; i <= daysInMonth; i++) {
            const option = document.createElement("option");
            option.value = i;
            option.textContent = i;
            daySelect.appendChild(option);
        }
    }


    document.addEventListener("DOMContentLoaded", function() {
        updateDays();
        document.getElementById("month").addEventListener("change", updateDays);
    });

});