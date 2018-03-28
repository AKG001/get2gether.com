<form method="post" action="home.php" >

<div id="sse1">
  <div class="site"><a href="home.php?q=show_post"><i class="fa fa-bug"></i> Get2gether.com</a></div>
  
  <div id="sses1">
    <ul>
      <li><a href="home.php?q=show_post">Dashboard</a></li>
      <li><a href="message.php?a=<?php echo $_SESSION['user_name']; ?>">Messages</a></li>
      <li><a href="profile.php?p=<?php echo $_SESSION['user_name']; ?>">Profile</a></li>
      <li><a href="home.php?q=friends">Friends</a></li>
      <li onClick="javascript:ftch('<?php echo $user_name; ?>');$('#Sug').css('display','block');"><a href="#">Groups</a></li>
      <li><a href="#">More</a></li>
    	
      	<li><?php input("text","search_f","","Search friends",false,false,"search-text",false); ?></li>
      	<li><?php input("submit","search_per","GO","",false,false,"search-submit",false); ?></li>
    
     
 	 <li><a href="logout.php"> Log out</a></li>
    </ul>
    
  </div>
</div>
  </form>