<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pasien Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Address</td><td><?php echo $address; ?></td></tr>
	    <tr><td>Dob</td><td><?php echo $dob; ?></td></tr>
	    <tr><td>Place Dob</td><td><?php echo $place_dob; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Phone Number</td><td><?php echo $phone_number; ?></td></tr>
	    <tr><td>Image</td><td><?php echo $image; ?></td></tr>
	    <tr><td>Pasien Type</td><td><?php echo $pasien_type; ?></td></tr>
	    <tr><td>Card Member Id</td><td><?php echo $card_member_id; ?></td></tr>
	    <tr><td>Rm Number</td><td><?php echo $rm_number; ?></td></tr>
	    <tr><td>Gender</td><td><?php echo $gender; ?></td></tr>
	    <tr><td>Religion</td><td><?php echo $religion; ?></td></tr>
	    <tr><td>Profession</td><td><?php echo $profession; ?></td></tr>
	    <tr><td>Card Type</td><td><?php echo $card_type; ?></td></tr>
	    <tr><td>Complaint</td><td><?php echo $complaint; ?></td></tr>
	    <tr><td>Exp Card Member</td><td><?php echo $exp_card_member; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td>Dokter Id</td><td><?php echo $dokter_id; ?></td></tr>
	    <tr><td>Diagnosis</td><td><?php echo $diagnosis; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pasien') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>