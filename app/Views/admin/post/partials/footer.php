<?php
echo
script_tag('assets/vendors/tinymce/tinymce.min.js'),
script_tag('webadmin/js/elfinder.min.js'),
script_tag('assets/js/tinymceElfinder.js'),
script_tag('assets/vendors/moment.js/2.29.1/moment-with-locales.min.js'),
script_tag('assets/vendors/tagin/tagin.min.js');

echo $this->include('admin/modal/modal_file_manager');

?>
<script>


    const mceElf = new tinymceElfinder({
        // connector URL (Set your connector)
        url: '<?= site_url(route_to('filemanager_backend')) ?>',
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

    $('#upload-file').on('change', function(e) {
        document.getElementById('image').style.display = 'block';
        document.getElementById('images').src = URL.createObjectURL(e.target.files[0]);
    });
    const tagin = new Tagin(document.querySelector('#keywords'), {
        enter: true,
        placeholder: 'Tambah tag baru (dipisahkan dengan koma)'
    })
</script>