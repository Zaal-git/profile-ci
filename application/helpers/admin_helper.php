<?

function is_logged_in()
    {
        $ci = get_instance();
        if(!$ci->session->userdata('email')){
            redirect('auth/index');
        } else {
            

        if() {
            redirect('auth/blocked');
        }
        }
    }