<?php

namespace App\Controllers;

use App\Models\EskulModel;
use App\Models\SiswaModel;

class Ujikom extends BaseController
{
    public function index(): string
    {

        return view('dashboard');
    }
    public function algoritma(): string
    {

        return view('algoritma');
    }
    public function crud(): string
    {
        $siswamodel = new SiswaModel();
        $eskulmodel = new EskulModel();
        $data['siswa'] = $siswamodel->findAll();
        $data['eskul'] = $eskulmodel->findAll();
        return view('crud', $data);
    }

    public function delete($id)
    {
        $model = new SiswaModel();
        $eskul = new EskulModel();


        if ($model->delete($id)) {
            if ($eskul->delete($id)) {
                return redirect()->to(base_url('crud'));
            }

        }
    }
    public function tambah(): string
    {

        return view('tambah_crud');

    }

    public function edit($id)
    {

        $siswamodel = new SiswaModel();
        $eskulmodel = new EskulModel();
        $data['siswa'] = $siswamodel->find($id);

        // $data['eskul'] = $eskulmodel->findColumn('id_siswa')->find($id);
        return view('edit', $data);
    }

    public function pro_edit($id) // Pastikan ID diterima sebagai parameter
    {
        $data = [
            'nama' => $this->request->getPost('name'),
            'umur' => $this->request->getPost('umur'),
            'kelas' => $this->request->getPost('kelas'),
        ];

        // Validasi input
        if ($this->validate(['nama' => 'required|min_length[3]'])) {
            $model = new SiswaModel();
            $eskul = new EskulModel();
            // Memperbarui data berdasarkan ID
            if ($model->update($id, $data)) {

                $datas = [
                    'id_siswa' => $id,
                    'eskul' => $this->request->getPost('eskul'),

                ];
                if ($eskul->insert($datas)) {
                    return $this->response->setJSON(['redirect' => base_url('crud')]);

                }
            } else {
                // Jika gagal memperbarui, berikan umpan balik
                return $this->response->setJSON(['error' => 'Data gagal diperbarui.']);
            }
        } else {
            // Jika validasi gagal, kembalikan pesan error
            return $this->response->setJSON(['error' => $this->validator->getErrors()]);
        }
    }

    public function tambah_pro()
    {
        // Mengambil data dari request
        $data = [
            'nama' => $this->request->getPost('name'),
            'umur' => $this->request->getPost('umur'),
            'kelas' => $this->request->getPost('kelas'),

        ];

        // Validasi input
        if ($this->validate(['name' => 'required|min_length[3]'])) {
            $model = new SiswaModel();
            $eskul = new EskulModel();

            // Simpan data
            if ($model->insert($data)) {
                $datas = [
                    // 'id_siswa' => '58',
                    'eskul' => $this->request->getPost('eskul'),

                ];
                if ($eskul->insert($datas)) {
                    return $this->response->setJSON(['redirect' => base_url('crud')]);

                }
                // Jika data berhasil disimpan, kembalikan URL untuk redirect
            }
        }
    }
    public function enkripsi(): string
    {

        return view('enkripsi');
    }

}

