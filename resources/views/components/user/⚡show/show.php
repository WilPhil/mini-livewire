<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public $query = '';

    #[On('user-created')]
    public function updatedQuery()
    {
        $this->resetPage();
    }

    #[Computed]
    public function users()
    {
        return User::latest()
            ->where('name', 'like', "%{$this->query}%")
            ->paginate(6);
    }

    public function placeholder()
    {
        return view('livewire.placeholders.skeleton');
    }
};
