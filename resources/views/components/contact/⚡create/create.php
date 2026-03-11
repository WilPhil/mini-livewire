<?php

use App\Livewire\Forms\ContactForm;
use Livewire\Component;

new class extends Component
{
    public ContactForm $form;

    public function save()
    {
        $this->form->store();
        session()->flash('success', 'Message sent successfully.');
    }
};
