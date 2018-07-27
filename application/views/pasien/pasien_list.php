<link href="/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<div class="container">
<section class="content">
    <div class="table-responsive">
      <table id="table" class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width:100%">
          <thead>
              <th>Id</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>NO Telephone</th>
              <th>Action</th>
          </thead>
          <tbody>
          </tbody>
      </table>
    </div>
</section>
</div>
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<script src="/assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src=/assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="/assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="/assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="/assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="/assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="/assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

      $("#table").DataTable({
          "bProcessing": true,
          "sAjaxSource": "<?php echo base_url();?>pasien/list",
        });  

   $("#reset").click(function() {
        $(':input','#kategori').val("");
    });
    

});
function edit_category(id){
    window.location.href= "<?php echo base_url()?>pasien/read/" + id
}
function delete_category(id){
    if(confirm('Yakin mau hapus produk ini?')){
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url()?>pasien/delete/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                toastr.success('Data Berhasil Dihapus',{timeOut: 1000});
                window.location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
    }
}
</script>