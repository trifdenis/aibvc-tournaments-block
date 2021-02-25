/**
 * Use GridJS to manipulate the tournaments on the Front-End.
 */

var $  = require('jquery');

$(document).ready(function() {

     let tournamentsWrapper = $(".aibvc-tournaments-wrapper");
     let tournamentsData = JSON.parse( tournamentsWrapper.attr( 'tournaments-data' ) );

     new gridjs.Grid( { 
        columns: [ 'Titolo', 'Società', 'Tipo', 'Supervisore Torneo', 'Supervisore Arbitrale', 'Direttore Competizione', 'Formula', 'Impianto', 'Città', 'Quota iscrizione', 'Punti vittoria', 'Montepremi', 'Data inizio', 'Data fine', 'Data chiusura iscrizioni', 'Genere' ],
        data: tournamentsData,
        search: {
            enabled: true,
        },
        pagination: {
            enabled: true,
        }
     } ).render(tournamentsWrapper.get(0));


});
