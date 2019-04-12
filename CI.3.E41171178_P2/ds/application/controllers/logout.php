function logout(){
$this->session->sess_destroy();
redirect(base_url('login'));
} 