<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
/**
 * controller untuk eskul
 **/
class Eskul extends BaseController {
  public function index(){
    return view('admin/eskul/show_all',['title'=>'Eskul']);
  }
    /**
     * untuk update eskul
     * **/
    public function save(){
      $data = $this->request->getPost();
      $data['nama'] = strip_tags($data['nama']);
      $model = model("Admin/Eskul");
      if ($model->insert($data)) {
       return redirect()->route('admin_eskul_all')->with('success','Data Berhasil di tambahkan!');
     } else {
      throw PageNotFoundException::forPageNotFound();
    }
  }
  public function destroy($id = null){
    if (is_null($id)) {
      return redirect()->route('admin_eskul_all');
    }
    $model = model("Admin/Eskul");
    if ($model->delete($id)) {
     return redirect()->route('admin_eskul_all')->with('success','Data Berhasil di hapus!');
   }
   throw PageNotFoundException::forPageNotFound();
 }
 public function edit($id = null){
  if (is_null($id)) {
   return redirect()->route('admin_eskul_all');
 } else {
  $count = model("Admin/Eskul")->where('id',$id)->countAllResults();
  if ($count == 1) {
    return view('admin/eskul/edit',[
      'title'=>'edit',
      'data_eskul'=> model("Admin/Eskul")->where('id',$id)->get()->getRow(),
    ]);
  }
}

}
public function update($id = null){
  if (is_null($id)) {
   return redirect()->route('admin_eskul_all');
 } else {
  $update = model("Admin/Eskul")->update($id,$this->request->getPost());
  if ($update) {
    return redirect()->route('admin_eskul_all')->with('success','Data Berhasil di update!');
  }

}

}
}
?>
