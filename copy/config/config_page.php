<?php 

	function getActiveList($value)
	{
        $active = (basename($_SERVER['SCRIPT_NAME']) == $value) ? "active" : "";
		return $active;
    }
    
    switch (basename($_SERVER['SCRIPT_NAME'])) {
        case 'index.php':
            $TITLE_PAGE = "Home";
            break;
        case 'add_post.php':
            $TITLE_PAGE = "Add Post";
            break;
        case 'edit_barang.php':
            $TITLE_PAGE = "Edit Data Barang";
            break;
        case 'edit_jenis_brg.php':
            $TITLE_PAGE = "Edit Jenis Barang";
            break;
    }

    $btn_edit = "<button class='btn btn-warning'>Edit</button>";
    $btn_delete = "<button class='btn btn-danger'>Delete</button>";