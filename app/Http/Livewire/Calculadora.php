<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculadora extends Component
{
    public $math = '';

    public $result = 0;

    public function render()
    {
        return view('livewire.calculadora');
    }

    public function addMath($number)
    {
        $this->math .= $this->handleMath($number);
    }

    public function operation($operation)
    {
        $this->validate([
            'math' => 'required',
        ]);

        if ($operation == '=') {
            $this->result = eval('return ' . $this->math . ';');
        } else {
            $this->math .= $operation;
        }
    }

    public function clearMath()
    {
        $this->result = 0;
        $this->math = '';
    }

    public function handleMath($math): string
    {
        return match ($math) {
            'parl' => '(',
            'parr' => ')',
            default => $math
        };
    }
}
