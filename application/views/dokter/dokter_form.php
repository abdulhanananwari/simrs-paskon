<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <h2 style="margin-top:0px">Dokter Baru</h2>
                    <form action="<?php echo $action; ?>" method="post">
                    <div class="form-group">
                        <label for="varchar">Nama <?php echo form_error('name') ?></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Spesialist <?php echo form_error('spesialist') ?></label>
                        <input type="text" class="form-control" name="spesialist" id="spesialist" placeholder="Spesialist" value="<?php echo $spesialist; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Active <?php echo form_error('active') ?></label>
                        <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?php echo $active; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Foto <?php echo form_error('image') ?></label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Image" value="<?php echo $image; ?>" />
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                    <a href="<?php echo site_url('dokter') ?>" class="btn btn-default">Cancel</a>
                </form>
                </div>
            </div>
        </div>
    </section>
</div>
       