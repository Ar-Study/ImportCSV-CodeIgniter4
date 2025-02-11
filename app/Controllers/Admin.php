<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $siswamodel = new SiswaModel();
        $data['siswa'] = $siswamodel->findAll();
        return view('dashboard', $data);
    }

    public function upload()
    {
        helper(['form', 'url']);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $file = $this->request->getFile('data');
            if ($file->isValid() && !$file->hasMoved()) {
                $extension = $file->getExtension();
                if ($extension !== 'csv') {
                    return redirect()->back()->with('error', 'Bukan file CSV!');
                }
                $newName = $file->getRandomName();
                if ($newName) {
                    $file->move(WRITEPATH . 'uploads', $newName);
                    $filePath = WRITEPATH . 'uploads/' . $newName;
                    if ($filePath) {
                        $this->importCsv($filePath);
                    }
                }

            }
        } else {
            echo "Metode request bukan POST!";
        }
    }
    private function importCsv($filePath)
    {
        $file = fopen($filePath, 'r');
        $siswaModel = new SiswaModel();
        if ($siswaModel) {

            if (fgetcsv($file)) {
                while (($row = fgetcsv($file, 1000, ',')) !== FALSE) {
                    $data = [
                        'nama' => $row[0],
                        'umur' => (int) $row[1], // Pastikan umur berupa integer
                        'kelas' => $row[2],
                    ];
                    $siswaModel->insert($data);
                    echo "success";
                }

                fclose($file);

            }
        }
        // fgetcsv($file); // Skip header

        // while (($row = fgetcsv($file, 1000, ',')) !== FALSE) {
        //     $data = [
        //         'nama' => $row[0],
        //         'umur' => (int) $row[1], // Pastikan umur berupa integer
        //         'kelas' => $row[2],
        //     ];
        //     $siswaModel->insert($data);
        // }
        // echo "success";

        // fclose($file);
    }
}

