<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();
        if(isset($_POST['nim'])) {
            $mahasiswaModel->insert($_POST);
        }

        
        $a['dataMahasiswa'] = $mahasiswaModel->findAll();
        // $a = [
        //     'test' => 'value',
        //     'data' => 'data ke 2'
        // ];

        return view('home', $a);
    }

    public function edit($id) {
        $data['id'] = $id;
        $mahasiswaModel = new MahasiswaModel();
        $data['mahasiswa'] = $mahasiswaModel->find($id);
        return view('edit', $data);
    }

    public function onEdit() {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->update($_POST['id'], [
            'nim' => $_POST['nim'],
            'nama' => $_POST['nama']
        ]);
        return redirect()->to('/');
    }

    public function onDelete($id) {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->delete($id);
        return redirect()->to('/');
    }
}
