<div>
<style>
    /*#calendar-container {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    #calendar {
        margin: 10px auto;
        padding: 10px;
        max-width: 1100px;
        height: 700px;
    }*/
</style>
<div>
    <div id='calendar-container' wire:ignore>
        <div id='calendar'></div>
    </div>
</div>
@push('scripts')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
<script>
    //Généralisation de l'id
    create_UUID = () => {
    let dt = new Date().getTime();
    const uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
        let r = (dt + Math.random() * 16) % 16 | 0;
        dt = Math.floor(dt / 16);
        return (c == 'x' ? r :(r&0x3|0x8)).toString(16);
    });
    return uuid;
}
    document.addEventListener('livewire:load', function () {
        const Calendar = FullCalendar.Calendar;
        const calendarEl = document.getElementById('calendar');
        //Création du calendrier avec les bouttons
        const calendar = new Calendar(calendarEl, {
    headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },
    locale: '{{ config('app.locale') }}',
    //Récupération des évènements dans le composant
    events: JSON.parse(@this.events),
    //Modification du début et de la fin d'un évènement par resize
    eventResize: info => @this.eventChange(info.event),
    //Modification du début et de la fin d'un évènement par glisser-deposser
    eventDrop: info => @this.eventChange(info.event),
    //Activation de la selection
    selectable:true,
    //Ajout d'un évènement
    select: arg => {
            const title = prompt('Titre :');
            const id = create_UUID();
            if (title) {
                calendar.addEvent({
                    id: id,
                    title: title,   
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay
                });
                @this.eventAdd(calendar.getEventById(id));
            };
            calendar.unselect();
        },
        //Fonction gérant la suppression de l'évènement
        eventClick: info => {
            if (confirm("Voulez-vous vraiment supprimer cet événement ?")) {
                info.event.remove();
                @this.eventRemove(info.event.id);
            }
        }
});
        //Lorsqu'on met le local en fr, on obtient un caledrier français
        /*const calendar = new Calendar(calendarEl, {
            locale: '{{ config('app.locale') }}',
        });*/
        //Création d'un calendrier basique
        /*const calendar = new Calendar(calendarEl);*/
        calendar.render();
    });
</script>
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
@endpush
</div>