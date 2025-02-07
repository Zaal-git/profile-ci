<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Portfolio</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('portfolio/update/' . $portfolio['id']); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="category" value="<?= $portfolio['category']; ?>">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $portfolio['title']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" required><?= $portfolio['description']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                        <option value="1" <?= $portfolio['category_id'] == 1 ? 'selected' : ''; ?>>Games</option>
                        <option value="2" <?= $portfolio['category_id'] == 2 ? 'selected' : ''; ?>>Website</option>
                        <option value="3" <?= $portfolio['category_id'] == 3 ? 'selected' : ''; ?>>Desain</option>
                    </select>


                </div>

                <div class="form-group">
                    <label for="image">Image</label><br>
                    <img src="<?= base_url($portfolio['image_path']); ?>" width="150" class="mb-2">
                    <input type="file" class="form-control-file" id="image" name="image">
                    <small class="text-muted">Leave empty if you don't want to change the image.</small>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('portfolio'); ?>" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
