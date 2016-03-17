Select -->  $this->db->select('name,password')
Set -->  $this->db->set('name,password')
Insert -->  $this->db->insert('Table_name',$data_array);
Delete-> $this->db->delete('Table_name');
Update-> $this->db->update('Table_name');
Where --> $this->db->where('column',$data_to_search);
Get --> $this->db->get('table_name')->result();


Join ___>>>
User , User_images

User :

id | name | email

User_images :

id | user_id | image


$this->db->select('*, User_images.id as image_id');
$this->db->where('id', $id);
$this->db->from('User');
$this->db->join('User, User.id = User_image.user_id');
$this->db->get()->result();
$this->bd->get->num_rows();
