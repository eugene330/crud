<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="card offset-md-3 col-md-6">
        <div class="card-header">Articles</div>
        <div class="card-body">
            <a href="?action=create" class="btn btn-success"><i class="fa fa-plus">Create new article</i></a>

            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>text</th>
                    <th>action</th>
                </tr>
                </thead>
                <?php if (count($this->articles) > 0): ?>
                    <tbody>
                    <?php foreach ($this->articles as $article) : ?>
                        <tr>
                            <td><?= $article['id'] ?></td>
                            <td><?= $article['title'] ?></td>
                            <td><?= $article['text'] ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>