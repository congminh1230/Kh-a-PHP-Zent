<?php
    // $array_name= array('minh','học lập trình tại f8','ngọc','quynh anh');
    // $array_info= array();
    // $array_info['ID']=1;
    // $array_info['Name']= 'lê Công Minh';
    // $array_info['SBD']= 2051215309;
    // unset($array_info['ID']);
    // echo "<pre>";
    //     print_r($array_info);
    // echo "</pre>";
    // chọn vị trí cần xóa
    // array_splice($array_name,2,2);
    // echo "<pre>";
    //     print_r($array_name);
    // echo "</pre>";
    // kiểm tra mảng có phần từ nhập vào thì sẽ xóa
    // $result = array_diff($array_info,['minh','ngọc']);
    // echo "<pre>";
    //     print_r($result);
    // echo "</pre>";
    // foreach($array_name as $index => $value) {
    //         // echo $value;
    //         echo "<pre>";
    //             print_r($index .':'. $value);
    //         echo "</pre>";
    // }
    //  Mảng 2 chiều thuần tự 
    
    // $array_info = array();
    // $array_info [0][1] = 'minh';
    // $array_info [0][2] = 'duc';
    // $array_info [0][3] = 'linh';
    // $array_info [0][3] = 'nhung';

    // $array_info [1][1] = 'lan';
    // $array_info [1][2] = 'ngọc';
    // $array_info [1][3] = 'hùng';
    // $array_info [1][3] = 'an';
    // $array_name = array('chinh','sơn');
    // $array_info [0][1] = $array_name;
    // $array_end = array('hoàng','chi');
    // $array_info[0][1][0] = $array_end;
    // echo "<pre>";
    //     print_r($array_info);
    // echo "</pre>";
    // echo $array_info[0][1][0][1];

    //  Mảnh 2 chiều không thuần tự
    // $info = array();
    // $info[] = array(
    //     'Name' => 'Lê Công Minh',
    //     'Phone' => '0914332325',
    //     'Email' => 'congminh2012002@gmail.com'

    // );
    // $info[] = array(
    //     'Name' => 'Trần Hải Ngọc',
    //     'Phone' => '0945894297',
    //     'Email' => 'ngoccute@gmail.com'

    // );
    // foreach($info as $key => $value) {
    //     echo "người thứ: ".( $key=$key + 1)."<br/>";
    //     echo "Name:".$value['Name']."<br/>";
    //     echo "Email:".$value['Email']."<br/>";
    // }
    // echo "<pre>";
    //     print_r($info);
    // echo "</pre>";
    

    // kiểm tra phần tử có tồn tại trong mảng hay không

    $array_name= array('minh','học lập trình tại f8','ngọc','quynh anh','linh');
    $array_info= array();
    $array_info['ID']=1;
    $array_info['Name']= 'lê Công Minh';
    $array_info['SBD']= 2051215309;
    
    // $result =count($array_name); kiểm tra số phần tử
    // $result =in_array('duc',$array_name); kiểm tra phần tử có tồn tại hay không
    // $result = array_key_exists( 'ID', $array_info); kiểm tra key có tồn tại trong mảng hay không trả ra true hoặc f
    // $result = array_count_values($array_name); kiểm tra số lần phần tử xuất hiện
    // echo $result;
    // var_dump($result);
    // $result = array_search('minh',$array_name); tìm phần tử và trả ra index
    // $result = array_push($array_name,'duc'); thêm phần tử vào cuối mảng
    // $result = array_pop($array_name); xóa phần tử cuối của mảng
    // $result = array_shift($array_name); xóa phần tử ở đầu mảng
    // $result = array_unshift($array_name,'nhật'); thêm phần tử vào đầu mảng

    unset($array_info['ID']);

    // echo $result;
    // var_dump($result);
    echo "<pre>";
        print_r($array_info);
    echo "</pre>";




?>