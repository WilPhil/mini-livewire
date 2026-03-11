<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Contact Me')] class extends Component {
    //
};
?>

<section class="mt-10 bg-white dark:bg-gray-900">
    <livewire:contact.create />
</section>
