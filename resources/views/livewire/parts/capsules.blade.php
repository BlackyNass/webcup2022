<div class="col-6 ">
    <h2 id="hoverable-rows">
        <div>
            Mes capsules
        </div>
    </h2>
    
    <table class="table " >
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Durée </th>
          </tr>
        </thead>
        <tbody>
          @forelse ($capsules as $capsule)
          <tr>
            <td >{{$capsule['libelle']}}</td>
            <td >{{$capsule['duree_id']}}</td>
          </tr>
          @empty
          <tr>
            <td colspan="2">Aucune capsule</td>
          </tr>
          @endforelse
        </tbody>
      </table>
</div>