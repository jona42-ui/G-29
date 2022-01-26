function timeSession() {
    /*var date1 = moment('startdate and time', 'DD - MM - YYYY HH:mm');
    var date2 = moment('submitdate and time', 'DD - MM - YYYY HH:mm');
    var m1 = date2.diff(date1, 'minutes');
    var m2 = date2.diff(date1, 'h');

    numdays = math.floor(m1 / 1440);
    numhours = math.floor((m1 % 1440) / 60);
    numminutes = math.floor((m1 % 1440) % 60);

    numdays + "day(s)" + numhours + "hours" + numminutes + "minutes";*/

    var x = document.getElementById("start").value;
    var date1 = new Date(x);
    var y = document.getElementById("submission").value;
    var date2 = new Date(y);

    var tt1 = date1.getTime();
    var tt2 = date2.getTime();
    var duration = tt2 - tt1;

    document.getElementById("duration").innerHTML = duration;
    console.log(duration);
}