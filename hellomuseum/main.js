//highlight active dropdown menu  

document.addEventListener('DOMContentLoaded', function () {
  const page = location.pathname.slice(1) || 'index.html';
  const dropdowns = document.querySelectorAll('.dropdown-toggle');

  dropdowns.forEach((dropdown) => {
    const dropdownMenu = dropdown.nextElementSibling;
    if (dropdownMenu && dropdownMenu.classList.contains('dropdown-menu')) {
      const menuLinks = dropdownMenu.querySelectorAll(
        '.dropdown-item:not([href="#"])'
      );

      menuLinks.forEach((link) => {
        if (link.pathname.slice(1) === page) {
          link.classList.add('active');
          dropdown.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      });
    }
  });
});

