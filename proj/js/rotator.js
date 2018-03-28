// JavaScript Document
function sec1()
	{
		$(".a").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".b").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".c").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".d").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".e").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".f").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
	}
function sec2()
	{
		$(".a").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".b").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".c").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".d").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".e").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".f").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");


	
	}
function sec3()
	{
		$(".a").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".b").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".c").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".d").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".e").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".f").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
	
	}
function sec4()
	{
		$(".a").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".b").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".c").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".d").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".e").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".f").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
	
	}
function sec5()
	{
		$(".a").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".b").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".c").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".d").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".e").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".f").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
	
	}
function sec6()
	{
		$(".a").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".b").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".c").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".d").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".e").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
		$(".f").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 4s ");
	
	}

	function repeat()
	{setTimeout(sec1,000);
	
	setTimeout(sec2,3000);
	setTimeout(sec3,6000);
	setTimeout(sec4,9000);
	setTimeout(sec5,12000);
	setTimeout(sec6,15000);
	}
	repeat();
	setInterval(repeat,18000)

