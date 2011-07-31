<?php
$this->posts = $this->db->prepare(
    'SELECT * FROM tbl_post LIMIT 20;'
)->query()->fetchAll();

