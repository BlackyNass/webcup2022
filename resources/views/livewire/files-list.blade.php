<div>
    <ul class="list-group">
        @if(!empty($capsule_data))
        @foreach($capsule_data as $capsule_single_data)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$capsule_single_data->descriptif}}
            <button 
            class="badge badge-danger badge-pill" 
            wire:click="delete_capsule_data({{$capsule_single_data->id}})">Supprimer</button>
        </li>
        @endforeach
        @endif
        <li class="list-group-item d-flex justify-content-between align-items-center">
            test
            <button 
            class="badge badge-danger badge-pill" 
            wire:click="delete_capsule_data(0)">Supprimer</button>
        </li>
    </ul>
</div>