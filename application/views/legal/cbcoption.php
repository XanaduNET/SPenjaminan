
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <div class="row">
        <div class="col-lg-6">

    <script type="text/javascript">
    $(window).on('load', function() {
        $('#cbcoption').modal('show');
    });
</script>


<!-- Modal Upload Doc -->
<div class="modal fade" id="cbcoption" role="dialog">
            <div class="modal-dialog modal-sm vertical-align-center">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Case By Case</h4>
                </div>
                <div class="modal-body">
                <center>
                <a class="btn btn-outline-primary" href=<?=base_url("legal/casebycaseproduktif/");?>>Case By Case Produktif</a> <br><br>/<br><br>
                <a class="btn btn-outline-info" href=<?=base_url("legal/casebycase/");?>>Case By Case Konsumtif</a>
                </div>
</center>
                <div class="modal-footer">

                </div>
              </div>
            </div>
        </div>
<!-- End Modal -->


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
</div>