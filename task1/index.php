<?php

        $awardsData = fopen('awards.csv', 'r');
         while (($data = fgetcsv($awardsData, 1000, ",")) !== FALSE) {
            $awards[]=$data;
        }
		
		$contractsData = fopen('contracts.csv', 'r');
        while (($data = fgetcsv($contractsData, 0, ",")) !== FALSE) {
                $contracts[]=$data;
        }

		$sum = 0;
        for($x=0; $x< count($contracts); $x++)
        {
            if($x==0){
		unset($awards[0][0]);		
                $line[$x]=array_merge($contracts[0],$awards[0]); //header
            
			}
            else{
				
                $rowmatched=0;
				
                for($y=0; $y < count($awards);$y++)
                {
                    if($awards[$y][0] == $contracts[$x][0]){
			unset($awards[$y][0]);			
			$line[$x]=array_merge($contracts[$x],$awards[$y]);
                        if ($contracts[$x][1] == "Closed") {
				$sum = $sum + $awards[$y][5];
			}
				
			$rowmatched=1;
                    
		     }           
                }
				
                if($rowmatched == 0) {
                    $line[$x]=$contracts[$x];
				}
            }
        }
		
		echo "Total Amount of closed contracts: $sum";
		
        $fp = fopen('final.csv', 'w');//output file set here

        foreach ($line as $fields) {
            fputcsv($fp, $fields);
        }
        fclose($fp);
		
?>
