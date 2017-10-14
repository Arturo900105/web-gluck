<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('Home');
    }

    public function nosotros()
    {
        $this->load->view('Nosotros');
    }

    public function contacto()
    {
        $this->load->view('Contacto');
    }

    public function eventos()
    {
        $data['imgSet'] = 'eventos';
        $this->load->view('Eventos', $data);
    }

    public function banquetes()
    {
        $data['imgSet'] = 'banquetes';
        $this->load->view('Banquetes', $data);
    }

    public function congresos()
    {
        $data['imgSet'] = 'congresos';
        $this->load->view('Congresos', $data);
    }

    public function sociales()
    {
        $data['imgSet'] = 'sociales';
        $this->load->view('Sociales', $data);
    }
}
