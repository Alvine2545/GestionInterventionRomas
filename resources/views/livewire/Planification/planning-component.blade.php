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
    {{-- @if(!$date) --}}
    <div>
        <div id='calendar-container' wire:ignore>
            <div id='calendar'></div>
        </div>
    </div>
    {{-- @endif --}}
    
    @push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
    <script>
       // $('#planing').hide()
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
        // select: arg => {
        //     $('#calendar').hide()
        //     $('#planing').show()
            
        //             calendar.addEvent({
        //                 id: id,
        //                 title: "title",   
        //                 start: arg.start,
        //                 end: arg.end,
        //                 allDay: arg.allDay
        //             });
        //             @this.eventAdd(calendar.getEventById(id));
        //         calendar.unselect();
        //     //$('#exampleModal').modal('show')
        //     // swal
        //     // ({
        //     //     title: "An input!",
        //     //     text: "Write something interesting:",
        //     //     buttons: 
        //     //     {
        //     //         cancel: true,
        //     //         confirm: true,
        //     //     },
        //     //     content: 
        //     //     {
        //     //         element: "input",
        //     //         attributes: 
        //     //         {
        //     //             placeholder: "Write something",
        //     //             type: "input",
        //     //         },
        //     //     },
        //     // });
            
        // //     swal({
		// // 	title: "An input!",
		// // 	text: "Write something interesting:",
		// // 	type: "input",
		// // 	showCancelButton: true,
		// // 	closeOnConfirm: false,
		// // 	inputPlaceholder: "Write something"
		// // }, function (inputValue) {
		// // 	if (inputValue === false) return false;
		// // 	if (inputValue === "") {
		// // 		swal.showInputError("You need to write something!");
		// // 		return false
		// // 	}
		// // 	swal("Nice!", "You wrote: " + inputValue, "success");
		// // });
        //         /*const title = prompt('Titre :');
        //         const id = create_UUID();
        //         if (title) {
        //             calendar.addEvent({
        //                 id: id,
        //                 title: title,   
        //                 start: arg.start,
        //                 end: arg.end,
        //                 allDay: arg.allDay
        //             });
        //             @this.eventAdd(calendar.getEventById(id));
        //         };
        //         calendar.unselect();*/
        //     },
            dateClick: function(info) {
               /* $('#calendar').hide()
                $('#planing').show()*/
                //@this.eventRemove(info.event.id);
                $('#exampleModal').modal('show');
                // console.log(info.dateStr);
                $("#date").val(info.dateStr);
               // console.log( $("#date").val());

                    // calendar.addEvent({
                    //     id: id,
                    //     title: "title",   
                    //     start: arg.start,
                    //     end: arg.end,
                    //     allDay: arg.allDay
                    // });
               /*     @this.eventAdd(calendar.getEventById(id));
                calendar.unselect();
                alert('Date: ' + info.dateStr);
                alert('Resource ID: ' + info.resource.id);*/
  },
            //Fonction gérant la suppression de l'évènement
            eventClick: info => {
                @this.eventRemove(info.event.id);
                $('#exampleModal').modal('show');

                // if (confirm("Voulez-vous vraiment supprimer cet événement ?")) {
                //     info.event.remove();
                //     @this.eventRemove(info.event.id);
                // }
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
    {{-- @if ($date) --}}

    {{-- <div id="planing">
        <div class="card-header">
            <h3 class="text-center">Planning</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <span>Faites vos planifications. Veillez à bien vérifier les informations</span>
        </div>
        <div class="card-block">
            <form wire:submit.prevent='eventAdd'>
                <div class="" >
                    <div class="form-group row" wire:ignore>
                        <label class="col-sm-2 col-form-label" for="appt-time">Pannes </label>
                        <div class="col-sm-10 col-md-10">
                        <select class="form-control js-example-placeholder-multiple col-sm-8" name="pannes" multiple wire:model='pannes'>
                            @foreach ($pannes as $panne)
                                <option value="{{$panne->id}}">{{$panne->description}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    
                    <div class="form-group row" wire:ignore>
                        <label class="col-sm-2 col-form-label" for="appt-time">Techniciens </label>
                        <div class="col-sm-10 col-md-10">
                        <select class="form-control js-example-placeholder-multiple col-sm-12" multiple="multiple" wire:model='techniciens'>
                            @foreach ($techniciens as $technicien)
                                <option value="{{$technicien->id}}">{{$technicien->nom}} {{$technicien->prenom}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row" wire:ignore>
                        <label class="col-sm-2 col-form-label" for="appt-time">Type d'intervention </label>
                        <div class="col-sm-10 col-md-10">
                        <select class=" form-control js-example-placeholder-multiple col-sm-12" wire:model='typeintervention'>
                            @foreach ($typeinterventions as $typeintervention)
                                <option value="{{$typeintervention->id}}">{{$typeintervention->nom}}</option>
                            @endforeach
                            
                        </select>
                        </div>
                    </div>
                    <div class="form-group row" wire:ignore>
                        <label for="select2Multiple" class="col-sm-2 col-form-label">Multiple Tags</label>
                        <select class="select2-multiple form-control col-sm-10" name="typeintervention" wire:model='typeintervention' multiple="multiple"
                          id="select2Multiple">
                            @foreach ($typeinterventions as $typeintervention)
                                <option value="{{$typeintervention->id}}">{{$typeintervention->nom}}</option>
                            @endforeach            
                        </select>
                      </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="appt-time">Date </label>
                        <div class="col-sm-10 col-md-10">
                            <input class="form-control" id="date" type="date" name="date" wire:model='date'>
                        <span class="validity"></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <button type="reset" class="btn btn-danger col-md-2 col-md-offset-6" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary col-md-2">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    {{-- @endif --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Planning</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <form wire:model.prevent='eventAdd()'>
            <div class="modal-body" >
                <div class="form-group">
                    <label class="control-label" for="appt-time">Pannes </label>
                    <select class="form-control col-sm-12" multiple >
                        {{-- @foreach ($pannes as $panne)
                        <option value="{{$panne->id}}">{{$panne->description}}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="appt-time">Date </label>
                    <div class="col-sm-10 col-md-10">
                        <input class="form-control" id="date" type="date" name="date" wire:model='date'>
                    <span class="validity"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="appt-time">Techniciens </label>
                    <select class="form-control col-sm-12" multiple="multiple" wire:model='techniciens'>
                        {{-- @foreach ($techniciens as $technicien)
                            <option value="{{$technicien->id}}">{{$technicien->nom+" "+$technicien->prenom}}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="form-group" >
                    <label class="control-label" for="appt-time">Type d'intervention </label>
                    <select class=" form-control col-sm-12" multiple="multiple" wire:model='typeintervention'>
                        @foreach ($typeinterventions as $typeintervention)
                            <option value="{{$typeintervention->id}}">{{$typeintervention->nom}}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="appt-time">Heure de départ : </label>
                    <input class="form-control" id="appt-time" type="time" name="appt-time"
                           min="12:00" max="18:00" required
                           pattern="[0-9]{2}:[0-9]{2}">
                    <span class="validity"></span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="appt-time">Heure de fin : </label>
                    <input class="form-control" id="appt-time" type="time" name="appt-time"
                           min="12:00" max="18:00" required
                           pattern="[0-9]{2}:[0-9]{2}">
                    <span class="validity"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
            </form>
          </div>
        </div>
    </div>
    </div>