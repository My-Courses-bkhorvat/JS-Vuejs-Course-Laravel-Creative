<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{

    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Ivan',
                'age' => 20,
                'job' => 'developer'
            ],
            [
                'id' => 2,
                'name' => 'Bogdan',
                'age' => 28,
                'job' => 'developer'
            ],
            [
                'id' => 3,
                'name' => 'Petr',
                'age' => 22,
                'job' => 'developer'
            ],

        ];
        return $persons;
    }
}
