<?php

class Welcome extends MY_Controller {

    function __Construct() {
        parent::__Construct();
        $this->load->model('attachments_model');
    }

    function index() {
        redirect('welcome/content');
    }

    function introduction() {
        $data['main'] = "pages/content";
        $data['menu'] = $this->content_model->get_menus();
        $data['info'] = "infoblock/times";
        $data['page'] = "home";
        $this->load->vars($data);
        $this->load->view('template');
    }

    function content() {

        if (($this->uri->segment(3)) == NULL) {
            $id = "welcome";
            $data['main'] = "pages/home";
        } else {
            $id = $this->uri->segment(3);
            $data['main'] = "pages/dynamic";
        }
        $data['content'] = $this->content_model->get_content($id);

        foreach ($data['content'] as $row): //get content id 

            $content_id = $row['content_id'];
          $data['meta_description'] = $row['metadesc'];
          $data['metatitle'] = $row['metatitle'];

        endforeach;

        $data['menu'] = $this->content_model->get_menus();

        //show attachments in content
        $data['attachments'] = $this->attachments_model->get_attachments($content_id);

        $data['slideshow'] = "global/slideshow1";
        $data['news'] = $this->news_model->list_news();
        $data['sidebar'] = 'sidebar/news';
        $data['page'] = $id;
        $is_logged_in = $this->session->userdata('is_logged_in');

        if ($is_logged_in != NULL) {
            $data['edit'] = site_url("admin/edit/$id");
        }

        $this->load->vars($data);
        $this->load->view('template');
    }

    function representative_cases() {

        $id = 'representative_cases';
        $data['main'] = "pages/dynamic";
        $data['content'] = $this->content_model->get_content($id);

             foreach ($data['content'] as $row): //get content id 

            $content_id = $row['content_id'];
            $data['meta_description'] = $row['metadesc'];
            $data['metatitle'] = $row['metatitle'];

        endforeach;

        $data['menu'] = $this->content_model->get_menus();

        //show attachments in content
        $data['attachments'] = $this->attachments_model->get_attachments($content_id);
        $data['litigation'] = $this->content_model->get_by_type('13');
        $data['transaction'] = $this->content_model->get_by_type('14');
        $data['slideshow'] = "global/slideshow1";
        $data['news'] = $this->news_model->list_news();
        $data['sidebar'] = 'sidebar/news';
        $data['page'] = $id;
        $is_logged_in = $this->session->userdata('is_logged_in');

        if ($is_logged_in != NULL) {
            $data['edit'] = site_url("admin/edit/$id");
             $data['create_case'] = site_url("admin/create_case");
        }

        $this->load->vars($data);
        $this->load->view('template');
    }

    function contact() {
        $id = "contact_us";
        $data['content'] = $this->content_model->get_content($id);
        $data['menu'] = $this->content_model->get_menus();
        $data['main'] = "pages/contact";
        $data['slideshow'] = "global/slideshow1";
        $data['news'] = $this->news_model->list_news();
        $data['sidebar'] = 'sidebar/contact';
        $data['page'] = $id;
        $is_logged_in = $this->session->userdata('is_logged_in');

        if ($is_logged_in != NULL) {
            $data['edit'] = site_url("admin/edit/$id");
        }


        $this->load->vars($data);
        $this->load->view('template');
    }

    function login() {

        $id = 'login';
        $data['content'] = $this->content_model->get_content($id);
        $data['main'] = "user/login_form";
        $data['menu'] = $this->content_model->get_menus();
        $data['info'] = "infoblock/times";
        $data['page'] = "login";
        $this->load->vars($data);
        $this->load->view('template');
    }

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */