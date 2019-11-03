<?php defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/API_Controller.php';
class UserInRole extends API_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("UserInRole_model", "UserInRoleModel");
    }

    public function getUserInRole(){
        $id = $_GET;
        $result = $this->UserInRoleModel->get($id);
        if(!empty($result)){
            $this->api_return(
                [
                    "data" => $result
                ], 200
            );
        }else{
            $this->api_return(
                [
                    "data" => "Data Kosong"
                ], 400
            );
        }
    }

    public function insertUserInRole(){
        $pos = $this->input->raw_input_stream;
        $data = $this->UserInRoleModel->insert(json_decode($pos));
        if($data){
            $this->api_return(
                [
                    'status' => true
                ],
        200);
        }else{
            $this->api_return(
                [
                    'status' => false
                ],
        400);
        }
    }

    public function updateUserInRole(){
        $put =json_decode($this->input->raw_input_stream);
        $data = $this->UserInRoleModel->update($put);
        if($data){
            $this->api_return(
                [
                    'status' => true
                ],
        200);
        }else{
            $this->api_return(
                [
                    'status' => false
                ],
        400);
        }
    }

    public function deleteUserInRole(){
        $id = $_GET;
        $result = $this->UserInRoleModel->delete($id);
        if($result){
            $this->api_return(
                [
                    "data" => $result
                ], 200
            );
        }else{
            $this->api_return(
                [
                    "data" => $result
                ], 400
            );
        }
    }



}