<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sessions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->common->set_timezone();
        $login_type = $this->session->userdata('userType');
        if ($login_type != 'user') {
            redirect('login');
        }
		 if ($this->session->userdata('cid') != "23") {
        $get_user_token_details = $this->common->get_user_details($this->session->userdata('cid'));
        if ($this->session->userdata('token') != $get_user_token_details->token) {
            redirect('login');
        }
		 }
        $this->load->model('user/m_sessions', 'objsessions');
    }

    public function index() {
        $data["all_sessions_week"] = $this->objsessions->getSessionsWeekData();
        if (!empty($data["all_sessions_week"])) {
            $data["all_sessions"] = $this->objsessions->getsessions_data($data["all_sessions_week"][0]->sessions_date);
        }
        $this->load->view('header');
        $this->load->view('sessions', $data);
        $this->load->view('footer');
    }

    public function getsessions_data($date) {
        $data["all_sessions_week"] = $this->objsessions->getSessionsWeekData();
        $data["all_sessions"] = $this->objsessions->getsessions_data($date);
        $this->load->view('header');
        $this->load->view('sessions', $data);
        $this->load->view('footer');
    }

    public function sunday() {
        $data["all_sessions"] = $this->objsessions->getSessionsSundayData();
        $this->load->view('header');
        $this->load->view('sessions', $data);
        $this->load->view('footer');
    }

    public function monday() {
        $data["all_sessions"] = $this->objsessions->getSessionsMondayData();

        $this->load->view('header');
        $this->load->view('sessions', $data);
        $this->load->view('footer');
    }

    public function view($sessions_id) {
        $sesions=$this->objsessions->viewSessionsData($sessions_id);
		
		if (date("Y-m-d H:i:s") > date("Y-m-d H:i:s", strtotime($sesions->sessions_date . ' ' . $sesions->end_time))) {
            header("location:" . base_url() . "sessions/session_end");
            die();
        }

        $header_data["sesions_logo"]=$sesions->sessions_logo;
        $header_data["sponsor_type"]=$sesions->sponsor_type;
        $header_data["right_bar"]=$sesions->right_bar;
        $header_data["tool_box_status"]=$sesions->tool_box_status;

        $data["sessions"] = $sesions;
		$data["sessions_notes_download"] = $this->objsessions->get_sessions_notes_download($sessions_id);
        $data["session_resource"] = $this->objsessions->get_session_resource($sessions_id);
        $data['music_setting'] = $this->objsessions->get_music_setting();

        $this->load->view('header',$header_data);
        $this->load->view('view_sessions', $data);
        $this->load->view('footer');
    }

    public function cachefly_test($sessions_id) {
        $sesions=$this->objsessions->viewSessionsData($sessions_id);
        $header_data["sesions_logo"]=$sesions->sessions_logo;
        $header_data["sponsor_type"]=$sesions->sponsor_type;
        $header_data["right_bar"]=$sesions->right_bar;
        $header_data["tool_box_status"]=$sesions->tool_box_status;

        $data["sessions"] = $sesions;
        $data["session_resource"] = $this->objsessions->get_session_resource($sessions_id);
        $data['music_setting'] = $this->objsessions->get_music_setting();

        $this->load->view('header',$header_data);
        $this->load->view('view_sessions_test', $data);
        $this->load->view('footer');
    }

    public function get_poll_vot_section() {
        $result_data = $this->objsessions->get_poll_vot_section();
        if (!empty($result_data)) {
            $result_array = array("status" => "success", "result" => $result_data);
        } else {
            $result_array = array("status" => "error");
        }
        echo json_encode($result_array);
    }

    public function pollVoting() {
        $result_data = $this->objsessions->pollVoting();
        if (!empty($result_data)) {
            $result_array = array("status" => "success");
        } else {
            $result_array = array("status" => "error");
        }
        echo json_encode($result_array);
    }

    public function addQuestions() {
        $result_data = $this->objsessions->addQuestions();
        if (!empty($result_data)) {
            $result_array = array("status" => "success");
        } else {
            $result_array = array("status" => "error");
        }
        echo json_encode($result_array);
    }

    public function addBriefcase() {
        $result_data = $this->objsessions->addBriefcase();
        if (!empty($result_data)) {
            $result_array = array("status" => "success");
        } else {
            $result_array = array("status" => "error");
        }
        echo json_encode($result_array);
    }
	public function downloadNote($briefcase) {
		 $briefcase = str_replace('%20',' ', $briefcase);
        $handle = fopen("note.txt", "w");
        fwrite($handle, $briefcase);
        fclose($handle);
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename('note.txt'));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('note.txt'));
        readfile('note.txt');
    }

    public function addresource() {
        $result_data = $this->objsessions->addresource();
        if (!empty($result_data)) {
            $result_array = array("status" => "success");
        } else {
            $result_array = array("status" => "error");
        }
        echo json_encode($result_array);
    }

    public function get_question_list() {
        $result_data = $this->objsessions->get_question_list();
        if (!empty($result_data)) {
            $result_array = array("status" => "success", "question_list" => $result_data);
        } else {
            $result_array = array("status" => "error");
        }
        echo json_encode($result_array);
    }

    public function get_poll_vot_section_close_poll() {
        $result_data = $this->objsessions->get_poll_vot_section_close_poll();
        if (!empty($result_data)) {
            $result_array = array("status" => "success", "result" => $result_data);
        } else {
            $result_array = array("status" => "error");
        }
        echo json_encode($result_array);
    }

    public function get_group_chat_section_status() {
        $result_data = $this->objsessions->get_group_chat_section_status();
        if (!empty($result_data)) {
            $result_array = array("status" => "success", "result" => $result_data);
        } else {
            $result_array = array("status" => "error");
        }
        echo json_encode($result_array);
    }

    public function send_message() {
        $post = $this->input->post();
        $result = $this->objsessions->send_message($post);
        if ($result) {
            $result = array("status" => "success");
        } else {
            $result = array("status" => "error");
        }
        echo json_encode($result);
    }

    public function message() {
        $post = $this->input->post();
        $data['messages'] = $this->objsessions->get_chat_details($post['sessions_id'], $post['sessions_group_chat_id']);
        $output = $this->load->view('message', $data, true);
        echo $output;
    }

    public function attend($sessions_id) {
        $data["sessions"] = $this->objsessions->viewSessionsData($sessions_id);

        $this->load->view('header');
        $this->load->view('view_attend', $data);
        $this->load->view('footer');
    }

    public function gettimenow() {
        echo json_encode(array("current_time" => date("H:i:s")));
    }

    public function add_viewsessions_history_open() {
        $post = $this->input->post();
        $this->load->library('user_agent');
        $user_agent = $this->input->ip_address();
        $session_his_arr = array(
            'sessions_id' => $post['sessions_id'],
            'cust_id' => $this->session->userdata("cid"),
            'operating_system' => $this->agent->platform(),
            'computer_type' => $this->agent->browser(),
            'ip_address' => $this->input->ip_address(),
            'resolution' => $post['resolution'],
            'start_date_time' => date("Y-m-d H:i:s"),
            'status' => 0
        );
        $this->db->insert('view_sessions_history', $session_his_arr);
        $insert_id = $this->db->insert_id();

        $where_session_his_arr = array(
            'sessions_id' => $post['sessions_id'],
            'cust_id' => $this->session->userdata("cid")
        );

        $login_sessions_history = $this->db->get_where('login_sessions_history', $where_session_his_arr)->row();
        if (!empty($login_sessions_history)) {
            $session_his_arr = array(
                'sessions_id' => $post['sessions_id'],
                'cust_id' => $this->session->userdata("cid"),
                'operating_system' => $this->agent->platform(),
                'computer_type' => $this->agent->browser(),
                'ip_address' => $this->input->ip_address(),
                'resolution' => $post['resolution'],
                'start_date_time' => date("Y-m-d H:i:s"),
                'status' => 0
            );
            $this->db->update('login_sessions_history', $session_his_arr, array("login_sessions_history_id" => $login_sessions_history->login_sessions_history_id));
        } else {
            $this->db->insert('login_sessions_history', $session_his_arr);
        }

        echo json_encode(array("status" => "success", "view_sessions_history_id" => $insert_id));
    }

    public function update_viewsessions_history_open() {
        $post = $this->input->post();
        $session_his_arr = array(
            'end_date_time' => date("Y-m-d H:i:s")
        );
        $this->db->update('view_sessions_history', $session_his_arr, array("view_sessions_history_id" => $post['view_sessions_history_id']));

        $view_sessions_history = $this->db->get_where('view_sessions_history', array("view_sessions_history_id" => $post['view_sessions_history_id']))->row();
        if (!empty($view_sessions_history)) {
            $where_session_his_arr = array(
                'sessions_id' => $view_sessions_history->sessions_id,
                'cust_id' => $this->session->userdata("cid")
            );
            $login_sessions_history = $this->db->get_where('login_sessions_history', $where_session_his_arr)->row();
            if (!empty($login_sessions_history)) {
                $this->db->update('login_sessions_history', $session_his_arr, array("login_sessions_history_id" => $login_sessions_history->login_sessions_history_id));
            }
        }
        echo json_encode(array("status" => "success"));
    }
	
	public function session_end() {
        $this->load->view('header');
        $this->load->view('end_session');
        $this->load->view('footer');
    }

    public function getTimeSpentOnSession($session_id, $user_id)
    {
        $this->db->select('*');
        $this->db->from('total_time_on_session');
        $this->db->where(array('session_id'=>$session_id, 'user_id'=>$user_id));

        $response = $this->db->get();
        if ($response->num_rows() > 0)
        {
            echo $response->result_array()[0]['total_time'];
        }else{
            echo 0;
        }

        return;
    }

    public function saveTimeSpentOnSession($session_id, $user_id)
    {

// $session_start_end = $this->getSessionStartEndTime($session_id);
//
// $now = date("Y-m-d H:i:s");
// $start_time = date('Y-m-d H:i:s', $session_start_end['start']);
// $end_time = date('Y-m-d H:i:s', $session_start_end['end']);
//
// if($now < $start_time || $now > $end_time)
// {
// return;
// }

        $this->db->where(array('session_id'=>$session_id, 'user_id'=>$user_id));
        $response = $this->db->get('total_time_on_session');

        if ( $response->num_rows() > 0 )
        {
            $this->db->where(array('session_id'=>$session_id, 'user_id'=>$user_id));
            $this->db->update('total_time_on_session', array('total_time'=>$this->input->post()['time']));
        } else {
            $this->db->set(array('session_id'=>$session_id, 'user_id'=>$user_id));
            $this->db->insert('total_time_on_session', array('total_time'=>$this->input->post()['time']));
        }

        return;
    }

    private function getSessionStartEndTime($session_id)
    {
        $this->db->where(array('sessions_id'=>$session_id));
        $response = $this->db->get('sessions');

        if ( $response->num_rows() > 0 )
        {
            $result = $response->result_array()[0];
            $start_datetime = $result['sessions_date'].' '.$result['time_slot'];
            $end_datetime = $result['sessions_date'].' '.$result['end_time'];

            return array('start'=>$start_datetime, 'end'=>$end_datetime);
        } else {
            return false;
        }
    }
}
