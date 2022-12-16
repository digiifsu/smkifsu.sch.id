<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FileUpload extends BaseController
{
    public function index()
    {
        //
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
            $img->move(FCPATH.'uploads/images/post', $newFileName);
            $filepath = base_url().'/uploads/images/post/'.$newFileName;
            $data = new \StdClass();
            $data->link = $filepath;
            echo json_encode($data);
        } else {
            echo "Dadan";
        }
    }
}
