<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="/frontend/assets/css/style.css" rel="stylesheet" />
    <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <title>Home - Kyle Beller</title>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container d-block">
                <div class="row align-items-center">
                    <div class="col-md-2 col-6">
                        <a class="navbar-brand" href="/"><img src="/frontend/assets/images/logo.png" alt="logo" class="logo"></a>
                    </div>
                    <div class="col-md-8">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about-us">About DJ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact-us">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <a href="/contact-us" class="request-btn">Request A Quote</a>
                    </div>
                    <div class="col-6 d-md-none">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end bg-secondary secondary-1" id="navbarOffcanvas" tabindex="-1"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <a class="navbar-brand" href="/"><img src="/frontend/assets/images/logo.png"
                                        alt="logo" class="logo"></a>
                                <button type="button" class="btn-close btn-close-white text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about">About DJ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact-us">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="footer-a">
            <div class="row">
                <div class="col-md-4">
                    <div class="menu-links">
                        <a href="/">Home</a>
                        <a href="/about-us">About Us</a>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="menu-links1">
                        <a href="/services">Services</a>
                        <a href="/contact-us">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-b">
            <img src="/frontend/assets/images/logo.png" class="footer-logo" />
        </div>
        <div class="footer-c">
            <div class="row align-items-end">
                <div class="col-md-4">
                    <p class="footer-e">Check us out on social media, and get in touch today to reserve your date!</p>
                </div>
                <div class="col-md-4">
                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="footer-f">©2024 Sound Choice DJ Services All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="/frontend/assets/js/script.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
$(document).ready(function() {
    $('#event-form').on('submit', function(e) {
        e.preventDefault(); // Form ke default submit ko rokta hai
        
        $.ajax({
            url: "{{ route('submit.event.form') }}",
            method: 'POST',
            // headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')}

            data: $(this).serialize(), // Form ke data ko serialize karta hai
            success: function(response) {
                toastr.success('Form submitted successfully!'); // Success message show karta hai
                $('#event-form')[0].reset(); // Form ko reset karta hai
            },
            error: function(xhr) {
                if (xhr.status === 422) { // Validation errors ke liye
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0]); // Har error ko show karta hai
                    });
                } else {
                    toastr.error('Something went wrong. Please try again.');
                }
            }
        });
    });
});
</script>
</html>