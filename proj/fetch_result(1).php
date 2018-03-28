<?php
$search_f=$_POST['search_f'];


$qry=mysql_query("select user_name,first_name,last_name,country from user_info where (user_name='$search_f' OR first_name='$search_f') AND '$user_name'!='$search_f'");
echo "qry".$qry;
echo $search_f;
	$num=mysql_num_rows($qry);
echo $num;
	
	if($num>0)
	{
		//$i=0;
			while($f=mysql_fetch_array($qry))
				{
					$other_name=$f['user_name'];
					
					$qr=mysql_query("select send_by,received_by,accept from friend_request where (send_by='$user_name' and received_by='$other_name') OR (received_by='$user_name' and send_by='$other_name')" );
					echo "num".$num=mysql_num_rows($qr);
					
						?>
                    
                    <table>
                    	<tr>
                    			<td><a href="profile.php?q=<?php echo $user_name; ?>"<strong><?php echo $f['first_name']." ".$f['last_name']; ?></a></strong> From  <?php echo $f['country']; ?> </td>
                                
                                <?php if($num==0)
                                {?>
									<td>&nbsp; <a href="send_request.php?req_name=<?php echo $f['user_name']; ?>">Send Request </a> </td>
                    	 		<?php
								}
								else
								{
									
									$fr=mysql_fetch_array($qr);
								if($user_name==$fr['send_by'] and $fr['accept']==0) 
								echo "Already Request sent";
								
								else if($user_name==$fr['received_by'] and $fr['accept']==0) 
									{	echo "<a href=request_manipulation.php?action=accept&send_by=".$fr['send_by']."><input type=button value=Accept Request /></a>";
		echo "<a href=request_manipulation.php?action=reject&send_by=".$fr['send_by']."><input type=button value=Reject /></a>";}
								else echo "In your Friend List"; 
                                
                              
								
								}
								?>	
									
                         </tr>
                    </table> 
						
						<?php
						}
					
					
				}
	
	

else echo "No result Found";	


 ?>