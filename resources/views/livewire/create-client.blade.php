
        
        <form wire:submit.prevent="store" class="j-pro j-multistep" id="j-pro">
            <!-- end /.header-->
            <div class="j-content">
                <fieldset>
                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                        <span>Step 1/2 - Type d'utilisateur</span>
                    </div>
                    <!-- start name -->
                    <div class="j-unit">
                        <label class="j-label text-center">Choix du rôles de l'utilisaeur</label>
                        @foreach ($role as $value)
                        <div class="j-unit checkbox-fade fade-in-primary">
                            <label>
                                <input type="checkbox" id="{{$value->id}}" name = "role" value="{{$value->id}}" >
                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                </span>
                                <span>{{$value->nom}}</span>
                            </label>
                        </div>
                        @endforeach
                        
                    </div>
                </fieldset>
                <fieldset>
                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                        <span>Step 2/2 - Informations personnelles</span>
                    </div>
                    <div id="userrole" >
                        
                    </div>
                </fieldset>
                <!-- start response from server -->
                <div class="j-response"></div>
                <!-- end response from server -->
            </div>
            <!-- end /.content -->
            <div class="j-footer">
                <button type="submit" class="btn btn-primary " id="envoi" >Enregistrer</button>
                <button type="button" class="btn btn-primary j-multi-next-btn" id = "next">Suivant</button>
                <button type="button" class="btn btn-default m-r-20 j-multi-prev-btn">Précedent</button>
            </div>
            <!-- end /.footer -->
        </form>
 