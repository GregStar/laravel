

//header animation#######################################################################################
enquire.register("screen and (min-width:49em)", {
    match:
    function init(){
        var $mobile = $(".mobile_header");
        $mobile.css('display', 'none');
        window.addEventListener('scroll', function (e) {
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");

            if (distanceY > shrinkOn) {
                header.classList.add("smale");
            } else {
                if (distanceY < shrinkOn) {
                    header.classList.remove("smale");
                }
            }
        })

    },
    unmatch: function(){
        var $mobile = $(".mobile_header");
        $mobile.css('display', 'flex');
        console.log('yes')
    }

});

//mobile nav##############################################################################################

var navToggle = document.querySelector('.js-menu');
var nav = document.querySelector('.menu');

enquire.register("screen and (max-width: 49em)", {

    // OPTIONAL
    // If supplied, triggered when a media query matches.
    match : function() {
        console.log('match')
        nav.style.height = "0px"
    },

    // OPTIONAL
    // If supplied, triggered when the media query transitions
    // *from a matched state to an unmatched state*.
    unmatch : function() {
        console.log('unmatch')
        nav.style.height = "auto"

    },

    // OPTIONAL
    // If supplied, triggered once, when the handler is registered.
    setup : function() {
        console.log('setup')

        console.log(nav.offsetWidth)

        var navHeight = nav.offsetHeight;

        nav.style.height = 0;
        nav.style.position = 'static';

        navToggle.addEventListener('click', function(e) {
            e.preventDefault();

            nav.classList.toggle('menu--visible');

            if(nav.offsetHeight == 0) {
                nav.style.height = navHeight + "px";
            } else {
                nav.style.height = 0;
            }

            // console.log('click');
        })

    },
    deferSetup : true
});

//datePicker###########################################################################

$(window).load(function()
{
    $('#mydate').glDatePicker({cssName: 'flatwhite'});

});
// nice select
$(document).ready(function() {
    $('select').addClass('wide').niceSelect();
});
/// reservation#########################################################################

//daten an select von table übergeben#######################

$('.table').click(function(){
        event.stopPropagation();
        var tableNumber = this.getAttribute('data');
        $('.table').removeClass('selected_table');
        $(this).addClass('selected_table');

        $('.secondstep').find('.nice-select ul li').each(function () {
            var selectNumber = $(this).text();
            if(tableNumber == selectNumber){
                $(this).addClass('selected focus')
                $('.secondstep').find(".current").html(selectNumber)
            }else{
                $(this).removeClass('selected');
            }
        })
})
//daten an table von select übergeben#######################

$('#f-reservation_table').change(function() {
    var selectNumber = $('#f-reservation_table').val();

    $(".restaurant_floor ul li").each(function () {
        var tableNumber = $(this).attr('data');
        if(selectNumber == tableNumber){
            $(this).addClass('selected_table');
        }else{
            $(this).removeClass('selected_table');
        };
    })

});
//tische für reservierung freischalten

$(window).load(function() {
    var avTables = [];
    $('#f-reservation_table option').each(function(){
        avTables.push($(this).val());
    });

    $(".restaurant_floor ul li").each(function () {
       if(jQuery.inArray(this.getAttribute('data'), avTables) !== -1)
       {
           $(this).removeClass('reservated_table')

       }else{
           console.log($(this));

       }
    })

});