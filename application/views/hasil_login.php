<h1>Coba Login</h1>
<?php
echo $this->session->flashdata('message')."<br>";
if(isset($this->session->nama)){
  echo "Welcome, ". $this->session->nama."<br>";
  echo anchor('Flashdata/logout', 'Logout');
}
else
  echo anchor('Flashdata/login_form', 'Login ulang');
?>
