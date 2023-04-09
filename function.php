<?php
				$last_id=$_POST['app_id']-1;
				$inp1 = file_get_contents('admin/db/database.json');
				$tempArray1 = json_decode($inp1);
				//$arrLength = count($tempArray1);
				//print_r($tempArray1);
				//echo $last_id;
				$i=$last_id;
				while($i>=0){
					?>
					<div class="col line-clamp pe-1" app_id="<?php echo $i;?>"><a href="/detail.php?v=<?php echo $tempArray1[$i]->id; ?>"><img src="./thumail/<?php echo $tempArray1[$i]->thumnail; ?>" class="img-fluid" alt="..."><p class="py-1"><?php echo $tempArray1[$i]->vdtitle; ?></a></div>
					<?php
					$i--;
					if($i==$last_id-5){
						//$arrLength=$i-5;
						
						break;
						
					}
				}
				//print_r($tempArray[0]);
				//echo $tempArray->vdtitle;
				
?>