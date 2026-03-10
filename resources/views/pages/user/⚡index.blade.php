<?php

use Livewire\Component;

new class extends Component {};
?>

<div class="flex justify-center items-start gap-10">
    <div class="w-1/3 my-5">
        <livewire:user.create />
    </div>
    <div class="w-1/3 my-5">
        <livewire:user.show />
    </div>
</div>
