<?php 

    
    function productJson()
    {
        $product = array(
            'Nama' => "Handika Yulma Kristiawan",
            'Age' => 22,
            'Address' => "Desa Wedelan RT 01 RW 10 Bangsri, Jepara",
            'Hobby' => array("Hiking", " Ngoprek Mikrokontroller "),
            'Is_married' => false,
            'List_school' => array(
                0 => array("Universitas Telkom","2015","2019","Teknik Elektro"),
                1 => array("SMAN 1 Bangsri","2012","2015","Sains Class"),
            ),
            'Skills' => array(
                0 => array("Arduino","Expert"),
                1 => array("PLC","Medium"),
                2 => array("PHP","Beginner"),
                3 => array("IOT","Medium"),
            ),
            
            'Interest_in_coding' => true,
            
            
        );
    
        return json_encode($product);
    }

    $jsonProduct = productJson();

    echo $jsonProduct;


    

?>
