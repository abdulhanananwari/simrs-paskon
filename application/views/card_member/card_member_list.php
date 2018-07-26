
<div class="container">
<section class="content">
<button class="btn btn-secondary btn-sm btn-block" data-toggle="modal" data-target="#create-item" >Tambah Jenis Kartu</button>
    <br>
    <div class="table-responsive">
      <table id="table" class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width:100%">
          <thead>
              <th>Id</th>
              <th>Nama</th>
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
          "sAjaxSource": "<?php echo base_url();?>category/list",
        });  

        $addPanel = $("div#create-item");
        $addPanel.modal("show");

   $("#reset").click(function() {
        $(':input','#kategori').val("");
    });
});
function edit_category(id){
    $.ajax({
        url : "<?php echo base_url('category/get')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            var url = "<?php echo base_url();?>category/update_action/"
            $('[name="id"]').val(data.id);
            $('[name="name"]').val(data.name);
            $('#edit-category').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Kategori ' + '(' + data.id + ')'); // Set title to Bootstrap modal title
            $("#edit-category").find('form').attr('action',url + data.id);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
function delete_category(id){
    if(confirm('Yakin mau hapus produk ini?')){
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url()?>category/delete/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                toastr.success('Kategori Berhasil Dihapus',{timeOut: 1000});
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
<div class="modal fade bd-example-modal-lg"  id="create-item" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kartu</h5>
            <button type="button" id="reset" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form data-toggle="validator" id="kategori" action="<?php echo base_url();?>card_member/create_action" method="POST">
                <div class="form-group">
                    <label class="control-label" for="name">Nama Kartu</label>
                    <div class="form-line">
                        <input type="text" id="name" name="name" class="form-control" data-error="Nama Harap Diisi" required />
                    </div>
                    <div class="help-block with-errors"></div>
                      <label class="control-label" for="type">Type</label>

                    <div class="help-block with-errors"></div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn crud-submit btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg"  id="edit-category" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form data-toggle="validator" id="kategori" action="" method="POST">
                <div class="form-group">
                    <label class="control-label" for="name">Nama Kategori</label>
                    <input type="text" id="name" name="name" class="form-control" data-error="Nama Harap Diisi" required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn crud-submit btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
