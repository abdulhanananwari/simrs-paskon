<div class="contanier">
    <section class="content">
        <div class="contanier-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Detail Data dokter klinik</h2>
                        </div>
                        <div class="body">
                            <hr>
                            <form action="<?php echo base_url()?>dokter/create_action" method="post" enctype="multipart/form-data">
                                 <div class="row clearfix">
                                   
                                    <div class="col-sm-12">
                                        <h2 class="card-inside-title">Identitas Dokter</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>No KTP</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="<?php echo $ktp; ?>" placeholder="No KTP" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>No Reg Dokter</label>
                                            <div class="form-line">
                                                <input type="text" name="dokter_registration_code" value="<?php echo $dokter_registration_code; ?>" class="form-control" placeholder="No KK" />
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>"  placeholder="Nama" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Alamat</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="address" value="<?php echo $address;?>" placeholder="Please type what you want..."></textarea>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                         <label>Tempat</label>
                                         <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="place_dob" value="<?php echo $place_dob;?>" placeholder="Tempat Lahir" />
                                            </div>                                             
                                         </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <div class="form-line">
                                            <input type="text" id="date-format" name="dob" class="datepicker form-control" value="<?php echo $dob;?>" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone_iphone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="mobile_number" value="<?php echo $mobile_number;?>" class="form-control mobile-phone-number" placeholder="Ex: +62 (000) 000-00-00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="phone_number" value=" <?php echo $phone_number;?>" class="form-control mobile-phone-number" placeholder="Ex:(022)000-00-00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control email" value="<?php echo $email ;?>" placeholder="Ex: babangtamvan@email.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <label for="spesialist">Spesialis</label>
                                        <div>
                                            <select class="form-control" name="spesialist" value="<?php echo $spesialist ;?>" id="spesialist">
                                                <option value="0"></option>
                                                <option value="umum">Umum</option>
                                                <option value="bedah">Bedah</option>
                                                <option value="kandungan">Kandungan</option>
                                                <option value="gigi">Gigi</option>                                           
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <label for="image">Foto</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <?php
                                    if(isset($image)){
                                       echo '<img src="/uploads/'.$image.'" alt="">';
                                    }
                                    ?>
                                </div>
                                <button type="submit" class="btn btn-block btn-success ">Simpan</button>
                            </form>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/assets/plugins/autosize/autosize.js"></script>
<script src="/assets/js/pages/forms/basic-form-elements.js"></script>
