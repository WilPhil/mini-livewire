<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Users Page')] class extends Component {};
?>

<div class="flex justify-center items-start gap-10">
    <div class="w-1/4 mb-5 mt-10">
        <livewire:user.create />
    </div>
    <div class="w-1/3 mb-5 mt-10">
        <livewire:user.show lazy />
    </div>
</div>
