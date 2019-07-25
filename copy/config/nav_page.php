<div class="col-sm-2 text-white">
    <!-- <h1>Nanana</h1> -->
    <ul id="side-menu" class="nav nav-pills nav-stacked">
    
        <li class="<?= getActiveList('index.php'); ?>">
            <a href="./"><i class="fa fa-home">&nbsp;</i>Dashboard</a>
        </li><br/>
 
         <li class="<?= getActiveList('add_post.php'); ?>">
            <a href="add_post.php"><i class="fa fa-plus-square">&nbsp;</i>Add Data</a>
        </li><br/>
        
        <li class="<?= ($TITLE_PAGE == $value) ? $active="active" : ""; ?>">
            <a href="?menu=category"><i class="fab fa-buffer">&nbsp;</i>Category</a>
        </li><br/>
        
        <li class="<?= ($TITLE_PAGE == $value) ? $active="active" : ""; ?>">
            <a href="?menu=manage"><i class="fa fa-user">&nbsp;</i>Manage Admin</a>
        </li><br/>
        
        <li class="<?= ($TITLE_PAGE == $value) ? $active="active" : ""; ?>">
            <a href="?menu=comment"><i class="fa fa-comment">&nbsp;</i>Comment</a>
        </li><br/>
        
        <li class="<?= ($TITLE_PAGE == $value) ? $active="active" : ""; ?>">
            <a href="?menu=logout"><i class="fa fa-sign-out-alt">&nbsp;</i>Logout</a>
        </li>
    </ul>
</div>