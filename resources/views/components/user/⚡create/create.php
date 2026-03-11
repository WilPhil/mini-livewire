<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

new class extends Component {
    use WithFileUploads;

    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email:dns|unique:users')]
    public $email = '';

    #[Validate('required|min:3')]
    public $password = '';

    #[Validate('image|max:1000')]
    public $avatar;

    public function createUser()
    {
        $this->validate();

        if ($this->avatar) {
            $this->avatar = $this->avatar->store(path: 'img', options: 'public');
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'avatar' => $this->avatar,
        ]);

        $this->reset();

        session()->flash('success', 'User created successfully.');

        $this->dispatch('user-created');
    }
};
