<?php include 'includes/header.php'; ?>
    <ul id="topics">
        <li id="main-topic" class="topic">
            <div class="row">
                <div class="col-md-2">
                    <div class="user-info">
                        <img src="<?php echo BASE_URI; ?>img/avatars/<?php echo $topic->avatar; ?>" alt="" class="avatar pull-left">
                        <ul>
                            <li><strong><?php echo $topic->username; ?></strong></li>
                            <li><?php echo userPostCount($topic->user_id); ?> posts</li>
                            <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $topic->user_id; ?>">View topics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="topic-content pull-right">
                        <?php echo $topic->body; ?>
                    </div>
                </div>
            </div>
        </li>

        <?php foreach($replies as $reply)  :?>
            <li class="topic">
                <div class="row">
                    <div class="col-md-2">
                        <div class="user-info">
                            <img src="<?php echo BASE_URI; ?>img/avatars/<?php echo $reply->avatar; ?>" alt="" class="avatar pull-left">
                            <ul>
                                <li><strong><?php echo $reply->username; ?></strong></li>
                                <li><?php echo userPostCount($reply->user_id); ?> posts</li>
                                <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $reply->user_id; ?>">View topics</a></li>
                            </ul>  
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="topic-content pull-right">
                            <?php echo $reply->body; ?>
                        </div>
                    </div>
                </div>
            </li>

        <?php endforeach; ?>
    </ul>
    <h3>Reply to Topic</h3>
    <form action="" role="form">
        <div class="form-group">
            <textarea name="reply" id="reply" cols="80" rows="6" class="form-control"></textarea>
            <script>
                CKEDITOR.replace('reply');
            </script>
        </div>
        <button type="submit" class="btn btn-default">Reply</button>
    </form>
<?php include 'includes/footer.php'; ?>