

<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
        </script>


<span class="float-right">
<a class="btn btn-success" href="<?php echo base_url('home/spreadhseet_format_download'); ?>" target="_blank">Download Excel Format</a>
<a class="btn btn-info" href="<?php echo base_url('home/spreadsheet_export'); ?>" target="_blank">Download Excel Data</a>
</span>
</h2>
<hr>
<?php
if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
}
?>
<form method="post" action="<?php echo base_url('home/spreadsheet_import'); ?>" enctype="multipart/form-data">
  <div class="form-group">
    <input type="file" name="upload_file" class="form-control" placeholder="Enter Name" id="upload_file" required>
  </div>
  <div class="form-group">
    <input type="submit" name="submit" class="btn btn-primary">
  </div>
</form>

</div>
</div>
