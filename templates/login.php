<style>
    form{
        margin-top: 30px;
    }
</style>
<?php require('header.php'); ?>
<form action="?act=do-login" method="POST" class="well">
    <div class="form-group">
        <label class="control-label col-sm-2">Login</label>
        <div>
            <input name="login" type="text"/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Password</label>
        <div>
            <input name="password" type="password"/>
        </div>
    </div>
        <div style="padding-top: 10px">
            <button type="submit" class="btn">
                Login
            </button>
        </div>
    </div>
</form>

<?php require('footer.php'); ?>