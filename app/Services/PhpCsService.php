<?php

namespace App\Services;

use Illuminate\Support\Collection;

class PhpCsService
{
    public function get(): Collection
    {
        return collect([
            'user' => collect(['firstName' => 'Arpit', 'lastName' => 'Jain', 'age' => 30,'contact' => 9087654321, 'gender' => 'M', 'height' => '153'])
        ]);
    }
}
