<?php

use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\User;

new class extends Component {
    use WithPagination;

    #[On('user-created')]
    public function refreshUsers() {}

    #[Computed]
    public function users()
    {
        return User::latest()->paginate(6);
    }
};
?>

<div class="h-full flex flex-col justify-between">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Users List</h2>
    <div>
        <ul role="list" class="divide-y divide-gray-100">
            @foreach ($this->users as $user)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('img/default.jpg') }}"
                            alt="" class="size-12 flex-none rounded-full bg-gray-50" />
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold text-gray-900">{{ $user->name }}</p>
                            <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end self-center">
                        <p class="mt-1 text-xs/5 text-gray-500">Joined at {{ $user->created_at->diffForHumans() }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div>
        {{ $this->users()->links() }}
    </div>

</div>
