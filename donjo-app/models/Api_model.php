<?php class Api_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getConfig()
    {
        $sql = "SELECT * FROM  config";
        $query = $this->db->query($sql);
        return $query->row_array();
    }


    public function getUrl($id = '')
    {
        ## $id = $this->db->escape_str($id);
        $retval = array();
        $query = $this->db->query("select kecamatan, url from url_opendk_kecamatan where id = '$id'");
        if ($query->num_rows() == 0) {
            $retval['url'] = False;
            $retval['kecamatan'] = 'tidak ditemukan';
        } else {
            $retval = $query->row_array();
        }
        return $retval;
    }
}
