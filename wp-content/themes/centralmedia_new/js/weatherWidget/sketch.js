var weather;

var api = 'http://api.openweathermap.org/data/2.5/forecast/daily?q=Lviv&cnt=8';
var apiKey = '&APPID=b8156e87d682e65e4c91f1dfc281d595';
var units = '&units=metric';


function setup() {
   var url = api + apiKey + units;
   loadJSON(url, gotData);
}

function gotData(data) {
  weather = data;
  console.log(weather);
}

 function tempToday() {
	var nowTemp = Math.round(weather.list[0].temp.day) + '°C';
	var smallWidgetTemp = document.getElementById('rb-temp');
	var bigWidgetTemp = document.getElementById('fullTemp');
	smallWidgetTemp.innerHTML = nowTemp;
	bigWidgetTemp.innerHTML = nowTemp;
}

function tempForWeek(){
	var objRbWeekTemp = document.getElementsByClassName('rb-week-temp');
	for(var i=0; i<objRbWeekTemp.length; i++) {
		objRbWeekTemp[i].innerHTML = Math.round(weather.list[i+1].temp.day) + '°C';
	}
}

function weatherIconToday() {
	var weatherDescription = weather.list[0].weather[0].main;
	weatherDescription = weatherDescription.toLowerCase();
	var icon1 = document.getElementById("today-icon1");
	var icon2 = document.getElementById("today-icon2");
	
	icon1.className = setWeatherIcon(weatherDescription);;
	icon2.className = setWeatherIcon(weatherDescription);;
}

function weatherIconForWeek() {
	var weatherList =  weather.list;
	var weatherDescription = [];
	for(var i=1; i<weatherList.length; i++) {
		weatherDescription[i-1] = weatherList[i].weather[0].main;
		weatherDescription[i-1] = weatherDescription[i-1].toLowerCase();
	}
	
	var weekIcons = [];
	for(var i=1; i<8; i++){
		var iconId = 'week-icon' + i;
		weekIcons[i-1] = document.getElementById(iconId);
	}
	
	for(var i=0; i<weekIcons.length; i++) {
		weekIcons[i].className = setWeatherIcon(weatherDescription[i]);
	}
}

function setWeatherIcon(weatherDesc) {
	if(weatherDesc == 'clear') {
		return 'icon-clima-2';
	}
	else if(weatherDesc == 'clouds') {
		return 'icon-clima-1';
	}
	else if(weatherDesc == 'drizzle') {
		return 'icon-clima-3';
	}
	else if(weatherDesc == 'rain') {
		return 'icon-clima-4';
	}
	else if(weatherDesc == 'thunderstorm') {
		return 'icon-clima-8';
	}
	else if(weatherDesc == 'snow') {
		return 'icon-clima-7';
	}
	else if(weatherDesc == 'atmosphere') {
		return 'icon-clima-5';
	}
	else if(weatherDesc == 'extreme') {
		return 'icon-clima-8';
	}
	else if(weatherDesc == 'additional') {
		return 'icon-clima-1';
	}
	
}


function draw() {
  if (weather) {
	 tempToday();
	 weatherIconToday();
	
	tempForWeek();
	weatherIconForWeek();
  }
}
