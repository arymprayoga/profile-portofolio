<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $fullName = 'Ary M Prayoga';
    public $email = 'arymp111@gmail.com';
    public $website = 'www.arymprayoga.com';
    public $linkedin = 'arymprayoga';
    public $github = 'arymprayoga';

    public function render()
    {
        return view('livewire.about');
    }
}
