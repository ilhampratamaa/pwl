<?php

class Mhs{

    public $nim,$nama;
    
    function setData($nim, $nama){
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function getData(){
        $mhs = [
            'nim' => $this->nim,
            'nama'=> $this->nama,
        ];
    return $mhs;
    }

    function printData($data = null){
        if(!is_null($data))
        {
            foreach ($data as $key => $value){
                echo $value,"<br>";
            }
        }
        else{
            echo "Data Kosong";
        }
    }

}
?>