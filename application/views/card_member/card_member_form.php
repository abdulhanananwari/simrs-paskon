<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <h2 style="margin-top:0px">Card_member <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Type <?php echo form_error('type') ?></label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="<?php echo $type; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('card_member') ?>" class="btn btn-default">Cancel</a>
	</form>
                </div>
            </div>
        </div>
    </section>
</div>
        