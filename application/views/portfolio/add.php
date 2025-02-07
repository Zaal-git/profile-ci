<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('portfolio/add'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= set_value('title'); ?>">
                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"><?= set_value('description'); ?></textarea>
                    <?= form_error('description', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category; ?>"><?= ucfirst($category); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('category', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?= base_url('portfolio'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
