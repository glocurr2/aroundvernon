$(document).ready(function () {

	var href = document.location.href;
	if (href.indexOf("contactus") != -1) {
		$('#contact-us').addClass('active');
	} else if (href.indexOf("parks") != -1 || href.indexOf("points-of-interest") != -1) {
		$('#places').addClass('active');
	} else if (href.indexOf("directory") != -1) {
		$('#directory').addClass('active');
	}
	/*else if (href.indexOf("funstuff") != -1 ) {
			$('#funstuff').addClass('active');
			getHoroscopes();
		}*/
	else {
		$('#home').addClass('active');
	}


	var modaltype = getParameterByName('modal') || "";
	if (modaltype == "signup") {
		$('#thankyouModal').modal('show');
		setTimeout(function () {
			$('#thankyouModal').modal('hide');
		}, 3000);
	} else if (modaltype == "login") {
		$('#welcomeModal').modal('show');
		setTimeout(function () {
			$('#welcomeModal').modal('hide');
		}, 3000);
	}


	$.get("https://api.openweathermap.org/data/2.5/weather?zip=07461,us&APPID=7c3987b6eac17a36b45a47839f16583f&units=imperial", function (response) {
		$('#raw_json pre').text(JSON.stringify(response));
		var id = response.weather[0].id;
		var image = "";
		var arrSleet = [611, 612, 615, 616, 511];
		if (arrSleet.indexOf(id) > -1) {
			image = "images/icon-heavysnow.png";
		}
		var arrHvySnow = [602, 622];
		if (arrHvySnow.indexOf(id) > -1) {
			image = "images/icon-heavysnow.png";
		}
		var arrLtSnow = [600, 601, 620, 621];
		if (arrLtSnow.indexOf(id) > -1) {
			image = "images/icon-snow.png";
		}
		var arrLittleCloud = [801, 951];
		if (arrLittleCloud.indexOf(id) > -1) {
			image = "images/icon-puffy.png";
		}
		var arrClear = [800, 952, 953, 954, 955, 221, 230, 231, 232, 904];
		if (arrClear.indexOf(id) > -1) {
			image = "images/icon-sunny.png";
		}
		var arrThunderstorm = [200, 201, 202, 210, 211, 212, 221, 230, 231, 232];
		if (arrThunderstorm.indexOf(id) > -1) {
			image = "images/icon-thunder.png";
		}
		var arrFog = [711, 721, 741, 804];
		if (arrFog.indexOf(id) > -1) {
			image = "images/icon-fog.png";
		}
		var arrPartlyCloudy = [803, 802];
		if (arrPartlyCloudy.indexOf(id) > -1) {
			image = "images/icon-partlycloudy.png";
		}
		var arrMist = [701, 300, 310];
		if (arrMist.indexOf(id) > -1) {
			image = "images/icon-mist.png";
		}
		var arrLtRain = [301, 302, 311, 313, 321, 500, 501, 522];
		if (arrLtRain.indexOf(id) > -1) {
			image = "images/icon-drizzle.png";
		}
		var arrRain = [502, 503, 504, 311, 312, 313, 321, 520, 521, 531, 960, 961];
		if (arrRain.indexOf(id) > -1) {
			image = "images/icon-rain.png";
		}
		var description = response.weather[0].description;
		description = toTitleCase(description);
		if (description == "Mist") {
			description = "Misty";
		}
		var wtext = "";
		wtext = '<div id ="weather" class="fleft2"><div class="fleft"><b>Weather: </b>' + description + '<br/>';
		wtext += '<b>Current Temp: </b>' + parseInt(response.main.temp) + '&deg; F<br/>';
		wtext += '<b>High: </b>' + parseInt(response.main.temp_max) + '&deg; F<br/>';
		wtext += '<b>Low: </b>' + parseInt(response.main.temp_min) + '&deg; F<br/>';
		wtext += '<b>Humidity: </b>' + response.main.humidity + '%<br/><br/></div><div class="fleft">&nbsp; <img src="' + image + '"/></div></div>';

		var theCurrentSign = "";
		theCurrentSign = findZodiacSign();
		var allWords = [];
		allWords = theCurrentSign.split(" ");

		var zodiacBirthday = "";
		zodiacBirthday = allWords[0];
		zodiacBirthday = zodiacBirthday.toLowerCase();

		var hscope = "";
		hscope = "";
		hscope = "<div class='fleft2'><div class='fleft2'><b>" + theCurrentSign;
		hscope += "</div>";
		hscope += "<div class='fleft2'><img src='images/z-" + zodiacBirthday + ".jpg'></div>";
		var href = document.location.href;
		if (href.indexOf("funstuff") == -1) {
			hscope += "<div class='fleft2' style='clear:both'><a href='funstuff.php'><b>See Horoscopes</b></a></div></div>";
		}
		$('#jumbotext').append(wtext + hscope);

		if (typeof (Storage) !== "undefined") {
			if (sessionStorage.getItem("zodiacBirthday") != "") {
				sessionStorage.setItem("zodiacBirthday", zodiacBirthday);
			}
		} else {
			//alert("Sorry! No Web Storage support..");
		}

		getQuotation();
	});


	function findZodiacSign() {

		var today = new Date();
		var thisday = today.getDate();
		var thismonth = today.getMonth() + 1; //January is 0!
		var thisyear = today.getFullYear();
		var nextyear = today.getFullYear() + 1;
		var previousyear = today.getFullYear() - 1;

		var aquariusBeginDate = new Date('1/20/' + thisyear);
		var aquariusEndDate = new Date('2/19/' + thisyear);
		var piscesBeginDate = new Date('2/19/' + thisyear);
		var piscesEndDate = new Date('3/21/' + thisyear);
		var ariesBeginDate = new Date('3/21/' + thisyear);
		var ariesEndDate = new Date('4/20/' + thisyear);
		var taurusBeginDate = new Date('4/20/' + thisyear);
		var taurusEndDate = new Date('5/21/' + thisyear);
		var geminiBeginDate = new Date('5/21/' + thisyear);
		var geminiEndDate = new Date('6/21/' + thisyear);
		var cancerBeginDate = new Date('6/21/' + thisyear);
		var cancerEndDate = new Date('7/23/' + thisyear);
		var leoBeginDate = new Date('7/23/' + thisyear);
		var leoEndDate = new Date('8/23/' + thisyear);
		var virgoBeginDate = new Date('8/23/' + thisyear);
		var virgoEndDate = new Date('9/23/' + thisyear);
		var libraBeginDate = new Date('9/23/' + thisyear);
		var libraEndDate = new Date('10/23/' + thisyear);
		var scorpioBeginDate = new Date('10/23/' + thisyear);
		var scorpioEndDate = new Date('11/22/' + thisyear);
		var sagittariusBeginDate = new Date('11/22/' + thisyear);
		var sagittariusEndDate = new Date('12/22/' + thisyear);
		var capricornBeginDate = new Date('12/22/' + thisyear);
		var capricornEndDate = new Date('1/20/' + nextyear);
		var capricornBeginDate = new Date('12/22/' + previousyear); //note take these lines out end of 2020
		var capricornEndDate = new Date('1/20/' + thisyear); //note take these lines out end of 2020

		if (today >= aquariusBeginDate && today <= aquariusEndDate) {
			return "Aquarius </b><br/><b>Birthdays:</b><br/>Jan 20 - Feb 18";
		} else if (today >= piscesBeginDate && today <= piscesEndDate) {
			return "Pisces </b><br/><b>Birthdays:</b><br/>Feb 19 - Mar 20";
		} else if (today >= ariesBeginDate && today <= ariesEndDate) {
			return "Aries </b><br/><b>Birthdays:</b><br/>Mar 21 - Apr 19";
		} else if (today >= taurusBeginDate && today <= taurusEndDate) {
			return "Taurus </b><br/><b>Birthdays:</b><br/>Apr 20 - May 20";
		} else if (today >= geminiBeginDate && today <= geminiEndDate) {
			return "Gemini </b><br/><b>Birthdays:</b><br/>May 21 - June 20";
		} else if (today >= cancerBeginDate && today <= cancerEndDate) {
			return "Cancer </b><br/><b>Birthdays:</b><br/>June 21 - July 22";
		} else if (today >= leoBeginDate && today <= leoEndDate) {
			return "Leo </b><br/><b>Birthdays:</b><br/>July 23 - Aug 22";
		} else if (today >= virgoBeginDate && today <= virgoEndDate) {
			return "Virgo </b><br/><b>Birthdays:</b><br/>Aug 23 - Sept 22";
		} else if (today >= libraBeginDate && today <= libraEndDate) {
			return "Libra </b><br/><b>Birthdays:</b><br/>Sept 23 - Oct 22";
		} else if (today >= scorpioBeginDate && today <= scorpioEndDate) {
			return "Scorpio </b><br/><b>Birthdays:</b><br/>Oct 23 - Nov 21";
		} else if (today >= sagittariusBeginDate && today <= sagittariusEndDate) {
			return "Sagittarius </b><br/><b>Birthdays:</b><br/>Nov 22 - Dec 21";
		} else if (today >= capricornBeginDate && today <= capricornEndDate) {
			return "Capricorn </b><br/><b>Birthdays:</b><br/>Dec 22 - Jan 19";
		}
	}




	$('#Login').click(function (e) {
		$('#alertsLogin').removeClass("alert alert-warning");
		$('#alertsLogin').html("");
		$('#loginID').removeClass("has-error");
		$('#loginPassword').removeClass("has-error");
		var result2 = "";

		var inputLoginID = $('#inputLoginID').val();
		inputLoginID = inputLoginID.replace(/^[ ]+|[ ]+$/g, '');
		var inputLoginPassword = $('#inputLoginPassword').val();
		inputLoginPassword = inputLoginPassword.replace(/^[ ]+|[ ]+$/g, '');

		if (inputLoginID == "") {
			e.preventDefault();
			$('#loginID').addClass("has-error");
			$('#alertsLogin').addClass("alert alert-warning");
			$('#alertsLogin').html("Please Enter Your Username. ");
		} else if (inputLoginPassword == "") {
			e.preventDefault();
			$('#loginPassword').addClass("has-error");
			$('#alertsLogin').addClass("alert alert-warning");
			$('#alertsLogin').html("Please Enter Your Password. ");
		} else if (inputLoginID != "" && inputLoginPassword != "") {
			$.get("testunpassword.php?un=" + inputLoginID + "&pass=" + inputLoginPassword, function (data) {
				var thedata2 = jQuery.parseJSON(data);
				result2 = thedata2.result;
				if (result2 != "okay") {
					$('#alertsLogin').addClass("alert alert-warning");
					$('#alertsLogin').html("The Username/Password Combination does not exist. Please try again.");
				} else {
					$("#LoginForm").submit();
				}
			});
			e.preventDefault();
		}
	});


	$('#Signup').click(function (e) {
		$('#alerts').removeClass("alert alert-warning");
		$('#alerts').html("");
		$('#firstName').removeClass("has-error");
		$('#lastName').removeClass("has-error");
		$('#email').removeClass("has-error");
		$('#town').removeClass("has-error");
		$('#state').removeClass("has-error");
		$('#userID').removeClass("has-error");
		$('#password').removeClass("has-error");
		$('#reenterPassword').removeClass("has-error");

		var emailReg = "/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i"
		var inputFirstName = $('#inputFirstName').val();
		inputFirstName = inputFirstName.replace(/^[ ]+|[ ]+$/g, '');
		var inputLastName = $('#inputLastName').val();
		inputLastName = inputLastName.replace(/^[ ]+|[ ]+$/g, '');
		var inputLastName = $('#inputLastName').val();
		inputLastName = inputLastName.replace(/^[ ]+|[ ]+$/g, '');
		var inputEmail = $('#inputEmail').val();
		inputEmail = inputEmail.replace(/^[ ]+|[ ]+$/g, '');
		var inputTown = $('#inputTown').val();
		inputTown = inputTown.replace(/^[ ]+|[ ]+$/g, '');
		var inputState = $('#inputState').val();
		var inputUserID = $('#inputUserID').val();
		inputUserID = inputUserID.replace(/^[ ]+|[ ]+$/g, '');
		var inputPassword = $('#inputPassword').val();
		inputPassword = inputPassword.replace(/^[ ]+|[ ]+$/g, '');
		var inputReenterPassword = $('#inputReenterPassword').val();
		inputReenterPassword = inputReenterPassword.replace(/^[ ]+|[ ]+$/g, '');

		if (inputFirstName == "") {
			e.preventDefault();
			$('#firstName').addClass("has-error");
			$('#alerts').addClass("alert alert-warning");
			$('#alerts').html("Please enter your First Name. ");
		} else if (inputLastName == "") {
			e.preventDefault();
			$('#lastName').addClass("has-error");
			$('#alerts').addClass("alert alert-warning");
			$('#alerts').html("Please enter your Last Name. ");
		} else if (!validateEmail(inputEmail)) {
			e.preventDefault();
			$('#email').addClass("has-error");
			$('#alerts').addClass("alert alert-warning");
			$('#alerts').html("Password must be in correct format. ");
		} else if (inputTown == "") {
			e.preventDefault();
			$('#town').addClass("has-error");
			$('#alerts').addClass("alert alert-warning");
			$('#alerts').html("Please enter your Town. ");
		} else if (inputState == "") {
			e.preventDefault();
			$('#state').addClass("has-error");
			$('#alerts').addClass("alert alert-warning");
			$('#alerts').html("Please choose your State. ");
		} else if (inputUserID == "" || inputUserID.length < 6) {
			e.preventDefault();
			$('#userID').addClass("has-error");
			$('#alerts').addClass("alert alert-warning");
			$('#alerts').html("Your Username must be at least 6 characters. ");
		} else if (inputPassword == "" || inputPassword.length < 9) {
			e.preventDefault();
			$('#password').addClass("has-error");
			$('#alerts').addClass("alert alert-warning");
			$('#alerts').html("Your Password must be at least 9 characters. ");
		} else if (inputReenterPassword != inputPassword) {
			e.preventDefault();
			$('#reenterPassword').addClass("has-error");
			$('#alerts').addClass("alert alert-warning");
			$('#alerts').html("Password and Re-enter Password must be the same");
		} else if (inputUserID != "" && inputPassword != "") {
			var result = "";
			$.get("https://www.aroundvernon.com/getunpassword.php?un=" + inputUserID + "&pass=" + inputPassword, function (data) {
				var thedata = jQuery.parseJSON(data);
				result = thedata.result;
				if (result == "duplicate") {
					e.preventDefault();
					$('#alerts').addClass("alert alert-warning");
					$('#alerts').html("The Username/Password Combination has already been taken. Please choose another Username or Password.");
				}
			});
		}

	});

}); //(ends) document.ready


function dayOfYear() {
	var now = new Date();
	var start = new Date(now.getFullYear(), 0, 0);
	var diff = now - start;
	var oneDay = 1000 * 60 * 60 * 24;
	var day = Math.floor(diff / oneDay);
	return day;
}

function getQuotation() {
	thisQuoteNum = dayOfYear() - 210;
	jQuery.ajax({
		url: "quotes/json.php?rnum=" + thisQuoteNum,
		type: "GET",
		dataType: "json",
		async: true,
		success: function (data) {
			var response = data;
			var thequote = response[0].quote;
			var thecredits = "- " + response[0].author + "<br/>";
			if (response[0].occupation != null && response[0].occupation != "null") {
				thecredits += "&nbsp; " + response[0].occupation + "<br/>";
				thecredits += "&nbsp; (" + response[0].years + ")";
			}
			$('#quoteofday').html(thequote);
			$('#quotecredit').html(thecredits);
		}
	});
}



function toTitleCase(str) {
	return str.replace(/\w\S*/g, function (txt) {
		return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
	});
}

function validateEmail(email) {
	var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	return re.test(email);
}

function getParameterByName(name) {
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(location.search);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}