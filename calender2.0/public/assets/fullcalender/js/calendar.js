document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });

   

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek'
      },
      locale: 'pt-br',
      navLinks: true,
      eventLimit: true,
      selectable: true,
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      },
      eventDrop: function (element) {

        var start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
        var end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

        //criamos um objecto para enviar
       var newevent = {
         _method:'PUT', //retornar o metodo helper
          id: element.event.id,
          start: start,
          end: end
       };

      
       //chamo o evento senevent para passar a rota e os dados para o evento
       sendEvent(routeEvents('routeEventUpdate'), newevent);

      },
      eventClick: function (event) {

        alert('event Click');

      },
      eventResize: function (event) {

        alert('event Resize');

      },
      select: function (event) {

        alert('event selected');

      },
      events: routeEvents('routeLoadEvents'),
      
        
    });
    calendar.render();

  });

  