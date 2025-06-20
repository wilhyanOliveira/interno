document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.submenu-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            const submenu = this.parentElement.querySelector('.submenu');
            submenu.classList.toggle('ativo');
        });
    });
});