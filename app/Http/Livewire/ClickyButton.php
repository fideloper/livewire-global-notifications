<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClickyButton extends Component
{
    public function tellme()
    {
        $messages = [
            'A blessing in disguise',
            'Bite the bullet',
            'Call it a day',
            'Easy does it',
            'Make a long story short',
            'Miss the boat',
            'To get bent out of shape',
            'Birds of a feather flock together',
            "Don't cry over spilt milk",
            'Good things come',
            'Live and learn',
            'Once in a blue moon',
            'Spill the beans',
        ];
        $this->notify($messages[array_rand($messages)]);
    }

    public function render()
    {
        return view('livewire.clicky-button');
    }
}
