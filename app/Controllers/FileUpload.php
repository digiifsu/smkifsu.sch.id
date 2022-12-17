<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FileUpload extends BaseController
{
    public function index()
    {
        //
    }
    public function getUploadedFile()
    {
        //untuk upload file dari froala 
        if ($this->request->getPostGet('cmd')) {
            $cmd = $this->request->getPostGet('cmd');
            if ($cmd == 'fetch') {
                $data = [];
                $allowed_file = ['jpg', 'png', 'webp', 'jpeg', 'gif'];
                $file = new \RecursiveDirectoryIterator(FCPATH . 'uploads');
                foreach (new \RecursiveIteratorIterator($file) as $dir) {
                    if ($dir->isFile() && in_array($dir->getExtension(), $allowed_file)) {
                        $data[] = array(
                            'url' => base_url() . '/' . str_ireplace(FCPATH, '', $dir->getPath() . '/' . $dir->getFIlename()),
                            'thumb' => base_url() . '/' . str_ireplace(FCPATH, '', $dir->getPath() . '/' . $dir->getFIlename()),
                            'tag' => 'Image',
                        );
                    }
                }
                echo json_encode($data, JSON_PRETTY_PRINT);
            }
        }
    }
    public function uploadImagePost()
    {
        $validateRule = array(
            'file' => array(
                'label' => 'Gambar Post',
                'rules' => 'uploaded[file]|is_image[file]|mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
            )
        );
        if (!$this->validate($validateRule)) {
            echo "Validation" . $this->validator->getError('file');
        }
        $img = $this->request->getFile('file');
        if (!$img->hasMoved()) {
            $newFileName = $img->getRandomName();
            if ($img->move(FCPATH . 'uploads/images/post', $newFileName)) {
                $filepath = base_url() . '/uploads/images/post/' . $newFileName;
                $data = new \StdClass();
                $data->link = $filepath;
                echo json_encode($data);
            }
        } else {
            echo "Uplod failed";
        }
    }
}
