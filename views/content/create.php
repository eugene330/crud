<div class="row">
    <div class="card offset-md-3 col-md-6">
        <div class="card-header">Create new article</div>
        <div class="card-body">
            <form action="?action=store" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" id="title">
                </div>
                <div class="form-group">
                    <label for="text">text:</label>
                    <textarea name="text" class="form-control" placeholder="Enter text" id="text"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>