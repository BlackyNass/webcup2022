@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Vos actifs <button type="button" class="btn btn-outline-dark">AJOUTER UN NOUVEL ACTIF</button></h1>
            <hr class="border-gray-300 my-3">

            <div class="card">
                <div class="card-body">

                    <div class="row">
                        {{--
                        <div class="col-4">
            
                            <div class="chart">
                                <canvas id="pieChart" style="min-height: 100px; height: 150px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        --}}
                        <div class="col-12">

                            <div class="table-responsive">
                                <table class="table">
                                  <tbody>
                               
                                      @forelse ($wallet as $crypto)
                                        <tr>
                                            <td>{{$crypto->code}}</td>
                                            <td>{{$crypto->nom}}</td>
                                            <td>{{$crypto->valeur}}</td>
                                            <td style="text-align: right">
                                                <button class="btn btn-success-soft btn-pill btn-sm"> Déposer</button>
                                                <!--<button class="btn btn-danger-soft btn-pill btn-sm" disabled> Retirer</button>-->
                                            </td>
                                        </tr>
                                 
                                        @empty
                                        <tr>
                                            <td colspan="4"> Aucune donnée</td>
                                        </tr>
                                      @endforelse
                                    
                                  </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{--
    @section('scripts')
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<script>
    $(function () {
        
        var data = '{{!! json_encode($wallet) !!}}';
        
        
        var pieData        = {
            labels: [
                'BTC', 
                'RHB',
                ],
                datasets: [
                    {
                        data: [60,100],
                        backgroundColor : ['#fad776', '#1b2a4e'],
                    }
                    ]
                }
                
                var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
                var pieOptions     = {
                    maintainAspectRatio : true,
                    responsive : true,
                }
                
                var pieChart = new Chart(pieChartCanvas, {
       type: 'pie',
       data: pieData,
       options: pieOptions      
    }); 
    
});
</script>

@endsection

--}}