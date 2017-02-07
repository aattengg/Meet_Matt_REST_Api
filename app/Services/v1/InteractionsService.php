<?php
    namespace App\Services\v1;

    use App\Interactions;

    class InteractionsService {
        public function getInteractions() {
            return $this->filterInteractions(Interactions::all());  
        }
        
        protected function filterInteractions($interactions) {        
            $data = [];
   
            foreach ($interactions as $interaction){
                $entry = [
                    'weight' => $interaction->weight,
                    'date_time' => $interaction->date_time,
                    'user_id' => $interaction->user_id
                ]; 

                $data[] = $entry;
            }
            
            return $data;
        }
    }	
?>
