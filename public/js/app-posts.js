$(function(){
	// setTime();
	// $("#iframe-weather").load("https://climaagora.com.br/clima-agora/sp-sao-paulo#clima-atual");
});

function setTime(){
	var today = new Date();
	var day = today.getDate() + "";
	var month = (today.getMonth() + 1) + "";
	var year = today.getFullYear() + "";
	var hour = today.getHours() + "";
	var minutes = today.getMinutes() + "";
	var seconds = today.getSeconds() + "";

	day = checkZero(day);
	month = checkZero(month);
	year = checkZero(year);
	hour = checkZero(hour);
	mintues = checkZero(minutes);
	seconds = checkZero(seconds);

	var datetime = day + "/" + month + "/" + year + " " + hour + ":" + minutes + ":" + seconds;

	$("#div-datetime").html(datetime);
	// setInterval(setTime, 1000);
}


function checkZero(data){
  if(data.length == 1){
    data = "0" + data;
  }
  return data;
}