<?php
    namespace App\Services\v1;

    use App\Interactions;

    class InteractionsService {
        protected $clauseProperties = [
            'user_id',
            'date_time'
        ];

        public function getInteractions($parameters) {
            if (empty($parameters)) {
                return $this->filterInteractions(Interactions::all());  
            }	
            
            $whereClauses = $this->getWhereClause($parameters);
     
            $interactions = Interactions::where($whereClauses)->get();
            
            return $this->filterInteractions($interactions);
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
        
        protected function getWhereClause($parameters) {
            $clause = [];
            
            foreach ($this->clauseProperties as $prop) {
                if (in_array($prop, array_keys($parameters))){
                    $clause[$prop] = $parameters[$prop];
                }
            }
            
            return $clause;
        } 
    }	
?>
