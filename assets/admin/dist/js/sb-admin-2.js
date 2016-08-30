$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});

// Datetime picker plugin
$('#datetimepicker').datetimepicker({
    dayOfWeekStart : 1,
    lang:'en',
    disabledDates:['1986-01-08','1986-01-09','1986-01-10'],
    startDate:  '2016-02-20'
});

$('#datetimepicker').datetimepicker({step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
    formatTime:'H:i:s',
    formatDate:'Y-m-d',
    //defaultDate:'8.12.1986', // it's my birthday
    defaultDate:'+03.01.1970', // it's my birthday
    defaultTime:'10:00:00',
    timepickerScrollbar:false
});

$('#datetimepicker2').datetimepicker({
    dayOfWeekStart : 1,
    lang:'en',
    disabledDates:['1986-01-08','1986-01-09','1986-01-10'],
    startDate:  '2016-02-20'
});

$('#datetimepicker').datetimepicker({step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
    formatTime:'H:i:s',
    formatDate:'Y-m-d',
    //defaultDate:'8.12.1986', // it's my birthday
    defaultDate:'+03.01.1970', // it's my birthday
    defaultTime:'10:00:00',
    timepickerScrollbar:false
});

$('#datetimepicker3').datetimepicker({
    dayOfWeekStart : 1,
    lang:'en',
    disabledDates:['1986-01-08','1986-01-09','1986-01-10'],
    startDate:  '2016-02-20'
});

$('#datetimepicker').datetimepicker({step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
    formatTime:'H:i:s',
    formatDate:'Y-m-d',
    //defaultDate:'8.12.1986', // it's my birthday
    defaultDate:'+03.01.1970', // it's my birthday
    defaultTime:'10:00:00',
    timepickerScrollbar:false
});

$('#datepicker1').datetimepicker({
    lang:'en',
    timepicker:false,
    format:'Y/m/d',
    formatDate:'Y/m/d',
    minDate:'-2000/01/02' // yesterday is minimum date
});

$('#datepicker2').datetimepicker({
    lang:'en',
    timepicker:false,
    format:'Y/m/d',
    formatDate:'Y/m/d',
    minDate:'-2000/01/02' // yesterday is minimum date
});
