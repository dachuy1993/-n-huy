//full code them hoa don
    public function save_order(){
        if($this->input->post('ghichu')){
            $ghichu = $this->input->post('ghichu');
        }else{$ghichu = "";}
        $email = $this->input->post('email');
        $name_kh = $this->input->post('name');
        $phone = $this->input->post('phonenumber');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $money = $this->session->userdata('money');
        $ship = 40000;
        $data = array(
            'email' => $email,
            'name' => $name_kh,
            'phone' => $phone,
            'address' => $address,
            'city' => $city,
            'money' => $money,
            'ship' => $ship,
            'ghichu' => $ghichu,
            'active' => 0,
        );
        $insert_order = $this->User_models->insert_order($data);
        if($insert_order == false){
            $err= "Saving order Fail!";
            $err['err'] = $err;
            $this->load->view('thanhtoan',$err);
        }else {
            foreach ($insert_order as $item){}
            $mahoadon = $item->id;
            if($cart = $this->cart->contents()){
                foreach ($cart as $item){
                    $product = $item['name'];
                    $img = $item['img'];
                    $qty = $item['qty'];
                    $price = $item['price'];
                    $moneypro = $item['subtotal'];
                    $data_product = array(
                        'mahoadon' => $mahoadon,
                        'name' => $product,
                        'img' => $img,
                        'qty' => $qty,
                        'price' => $price,
                        'subtotal' => $moneypro,
                    );
                    $this->User_models->set_order($data_product);
                    $id = $item['id'];
                    $get_number = $this->Admin_models->get_single($id);
                    foreach ($get_number as $row){}
                    $number_new = $row->number - $qty;
                    $data_product_new = array(
                        'number' => $number_new,
                    );
                    $this->Admin_models->edit($id,$data_product_new);
                }
            }
            $session = array(
                'mahoadon' => $mahoadon,
            );
            $this->session->set_userdata($session);
            $this->cart->destroy();
            $this->session->unset_userdata('money');
            $this->session->unset_userdata('count');
            redirect('thanks');
        }
    }

    trong model
    //full code them hoa don to
     public function insert_order($data){
        $query = $this->db->insert('tb_hoadon',$data);
        if($query){
            $this->db->select_max('id');
            $id = $this->db->get('tb_hoadon');
            if($id->num_rows() > 0){
                return  $id->result();
            }
        }else return false;
    }
    //end
    //hoa don chiu tiet
    public function set_order($data){
        $query = $this->db->insert('tb_chitiet_hoadon',$data);
        if($query){
            return true;
        }else return false;
    }


    public function edit($id,$data){
        $this->db->where('id',$id);
        $query = $this->db->update('tb_product',$data);
        if(isset($query)){
            return true;
        }else return false;
    }