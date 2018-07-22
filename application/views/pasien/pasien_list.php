<div class="content-wrapper">
    <section class="content">
    <div class="container-fluid">
        <h2 style="margin-top:0px">Pasien List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pasien/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pasien/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pasien'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Name</th>
		<th>Address</th>
		<th>Dob</th>
		<th>Place Dob</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Image</th>
		<th>Pasien Type</th>
		<th>Card Member Id</th>
		<th>Rm Number</th>
		<th>Gender</th>
		<th>Religion</th>
		<th>Profession</th>
		<th>Card Type</th>
		<th>Complaint</th>
		<th>Exp Card Member</th>
		<th>Created At</th>
		<th>Dokter Id</th>
		<th>Diagnosis</th>
		<th>Action</th>
            </tr><?php
            foreach ($pasien_data as $pasien)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pasien->name ?></td>
			<td><?php echo $pasien->address ?></td>
			<td><?php echo $pasien->dob ?></td>
			<td><?php echo $pasien->place_dob ?></td>
			<td><?php echo $pasien->email ?></td>
			<td><?php echo $pasien->phone_number ?></td>
			<td><?php echo $pasien->image ?></td>
			<td><?php echo $pasien->pasien_type ?></td>
			<td><?php echo $pasien->card_member_id ?></td>
			<td><?php echo $pasien->rm_number ?></td>
			<td><?php echo $pasien->gender ?></td>
			<td><?php echo $pasien->religion ?></td>
			<td><?php echo $pasien->profession ?></td>
			<td><?php echo $pasien->card_type ?></td>
			<td><?php echo $pasien->complaint ?></td>
			<td><?php echo $pasien->exp_card_member ?></td>
			<td><?php echo $pasien->created_at ?></td>
			<td><?php echo $pasien->dokter_id ?></td>
			<td><?php echo $pasien->diagnosis ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pasien/read/'.$pasien->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pasien/update/'.$pasien->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pasien/delete/'.$pasien->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('pasien/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
        </section>
        </div>