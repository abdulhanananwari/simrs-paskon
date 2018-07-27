<div class="contanier">
    <section class="content">
        <div class="contanier-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Inputan data dokter klinik</h2>
                        </div>
                        <div class="body">
                            <hr>
                            <form action="<?php echo base_url()?>dokter/create_action" method="post">
                                 <div class="row clearfix">
                                   
                                    <div class="col-sm-12">
                                        <h2 class="card-inside-title">Identitas Dokter</h4>
                                    </div>
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
                                                <input type="text" class="form-control" name="name"  placeholder="Nama" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Alamat</label>
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="address" placeholder="Please type what you want..."></textarea>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                         <label>Tempat</label>
                                         <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="place_dob" placeholder="Tempat Lahir" />
                                            </div>                                             
                                         </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <div class="form-line">
                                            <input type="text" id="date-format" name="dob" class="datepicker form-control" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone_iphone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="mobile_number" class="form-control mobile-phone-number" placeholder="Ex: +62 (000) 000-00-00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="phone_number" class="form-control mobile-phone-number" placeholder="Ex:(022)000-00-00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control email" placeholder="Ex: babangtamvan@email.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <label for="specialist">Spesialis</label>
                                        <div>
                                            <select class="form-control" name="specialist" id="specialist">
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
