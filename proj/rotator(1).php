<style>
body {background-color:#000;
	
	
		}
.c,.d,.e,.f,.a,.b {position:absolute;

margin-top:80px;
	left:50%;
	cursor:pointer;
	height:100px;
	width:100px;
	
	font-size:36px;
	text-align:center;
	
}
.a img,.b img,.c img,.e img,.f img{
position:absolute;

	
	height:100px;
	width:100px;

	
	
	
	}
.d img{position:absolute;

	
	height:100px;
	width:100px;
	border: 2px  #FFF;
	border-style:ridge;
	border-radius:50%;
	
	}

@keyframes section1{
	from{transform: rotate(280deg) translate(-110px) rotate(-280deg)  scale(1) ;
	
		}
		to
		{transform: rotate(330deg) translate(-110px) rotate(-330deg)  scale(0.67) ;
		
		}
	
	
	}
@keyframes section2{
	from{transform: rotate(330deg) translate(-110px) rotate(-330deg)  scale(0.67) ;
	
		}
	
		to
		{transform: rotate(390deg) translate(-110px) rotate(-390deg)  scale(0.33) ;
		
			
		}
	
	
	}
@keyframes section3{
	from{transform: rotate(30deg) translate(-110px) rotate(-30deg)  scale(0.33) ;
		
		}
		to
		{transform: rotate(100deg) translate(-110px) rotate(-100deg)  scale(0.2) ;
		
		}

	}
@keyframes section4{
	from{transform: rotate(100deg) translate(-110px) rotate(-100deg)  scale(0.2) ;
		
		}
		to
		{transform: rotate(150deg) translate(-110px) rotate(-150deg)  scale(0.33) ;
		
			}

	}
@keyframes section5{
	from{ transform: rotate(150deg) translate(-110px) rotate(-150deg)  scale(0.33) ;
		
		}
		
		to
		{transform: rotate(210deg) translate(-110px) rotate(-210deg)  scale(0.67) ;
					}
		

	}
@keyframes section6{
	from{transform: rotate(210deg) translate(-110px) rotate(-210deg)  scale(0.67) ;
		
		}
		to
		{transform: rotate(280deg) translate(-110px) rotate(-280deg)  scale(1) ;
		
			}
		

	}
	

</style>
<html>
<div class="a"> <img src="icons/white_message.png" /></div>
<div class="b"> <img src="icons/white_friend.png" /> </div>
<div class="c">  <img src="icons/white_group.png" /> </div>
<div class="d"> <img src="icons/profile.jpg" /> </div>
<div class="e"> <img src="icons/white_settings.png" /></div>
<div class="f"> <img src="icons/white_home.png"  /> </div>
hello
</html>


<script src="js/jquery.js"></script>
<script type="text/javascript">
function sec1()
	{
		$(".a").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".b").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".c").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".d").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".e").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".f").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
	}
function sec2()
	{
		$(".a").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".b").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".c").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".d").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".e").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".f").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");


	
	}
function sec3()
	{
		$(".a").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".b").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".c").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".d").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".e").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".f").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
	
	}
function sec4()
	{
		$(".a").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".b").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".c").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".d").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".e").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".f").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
	
	}
function sec5()
	{
		$(".a").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".b").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".c").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".d").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".e").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".f").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
	
	}
function sec6()
	{
		$(".a").css("animation","section6  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".b").css("animation","section1  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".c").css("animation","section2  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".d").css("animation","section3  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".e").css("animation","section4  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
		$(".f").css("animation","section5  cubic-bezier(0.190, 1.000, 0.220, 1.000) 3s ");
	
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



</script>