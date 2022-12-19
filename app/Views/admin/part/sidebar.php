
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('assets/img/profile.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Dadan Hidayat
									<span class="user-level">Administrator</span>
								</span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a data-toggle="collapse" href="#admin">
                        <i class="fas fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a data-toggle="collapse" href="#artikel">
                        <i class="far fa-newspaper"></i>
                        <p>Post</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="artikel">
                        <ul class="nav nav-collapse">
                            <li>
                            <a href="<?= base_url(route_to('admin_post_addNew')); ?>">
                                    <span class="sub-item">Add New</span>
                                </a>
                            </li>
                            <li>
                            <a href="<?= base_url(route_to('admin_post_all')) ?>">
                                    <span class="sub-item">All Posts</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= route_to('admin_categories_add') ?>">
                                    <span class="sub-item">Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/panels.html">
                                    <span class="sub-item">Tags</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#pages">
                        <i class="fas fa-file-contract"></i>
                        <p>Pages</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pages">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?= route_to('admin_post_add'); ?>">
                                    <span class="sub-item">Add New</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/buttons.html">
                                    <span class="sub-item">All Pages</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/gridsystem.html">
                                    <span class="sub-item">Categories</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-database"></i>
                        <p>Bank Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Guru/Pegawai</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Eskul</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Kelas</span>
                                </a>
                            </li>
                             <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Kopetensi Keahlian</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">File Download</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-cog"></i>
                        <p>Pengaturan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Slider</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">General</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Sambutan</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Sistem</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
              
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-comment-alt"></i>
                        <p>Message</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-user-cog"></i>
                        <p>Akun Saya</p>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->