<div class="row">
    <div class="card offset-md-3 col-md-6">
        <div class="card-header">Articles</div>
        <div class="card-body">
            <a href="?action=create" class="btn btn-success"><i class="fa fa-plus">Create new article</i></a>

            <?php if (count($this->articles) > 0): ?>
                <?php foreach ($this->articles as $article) : ?>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>