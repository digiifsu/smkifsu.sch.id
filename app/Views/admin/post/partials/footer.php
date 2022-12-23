<?php
echo
script_tag('assets/vendors/tinymce/tinymce.min.js'),
script_tag('assets/vendors/moment.js/2.29.1/moment-with-locales.min.js'),
script_tag('assets/vendors/tagin/tagin.min.js');

echo $this->include('admin/modal/modal_file_manager');

?>
<script>
    tinymce.init({
        selector: '#post-body',
        plugins: 'link lists image advlist fullscreen media code table emoticons textcolor hr preview mediaGallery codesample',
        height: 400,
        menubar: false,
        relative_urls: false,
        remove_script_host: false,
        convert_urls: true,
        toolbar: [
            'undo redo | bold italic underline strikethrough forecolor backcolor bullist numlist | blockquote subscript superscript | alignleft aligncenter alignright alignjustify | mediaGallery media link',
            ' formatselect | cut copy paste selectall | table emoticons hr | removeformat | preview code codesample | fullscreen',
        ],
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

    let launchModal = () => {
        load_dir('#filemanager-content', 'images/');
        $('#filemanagers').modal('show');
    }

    function load_dir(content, cmd = '') {
        $(content).load('<?=base_url(route_to('admin_storage'))?>?cmd=' + cmd);
    }
    //block file manager for upload content
    tinymce.PluginManager.add('mediaGallery', function(editor, url) {

        editor.ui.registry.addButton('mediaGallery', {
            icon: 'gallery',
            onAction: function() {
                // Open window
                launchModal();
            }
        });
    });


    $('#image-content').on('change', function(ev) {
        var ed = tinymce.activeEditor;

        const imageUrl = ev.target.files[0];

        ed.selection.setContent(`<img class="img-thumbnail" src='${imageUrl}'>`);

    });

    //set item
    function setItem(e) {
        var ed = tinymce.activeEditor;
        ed.selection.setContent(`<img class="img-thumbnail" src='${e}'>`);
        $('#filemanagers').modal('hide');
    }

    $('#title').on('keyup', (e) => {
        $('#slug').val(buatSlug(e.target.value));
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