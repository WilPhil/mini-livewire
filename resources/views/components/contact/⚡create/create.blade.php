<div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
    <div>
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Me</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
            Got any project ideas? Give me a contact and let's discuss!
        </p>
    </div>

    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-fg-success-strong rounded-base bg-success-soft" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit='save' action="#" class="space-y-8">
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                email</label>
            <input wire:model='form.email' type="email" id="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="name@flowbite.com">
            @error('form.email')
                <p class="mt-2.5 text-xs text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="subject"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
            <input wire:model='form.subject' type="text" id="subject"
                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Let us know how we can help you">
            @error('form.subject')
                <p class="mt-2.5 text-xs text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                message</label>
            <textarea wire:model='form.message' id="message" rows="6"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment..."></textarea>
            @error('form.message')
                <p class="mt-2.5 text-xs text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send
            message</button>
    </form>
</div>
