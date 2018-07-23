<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <h2 style="margin-top:0px">Dokter List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('dokter/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('dokter/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('dokter'); ?>" class="btn btn-default">Reset</a>
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
		<th>Spesialist</th>
		<th>Active</th>
		<th>Image</th>
		<th>Created At</th>
		<th>Action</th>
            </tr><?php
            foreach ($dokter_data as $dokter)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $dokter->name ?></td>
			<td><?php echo $dokter->spesialist ?></td>
			<td><?php echo $dokter->active ?></td>
			<td><?php echo $dokter->image ?></td>
			<td><?php echo $dokter->created_at ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('dokter/read/'.$dokter->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('dokter/update/'.$dokter->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('dokter/delete/'.$dokter->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
                </div>
            </div>
        </div>
    </section>
</div>
       