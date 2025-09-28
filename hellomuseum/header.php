

<header>
<nav class="navbar navbar-expand-lg mynav p-1 p-md-3">
  <div class="container-fluid">
    <a class="navbar-brand brand" href="#">Hello, Museum!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" style="color:#fff; font-size:28px;" aria-label="Toggle navigation">
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>    </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 me-0 me-md-5">


        <!--with echo statement-->
        <li class="nav-item px-2">
          <a href="index.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){
            echo "active";
          }
          else{
            echo "";
          } ?>">Home</a>
        </li>

        <!--shorter without echo statement-->
        <li class="nav-item px-2">
          <a href="events.php" class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="events.php")?"active":""; ?>">Events</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle ps-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Exhibitions
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="exhibits.php">Events 1</a></li>
            <li><a class="dropdown-item" href="exhibitstwo.php">Events 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="exhibitsthree.php">Events 3</a></li>
          </ul>
        </li>
      
          <!--shorter without echo statement-->
        <li class="nav-item px-2">
          <a href="contact.php" class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="contact.php")?"active":""; ?>">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
 </nav>
</header>
<script type="text/javascript">
  

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

</script>