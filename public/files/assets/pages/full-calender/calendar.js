	"use strict";
	document.addEventListener('livewire:load', function () {
		const calendarEl = document.getElementById('calendar');
	    $('#external-events .fc-event').each(function() {

	        // store data so the calendar knows to render an event upon drop
	        $(this).data('event', {
	            title: $.trim($(this).text()), // use the element's text as the event title
	            stick: true // maintain when user navigates (see docs on the renderEvent method)
	        });

	        // make the event draggable using jQuery UI
	        $(this).draggable({
	            zIndex: 999,
	            revert: true, // will cause the event to go back to its
	            revertDuration: 0 //  original position after the drag
	        });

	            
	    });



	    $('#calendar').fullCalendar({
	    	
	        header: {
	            left: 'prev,next today',
	            center: 'title',
	            right: 'month,agendaWeek,agendaDay,listMonth'
	        },
			locale: 'fr',
			buttonText:{
				today: 'Ajourd\'hui',
				month: 'Mois',
				week: 'Semaine',
				day: 'Jour',
				list: 'Liste'
			},

	        navLinks: true, // can click day/week names to navigate views
	        businessHours: true, // display business hours
	        editable: true,
			selectable: true,
	        droppable: true, // this allows things to be dropped onto the calendar
	        dateClick: function(info) {
    				alert('b');
  				},
			select: arg =>{
				alert('gf');
			},
	        drop: function() {

	            // is the "remove after drop" checkbox checked?
	            if ($('#checkbox2').is(':checked')) {
	                // if so, remove the element from the "Draggable Events" list
	                $(this).remove();
	            }
	        },
	        

	    });

	});
