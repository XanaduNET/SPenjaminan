<div>
</div>
<footer>

</footer>
</div>
</div>
<!-- js -->
<script src="<?=base_url('assets/');?>vendors/scripts/core.js"></script>
<script src="<?=base_url('assets/');?>vendors/scripts/script.min.js"></script>
<script src="<?=base_url('assets/');?>vendors/scripts/process.js"></script>
<script src="<?=base_url('assets/');?>vendors/scripts/layout-settings.js"></script>
<script src="<?=base_url('assets/');?>src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="<?=base_url('assets/');?>src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/');?>src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/');?>src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets/');?>src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/');?>vendors/scripts/dashboard.js"></script>

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


</body>

</html>