/*

Send Mail

*/
(function($) {

    var error = false;
    var validName = false;
    var validEmail = false;
    var validComment = false;


    $("#form").submit(function(event) {
        event.preventDefault();

        var name = $("form [name='name_surname']").val();
        var email = $("form [name='email']").val();
        var comment = $("form [name='comment']").val();


        var pattern_email = RegExp(/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i);
        var pattern_name = RegExp(/[a-zA-Z]/);

        if (!pattern_name.test(name)) {
            $("form [name='name_surname']").addClass("redColor");
            validName = false;
        } else {
            $("form [name='name_surname']").removeClass("redColor");
            validName = true;
        }

        if (!pattern_email.test(email)) {
            $("fieldset").addClass("redColor");
            validEmail = false;
        } else {
            $("fieldset").removeClass("redColor");
            validEmail = true;
        }


        if (comment == '' || comment.length < 5) {
            $("form [name='comment']").addClass("redColor");
            validComment = false;
        } else {
            $("form [name='comment']").removeClass("redColor");
            validComment = true;
        }

        if (validName == true && validEmail == true && validComment == true) {
            error = true;
        }

        if (error) {
            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                type: 'post',
                data: {
                    action: 'my_action',
                    name: name,
                    email: email,
                    comment: comment
                },
                beforeSend: function(data) {
                    $('.preloader').css("display", "block");
                },
                success: function(funk1) {
                    $('.preloader').css("display", "none");
                    $("#form").each(function() {
                        this.reset();
                    });
                    $('.eachForm').css('display', 'none');
                    $('.thankyouWrap').css('display', 'block');
                }
            });
        }
    });

})(jQuery);


/*

Google maps

*/
(function($) {

    /*
     *  new_map
     *
     *  This function will render a Google Map onto the selected jQuery element
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$el (jQuery element)
     *  @return	n/a
     */

    function new_map($el) {

        // var
        var $markers = $el.find('.marker');


        // vars
        var args = {
            zoom: 16,
            center: new google.maps.LatLng(0, 0),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };


        // create map
        var map = new google.maps.Map($el[0], args);


        // add a markers reference
        map.markers = [];


        // add markers
        $markers.each(function() {

            add_marker($(this), map);

        });


        // center map
        center_map(map);


        // return
        return map;

    }

    /*
     *  add_marker
     *
     *  This function will add a marker to the selected Google Map
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$marker (jQuery element)
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function add_marker($marker, map) {

        // var
        var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

        // create marker
        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });

        // add to array
        map.markers.push(marker);

        // if marker contains HTML, add it to an infoWindow
        if ($marker.html()) {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function() {

                infowindow.open(map, marker);

            });
        }

    }

    /*
     *  center_map
     *
     *  This function will center the map, showing all markers attached to this map
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function center_map(map) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each(map.markers, function(i, marker) {

            var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

            bounds.extend(latlng);

        });

        // only 1 marker?
        if (map.markers.length == 1) {
            // set center of map
            map.setCenter(bounds.getCenter());
            map.setZoom(16);
        } else {
            // fit to bounds
            map.fitBounds(bounds);
        }

    }

    /*
     *  document ready
     *
     *  This function will render each map when the document is ready (page has loaded)
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	5.0.0
     *
     *  @param	n/a
     *  @return	n/a
     */
    // global var
    var map = null;

    $(document).ready(function() {

        $('.acf-map').each(function() {

            // create map
            map = new_map($(this));

        });

    });

})(jQuery);


/*

UnderBar

*/
(function($) {

    var button = $("#buttonSlide");
    var sideBar = $(".sidebar");
    button.click(function() {
        sideBar.toggleClass("sideBarWrapForSlide");
        $(".buttonForSidebar").toggleClass("arrowsWrapForButton");
    });

})(jQuery);