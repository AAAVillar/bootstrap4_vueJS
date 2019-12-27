
// connection

function _(x){
	return document.getElementById(x);
};
var myDate = new Date();

_('dateDemo').innerHTML = "Today is " + myDate.toDateString() + "<br><sub> courtesy of javascript</sub>";
