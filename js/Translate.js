function googleTranslateElementInit() {
    new google.translate.TranslateElement({
       pageLanguage: 'es', layout: 
       google.translate.TranslateElement.InlineLayout.VERTICAL, autoDisplay: 
       false, includedLanguages: 'en,es', gaTrack: true, gaId: 'YOUR_API_KEY'
       }, 'traducir');
 }