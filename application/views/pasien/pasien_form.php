<div class="contanier">
    <section class="content">
        <div class="contanier-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form Pendaftaran Pasien</h2>
                        </div>
                        <div class="body">
                            <hr>
                            <form action="<?php echo base_url()?>pasien/create_action" method="post">
                                 <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="body">
                                                <div class="form-group">
                                                    <label>Jenis Daftar</label>
                                                    <select class="form-control">
                                                        <option></option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Poli Tujuan</label>
                                                    <select class="form-control">
                                                        <option></option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dokter</label>
                                                    <select class="form-control">
                                                        <option></option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h4>Identitas Pasien</h4>
                                                </div>
                                                <div class="body">
                                                    <div class="row">
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
                                                                <input type="text" class="form-control" name="name" placeholder="Nama" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <div class="form-line">
                                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Tempat</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="Nama" />
                                                            </div>                                             
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Tanggal Lahir</label>
                                                            <div class="form-line">
                                                                <input type="text" id="date-format" class="datepicker form-control" placeholder="Please choose a date...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">phone_iphone</i>
                                                            </span>
                                                            <div class="form-line">
                                                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +62 (000) 000-00-00">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">phone</i>
                                                            </span>
                                                            <div class="form-line">
                                                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex:(022)000-00-00">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">email</i>
                                                            </span>
                                                            <div class="form-line">
                                                                <input type="text" class="form-control email" placeholder="Ex: babangtamvan@email.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>     
                                                    
                                                   
                                                 </div>
                                            </div>
                                        </div>
                            
                                <div class="col-sm-12">
                                <div class="card">
                                    <div class="header">
                                        <h4>Rekam Medis</h4>
                                    </div>
                                    <div class="body">
                                        <div class="form-group">
                                            <label>Keluhan</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" placeholder="Nama" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Riwayat Penyakit</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" placeholder="Nama" />
                                            </div>
                                        </div>
                                    </div>
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
<script type="text/javascript">
    $(document).ready(function(){
          $('.datepicker').bootstrapMaterialDatePicker
            ({
                format: 'DD-MMMM-YYYY'
            });
    })
  
</script>