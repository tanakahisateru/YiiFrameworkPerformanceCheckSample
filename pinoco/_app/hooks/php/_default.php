<?php
$this->post = $this->db->prepare(
    'SELECT * FROM tbl_post WHERE id=?;'
)->query($this->pathargs[0])->fetchOne();

if($this->post) {
    $this->page = '_detail.php';
}
else {
    $this->notfound();
}

