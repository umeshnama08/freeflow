<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Slick Slider CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet">
</head>
<body>
    @include('navbar')

    <section class="container my-5">
        <h2 class="text-center mb-4">Our Services</h2>

        <!-- Slick Slider for Services -->
        <div class="service-slider">
            <div class="service-card">
                <img src="https://via.placeholder.com/300" alt="Service 1" class="img-fluid">
                <h5 class="text-center mt-3">Service 1</h5>
                <p class="text-center">Expert consultation and tailored business strategies to achieve success.</p>
            </div>
            <div class="service-card">
                <img src="https://via.placeholder.com/300" alt="Service 2" class="img-fluid">
                <h5 class="text-center mt-3">Service 2</h5>
                <p class="text-center">Comprehensive digital marketing solutions to boost your brand's visibility.</p>
            </div>
            <div class="service-card">
                <img src="https://via.placeholder.com/300" alt="Service 3" class="img-fluid">
                <h5 class="text-center mt-3">Service 3</h5>
                <p class="text-center">Custom software development designed to streamline your operations.</p>
            </div>
            <div class="service-card">
                <img src="https://via.placeholder.com/300" alt="Service 4" class="img-fluid">
                <h5 class="text-center mt-3">Service 4</h5>
                <p class="text-center">Build innovative solutions for complex business challenges.</p>
            </div>
        </div>
    </section>

    @include('footer')

    <!-- jQuery (necessary for Slick Slider) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Slick Slider JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!-- Initialize Slick Slider -->
    <script>
        $(document).ready(function(){
            $('.service-slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    </script>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
