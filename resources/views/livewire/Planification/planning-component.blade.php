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
    <script src='fullcalendar/lang-all.js'></script>
    <script src='fullcalendar/fr.js'></script>
    <script>

        $(document).ready(function() {
    
            $('#calendar').fullCalendar({
                lang: 'fr'
            });
    
        });
    
    </script>
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
                $("#exempleModal").modal({ backdrop: 'static', keyboard: false });

                // console.log(info.dateStr);
                let date = info.dateStr;
                $("#date").val(date);
                @this.recuperation(date);
               // console.log( $("#date").val());

                    // calendar.addEvent({
                    //      id: id,
                    //      title: "title",
                    //      start: arg.start,
                    //      end: arg.end,
                    //      allDay: arg.allDay
                    //  });
               /*     @this.eventAdd(calendar.getEventById(id));
                calendar.unselect();
                alert('Date: ' + info.dateStr);
                alert('Resource ID: ' + info.resource.id);*/
  },
            //Fonction gérant la suppression de l'évènement
//             eventClick: function(info) {
//     alert('Event: ' + info.event.title);
//     alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
//     alert('View: ' + info.view.type);

//     // change the border color just for fun
//     info.el.style.borderColor = 'red';
//   }
            eventClick: function(info) {
                @this.editId(info.event.id);
                $('#EventModal').modal('show');
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
//         @this.on(`refreshCalendar`, () => {
//     calendar.refetchEvents()
// });



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
                            <select class="form-control js-example-placeholder-multiple col-sm-8" name="pannes"  wire:model='pannes'>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" wire:ignore.self >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Planning</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form wire:submit.prevent='eventAdd'>
            <div class="modal-body" >
                <div class="form-group">
                    <label class="control-label" for="appt-time">Pannes </label>
                    <select class="col-sm-12 form-control js-example-placeholder-multiple" wire:model="panne" >
                        @foreach ($pannes as $value)
                        <option value="{{$value->id}}">{{$value->nom}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="appt-time">Techniciens </label>
                    <select class=" col-sm-12 js-example-placeholder-multiple" multiple="multiple" wire:model='technicien'>
                        @foreach ($techniciens as $value)
                            <option value="{{$value->id}}">{{$value->nom." ".$value->prenom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" >
                    <label class="control-label" for="appt-time">Type d'intervention </label>
                    <select class=" form-control col-sm-12" wire:model='typeinterves'>
                        @foreach ($typeinterventions as $value)
                            <option value="{{$value->id}}">{{$value->nom}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="appt-time">Heure de départ : </label>
                    <input class="form-control" id="appt-time" type="time" name="appt-time"
                           min="06:00" max="21:00" required
                           pattern="[0-9]{2}:[0-9]{2}" wire:model="start">
                    <span class="validity"></span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="appt-time">Heure de fin : </label>
                    <input class="form-control" id="appt-time_second" type="time" name="appt-time"
                           min="06:00" max="21:00" required
                           pattern="[0-9]{2}:[0-9]{2}" wire:model="end">
                    <span class="validity"></span>
                </div>
                {{-- <div class="form-group row" >
                    <label class="col-sm-2 col-form-label" for="date">Date </label>
                    <div class="col-sm-10 col-md-10" >
                        <input class="form-control" id="date" type="date" wire:ignore name="date" wire:model='dateP' readonly wire:ignore.self>
                    <span class="validity"></span>
                    </div>
                </div> --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
            </form>
          </div>
        </div>
    </div>



    {{-- Event click modal --}}
    @if ($editModal)
    <div class="modal fade" id="EventModal" tabindex="-1" role="dialog" aria-labelledby="EventModal" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Détails </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <table id="demo-foo-filtering" class="table table-striped text-align-center">
                        <thead>
                            <tr class="text-align-center">
                                <th>
                                    {{ $event->title }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th data-breakpoints="xs">Date</th>
                                
                                <th data-breakpoints="xs"><span class="">{{ $event->date }}</span></th>
                            </tr>
                            <tr>
                                <th data-breakpoints="xs">Heure début</th>
                                
                                <th data-breakpoints="xs"><span class="">{{ $event->debut }}</span></th>
                            </tr>
                            <tr>
                                <th data-breakpoints="xs">Heure fin</th>
                                
                                <th data-breakpoints="xs"><span class="">{{ $event->fin }}</span></th>
                            </tr>
                            <tr>
                                <th data-breakpoints="xs">Panne</th>
                                
                                <th data-breakpoints="xs">
                                    <span class="">
                                        {{-- {{ $value->panne->description }} --}}
                                    </span>    
                                </th>
                            </tr>
                            <tr>
                                <th data-breakpoints="xs">Techniciens</th>
                                
                                <th data-breakpoints="xs">
                                    <span class="">
                                        @foreach ($event->users as $value)
                                            {{ $value->nom." ".$value->prenom }}<br>
                                        @endforeach
                                    </span>    
                                </th>
                            </tr>
                        </tbody>                        
                    </table>
                </div>
                <div class="modal-footer ">
                    <a href="#" data-dismiss="modal" class="btn btn-danger text-left" style="margin-right: 11%" wire:click='eventRemove({{ $eventId }})'>Supprimer</a>
                    <a data-toggle="modal" href="#myModal2" class="btn btn-primary" style="margin-right: 20%">Modifier</a>
                    <a href="#" data-dismiss="modal" class="btn btn-secondary">Fermer</a>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modification</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <form wire:submit.prevent='updateEvent'>
                        <div class="modal-body" >
                            <div class="form-group">
                                <label class="control-label" for="appt-time">Pannes </label>
                                <select class="form-control col-sm-12" wire:model="panne" >
                                    @foreach ($pan as $value)
                                        {{-- @if ($value->nom != $event->panne->nom) --}}
                                            <option value="{{$value->id}}">{{$value->nom}}</option>
                                        {{-- @endif --}}
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="appt-time">Techniciens </label>
                                <select class="form-control col-sm-12" multiple="multiple" wire:model='technicien'>
                                    @foreach ($tech as $value)
                                    {{-- @foreach ($event->users as $value) --}}
                                        
                                        {{-- <option value="{{$value->id}}" selected>{{$value->nom." ".$value->prenom}}</option>                                @endforeach --}}
                                        <option value="{{$value->id}}">{{$value->nom." ".$value->prenom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="appt-time">Heure de départ : </label>
                                <input class="form-control" id="appt-time" type="time" name="appt-time"
                                       min="12:00" max="18:00" required
                                       pattern="[0-9]{2}:[0-9]{2}" wire:model="start" value="{{ $event->debut }}">
                                <span class="validity"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="appt-time">Heure de fin : </label>
                                <input class="form-control" id="appt-time_second" type="time" name="appt-time"
                                       min="12:00" max="18:00" required
                                       pattern="[0-9]{2}:[0-9]{2}" wire:model="end" value="{{ $event->fin }}">
                                <span class="validity"></span>
                            </div>
                            <div class="form-group row" >
                                <label class="col-sm-2 col-form-label" for="date">Date </label>
                                <div class="col-sm-10 col-md-10" >
                                    <input class="form-control" id="date" type="date" wire:ignore name="date" wire:model='dateP' value="{{ $event->date }}">
                                <span class="validity"></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    @endif
    </div>
