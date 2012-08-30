<?php

class Practices extends MY_Controller {

    function __Construct() {
        parent::__Construct();
        $this->load->model('practice_model');
    }

    function index() {
        redirect('practices/view');
    }

    function view() {


        $data['content'] = $this->content_model->get_content('practices');
        $data['page'] = 'practices';
        $data['sidebar'] = 'sidebar/news';
        $data['news'] = $this->news_model->list_news();
        $data['slideshow'] = "global/slideshow1";
        $data['menu'] = $this->content_model->get_menus();

        foreach ($data['content'] as $row): //get content id 

            $content_id = $row['content_id'];
            $data['meta_description'] = $row['metadesc'];
            $data['metatitle'] = $row['metatitle'];

        endforeach;

        if (($this->uri->segment(3)) != NULL) {
            $id = $this->uri->segment(3);
            $data['main'] = "pages/practice";
            $data['practice'] = $this->practice_model->get_practice($id);
        } else {

            $data['practices'] = $this->practice_model->get_practices(1);
            $data['practices2'] = $this->practice_model->get_practices(2);

            $data['main'] = "pages/practices";
        }
        $is_logged_in = $this->session->userdata('is_logged_in');

        if ($is_logged_in != NULL) {
            $data['edit'] = site_url("admin/edit/practices");
        }


        $this->load->vars($data);
        $this->load->view('template');
    }

}

/* End of file practices.php */
/* Location: ./system/application/controllers/practices.php */