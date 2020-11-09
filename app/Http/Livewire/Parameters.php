<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Parameter;
use Illuminate\Support\Facades\Auth;

class Parameters extends Component
{
    public  $parameters,
            $parameter,
            $parameter_id,
            $social_charges,
            $fixed_charges,
            $user_id;

    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->parameter = Parameter::firstOrCreate(
            [
                'user_id' => Auth::id()
            ],
            [
                'social_charges' => '0.00',
                'fixed_charges' => '0.00',
                'user_id' => Auth::id(),
            ]
        );

        return view('livewire.parameters.parameters')
            ->layout('layouts.app', ['header' => __('general.parameters')]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'social_charges' => 'required',
            'fixed_charges' => 'required',
        ]);

        Parameter::updateOrCreate(
            [
                'id' => $this->parameter_id
            ],
            [
                'social_charges' => $this->social_charges,
                'fixed_charges' => $this->fixed_charges,
            ]
        );

        session()->flash(
            'green_message', __('general.params_updated')
        );

        $this->closeModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $parameter = Parameter::findOrFail($id);
        $this->parameter_id = $id;
        $this->social_charges = $parameter->social_charges;
        $this->fixed_charges = $parameter->fixed_charges;

        $this->openModal();
    }
}
