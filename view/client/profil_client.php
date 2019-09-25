    
<link  rel="stylesheet" href="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/jquery-ui/themes/base/jquery-ui.min.css">
<link  rel="stylesheet" href="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/icon-awesome/css/font-awesome.min.css"
>
 
<script  src="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/jquery-ui/jquery-ui.core.min.js"></script>
<script  src="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/jquery-ui/ui/widgets/menu.js"></script>
<script  src="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/jquery-ui/ui/widgets/mouse.js"></script>
<script  src="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/jquery-ui/ui/widgets/autocomplete.js"></script>
<script  src="<?php echo  BASE_URL_THEME_UNIFY; ?>js/components/hs.autocomplete.js"></script>
    
<script  src="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/jquery.filer/js/jquery.filer.min.js"></script>
<script  src="<?php echo  BASE_URL_THEME_UNIFY; ?>js/helpers/hs.focus-state.js"></script>
<script  src="<?php echo  BASE_URL_THEME_UNIFY; ?>js/components/hs.file-attachement.js"></script>
    
    
    
    
<?php echo $this->Session->flash(); ?>
<header class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
    <h2 class="h3 u-heading-v2__title text-uppercase g-font-weight-300 mb-0">Identité Utilisateur</h2>
</header>
    
<div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
    <form method="POST" action="/client/pu_save_Id" >
        
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <label for="inputGroup11_1">Nom</label>
                <input name="nom" value="<?php if(isset($client[0]->nom)) echo $client[0]->nom ;?>" id="inputGroup11_1" class="form-control rounded-0 form-control-md" type="text" placeholder="Votre Nom">
            </div>
            <div class="col-md-6">
                <label for="inputGroup11_2">Prenom</label>
                <input name="prenom" value="<?php if(isset($client[0]->prenom)) echo $client[0]->prenom ;?>" id="inputGroup11_2" class="form-control rounded-0 form-control-md" type="text" placeholder="Votre Prenom">
            </div>
        </div>
            
        <hr class="g-brd-gray-light-v4 g-mx-minus-30">
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <label for="inputGroup11_3">Email</label>
                <input  value="<?php if(isset($client[0]->email)) echo $client[0]->email ;?>" id="inputGroup11_3" class="form-control rounded-0 form-control-md" type="text" placeholder="Votre Email">
            </div>
            <div class="col-md-6">
                <label for="inputGroup11_4">Numero</label>
                <input name="contact" value="<?php if(isset($client[0]->contact)) echo $client[0]->contact ;?>" id="inputGroup11_4" class="form-control rounded-0 form-control-md" type="text" placeholder="Votre Telegram">
            </div>
        </div>
            
        <hr class="g-brd-gray-light-v4 g-mx-minus-30">
        <input class="btn   u-btn-teal g-font-size-default" type="submit" value="Sauvegarder">
    </form>
</div>
    
    
<header class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
    <h2 class="h3 u-heading-v2__title text-uppercase g-font-weight-300 mb-0">Adresse Utilisateur</h2>
</header>
    
    
<div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
    <form method="POST" action="/client/pu_save_adress">
        
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <label for="inputGroup11_6">Pays</label>
                <input name="pays" value="<?php if(isset($client[0]->pays)) echo $client[0]->pays ;?>" id="inputGroup11_6" class="form-control rounded-0 form-control-md" type="text" placeholder="Votre Pays">
            </div>
            <div class="col-md-6">
                <label for="inputGroup11_7">Ville</label>
                <input name="town" value="<?php if(isset($client[0]->town)) echo $client[0]->town ;?>" id="inputGroup11_7" class="form-control rounded-0 form-control-md" type="text" placeholder="Votre Ville">
            </div>
        </div>
            
        <hr class="g-brd-gray-light-v4 g-mx-minus-30">
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <label for="inputGroup11_8">Region</label>
                <input name="region" value="<?php if(isset($client[0]->region)) echo $client[0]->region ;?>" id="inputGroup11_8" class="form-control rounded-0 form-control-md" type="text" placeholder="Votre Region">
            </div>
            <div class="col-md-6">
                <label for="inputGroup11_9">Adresse</label>
                <input name="adress" value="<?php if(isset($client[0]->adress)) echo $client[0]->adress ;?>" id="inputGroup11_9" class="form-control rounded-0 form-control-md" type="text" placeholder="Votre Adresse">
            </div>
        </div>
            
        <hr class="g-brd-gray-light-v4 g-mx-minus-30">
            
        <input class="btn   u-btn-teal g-font-size-default" type="submit" value="Sauvegarder">
    </form>
</div>
    
    
  
    
<div >
    
    <script >
        $(document).on('ready', function () {
            // initialization of forms
            $.HSCore.components.HSFileAttachment.init('.js-file-attachment');
            $.HSCore.helpers.HSFocusState.init();
        });
    </script>
</div>
     