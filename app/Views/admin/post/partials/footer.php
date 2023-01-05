<?php
$this->section('head');
echo link_tag('elfinder/css/elfinder.min.css'),
link_tag('elfinder/css/Material/css/theme-gray.css');
$this->endSection();
$this->section('footer');
echo script_tag('assets/vendors/tinymce/tinymce.min.js'),
script_tag('elfinder/js/elfinder.min.js'),
script_tag('assets/js/tinymceElfinder.js'),
script_tag('assets/vendors/moment.js/2.29.1/moment-with-locales.min.js'),
script_tag('assets/vendors/tagin/tagin.min.js');
$this->endSection();
?>
<script>


    const mceElf = new tinymceElfinder({
        cssAutoLoad: false,
        // connector URL (Set your connector)
        url: '<?= site_url(route_to('filemanager_backend')) ?>',
        baseUrl: '<?= base_url('public/elfinder') ?>',                    // Base URL to css/*, js/*
        // upload target folder hash for this tinyMCE
        uploadTargetHash: 'l1_lw', // Hash value on elFinder of writable folder
        // elFinder dialog node id
        nodeId: 'elfinder' // Any ID you decide
    });

    tinymce.init({
        selector: '#post-body',
        plugins: 'link lists image advlist fullscreen media code table emoticons textcolor hr preview mediaGallery codesample imagetools insertfile',
        height: 400,
        menubar: false,
        relative_urls: false,
        remove_script_host: false,
        convert_urls: true,
        toolbar: [
            'undo redo | bold italic underline strikethrough forecolor backcolor bullist numlist | blockquote subscript superscript | alignleft aligncenter alignright alignjustify | image | media | link',
            ' formatselect | cut copy paste selectall | table emoticons hr | removeformat | preview code codesample | fullscreen',
        ],
        file_picker_callback : mceElf.browser,
        images_upload_handler: mceElf.uploadHandler,
        codesample_languages: [{
                text: 'HTML/XML',
                value: 'html'
            },
            {
                text: 'JavaScript',
                value: 'javascript'
            },
            {
                text: 'CSS',
                value: 'css'
            },
            {
                text: 'PHP',
                value: 'php'
            },
            {
                text: 'Ruby',
                value: 'ruby'
            },
            {
                text: 'Python',
                value: 'python'
            },
            {
                text: 'Java',
                value: 'java'
            },
            {
                text: 'C',
                value: 'c'
            },
            {
                text: 'C#',
                value: 'csharp'
            },
            {
                text: 'C++',
                value: 'cpp'
            }
        ],
    });

    $('#upload-file').on('click', function() {

        mceElf.browser(function(e){
             document.getElementById('images').src = e; 
             document.querySelector('#input-thumbnail').value = e;
        },'',{filetype:'image'})

        // document.getElementById('image').style.display = 'block';
        // document.getElementById('images').src = URL.createObjectURL(e.target.files[0]);
    });
    const tagin = new Tagin(document.querySelector('#keywords'), {
        enter: true,
        placeholder: 'Tambah tag baru (dipisahkan dengan koma)'
    })
    //for crate slug
    const slugInput = document.getElementById('slug');
    $('#title').on('keyup', function(e) {
        slugInput.value = buatSlug(e.target.value)
    });
</script>