class Login extends CI_Model {
    public function __construct() {
    $this->load->database();
    }
    public function get_users() {
    $query = $this->db->get('users');
    return $query->result();
    }

    public function add_user($data) {
    $this->db->insert('users', $data);
    }
}
