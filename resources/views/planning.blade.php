@extends('layout')

@section('title')
	Planning des soutenances
@stop

@section('css')
	{{--<link href="{{ url('assets/fullcalendar_asset/css') }}/style.css" rel="stylesheet">--}}
	<link href="{{ url('assets/fullcalendar_asset/css') }}/tooltip_qtip.css" rel="stylesheet">
	<link href="{{ url('assets/fullcalendar_asset/fullcalendar') }}/fullcalendar.min.css" rel="stylesheet">
@endsection

@section('contenu')

	@include('jury.nav')

	<div id="containerTotal">
		<div class="fullcontent">

			<div class="nav-plannig crd">
				<div class="usr-nm"><h3 id="NameTeacher" class="blc-title-lttl">{{ Auth::user()->prenomEnseignant.' '.Auth::user()->nomEnseignant }}</h3></div>
				<div class="nav-right">
					<div class="logout-nav">
						<p><a class="blc-title-lttl" href="{{ url('logout') }}">Logout</a><span></span></p>
					</div>
				</div>
			</div>

			<div id='calendar'></div>
		</div>
	</div>


@endsection

@section('js')
	<script src="{{ url('assets/fullcalendar_asset/fullcalendar/lib') }}/moment.min.js"></script>
	<script src="{{ url('assets/fullcalendar_asset/fullcalendar') }}/fullcalendar.min.js"></script>
	<script src="{{ url('assets/fullcalendar_asset/fullcalendar') }}/lang/fr.js"></script>
	<script src="{{ url('assets/fullcalendar_asset/js') }}/jquery_qtip.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			// Ajout d'une info bulle pour faciliter la lecture parfois chaotique
			var tooltip = $('<div/>').qtip({
				id: 'fullcalendar',
				prerender: true,
				content: {
					text: ' ',
					title: {
						button: true
					}
				},
				position: {
					my: 'bottom center',
					at: 'top center',
					target: 'mouse',
					viewport: $('#fullcalendar'),
					adjust: {
						mouse: false,
						scroll: false
					}
				},
				show: false,
				hide: false,
				style: 'qtip-light'
			}).qtip('api');
			var base_url = '{{ url('/') }}';
			$('#calendar').fullCalendar({
				weekends: true,
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				editable: false,
				eventLimit: true, // allow "more" link when too many events
				events: {
					url: base_url + '/planning/api',
					error: function () {
						alert("cannot load json");
					}
				},
				// Gère l'info bulle
				eventClick: function (data, event, view) {
					var content = '<h3>' + data.libelleSujet + '</h3>' +
							'<p>' + data.libelleTypeEvaluation + '</p><br />' +
							'<p><b>Tuteur : </b>' + data.tuteur + '<br />' +
							'<b>Étudiant(es) : </b>' + data.etudiant + '</p><br />' +
							'<p><b>Début : </b> ' + data.tooltipDebut + '<br />' +
							'<b>Fin : </b> ' + data.tooltipFin + '</p><br />' +
							'<b><a href="grille/'+data.id+'">Lien possible vers grille de notation ou autre</a>';
					tooltip.set({
								'content.text': content
							})
							.reposition(event).show(event);
				},
				dayClick: function () {
					tooltip.hide()
				},
				eventResizeStart: function () {
					tooltip.hide()
				},
				eventDragStart: function () {
					tooltip.hide()
				},
				viewDisplay: function () {
					tooltip.hide()
				}
			});
			setTimeout(function () {
				var nameTeach;
				$('.fc-title').each(function () {
					nameTeach = $(this).text().split(':::');
					console.log(nameTeach[1]+" "+$('#NameTeacher').text());
					if(nameTeach[1]==$('#NameTeacher').text()){
						$(this).parent().css('background-color','red');
					}
					$(this).text(nameTeach[0]);
				});
			},1000);


		});
	</script>
@endsection