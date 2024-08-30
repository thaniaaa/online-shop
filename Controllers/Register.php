<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
{
    return view('v_register');
}

    public function daftar()
{
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    $role = $this->request->getVar('role');

    if (!empty($password)) {
        $hashedPassword = md5($password); // Menggunakan MD5 hash untuk password
    } else {
        // Handle ketika password tidak tersedia
    }

    // Lakukan validasi data yang diperlukan sesuai kebutuhan

    // Simpan data user ke dalam database
    $userModel = new \App\Models\UserModel();
    $userData = [
        'username' => $username,
        'password' => $hashedPassword,
        'role' => $role // Misalnya setiap user yang mendaftar memiliki role 'user'
    ];
    $userModel->insert($userData);

    // Redirect ke halaman login atau halaman lain sesuai kebutuhan
    return redirect()->to(base_url('login'));
}

}