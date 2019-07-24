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
        case 'daftar-harga.php':
            $TITLE_PAGE = "Daftar Harga";
            break;
        case 'login.php':
            $TITLE_PAGE = "Eloise.id";
            break;
    }


    $btn_edit = "<button id='edit' class='btn btn-outline-warning'>Edit</button>";
    function btn_delete($id)
    {
        return "<button class='btn btn-outline-danger delete' id='".$id."' >Delete</button>";
    }
    $btn_delete = "<button class='btn btn-outline-danger delete'>Delete</button>";