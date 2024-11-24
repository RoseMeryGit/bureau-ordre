@extends('layouts.master')
@section('content')
<div class="main-content side-content pt-5">
        <div class="side-app">
            <div class="main-container container-fluid">
                <div class="row row-sm">
                <div class="col-sm-6 col-xl-4 col-lg-6">
							<div class="card custom-card">
								<div class="card-body dash1">
									<div class="d-flex">
										<p class="mb-1 tx-inverse">Nbr totale des courriers</p>
										<div class="ms-auto">
											<i class="fa fa-line-chart fs-20 text-primary"></i>
										</div>
									</div>
									<div>
										<h3 class="dash-25">{{$totalCount}}</h3>
									</div>
									<div class="progress mb-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{$totalCount}}"
											class="progress-bar progress-bar-xs wd-100p" role="progressbar"></div>
									</div>
									<div class="expansion-label d-flex">
										<span class="text-muted">Nombre des courrier</span>
										<span class="ms-auto"><i
												class="fa fa-caret-up me-1 text-success"></i>100%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-4 col-lg-6">
							<div class="card custom-card">
								<div class="card-body dash1">
									<div class="d-flex">
										<p class="mb-1 tx-inverse">Nbr courriers entrant</p>
										<div class="ms-auto">
											<i class="fa fa-line-chart fs-20 text-primary"></i>
										</div>
									</div>
									<div>
										<h3 class="dash-25">{{$Entrant_totalCount}}</h3>
									</div>
									<div class="progress mb-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{($Entrant_totalCount*100)/$totalCount}}"
											class="progress-bar progress-bar-xs wd-70p bg-info" role="progressbar" style="width: {{($Entrant_totalCount*100)/$totalCount}}"></div>
									</div>
									<div class="expansion-label d-flex">
										<span class="text-muted">Nombre des courrier</span>
										<span class="ms-auto"><i
												class="fa fa-caret-up me-1 text-success"></i>{{round(($Entrant_totalCount*100)/$totalCount,2)}}%</span>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-sm-6 col-xl-4 col-lg-6">
							<div class="card custom-card">
								<div class="card-body dash1">
									<div class="d-flex">
										<p class="mb-1 tx-inverse">Nbr courriers sortant</p>
										<div class="ms-auto">
											<i class="fa fa-line-chart fs-20 text-primary"></i>
										</div>
									</div>
									<div>
										<h3 class="dash-25">{{$Sortant_totalCount}}</h3>
									</div>
									<div class="progress mb-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{($Sortant_totalCount*100)/$totalCount}}%"
											class="progress-bar progress-bar-xs wd-10p bg-secondary" role="progressbar" style="width: {{($Sortant_totalCount*100)/$totalCount}}"></div>
									</div>
									<div class="expansion-label d-flex">
										<span class="text-muted">Nombre des courrier</span>
										<span class="ms-auto"><i
												class="fa fa-caret-up me-1 text-success"></i>{{round(($Sortant_totalCount*100)/$totalCount,2)}}%</span>
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
									<h6 class="card-title mb-1">Graph linéaire</h6>
									<p class="text-muted  card-sub-title">Nombre des courries entrant par mois.</p>
								</div>
								<div class="chartjs-wrapper-demo">
									<canvas class="w-100" id="chartLine"></canvas>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-6 col-md-12">
						<div class="card custom-card overflow-hidden">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Graph linéaire</h6>
									<p class="text-muted  card-sub-title">Nombre des courries sortant par mois.</p>
								</div>
								<div class="chartjs-wrapper-demo">
									<canvas class="w-100" id="chartLine1"></canvas>
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
    const months = @json($months);
    const counts = @json($counts);

    /*LIne-Chart */
    var ctx = document.getElementById("chartLine").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
			labels: months,
			datasets: [{
				label: 'Nbr courries entrant',
				data: counts,
				borderWidth: 2,
                lineTension:0.3,
				backgroundColor: 'transparent',
				borderColor: '#4BC0C0',
				pointBackgroundColor: '#ffffff',
				pointRadius: 2
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
					display: true,
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					}
				},
				y : {
					ticks: {
						fontColor: "#77778e",
					 },
					display: true,
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					},
					scaleLabel: {
						display: false,
						labelString: 'Thousands',
						fontColor: 'rgba(119, 119, 142, 0.2)'
					}
				}
			},
			legend: {
				labels: {
					fontColor: "#77778e"
				},
			},
		}
    });
	const Smonths = @json($Smonths);
    const Scounts = @json($Scounts);

    var ctx2 = document.getElementById("chartLine1").getContext('2d');
    var myChart = new Chart(ctx2, {
        type: 'line',
        data: {
			labels: Smonths,
			datasets: [{
				label: 'Nbr courries sortant',
				data: Scounts,
				borderWidth: 2,
                lineTension:0.3,
				backgroundColor: 'transparent',
				borderColor: '#FFCE56',
				pointBackgroundColor: '#ffffff',
				pointRadius: 2
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
					display: true,
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					}
				},
				y : {
					ticks: {
						fontColor: "#77778e",
					 },
					display: true,
					gridLines: {
						color: 'rgba(119, 119, 142, 0.2)'
					},
					scaleLabel: {
						display: false,
						labelString: 'Thousands',
						fontColor: 'rgba(119, 119, 142, 0.2)'
					}
				}
			},
			legend: {
				labels: {
					fontColor: "#77778e"
				},
			},
		}
    });
</script>
@endsection
