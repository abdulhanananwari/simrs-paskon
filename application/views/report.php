<div class="contanier">
    <section class="content">
        <div class="contanier-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Report</h2>
                        </div>
                        <div class="body">
                        <h2 class="card-inside-title">Filter</h4>
                            <hr>
                            <form action="<?php echo base_url()?>" method="post">
                                 <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>No KTP</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="No KTP" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>No KK</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="No KK" />
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Nama" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="datepicker" class="form-control" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-xs btn-primary">Download Report</button>
                            </form>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    $( function() {
    $( "#datepicker" ).datepicker({
            dateFormat: "yy-mm-dd",
        });
  } );
</script>