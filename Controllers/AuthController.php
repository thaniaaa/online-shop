<?php

namespace App\Controllers;

use App\Models\userModel;

class AuthController extends BaseController
{
	protected $user;

	function __construct()
	{
		helper('form');
		$this->user = new userModel();
	}

	public function login()
	{
		if ($this->request->getPost()) {
			$username = $this->request->getVar('username');
			$password = $this->request->getVar('password');

			$dataUser = $this->user->where(['username' => $username])->first();

			if ($dataUser) {
				if (md5($password) == $dataUser['password']) {
					session()->set([
						'username' => $dataUser['username'],
						'role' => $dataUser['role'],
						'isLoggedIn' => TRUE
					]);

					return redirect()->to(base_url('/'));
				} else {
					session()->setFlashdata('failed', 'Username & Password Salah');
					return redirect()->back();
				}
			} else {
				session()->setFlashdata('failed', 'Username Tidak Ditemukan');
				return redirect()->back();
			}
		} else {
			return view('v_login');
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('login');
	}
	public function profil()
	{
		if ($this->request->getPost()) {
			$new_username = $this->request->getVar('newUsername');
			$password = $this->request->getVar('password');
			if ($password == ""||$new_username == "") {
				session()->setFlashdata('failed', 'Password tidak boleh kosong');
				return redirect()->back();
			}

			$dataForm = [
				'username' => $new_username,
				'password' => md5($password)
			];

			$username = session()->get('username');
			$dataUser = $this->user->where(['username' => $username])->first();

			$this->user->update($dataUser['id'], $dataForm);
			session()->set('username', $new_username);
			return redirect('profil')->with('success', 'Password Berhasil Diubah');
		}

		return view('v_profil');
	}
}