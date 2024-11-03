
document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggle = document.getElementById('navbarDropdown');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Toggle the dropdown menu
    dropdownToggle.addEventListener('click', function (e) {
        e.preventDefault();
        // Toggle the 'show' class to display the dropdown menu
        dropdownMenu.classList.toggle('show');
    });

    // Close the dropdown menu if clicked outside
    document.addEventListener('click', function (e) {
        if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});