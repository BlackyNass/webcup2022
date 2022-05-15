<div>
    <div class="row">
        <div class="col">
            <label for="">CAPSULES</label>
        </div>
        @foreach(App\Models\Capsule::all() as $capsule)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$capsule->libelle}}</h5>
                    <p class="card-text">{{$capsule->tarif_base}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col">
            <label for="">TYPES</label>
        </div>

        @foreach(App\Models\TypeCapsule::all() as $type_capsule)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$type_capsule->libelle}}</h5>
                    <p class="card-text">{{$type_capsule->tarif}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col">
            <label for="">EMPLACEMENTS</label>
        </div>
        @foreach(App\Models\Emplacement::all() as $emplacement)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$emplacement->libelle}}</h5>
                    <p class="card-text">{{$emplacement->tarif}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col">
            <label for="">DUREE</label>
        </div>
        @foreach(App\Models\Duree::all() as $duree)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$duree->libelle}}</h5>
                    <p class="card-text">{{$duree->tarif}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>