<?php
$template = array(
    'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
);

$this->table->set_template($template);
$this->table->set_heading('Name', 'password');
echo $this->table->generate($user);
?>