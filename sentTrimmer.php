<!DOCTYPE html>
<html>
	<head>
		<title>Sentence TrimmerPHP: version_1.0</title>
	</head>
	<body>
		<!-- The PHP code -->
		<?php
		    //Sentence trimmer.
			//This program was built to be primarily used in the cmd terminal. For other adaptations
			//of this algorithm such as the android version look else where.

			//Version: 1.0

			//Updates made to this version:
			//  - Created the first version based on version_3.0 of the alternative java algorithm.
		
		    //The sentence trimmer function.
		    function sentTrimmer($input){
		        //Recieve the content.
                $sent = $input;
		        
		        //Is the first letter a space.
		        $frstSpcChckEx = str_split($sent);
		        if($frstSpcChckEx[0] == " "){
		            //The first character is a space.
		            $sent = substr($sent, 1);
		        }else{}
		        
		        //Illegal library remover.
		        $count      = 0;
		        $illegals   = array("So ", "Now ", "But ", "Therefore ", "As of ", "also ", "numerous", "And ");
		        
		        for($illLoop = 0; $illLoop < sizeof($illegals); $illLoop++){
		            //Current illegal word.
		            $curIllegal = $illegals[$illLoop];
		            $sent = str_replace($curIllegal, "", $sent);
		        }
		        
		        //Illegal first sector.
		        $frstSectorParts    = explode(",", $sent);
		        $frstSector         = $frstSectorParts[0];
		        //Word count of the first sector.
		        $frstSecSplt        = explode(" ", $frstSector);
		        $frstSecLen         = sizeof($frstSecSplt);
		        if($frstSecLen < 2){
		            //Length of the first section.
		            $frstSecSize = strlen($frstSector);
		            $frstSecSize =  $frstSecSize + 2;
		            //Delete that word.
		            $sent = substr($sent, $frstSecSize);
		        }else{}
		        
		        //Must be placed here so the illegal library does not interfere with it.
		        $sentParts = explode(" ", $sent);
		        
		        //Capitalises the first word.
		        $sentTrimFrstWrd    = $sentParts[0];
		        $frstWordExplode    = str_split($sentTrimFrstWrd);
		        $frstLetter         = $frstWordExplode[0];
		        
		        //Is the first word capitalised.
		        if(strtolower($frstLetter) == $frstLetter){
		            //Not capitalised.
		            $sent = substr($sent, 1);
		            $cappedFrstWord = strtoupper($frstLetter);
		            $sent = $cappedFrstWord.$sent;
		        }else{}
		        echo $sent;
		    }
		    
		    //Call the sentTrimmer function.
		    sentTrimmer(" We, founder Elon Musk has publicly speculated about the possibility of Mars colonies. ");
		?>
	</body>
</html>