<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="card">
            <div class="card-body">
                    <table class="table table-bordered">
            
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                            </tr>
                        </thead>
            
                        <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                            <tr>
                                
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->email); ?></td>
                            <td>
                                <form action=" <?php echo e(route('users.delete',$item)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                            <td>
                            <form action="<?php echo e(route('users.update', $item)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input type="text" name="name" value="<?php echo e($item->name); ?>">
                                <input type="email" name="email" value="<?php echo e($item->email); ?>">
                            
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            </td>
                                
                            </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\TÀI LIỆU\be2(phan thanh nhuần)\BE2-Nhom-G-1-laravel-10x-1-core\resources\views/viewuser.blade.php ENDPATH**/ ?>