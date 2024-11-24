@extends('layouts.master')
@section('content')
<div class="main-content side-content pt-5">
        <div class="side-app">
            <div class="main-container container-fluid">
                <div class="row">
                  <div class="col-lg-12 col-md-12">
						<div class="card custom-card overflow-hidden">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Graph à barres</h6>
									<p class="text-muted  card-sub-title">Nombre des courries entrant par mois.</p>
								</div>
								<div class="chartjs-wrapper-demo">
									<canvas class="w-100" id="chartBar1"></canvas>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="card-title mb-1">Donut graph</h6>
                                    <p class="text-muted card-sub-title">Nombre des courries entrant par type de courrier.</p>
                                </div>
                                <div class="chartjs-wrapper-demo">
                                    <canvas class="w-100" id="chartDonut"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="card-title mb-1">Graph en secteurs</h6>
                                    <p class="text-muted card-sub-title">Nombre des courries entrant par service traitant.</p>
                                </div>
                                <div class="chartjs-wrapper-demo">
                                    <canvas class="w-100" id="chartPie"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
      </div>
</div>
@endsection

@section('js')
<!-- Chartjs charts js-->
<script src="{{ asset('template/HTML/dashlead/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

<script>
    // Retrieve data from PHP
    const typeLabels = @json($type);
    const typeCounts = @json($tcounts);
    const serviceLabels = @json($service);
    const serviceCounts = @json($scounts);
    const months = @json($months);
    const counts = @json($counts);

    /* Bar-Chart1 */
    var ctx = document.getElementById("chartBar1").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
			labels: months,
			datasets: [{
				label: 'Courriers entrant par mois',
				data: counts,
				borderWidth: 2,
				backgroundColor: '#9877f9',
				borderColor: '#9877f9',
				pointBackgroundColor: '#ffffff',

			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				x : {
					ticks: {
						fontColor: "#77778e",
					 },
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					}
				},
				y : {
					ticks: {
						beginAtZero: true,
						fontColor: "#77778e",
					},
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					},
				}
			},
			legend: {
				labels: {
					fontColor: "#77778e"
				},
			},
		}
    });

    // Donut Chart
    const ctxDonut = document.getElementById('chartDonut').getContext('2d');
    new Chart(ctxDonut, {
        type: 'doughnut',
        data: {
            labels: typeLabels,
            datasets: [{
                data: typeCounts,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'], // Add more colors as needed
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Pie Chart
    const ctxPie = document.getElementById('chartPie').getContext('2d');
    new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: serviceLabels,
            datasets: [{
                data: serviceCounts,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'], // Add more colors as needed
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
@endsection
