<div class="content-wrapper">
    <section class="content">
    <div class="container-fluid">
        <h2 style="margin-top:0px">Pasien <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
        
	    <div class="form-group">
            <label for="formGroupExampleInput" class="bmd-label-floating">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="longtext">Address <?php echo form_error('address') ?></label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $address; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Dob <?php echo form_error('dob') ?></label>
            <input type="text" class="form-control" name="dob" id="dob" placeholder="Dob" value="<?php echo $dob; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Place Dob <?php echo form_error('place_dob') ?></label>
            <input type="text" class="form-control" name="place_dob" id="place_dob" placeholder="Place Dob" value="<?php echo $place_dob; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Phone Number <?php echo form_error('phone_number') ?></label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" value="<?php echo $phone_number; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image <?php echo form_error('image') ?></label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="<?php echo $image; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pasien Type <?php echo form_error('pasien_type') ?></label>
            <input type="text" class="form-control" name="pasien_type" id="pasien_type" placeholder="Pasien Type" value="<?php echo $pasien_type; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Card Member Id <?php echo form_error('card_member_id') ?></label>
            <input type="text" class="form-control" name="card_member_id" id="card_member_id" placeholder="Card Member Id" value="<?php echo $card_member_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Rm Number <?php echo form_error('rm_number') ?></label>
            <input type="text" class="form-control" name="rm_number" id="rm_number" placeholder="Rm Number" value="<?php echo $rm_number; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gender <?php echo form_error('gender') ?></label>
            <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender" value="<?php echo $gender; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Religion <?php echo form_error('religion') ?></label>
            <input type="text" class="form-control" name="religion" id="religion" placeholder="Religion" value="<?php echo $religion; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Profession <?php echo form_error('profession') ?></label>
            <input type="text" class="form-control" name="profession" id="profession" placeholder="Profession" value="<?php echo $profession; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Card Type <?php echo form_error('card_type') ?></label>
            <input type="text" class="form-control" name="card_type" id="card_type" placeholder="Card Type" value="<?php echo $card_type; ?>" />
        </div>
	    <div class="form-group">
            <label for="longtext">Complaint <?php echo form_error('complaint') ?></label>
            <input type="text" class="form-control" name="complaint" id="complaint" placeholder="Complaint" value="<?php echo $complaint; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Exp Card Member <?php echo form_error('exp_card_member') ?></label>
            <input type="text" class="form-control" name="exp_card_member" id="exp_card_member" placeholder="Exp Card Member" value="<?php echo $exp_card_member; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Dokter Id <?php echo form_error('dokter_id') ?></label>
            <input type="text" class="form-control" name="dokter_id" id="dokter_id" placeholder="Dokter Id" value="<?php echo $dokter_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="mediumtext">Diagnosis <?php echo form_error('diagnosis') ?></label>
            <input type="text" class="form-control" name="diagnosis" id="diagnosis" placeholder="Diagnosis" value="<?php echo $diagnosis; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pasien') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
    </section>
    </div>