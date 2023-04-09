<?php
				$last_id=$_POST['app_id']-1;
				$inp1 = file_get_contents('db/database.json');
				$tempArray1 = json_decode($inp1);
				//$arrLength = count($tempArray1);
				//print_r($tempArray1);
				//echo $last_id;
				$i=$last_id;
				while($i>=0){
					?>
					<div class="col line-clamp p-3" app_id="<?php echo $i;?>"><p style="border:1px solid;" class="p-1" urltext="<?php echo $tempArray1[$i]->vdtitle." https://www.jinnytv24.us/detail.php?v=".$tempArray1[$i]->id;?>" id="coppy<?php echo $i;?>" onclick="copyurl(this.id)">Copy Link</p><a href="https://developers.facebook.com/tools/debug/?q=https://www.usefulheadline.net/detail.php?v=<?php echo $tempArray1[$i]->id; ?>" target="_blank" ><p style="border:1px solid;" class="p-3">Debug Link</p></a> <a href="https://www.usefulheadline.net/detail.php?v=<?php echo $tempArray1[$i]->id; ?>" target="_blank"><img src="../thumail/<?php echo $tempArray1[$i]->thumnail; ?>" class="img-fluid" alt="..."><p class="py-1"><?php echo $tempArray1[$i]->vdtitle; ?> </p></a></div>
					<?php
					$i--;
					if($i==$last_id-20){
						//$arrLength=$i-5;
						
						break;
						
					}
				}
				//print_r($tempArray[0]);
				//echo $tempArray->vdtitle;
				
?>