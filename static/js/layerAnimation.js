/**
 * This function toggles a class to the layer-container every minute.
 */
setInterval(function(){
    $('.layer-container').toggleClass('change-position');
},60000);
