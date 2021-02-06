<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller {

    //main index of website
    public function index()
	  {
        $this->load->view('card_view');
    }
    
    //output function for card
    public function card_json(){       

        $number_of_players = $this->input->get('num');

        $card_name = array();
        $card_types = ['S','H','D','C'];
        $card_nmbers = ['A','2','3','4','5','6','7','8','9','X','J','Q','K'];

        foreach($card_types as $type){    
            foreach($card_nmbers as $card){        
                $card_name[] = $type.'-'.$card;
            }
        }

        echo $this->distribute_cards($card_name, $number_of_players);
    }

    //generate the card records
    private function distribute_cards($cardname, $no_of_player) {
    
        $values = array_values($cardname);
        $count = count($values);
      
        for($player = 0; $player < $no_of_player; $player++) {
          if($player !== 0) {
            echo '<br>';
          }
      
          for($i = $player; $i < $count; $i += $no_of_player) {
            echo $values[$i].',';
          }
        }
    }

}
