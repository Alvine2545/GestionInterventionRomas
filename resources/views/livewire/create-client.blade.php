
        <div>
        <form wire:submit.prevent="store" class="j-pro j-multistep" id="j-pro">
            @csrf
            <!-- end /.header-->
            <div class="j-content">
                <fieldset>
                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                        <span>Step 1/2 - Type d'utilisateur</span>
                    </div>
                    <!-- start name -->
                    <div class="j-unit">
                        <label class="j-label text-center">Choix du rôles de l'utilisaeur</label>
                        @foreach ($roles as $value)
                        <div class="j-unit checkbox-fade fade-in-primary" >
                            <label >
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
                    <div id="userrole">
                        @if ($etat = 1)
                        <div class="j-unit">
                            <label class="j-label">Nom de l\'entreprise *</label>
                            <div class="j-input"><label class="j-icon-right" for="name">
                                <i class="icofont icofont-ui-user"></i></label>
                                <input type="text" id="" name="nom" wire:model="nom">
                            </div>
                        </div>
                        <div class="j-row">
                            <div class="j-span6 j-unit">
                                <label class="j-label">Numero IFU *</label>
                                <div class="j-input">
                                    <label class="j-icon-right" for="email">
                                        <i class="icofont icofont-envelope"></i>
                                    </label>
                                    <input type="text" id="identifiant" name="identifiant" wire:model="identifiant">
                                </div>
                            </div>
                            <div class="j-span6 j-unit">
                                <label class="j-label">Raison sociale</label>
                                <div class="j-input">
                                    <label class="j-icon-right" for="phone">
                                        <i class="icofont icofont-phone"></i>
                                    </label>
                                    <input type="text" id="raisonsociale" wire:model='raisonsociale'>
                                </div>
                            </div>
                        </div>
                        <div class="j-row">
                            <div class="j-span6 j-unit">
                                <label class="j-label">Adresse Email</label>
                                <div class="j-input">
                                    <label class="j-icon-right" for="email">
                                        <i class="icofont icofont-envelope"></i>
                                    </label>
                                    <input type="email" id="email"  name="email" wire:model='email'>
                                </div>
                            </div>
                            <div class="j-span6 j-unit">
                                <label class="j-label">Adresse téléphonique</label>
                                <div class="j-input">
                                    <label class="j-icon-right" for="phone">
                                        <i class="icofont icofont-phone"></i>
                                    </label>
                                    <input type="text" id="phone" name="phone" wire:model='phone'>
                                </div>
                            </div>
                        </div>
                        <div class="j-unit">
                            <label class="j-label">Siège</label>
                            <div class="j-input">
                                <label class="j-icon-right" for="name">
                                    <i class="icofont icofont-ui-user"></i>
                                </label>
                                <input type="text" id="siege" name="siege" wire:model='siege'>
                            </div>
                        </div>
                        @endif
                    </div>
                </fieldset>
                <!-- start response from server -->
                <div class="j-response"></div>
                <!-- end response from server -->
            </div>
            <!-- end /.content -->
            <div class="j-footer">
                <button type="submit" class="btn btn-primary" id="envoie">Enregistrer</button>
                <button type="button" class="btn btn-primary j-multi-next-btn" id = "next">Suivant</button>
                <button type="button" class="btn btn-default m-r-20 j-multi-prev-btn">Précedent</button>
            </div>
            <!-- end /.footer -->
        </form>
    </div>