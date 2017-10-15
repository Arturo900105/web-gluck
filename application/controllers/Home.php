<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!ini_get('date.timezone')) {
            date_default_timezone_set('GMT');
        }
    }

    public function index()
    {
        $data['content'] = 'contents/Home';
        $this->load->view('base-template', $data);
    }

    public function nosotros()
    {
        $data['content'] = 'contents/Nosotros';
        $data['title'] = 'Nosotros';
        $data['nosotros'] = '';
        $this->load->view('base-template', $data);
    }

    public function contacto()
    {
        if (!empty($this->input->post())) {
            if (empty($this->input->post('control'))) {
                $this->set_rules();

                if ($this->form_validation->run() == FALSE) {
                    $data['content'] = 'contents/Contacto';
                    $data['title'] = 'Contacto';
                    $data['contacto'] = '';
                    $this->load->view('base-template', $data);
                } else {
                    $params{'from'} = $this->input->post('email');
                    $params{'from_name'} = $this->input->post('name');
                    $params{'message'} = $this->input->post('message');
                    $params{'telephone'} = $this->input->post('telephone');
                    if ($this->send_email($params)) {
                        $this->session->set_flashdata('correcto', 'Correo enviado correctamente!');
                        redirect(current_url());
                    } else {
                        echo $this->email->print_debugger();
                        /*$this->session->set_flashdata('correcto', 'Error al enviar el correo!');
                        redirect(current_url());*/
                    }
                }
            }
        } else {
            $data['content'] = 'contents/Contacto';
            $data['title'] = 'Contacto';
            $data['contacto'] = '';
            $correcto = $this->session->flashdata('correcto');
            if ($correcto) {
                $data['message'] = $correcto;
            }
            $this->load->view('base-template', $data);
        }
    }

    public function set_rules()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',
            array(
                'required' => 'Debes ingresar tu correo.',
                'valid_email' => 'Ingresa un email valido'
            )
        );
        $this->form_validation->set_rules('name', 'Name', 'trim|required',
            array(
                'required' => 'Debes ingresar tu nombre.'
            )
        );
        $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required',
            array(
                'required' => 'Ingresa un n&uacute;mero al cual podamos contactarte.'
            )
        );
        $this->form_validation->set_rules('message', 'Message', 'trim|required',
            array(
                'required' => 'Escribe un mensaje por favor.'
            )
        );
    }

    public function send_email($data)
    {
        $config['protocol'] = 'sendmail';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $this->load->library('email', $config);
        $this->email->from($data['from'], $data['from_name']);
        $this->email->to('fonck.five@gmail.com');
        $this->email->subject('Contacto - http://glucksc.com/contacto');
        $this->email->message('<strong>Tel&eacute;fono</strong>: ' . $data['telephone'] . '<br /><br /><strong>Mensaje</strong>:<p>' . $data['message'] . '</p>');
        if ($this->email->send()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function eventos()
    {
        $data['content'] = 'contents/Eventos';
        $data['title'] = 'Eventos';
        $data['eventos'] = '';
        $data['imgSet'] = 'eventos';
        $this->load->view('base-template', $data);
    }

    public function banquetes()
    {
        $data['content'] = 'contents/Banquetes';
        $data['title'] = 'Banquetes';
        $data['banquetes'] = '';
        $data['imgSet'] = 'banquetes';
        $this->load->view('base-template', $data);
    }

    public function congresos()
    {
        $data['content'] = 'contents/Congresos';
        $data['title'] = 'Congresos';
        $data['congresos'] = '';
        $data['imgSet'] = 'congresos';
        $this->load->view('base-template', $data);
    }

    public function sociales()
    {
        $data['content'] = 'contents/Sociales';
        $data['title'] = 'Sociales';
        $data['sociales'] = '';
        $data['imgSet'] = 'sociales';
        $this->load->view('base-template', $data);
    }

}
