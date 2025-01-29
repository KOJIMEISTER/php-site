<form action="update_html.php" method="post">
    <div class="form_group">
        <textarea wrap="soft" name="content_body" class="html_box"><?php echo $content_body['content_body']?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
<a href="admin.php">
        <button class="btn btn-primary">Назад</button>
</a>