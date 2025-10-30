
$(document).ready(function() {
						   
  function getMonthName() {
	 var monthNames = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"];
	 var d = new Date();
	 return monthNames[d.getMonth()];
	 }
	
	$("#theMonthName").append("(" +getMonthName()+ ")");

 $.get("astro.xml?d=" + Date.now(), function (data) {
    $(data).find("item").each(function () { 
        var el = $(this);
		var thistitle;
		var thisdescription;
		thistitle = el.find("title").text(); 
		thisdescription = el.find("description").text();
		if (thistitle.indexOf("Aquarius") !== -1) {
		   $("#aquarius").append(thisdescription);
		}
		if (thistitle.indexOf("Pisces") !== -1) {
			$("#pisces").append(thisdescription);
		}
		if (thistitle.indexOf("Aries") !== -1) {
			$("#aries").append(thisdescription);
		}
		if (thistitle.indexOf("Taurus") !== -1) {
			$("#taurus").append(thisdescription);
		}
		if (thistitle.indexOf("Gemini") !== -1) {
			$("#gemini").append(thisdescription);
		}
		if (thistitle.indexOf("Cancer") !== -1) {
			$("#cancer").append(thisdescription);
		}
		if (thistitle.indexOf("Leo") !== -1) {
			$("#leo").append(thisdescription);
		}
		if (thistitle.indexOf("Virgo") !== -1) {
			$("#virgo").append(thisdescription);
		}
		if (thistitle.indexOf("Libra") !== -1) {
			$("#libra").append(thisdescription);
		}
		if (thistitle.indexOf("Scorpio") !== -1) {
			$("#scorpio").append(thisdescription);
		}
		if (thistitle.indexOf("Sagittarius") !== -1) {
			$("#sagittarius").append(thisdescription);
		}
		if (thistitle.indexOf("Capricorn") !== -1) {
			$("#capricorn").append(thisdescription);
		}
    	});
	});
 });
