<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <?= form_open('menu/editsub/' . $submenu['id']); ?>
    <div class="modal-body">
        <div class="form-group">
            <label for="title">Submenu Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
            <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="menu_id">Menu</label>
            <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu</option>
                <?php foreach ($menu as $m) : ?>
                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
            <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
            <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?= $submenu['is_active']; ?>" id="is_active" name="is_active" <?= active_check($submenu['is_active'], $submenu['id']); ?>>
                <label class="form-check-label" for="is_active">
                    Active?
                </label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Edit Submenu</button>
    </form>
</div>