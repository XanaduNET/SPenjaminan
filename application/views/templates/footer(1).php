<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; SIJR Jamkrida <?=date('Y');?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih Logout untuk mengakhiri session anda, Terimakasih! </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?=base_url('auth/logout');?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?=base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url('assets/');?>js/sb-admin-2.min.js"></script>

<script>
$('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
        url: "<?=base_url('admin/changeaccess');?>",
        type: 'post',
        data: {
            menuId: menuId,
            roleId: roleId
        },
        success: function() {
            document.location.href = "<?=base_url('admin/roleaccess/');?>" + roleId;
        }
    });
});
</script>

<!-- DROPDOWN -->
<script src="<?=base_url('assets/');?>js/jquery.min.js"></script>

<script>
$(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#loading").hide();
    $("#GPPid").change(function() { // Ketika user mengganti atau memilih data provinsi
        $("#PKSid").eq().hide(); // Sembunyikan dulu combobox kota nya
        $("#loading").show(); // Tampilkan loadingnya

        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "<?php echo base_url("index.php/Kredit/listPKS"); ?>", // Isi dengan url/path file php yang dituju
            data: {
                GPPid: $("#GPPid").val()
            }, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response) { // Ketika proses pengiriman berhasil
                $("#loading").hide(); // Sembunyikan loadingnya
                // set isi dari combobox kota
                // lalu munculkan kembali combobox kotanya
                $("#PKSid").html(response.list_pks).show();
            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError); // Munculkan alert error
            }
        });
    });
});
</script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>
<script src="<?=base_url('assets/');?>js/jquery-3.3.1.js" ">
</script>
<script src=" <?=base_url('assets/');?>js/bootstrap.js" ">
</script>
<script src=" <?=base_url('assets/');?>js/jquery-ui.js" ">
</script>


<!-- Cari PP -->


<script type=" text/javascript">
$(document).ready(function() {

    $('#PPnama').autocomplete({
        source: "<?php echo site_url('Kredit/autocompletePP'); ?>",

        select: function(event, ui) {
            $('[name="PPnama"]').val(ui.item.label);
            $('[name="PPalamat"]').val(ui.item.description);
            $('[name="PPid"]').val(ui.item.id);
        }
    });

});
</script>

<!-- Page level plugins -->
<script src="<?=base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?=base_url('assets/');?>js/demo/datatables-demo.js"></script>


<!-- End Cari PP-->


</body>

</html>