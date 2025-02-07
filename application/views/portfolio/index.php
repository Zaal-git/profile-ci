<div class="container">
    <h1><?= $title; ?></h1>
    <a href="<?= base_url('portfolio/add'); ?>" class="btn btn-primary mb-3">Tambah Portfolio</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($portfolios as $p) : ?>
                <tr>
                    <td><?= $p['title']; ?></td>
                    <td><?= $p['category']; ?></td>
                    <td><img src="<?= base_url($p['image_path']); ?>" width="100"></td>
                    <td>
                        <a href="<?= base_url('portfolio/edit/' . $p['id']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('portfolio/delete/' . $p['id']); ?>" class="btn btn-danger" onclick="return confirm('Hapus portfolio ini?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
