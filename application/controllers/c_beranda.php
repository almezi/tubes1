  
    <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    
    class c_beranda extends CI_Controller
    {
    
        public function index()
        {
            $this->load->view('v_beranda');
        }
    }
    
    /* End of file Controllername.php */
