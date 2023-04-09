<?php
				$textsch=strval($_POST['textsch']);
				$col=strval($_POST['col']);
				//$textsch="6MJP1BfDBh8";
				$inp1 = file_get_contents('admin/db/database.json');
				$tempArray1 = json_decode($inp1);
				
				$arrLength = count($tempArray1);
				//print_r($tempArray1);
				//echo $col.$textsch;
				$i=$arrLength-1;
				
				//print_r($item->id);
					//echo "no";
				//}
				foreach ($tempArray1 as $item) {
					$val=strval($item->$col);
					$lcfirst= lcfirst($textsch);
					$uper= strtoupper($textsch);
					$ucfirst= ucfirst($textsch);
					$lower= strtolower($textsch);
					//echo "Ok";
					if (strpos($val, $textsch) || strpos($val, $lcfirst) || strpos($val, $uper) || strpos($val, $ucfirst) || strpos($val, $lower) || $val==$textsch) {

					?>
					<div class="col line-clamp pe-1" app_id="<?php echo $i;?>"><a href="./detail.php?v=<?php echo $item->id; ?>"><img src="./thumail/<?php echo $item->thumnail; ?>" class="img-fluid" alt="..."><p class="py-1"><?php echo $item->vdtitle; ?></a></div>
					<?php
					$i--;
					}
					if($i==$arrLength-20){
						$arrLength=$i-20;
						break;
					}
					
					
				}
				
				
?>