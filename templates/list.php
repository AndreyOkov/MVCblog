<?php require('header.php'); ?>
<style type="text/css">
    .comments {
        margin-top: 20px;
    }

    .date {
        margin-right: 10px;
    }

    .content {
        padding-top: 5px;;
        padding-left: 20px;;
    }
    .entry{
        padding-left: 10px;;
    }
    h1{
        margin-bottom: 10px;;
    }
    .pages{
        margin-bottom: 10px;
    }
</style>

<h1>Entries in my blog</h1>

<?php foreach ($records as $row) : ?>
    <h3>
        <a href="?act=view-entry&id=<?=$row['id']?>"><?= $row['header'] ?></a>
        <?php if(IS_ADMIN): ?>
            <a href="?act=edit-entry&id=<?=$row['id']?>"><i class="glyphicon glyphicon-edit"></i></a>
            <a href="?act=delete-entry&id=<?=$row['id']?>"><i class="glyphicon glyphicon-trash"></i></a>
        <?php endif; ?>
    </h3>
    <div class="entry">
        <p class="content"> <?= $row['content'] ?></p>
        <div class="comments">
            <small>
                <span class="date"> <?= $row['date'] ?></span>
                <span class="author"> <?= $row['author'] ?></span>
            </small>
            <a href="?act=view-entry&id=<?= $row['id'] ?>"><?=$row['comments']?> comments</a>
        </div>
    </div>
<?php endforeach ?>

<div class="pages">

Pages:
<?php for ($i = 1; $i <= $pages; $i++): ?>
    <?php if ($i == $page): ?><b><?=$i?></b>
    <?php else: ?><a href="?page=<?=$i?>"><?=$i?></a>
    <?php endif; ?>


<?php endfor ?>
</div>


<? if (isset($_SESSION['IS_ADMIN'])): ?>
<h1>Add new entry</h1>

<form action="?act=do-new-entry" method="POST" class="well">
    <div class="form-group">
        <label >Author</label>
        <div><input name="author" type="text"/></div>
    </div>
    <div class="form-group">
        <label >Header</label>
        <div><input name="header" type="password"/></div>
    </div>
    <label >Content</label>
    <div class="form-group">
        <textarea name="content" cols="30" rows="10"></textarea>
    </div>
    <div style="padding-top: 10px">
        <button type="submit" class="btn">
            Post
        </button>
    </div>
    </div>
</form>

<? endif; ?>

<?php require('footer.php'); ?>


<? //=$content?>
