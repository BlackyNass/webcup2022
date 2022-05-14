<div>
    <form wire:submit.prevent="add_capsule_data">
        <input type="text" wire:model="capsule_data.descriptif">
        @error('capsule_data.descriptif') <span class="error">{{ $message }}</span> @enderror

        <input type="file" wire:model="capsule_data.data">
        @error('capsule_data.data') <span class="error">{{ $message }}</span> @enderror

        <input type="date" wire:model="capsule_data.date_data">
        @error('capsule_data.date_data') <span class="error">{{ $message }}</span> @enderror

        <select wire:model="detail_facture.type_donnee_id">
            @foreach($type_donnees as $type_donnee)
            <option value="{{$type_donnee->id}}" selected>{{$type_donnee->libelle}}</option>
            @endforeach
        </select>
        @error('detail_facture.type_donnee_id') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save</button>
    </form>
</div>