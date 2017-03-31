// Attendre le chargement du DOM
$(document).ready(function(){

    // Créer une variable string pour le titre principal du site
    var siteTitle = 'Aline <span>Rambier</span>';

    // Créer un tableau pour la nav
    var myNav = [ 'Accueil', 'Portfolio', 'Contacts'];

    // Créer un objet pour les titres des pages
    var myTitles = {
        accueil: 'Bienvenue sur la page d\'accueil',
        portfolio: 'Découvrez mes travaux',
        contacts: 'Contactez-moi pour plus d\'informations'
    };

    // Créer un objet pour le contenu des pages
    var myContent = {
        accueil: '<h3>Contenu de la page Accueil</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi dolorem, veniam dolor velit unde sed voluptatem culpa sequi quis, accusantium nobis, in soluta quos iure hic itaque quod ex, aspernatur.</p>',
        portfolio: '<h3>Contenu de la page Portfolio</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi dolorem, veniam dolor velit unde sed voluptatem culpa sequi quis, accusantium nobis</p>',
        contacts: '<h3>Contenu de la page Contacts</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>'
    };


    // Sélectionner le header et le mettre dans une variable
    var myHeader = $('header');
    // console.log( myHeader );

    // Générer une balise h1 dans le header avec le contenu de la variable siteTitle
    myHeader.append('<h1>' + siteTitle + '</h1>');

    // Générer une balise nav + ul dans le header
    myHeader.append( '<nav><i class="fa fa-bars" aria-hidden="true"></i><ul></ul></nav>');

    // Faire une boucle for(){...} sur myNav pour générer les liens de la nav
    for( var i = 0; i < myNav.length; i++ ){

        // console.log( myNav[i] );

        // Générer les balises html
        $('ul').append('<li><a href="'+ myNav[i] +'">' + myNav[i] + '</a></li>');

    };


    // Afficher dans le main le titre issu de l'objet myTitles
    var myMain = $('main');
    myMain.append( '<h2>' + myTitles.accueil + '</h2>' );
    myMain.append( '<section>' + myContent.accueil + '</section>');


    // Capter l'événement click sur les balises a en bloquant le comportement naturel des balises a
    $('a').click( function(evt) {

        // Bloquer le comportement naturel de la balise
        evt.preventDefault();

        // Connaître l'occurence de la balise a sur laquelle l'utilisateur a cliqué
        // console.log( $(this) );

        // Récupérer la valeur de l'attribut href
        // console.log( $(this).attr('href') );

        // Vérifier la valeur de l'attribut href pour afficher le bon titre
        if( $(this).attr('href') == 'Accueil'){
            // Sélectionner la balise h2 pour changer son contenu
            $('h2').text( myTitles.accueil );

            // Sélectionner la section pour changer le contenu
            $('section').html( myContent.accueil );

        }else if ( $(this).attr('href') =='Portfolio'){
             // Sélectionner la balise h2 pour changer son contenu
            $('h2').text( myTitles.portfolio );

            // Sélectionner la section pour changer le contenu
            $('section').html( myContent.portfolio );


        }else{
              // Sélectionner la balise h2 pour changer son contenu
            $('h2').text( myTitles.contacts );

            // Sélectionner la section pour changer le contenu
            $('section').html( myContent.contacts );

        };

    } );




    

}); // Fin de la fonction de chargement du DOM