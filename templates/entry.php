<?php require('header.php'); ?>
    <style type="text/css">
        .comments {
            margin-top: 20px;
        }
        .comment-header{
            font-size: 0.8em;
        }
        .comment-content{
            padding-left: 10px;
            margin-bottom: 10px;
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
    </style>

    <h2><a><?=$ENTRY['header']?></a></h2>
    <p class="content"> <?= $ENTRY['content'] ?></p>
    <div class="comments">
        <small>
            <span class="date"> <?= $ENTRY['date'] ?></span>
            <span class="author"> <?= $ENTRY['author'] ?></span>
        </small>
    </div>

<h2>Comments: </h2>
<?php foreach ($comments as $row) : ?>

    <div class="comment">
        <div class="comment-header">
            <small>
                <span class="date"> <?= $row['date'] ?></span>
                <span class="author"> <?= $row['author'] ?></span>
            </small>
            <?php if(IS_ADMIN): ?>
                 <a href="?act=delete-comment&entry_id=<?=$ENTRY['id']?>&id=<?=$row['id']?>"><i class="glyphicon glyphicon-trash"></i></a>
            <?php endif; ?>
        </div>
        <p class="comment-content"> <?= $row['content'] ?></p>
    </div>
<?php endforeach ?>


<h2>Add new comment</h2>

    <form action="?act=do-new-comment" method="POST" class="well">
        <input type="hidden" name="entry_id" value="<?=$id?>">
        <div class="form-group">
            <label >Author</label>
            <div><input name="author" type="text"/></div>
        </div>
        <label >Content</label>
        <div class="form-group">
            <textarea name="content"></textarea>
        </div>
        <div style="padding-top: 10px">
            <button type="submit" class="btn">
                Post
            </button>
        </div>
        </div>
    </form>

<?php require('footer.php'); ?>