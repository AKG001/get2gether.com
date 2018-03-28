<?php
session_start();
if($_SESSION['user_name']=="" or $_SESSION['user_name']==null)
header('location:index.php');
include("connect.php");
$pic=$_SESSION['pic'];
$user_name=$_SESSION['user_name'];
$other_person=$_GET['q'];
?>
<?php
$q=mysql_query("SELECT pic,full_name_link,user_name FROM user_info WHERE user_name='$other_person' OR user_name='$user_name'");
$f=mysql_fetch_array($q);
if($f['user_name']!=$user_name)
{$other_name=$f['full_name_link'];
$other_pic=$f['pic'];
$f=mysql_fetch_array($q);
$my_name=$f['full_name_link'];

}
else 
{
	$my_name=$f['full_name_link'];
$f=mysql_fetch_array($q);
$other_name=$f['full_name_link'];
$other_pic=$f['pic'];
}
mysql_query("UPDATE message SET read_or_not=1 WHERE send_by='$other_person' and received_by='$user_name'");
$q=mysql_query("SELECT * FROM message WHERE ((send_by='$user_name' AND received_by='$other_person' )or(send_by='$other_person' AND received_by='$user_name')) ORDER BY key_message ASC" ) or die (mysql_error());
	?>

<div id="thread_top">
<img src="<?php echo"users/profile/$other_pic" ?>" style="height:40px;width:40px; float:left; margin: 5px 5px 12px 12px;"/>
		<div id="thread_title"><?php echo $other_name; ?></div>
        <div id="close" onClick="hide_thread()">
			<img src="icons/close_white.png"/>
		</div>

</div>

			
<div id="conversation">   
 
                           
            
<ul id="thread-list">     

    <?php
		while($f=mysql_fetch_array($q))
            {
				if($user_name==$f['send_by'])
			{?>
            
    <li class="thread-item-received">

         <div class="thread-item-wrapper">
            <div class="thread-item-horiz thread-item-top">
                <div class="thread-item-corner thread-item-topleft"></div>
                <div class="thread-item-corner thread-item-topright"></div>
            </div>
            <div class="thread-item-clear"></div>
            <div class="thread-item-middle">
                <div class="thread-item-content-wrapper">
                    <div class="thread-item-label"><a href="#"><?php echo $my_name;?></a></div>
                    <div class="thread-item-content">
                        <div class="thread-item-msg">
                            <div class="thread-item-content-top"></div>
                          				
                
				<p><?php
				echo $f['content'];
				?>
         
				</p>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="thread-item-clear"></div>
            <div class="thread-item-horiz thread-item-bottom">
                <div class="thread-item-corner thread-item-bottomleft"></div>
                <div class="thread-item-corner thread-item-bottomright"></div>
            </div>
            <div class="thread-item-clear"></div>
            <div class="thread-item-date"><?php echo $f['time']; ?></div>
        </div>
    </li>
   
                 
                 
        		
			<?php 
			//end of if (if you msg send)
			}
			else
			{?>
             <li class="thread-item-sent">
        
        <div class="thread-item-wrapper">
            <div class="thread-item-horiz thread-item-top">
                <div class="thread-item-corner thread-item-topleft"></div>
                <div class="thread-item-corner thread-item-topright"></div>
            </div>
            <div class="thread-item-clear"></div>
            <div class="thread-item-middle">
                <div class="thread-item-content-wrapper">
                    <div class="thread-item-label"><?php echo $other_name; ?>
 																					</div>
                    <div class="thread-item-content">
                        <div class="thread-item-msg">
                            <div class="thread-item-content-top"></div>
                            <p><?php
				echo $f['content'];
				?>
            		</p>
                     

				          	
				
			
            
               </div>
                    </div>
                </div>
            </div>
            <div class="thread-item-clear"></div>
            <div class="thread-item-horiz thread-item-bottom">
                <div class="thread-item-corner thread-item-bottomleft"></div>
                <div class="thread-item-corner thread-item-bottomright"></div>
            </div>
            <div class="thread-item-clear">&nbsp;</div>
            <div class="thread-item-date"><div style="text-align:right;"><?php echo $f['time']; ?></div></div>        </div>        
    
    </li>
  
			<?php 
			
			//end of else  (if otherperson msg send)
			}
	
			}
			?>
  </ul>
  
     </div>
</div><!------ End  Of conversation------------>
