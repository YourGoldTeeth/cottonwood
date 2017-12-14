$(document).ready(function() {


    var userFeed = new Instafeed({
        // get: 'user',
        get: 'location',
        // userId: '269707774',
        locationId: '7507160',
        limit: 12,
        resolution: 'standard_resolution',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
        clientId: '001310425907485eb60fc7c71c89feed',
        accessToken: '249362793.1677ed0.b280c1a341a24fb18f1e05076aa3cea3',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});