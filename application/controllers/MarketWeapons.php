<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarketWeapons extends CI_Controller {
    public function display() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('MarketItem');
        $this->load->view('market_weapons_view');
    }

    public function add_to_cart() {
        $_item = $this->input->post();
        print_r($_item);
    }
}