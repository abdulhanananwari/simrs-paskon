<div class="content-wrapper">
    <section class="content">
    <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Pasien</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $pasien;?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">supervised_user_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">Dokter</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $dokter;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">hotel</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Ruangan</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $ruangan;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">local_hospital</i>
                        </div>
                        <div class="content">
                            <div class="text">Poliklinik</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $poliklinik;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
               
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>
</div>
