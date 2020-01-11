<?php

function validasi($Username,$Password)
{
   if (!preg_match("/^[a-z_]/",$Username)) {
      echo 'Username Harus Diawali Oleh Huruf Kecil'; 
    }
    
    else  if(!preg_match("/_/",$Username)) {
      echo 'Hanya Boleh Menggunakan Simbol _'; 
    }
    
    else if (strlen($Username)<(5) or strlen($Username)>(13)) {
      echo "Username Hanya Boleh 5-12 Karakter";
    }
    else {
      echo 'Username Benar'; 
    }
    echo"<br>";
    if (strlen($Password)>(7)) {
      echo " Password Hanya Boleh 7 Karakter";
    }
    else if (preg_match("/[a-z]/",$Password)) {
      echo ' Password Harus Huruf Besar'; 
    }
    else  if(preg_match("/[A-Z]{6}/",$Password))  {
      echo " Password Hanya Boleh 5 Karakter Huruf Besar";
    }
    else  if(preg_match("/[1-9]{2}/",$Password))  {
      echo " Password Hanya Boleh 1 Karakter Angka";
    }else  if(preg_match("/[@#%^&*]{2}/",$Password))  {
      echo " Password Hanya Boleh 1 Karakter Simbol";
    }
    else{echo " Password Benar";
    
    }
  }
  validasi("friska_putri","1WORLD");
?>