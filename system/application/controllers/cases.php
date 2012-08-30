<?php

class Cases extends MY_Controller {

    function __Construct() {
        parent::__Construct();
        $this->load->model('cases_model');
    }

    function index() {
        redirect('cases/view');
    }

    function view() {


        $id = "selected_cases";

        $data['content'] = $this->content_model->get_content($id);
        
            foreach ($data['content'] as $row): //get content id 

            $content_id = $row['content_id'];
            $data['meta_description'] = $row['metadesc'];
            $data['metatitle'] = $row['metatitle'];

        endforeach;
        $data['cases'] = $this->cases_model->list_cases();

        $data['menu'] = $this->content_model->get_menus();
        $data['main'] = "pages/cases";
        $data['slideshow'] = "global/slideshow1";
        $data['news'] = $this->news_model->list_news();
        $data['sidebar'] = 'sidebar/news';
        $data['page'] = $id;
        $is_logged_in = $this->session->userdata('is_logged_in');

        if ($is_logged_in != NULL) {
            $data['edit'] = site_url("admin/edit/$id");
            $data['add'] = site_url("admin/add_case/");
        }




        $this->load->vars($data);
        $this->load->view('template');
    }

}

/* End of file cases.php */
/* Location: ./system/application/controllers/practices.php */