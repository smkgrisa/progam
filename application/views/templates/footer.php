<!-- footer content -->
<footer>
    <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>template/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url() ?>template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>template/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url() ?>template/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?= base_url() ?>template/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?= base_url() ?>template/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url() ?>template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url() ?>template/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?= base_url() ?>template/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?= base_url() ?>template/vendors/Flot/jquery.flot.js"></script>
<script src="<?= base_url() ?>template/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?= base_url() ?>template/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?= base_url() ?>template/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?= base_url() ?>template/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?= base_url() ?>template/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?= base_url() ?>template/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?= base_url() ?>template/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?= base_url() ?>template/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>template/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?= base_url() ?>template/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url() ?>template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url() ?>template/vendors/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url() ?>template/build/js/custom.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>

<script>
    const flasData = $('.flash-data').data('flashdata');
    const flasDataStatus = $('.flash-data').data('fdstatus');

    if (flasData) {
        Swal.fire({
            icon: flasDataStatus,
            title: flasDataStatus,
            text: flasData,
            timer: 2000
        });
    }

    function confirmDelete(data) {
        Swal.fire({
            title: "Anda yakin?",
            text: "Data akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya,Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = data;
            }
        });
    }
</script>

<!-- </body>

</html> -->