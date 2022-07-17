	"use strict";
	$(document).ready(function() {
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

	        defaultDate: '2022-07-22',
	        navLinks: true, // can click day/week names to navigate views
	        businessHours: true, // display business hours
	        editable: true,
	        droppable: true, // this allows things to be dropped onto the calendar
	        dateClick: function(info) {
    				alert('b');
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
