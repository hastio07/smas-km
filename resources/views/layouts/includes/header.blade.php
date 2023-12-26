   <header>
       <nav class="navbar navbar-expand-lg nav-style fixed-top bg-body-tertiary">
           <div class="container-fluid container">
               <a class="navbar-brand" href="/">
                   <div class="d-flex align-items-center gap-3">
                       <img alt="Logo" class="d-inline-block align-text-top" height="60" src="{{ asset('assets/image/logo.jpg') }}" width="60">
                       <div class="name-sch ml-2">
                           <h5 class="fw-bold mb-0">SMAS Kartikatama</h5>
                           <p class="mb-0">Kota Metro</p>
                       </div>
                   </div>
               </a>
               <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler border-0" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" type="button">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="navbar-collapse collapse text-center" id="navbarNavDropdown">
                   <ul class="navbar-nav ms-auto d-flex align-items-center">
                       <li class="nav-item position-relative" style="margin-right: 20px;">
                           <a aria-current="page" class="nav-link active" href="/">HOME</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link text-decoration-none text-dark position-relative" href="/ppdb">PPDB</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link text-decoration-none text-dark position-relative" href="/profil">PROFIL</a>
                       </li>
                       <li class="nav-item dropdown">
                           <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                               Dropdown
                           </a>
                           <ul class="dropdown-menu position-absolute bg-white">
                               <li><a class="dropdown-item text-decoration-none text-dark" href="#">Action</a></li>
                               <li><a class="dropdown-item text-decoration-none text-dark" href="#">Another action</a></li>
                               <li>
                                   <hr class="dropdown-divider">
                               </li>
                               <li><a class="dropdown-item" href="#">Something else here</a></li>
                           </ul>
                       </li>
                       @auth($guard)
                           <li class="nav-item">
                               <a class="nav-link" href="/{{ $guard }}">{{ auth($guard)->user()->name }}</a>
                           </li>
                       @endauth
                       @unless (auth($guard)->check())
                           <li class="nav-item">
                               <a class="btn bg-smas ms-3" href="/login/user">LOGIN</a>
                           </li>
                       @endunless
                   </ul>
               </div>
           </div>
       </nav>
   </header>
   <script>
       // Add this JavaScript for toggling dropdown on click
       document.addEventListener("DOMContentLoaded", function() {
           var dropdowns = document.querySelectorAll('.dropdown');

           dropdowns.forEach(function(dropdown) {
               dropdown.addEventListener('click', function() {
                   dropdown.classList.toggle('show');
               });
           });

           window.onclick = function(event) {
               if (!event.target.matches('.dropdown-toggle')) {
                   dropdowns.forEach(function(dropdown) {
                       if (dropdown.classList.contains('show')) {
                           dropdown.classList.remove('show');
                       }
                   });
               }
           }
       });
   </script>
