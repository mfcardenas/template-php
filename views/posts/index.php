<!-- Jumbotron -->
<div class="jumbotron">
    <h1>All Post</h1>
    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus
        commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
    <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
</div>

<!-- Example row of columns -->
<div class="row">
    <?php foreach ($posts as $post) { ?>
        <div class="col-lg-4">
            <h2><?php echo $post->author; ?></h2>
            <p class="text-danger">
                <?php echo $post->content; ?>
            </p>
            <p>
                <a class="btn btn-primary" href="?controller=posts&action=show&id=<?php echo $post->id; ?>" role="button">View details &raquo;</a>
            </p>
        </div>
    <?php } ?>
</div>
