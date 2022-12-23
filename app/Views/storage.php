<style>
    .file-box {
        float: left;
        width: 100%;
    }

    .file-manager h5 {
        text-transform: uppercase;
    }

    .file-manager {
        list-style: none outside none;
        margin: 0;
        padding: 0;
    }

    .folder-list li a {
        color: #666666;
        display: block;
        padding: 5px 0;
    }

    .folder-list li {
        border-bottom: 1px solid #e7eaec;
        display: block;
    }

    .folder-list li i {
        margin-right: 8px;
        color: #3d4d5d;
    }

    .category-list li a {
        color: #666666;
        display: block;
        padding: 5px 0;
    }

    .category-list li {
        display: block;
    }

    .category-list li i {
        margin-right: 8px;
        color: #3d4d5d;
    }

    .category-list li a .text-navy {
        color: #1ab394;
    }

    .category-list li a .text-primary {
        color: #1c84c6;
    }

    .category-list li a .text-info {
        color: #23c6c8;
    }

    .category-list li a .text-danger {
        color: #EF5352;
    }

    .category-list li a .text-warning {
        color: #F8AC59;
    }

    .file-manager h5.tag-title {
        margin-top: 20px;
    }

    .tag-list li {
        float: left;
    }

    .tag-list li a {
        font-size: 10px;
        background-color: #f3f3f4;
        padding: 5px 12px;
        color: inherit;
        border-radius: 2px;
        border: 1px solid #e7eaec;
        margin-right: 5px;
        margin-top: 5px;
        display: block;
    }

    .file {
        border: 1px solid #dedede;
        overflow: hidden;
        background-color: white;
        position: relative;
        border-radius: 3px;
    }

    .file-manager .hr-line-dashed {
        margin: 15px 0;
    }

    .file .icon,
    .file .image {
        height: 100px;
        overflow: hidden;
    }

    .file .icon {
        padding: 0;
        text-align: center;
    }

    .file-control {
        color: inherit;
        font-size: 11px;
        margin-right: 10px;
    }

    .file-control.active {
        text-decoration: underline;
    }

    .file .icon i {
        font-size: 70px;
        color: #dadada;
    }

    .file .file-name {
        font-size: 5px;
        padding: 10px;
        background-color: #f8f8f8;
        border-top: 1px solid #e7eaec;
    }

    .file-name small {
        font-size: 12px;
        color: #676a6c;
    }

    ul.tag-list li {
        list-style: none;
    }

    .corner {
        position: absolute;
        display: inline-block;
        width: 0;
        height: 0;
        line-height: 0;
        border: 0.6em solid transparent;
        border-right: 0.6em solid #f1f1f1;
        border-bottom: 0.6em solid #f1f1f1;
        right: 0em;
        bottom: 0em;
    }

    a.compose-mail {
        padding: 8px 10px;
    }

    .mail-search {
        max-width: 300px;
    }

    .ibox {
        clear: both;
        margin-bottom: 10px;
        margin-top: 0;
        padding: 0;
    }

    .ibox.collapsed .ibox-content {
        display: none;
    }

    .ibox.collapsed .fa.fa-chevron-up:before {
        content: "\f078";
    }

    .ibox.collapsed .fa.fa-chevron-down:before {
        content: "\f077";
    }

    .ibox:after,
    .ibox:before {
        display: table;
    }

    .file:active,
    .file:focus,
    .file:hover{
        box-shadow: 0px 0px 0px 1px #dadada;
    }

    .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #ffffff;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 3px 0 0;
        color: inherit;
        margin-bottom: 0;
        padding: 14px 15px 7px;
        min-height: 48px;
    }

    .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
    }

    .ibox-footer {
        color: inherit;
        border-top: 1px solid #e7eaec;
        font-size: 90%;
        background: #ffffff;
        padding: 10px 15px;
    }

    a:hover {
        text-decoration: none;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="file-manager">
                        <button id="upload" class="btn btn-primary btn-block">Upload Files</button>
                        <input id="file" hidden type="file" class="form-control">
                        <button class="btn mt-3 btn-block btn-warning" onclick="chdir('/')" class="root_folder"><i class="fa fa-home"></i> Root Folder</button>
                        <div class="hr-line-dashed"></div>
                        <h5>Folders</h5>

                        <ul class="folder-list" style="padding: 0">
                            <?php if (!empty($directory)) : ?>
                                <?php foreach ($directory as  $dir => $val) : ?>
                                    <?php if (is_string($dir) && is_dir($path . DIRECTORY_SEPARATOR . trim($dir, '\\'))) : ?>
                                        <li><a href="javascript:chdir('<?= $cmd . trim($dir, '\\') . '/'; ?>')" style="cursor:pointer;"><i class="fa fa-folder"></i>&nbsp; <?= trim($dir, '\\') . ' (' . count($val) . ' item)'; ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <p class="badge col-12 badge-success">Nothing</p>
                            <?php endif; ?>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="">
                <span> <?= $cmd; ?></span>
            </div>
            <div class="row">
                <div class="col-lg-12 row">

                    <?php if (!empty($directory)) : ?>
                        <?php foreach ($directory as $dir => $val) : ?>

                            <?php if (is_string($val)) : ?>
                                <?php $fileinfo = pathinfo($path . $val); ?>
                                <div data-basename='<?= $fileinfo['basename']; ?>' class="col-md-4 mb-2" onclick="show_detail_file(this);" data-directory='<?= $fileinfo['dirname']; ?>' ondblclick="detail(this)" data-file='<?= base_url('uploads/' . $cmd . '/' . $val) ?>'>
                                    <div class="file">
                                        <a href="javascript:void(0)">
                                            <span class="corner"></span>
                                            <div class="icon">
                                                <?php
                                                if (in_array($fileinfo['extension'], ['jpg', 'jpeg', 'png', 'gif'])) {
                                                ?>
                                                    <img style="object-fit: cover" src="<?= base_url('uploads/' . $cmd . '/' . $val) ?>" alt="">
                                                <?php
                                                } else {
                                                ?>
                                                    <i class="fa fa-file"></i>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="file-name">
                                                <small> <?= substr($val, 0, 20) ?></small>
                                                <br>
                                                <small>Ext: <?= $fileinfo['extension'] ?></small>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p class="badge col-12 badge-success">Nothing</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function detail(e) {
        setItem(e.dataset.file)
    }

    function chdir(e) {

        load_dir('#filemanager-content', e);
    }
    $('#upload').on('click', () => {
        $('#file').click();
    })

    $('#file').on('change', function(e) {

    });

    function show_detail_file(e) {

        console.log(e);
    }
</script>