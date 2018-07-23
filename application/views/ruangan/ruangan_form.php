<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <h2 style="margin-top:0px">Ruangan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Capacity <?php echo form_error('capacity') ?></label>
            <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Capacity" value="<?php echo $capacity; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ruangan') ?>" class="btn btn-default">Cancel</a>
	</form>
                </div>
            </div>
        </div>
    </section>
</div>