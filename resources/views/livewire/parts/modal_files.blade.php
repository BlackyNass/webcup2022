

<div class="row">
    <div class="col">
        @livewire('files-list', ['capsule_id' => $id])
    </div>
    <div class="col">
        @livewire('files-add', ['capsule_id' => $id])
    </div>
</div>