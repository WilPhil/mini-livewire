<div wire:poll class="h-full flex flex-col justify-between gap-5 mt-10">
    <h2 class="text-center text-2xl/9 font-bold tracking-tight text-gray-900">Users List</h2>

    <form class="max-w-lg w-full self-center">
        <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only ">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input wire:model.live.debounce.250ms="query" type="search" id="search"
                class="block w-full p-3 ps-9 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body"
                placeholder="Search User(s)..." />
        </div>
    </form>

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