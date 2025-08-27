<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasticceriaController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function chiSiamo()
    {
        $users = [
            ['name' => 'Iginio', 'surname' => 'Massari', 'role' => 'Pasticcere'],
            ['name' => 'Luigi', 'surname' => 'Biasetto', 'role' => 'Pasticcere']
        ];

        return view('chiSiamo', ['users' => $users]);
    }

    public function chiSiamoDetail($name)
    {
        $users = [
            ['name' => 'Iginio', 'surname' => 'Massari', 'role' => 'Pasticcere'],
            ['name' => 'Luigi', 'surname' => 'Biasetto', 'role' => 'Pasticcere']
        ];

        foreach ($users as $user) {
            if (strtolower($name) == strtolower($user['name'])) {
                return view('chi-siamo-detail', ['user' => $user]);
            }
        }

      
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function ricette()
    {
        $ricetta = [
            ['id' => '1', 'title' => 'Tiramisù', 'img' => '/images/tiramisu.jpg'],
            ['id' => '2', 'title' => 'Pancake', 'img' => '/images/pancake.jpg']
        ];

        return view('ricette.ricette', ['ricette' => $ricetta]);
    }

    public function ricettaDetail($id)
    {
        $ricette = [
            ['id' => '1', 'title' => 'Tiramisù', 'img' => '/images/tiramisu.jpg'],
            ['id' => '2', 'title' => 'Pancake', 'img' => '/images/pancake.jpg']
        ];

        foreach ($ricette as $ricetta) {
            if ($id == $ricetta['id']) {
                return view('ricettaDetail', ['ricetta' => $ricetta]);
            }
        }

    }
}
