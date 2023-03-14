<?php  include(VIEWS.'layouts'.DS.'header.php'); ?>
    <div class="container mt-5">
    <div class="col-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h5><a href="<?php url('') ?>" class="btn bg-gradient-info"><i class="mdi mdi-plus"></i> <i class="fas fa-list"></i> Category List </a></h5>
            </div>
            <div class="card-body">

                <ul class="treeview-animated-list mb-3" style="list-style: none">
                 <?php if (!empty($categories)):
                    function getChildCategory($childCategory='', $icon){
                        if (!empty($childCategory)&& count($childCategory) >0){
                            echo '<ul class="nested" style="list-style: none">';
                            foreach ($childCategory as $child){
                                echo '<li><div class="treeview-animated-element"><i class="'.$icon.'"></i>&nbsp; ' .$child->Category->Name;
                                echo count($child->items)>0?' ('.count($child->items).')':'';
                                echo'</div>';
                                getChildCategory($child->Category->childCategory, 'fas fa-gift');
                                echo '</li>';
                            }
                            echo '</ul>';
                        }

                    }
                    foreach ($categories as $category):
                        if (count($category->Parent) <1):
                        ?>
                        <li>
                            <div class="treeview-animated-element"> <i class="fas fa-landmark"></i> <?php echo $category->Name?> <?php echo count($category->items) >0?' ('.count($category->items).')':'' ?></div>
                            <?php echo getChildCategory($category->childCategory??'', 'far fa-folder')?>
                        </li>
                <?php endif; endforeach; endif;?>
                </ul>
            </div>
            <div class="card-footer">
                <?php echo $title?>
            </div>
        </div>
    </div>

<?php  include(VIEWS.'layouts'.DS.'footer.php'); ?>