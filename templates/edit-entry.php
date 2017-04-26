<?php require('header.php'); ?>
<h1>Edit entry</h1>

<form action="?act=apply-edit-entry" method="POST" class="well">
    <input type="hidden" name="id" value="<?=$id?>">
    <div class="form-group">
        <label >Author</label>
        <div><input name="author" type="text" value="<?=$row['author']?>"/></div>
    </div>
    <div class="form-group">
        <label >Header</label>
        <div><input name="header" type="text" value="<?=$row['header']?>"/></div>
    </div>
    <label >Content</label>
    <div class="form-group">
        <textarea name="content" cols="30" rows="10" value="<?=$row['content']?>"></textarea>
    </div>
    <div style="padding-top: 10px">
        <button type="submit" class="btn">
            Post
        </button>
    </div>
    </div>
</form>
<?php require('footer.php'); ?>
