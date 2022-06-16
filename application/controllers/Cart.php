<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Cart extends CI_Controller {

    function __construct(){
        parent::__construct();

        $user = $this->session->userdata('user');
            if(empty($user)) {
                $this->session->set_flashdata('msg', 'Phiên của bạn đã hết hạn');
                redirect(base_url().'login/');
            }

        
        $this->load->library('cart');
        $this->load->model('Menu_model');
    }

    public function index() {
        
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('front/partials/header');
        $this->load->view('front/cart', $data);
        $this->load->view('front/partials/footer');
    }

    function updateCartItemQty() {
        $update = 0;

        
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');
        
        if(!empty($rowid) && !empty($qty)) {
            $data = array (
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        echo $update ? 'ok':'err';
    }

    function removeItem($id) {
        $remove = $this->cart->remove($id);

        redirect(base_url().'cart');
    }

}