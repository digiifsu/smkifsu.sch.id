<?php
namespace App\Controllers\Admin;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController; 
class Fasilitas extends BaseController
{
	public function index(){
		return view('admin/bank-data/fasilitas/show_all',['title'=>'fasilitas']);
	}
	public function store(){
		$data = $this->request->getPost();
		$model = model('Admin/Fasilitas');
		if ($model->insert($data)) {
			return redirect()->route('admin_fasilitas_all')->with('success','Data berhasil di tambahkan!');
		}
	}
	public function destroy($id = null){
		if ($id) {
			$model = model('Admin/Fasilitas')->where('id',$id);
			if ($model->countAllResults() <= 0) {
				throw PageNotFoundException::forPageNotFound();
			} else {
				$model->delete($id);
				return redirect()->route('admin_fasilitas_all')->with('success','Data berhasil di hapus!');
			}
		}
	}
	public function edit($id = null){
		if (is_null($id)) {
			throw PageNotFoundException::forPageNotFound();
		}
		$data = model("Admin/Fasilitas")->find($id);
		return view('admin/bank-data/fasilitas/edit',['title'=>"Edit",'data'=>$data]);
	}
	public function update($id = null){
		if (is_null($id)) {
			throw PageNotFoundException::forPageNotFound();
		}
		$data = $this->request->getPost();
		if (model('Admin/Fasilitas')->find($id)) {
			model('Admin/Fasilitas')->update($id,$data);
			return redirect()->route('admin_fasilitas_all')->with('success','Data berhasil di update!');
		}	
		throw PageNotFoundException::forPageNotFound();
	}
}

?>