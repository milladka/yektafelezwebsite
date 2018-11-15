</main>
@include('inc.footer')
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.varagh-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }]
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.tirahan-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.milgerd-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.profil-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.nabshi-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.saier-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 4000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.posts').slick({
            rtl: true,
            dots: true,
            arrows: false,
            focusOnSelect: true
        });
    });
</script>
</body>
</html>
