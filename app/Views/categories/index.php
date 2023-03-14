<?php  include(VIEWS.'layouts'.DS.'header.php'); ?>
    <div class="container mt-5">
    <div class="col-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h5><a href="<?php url('categories-relations') ?>" class="btn bg-gradient-info"><i class="mdi mdi-plus"></i> <i class="fas fa-list"></i> Category Relations List </a></h5>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Total Items</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($categories)):
                            foreach ($categories as $category):
                            ?>
                        <tr>
                            <td><?php echo $category->Name?></td>
                            <td><?php echo count($category->items)??0?></td>
                        </tr>
                        <?php endforeach; endif;?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?php echo $title?>
            </div>
        </div>
    </div>
<?php  include(VIEWS.'layouts'.DS.'footer.php'); ?>