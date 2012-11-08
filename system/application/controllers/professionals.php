<?php

class Professionals extends MY_Controller {

    function __Construct() {
        parent::__Construct();
        $this->load->model('professionals_model');
        $this->load->model('attachments_model');
        $this->load->model('captcha_model');
        $this->load->plugin('to_pdf');
    }

    function index() {
        redirect('professionals/view');
    }

    function view() {

        if (($this->uri->segment(3)) == NULL) {
            
        } else {
            $type = $this->uri->segment(3);
        }
        $id = "professionals";
        $data['content'] = $this->content_model->get_content($id);
        foreach ($data['content'] as $row): //get content id 

            $content_id = $row['content_id'];
              $data['meta_description'] = $row['metadesc'];
          $data['metatitle'] = $row['metatitle'];

        endforeach;

        $data['professionals'] = $this->professionals_model->get_professionals();
        $data['inactive_professionals'] = $this->professionals_model->get_inactive_professionals();
        $data['news'] = $this->news_model->list_news();
        $data['menu'] = $this->content_model->get_menus();

        //show attachments in content
        $data['attachments'] = $this->attachments_model->get_attachments($content_id);


        $data['slideshow'] = "global/slideshowpro";
        $data['sidebar'] = 'sidebar/news';
        $data['main'] = "pages/profile_list";
        $data['page'] = $id;
        $is_logged_in = $this->session->userdata('is_logged_in');

        if ($is_logged_in != NULL) {
            $data['edit'] = site_url("admin/edit/$id");
        }




        $this->load->vars($data);
        $this->load->view('template');
    }

    function view_profile($profile_id) {
        $id = "professionals";
        $data['profile_id'] = $profile_id;
        $data['content'] = $this->content_model->get_content($id);
        $data['professional'] = $this->professionals_model->get_professional($profile_id);
        $data['menu'] = $this->content_model->get_menus();
        $data['main'] = "pages/profile";
        $data['rightcolumn'] = "sidebar/right_profile";
        $data['page'] = $id;
        $data['cases'] = $this->professionals_model->get_cases($profile_id);
        $data['b'] = "sidebar/profile";
        $is_logged_in = $this->session->userdata('is_logged_in');

        $data['captcha'] = $this->captcha_model->initiate_captcha();


        if ($is_logged_in != NULL) {
            $data['edit'] = site_url("professionals/edit/$profile_id");
        }

        //show attachments in content
        $data['attachments'] = $this->attachments_model->get_profile_attachments($profile_id);

        $data['assigned_practices'] = $this->professionals_model->assigned_practice_areas($profile_id);
        $this->load->vars($data);
        $this->load->view('template');
    }

    function pdf_profile($profile_id) {

        $data['professional'] = $this->professionals_model->get_professional($profile_id);
        $data['assigned_practices'] = $this->professionals_model->assigned_practice_areas($profile_id);
        $this->load->vars($data);
		$data['config_base_path'] = "/data/12/1/105/8/1105171/user/1159479/htdocs/";
        $this->load->view('printouts/pdf');
        $stream = TRUE;
        $html = $this->load->view('printouts/pdf', $data, true);
        pdf_create($html, 'Profile_' . $profile_id . '', $stream);
    }

    function print_profile($profile_id) {

        $data['professional'] = $this->professionals_model->get_professional($profile_id);
        $data['assigned_practices'] = $this->professionals_model->assigned_practice_areas($profile_id);
        $data['print'] = TRUE;
        $data['config_base_path'] = "/";
        $this->load->vars($data);
        $this->load->view('printouts/pdf');

        $this->load->helper('file');


        $stream = FALSE;
        $this->load->view('printouts/pdf', $data, true);
    }

    function test_profile($profile_id) {

        $data['professional'] = $this->professionals_model->get_professional($profile_id);
        $data['assigned_practices'] = $this->professionals_model->assigned_practice_areas($profile_id);
        $this->load->vars($data);
        $this->load->view('printouts/pdf');
        $stream = TRUE;
        $this->load->view('printouts/pdf', $data, true);
        //pdf_create($html, 'Profile_'.$profile_id.'', $stream);
    }

    function practice($practice_id) {
        
        $this->load->model('practice_model');
        if (($this->uri->segment(3)) == NULL) {
            
        } else {
            $type = $this->uri->segment(3);
        }
        $id = "professionals";
        $data['content'] = $this->content_model->get_content($id);
        $data['professionals'] = $this->professionals_model->get_professional_practice($practice_id);
        $data['practice'] = $this->practice_model->get_practice($practice_id);
        $data['news'] = $this->news_model->list_news();
        $data['menu'] = $this->content_model->get_menus();
        $data['slideshow'] = "global/slideshowpro";
        $data['sidebar'] = 'sidebar/news';
        $data['main'] = "pages/profile_list";
        $data['page'] = $id;

        //show attachments in content
        $data['attachments'] = $this->attachments_model->get_attachments($id);

        $is_logged_in = $this->session->userdata('is_logged_in');

        if ($is_logged_in != NULL) {
            $data['edit'] = site_url("admin/edit/$id");
        }




        $this->load->vars($data);
        $this->load->view('template');
    }

    function ajaxsort() {
        $pages = $this->input->post('pages');
        parse_str($pages, $pageOrder);

        foreach ($pageOrder['page'] as $key => $value):
            mysql_query("UPDATE ignite_practice_area_links SET `order` = '$key' WHERE `links_id` = '$value'") or die(mysql_error());


        //$this->db->update('practice_area_links', $pro_update);
        endforeach;
    }

}