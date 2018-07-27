
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <i class="material-icons">face</i>
                </div>
                <div class="info-container">
                    <h3><p id="time"></p></h3>
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('uname');?></div>
                    <div class="email"><?php echo $this->session->userdata('email');?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/login/out"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url();?>dashboard">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Pendaftaran Pasien</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>pasien/create/">Baru</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>pasien/index">Daftar Pasien</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">face</i>
                            <span>Dokter</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>dokter/create/">Baru</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>dokter/index">Daftar dokter</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Setting</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url()?>category/index">Kategori Pasien</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>card_member/index">Kartu </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>poliklinik/index">Poliklinik</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>ruangan/index">ruangan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>report">
                            <i class="material-icons">layers</i>
                            <span>Report</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date('Y');?><a href="https://github.com/abdulhanananwari/simrs-paskon">AdminBSB - Material Design || powered by</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>