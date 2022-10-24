<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- Bootstrap CDN -->

<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<!-- Wow Js CDN -->
<script>
        const CurrentLocation = location.href;
const menuItem = document.querySelectorAll('.normal-nav-items .menu');
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === CurrentLocation) {
        menuItem[i].className = "active"; 
    }
}
</script>