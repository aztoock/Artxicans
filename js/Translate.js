/* Funcion para API de Google Translate, este codigo nos lo proposciona la API de Google*/
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        /* Idioma inicial */
       pageLanguage: 'es', layout: 
       google.translate.TranslateElement.InlineLayout.VERTICAL, autoDisplay: 
       /* en el included solo agregamos idioma ingles para traducir*/
       false, includedLanguages: 'en,es', gaTrack: true, gaId: 'YOUR_API_KEY'
       }, 'traducir');
 }