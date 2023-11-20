<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">

    </div>
</footer>
</div>
</div>

<script src="<?= base_url('assets/') ?>https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>

<script src="<?= base_url('assets/') ?>js/scripts.js"></script>

<script src="<?= base_url('assets/') ?>https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
    crossorigin="anonymous"></script>

<script src="<?= base_url('assets/') ?>assets/demo/chart-area-demo.js"></script>

<script src="<?= base_url('assets/') ?>assets/demo/chart-bar-demo.js"></script>

<script
    src="<?= base_url('assets/') ?>https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>

<script src="<?= base_url('assets/') ?>js/datatables-simple-demo.js"></script>
<script>
    $('.custom-file-input').om('change', fynction()){
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    }
</script>
</body>

</html>