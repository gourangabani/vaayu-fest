<!-- bootstrap core js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- third party plugin js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- font awesome icons (free version) -->
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
<!-- gsap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.1/gsap.min.js"></script>
<!-- gsap scroll -->
<script src="<?php $_SERVER['DOCUMENT_ROOT'] . '/' . $base; ?>js/ScrollTrigger.js"></script>
<!-- gsap text -->
<script src="<?php $_SERVER['DOCUMENT_ROOT'] . '/' . $base; ?>js/TextPlugin.js"></script>
<!-- vendor js -->
<script src="<?php $_SERVER['DOCUMENT_ROOT'] . '/' . $base; ?>js/vendor.js"></script>
<!-- custom js -->
<script src="<?php $_SERVER['DOCUMENT_ROOT'] . '/' . $base; ?>js/custom.js"></script>
<!-- not to be cached -->
<script>
    function Modal() {
        var custom_modal = $('#freshers-modal');
        setTimeout(function() {
            custom_modal.modal();
        }, 10000);
    }

    function setModal() {
        if (!sessionStorage.getItem('doNotShowModal')) {
            sessionStorage.setItem('doNotShowModal', true);
            Modal();
        } else {
            $('.freshers-modal').hide();
        }
    };

    setModal();
</script>