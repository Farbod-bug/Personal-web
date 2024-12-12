 <!-- ==================== Start Footer ==================== -->
 <footer>
    <div class="container pb-30 pt-30 bord-thin-top">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="fz-13">
                        <span class="underline main-color">
                            💚 Powered by SilentDev
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==================== End Footer ==================== -->


<!-- jQuery -->
<script src="./js/jquery-3.6.0.min.js">
</script>
<script src="./js/jquery-migrate-3.4.0.min.js">
</script>
<!-- plugins -->
<script src="./js/plugins.js">
</script>
<!-- custom scripts -->
<script src="./js/scripts.js">
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast',
        },
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
    })

    @if (session('success'))
        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}',
        })
    @elseif (session('error'))
        Toast.fire({
            icon: 'error',
            title: '{{ session('error') }}',
        })
    @elseif (session('warning'))
        Toast.fire({
            icon: 'warning',
            title: '{{ session('warning') }}',
        })
    @endif
</script>

</body>

</html>
