<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' =>  'Home | ArmaNime'
		];

		return view('home/index', $data);
	}

	public function about()
	{
		$data = [
			'title' =>  'About | ArmaNime'
		];

		return view('home/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact | ArmaNime',
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Jl. Poros Malino Km.22 Pakkatto No. 100',
					'kab' => 'Gowa'
				],
				[
					'tipe' => 'Knator',
					'alamat' => 'Jl. Asal-asal',
					'kab' => 'Gowa'
				]
			]
		];

		return view('home/contact', $data);
	}

	//--------------------------------------------------------------------

}
