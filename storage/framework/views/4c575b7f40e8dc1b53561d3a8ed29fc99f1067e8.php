<?php $__env->startPush('data_table_style'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class='container' >
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Groupe Name</th>
                        <th>Groupe Type</th>
                        <th>Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php $__currentLoopData = $bufferData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($date->groupInfo->name); ?></td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><?php echo e($data->post_text); ?></td>
                        <td>2011/04/25</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Groupe Name</th>
                        <th>Groupe Type</th>
                        <th>Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th>
                    </tr>
                </tfoot>
            </table>
</div>


<?php $__env->stopSection(); ?>



<?php $__env->startPush('data_table_script'); ?>

<script >
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>