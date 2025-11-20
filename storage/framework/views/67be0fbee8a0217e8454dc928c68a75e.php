

<?php $__env->startSection('content'); ?>
<div class="container mx-auto mt-6">

    <h1 class="text-2xl font-bold mb-4">Leads Dashboard</h1>

    <?php if(session('success')): ?>
        <div class="p-3 mb-3 text-green-800 bg-green-200 rounded">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    
    <?php if(session('error')): ?>
        <div class="p-3 mb-3 text-red-800 bg-red-200 rounded">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <table class="w-full border-collapse border border-gray-400">
        <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-400 p-2">ID</th>
            <th class="border border-gray-400 p-2">Name</th>
            <th class="border border-gray-400 p-2">Email</th>
            <th class="border border-gray-400 p-2">Phone</th>
            <th class="border border-gray-400 p-2">Message</th>
            <th class="border border-gray-400 p-2">Attachment</th>
            <th class="border border-gray-400 p-2">Action</th>
        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="border border-gray-400 p-2"><?php echo e($lead->id); ?></td>
                <td class="border border-gray-400 p-2"><?php echo e($lead->name); ?></td>
                <td class="border border-gray-400 p-2"><?php echo e($lead->email); ?></td>
                <td class="border border-gray-400 p-2"><?php echo e($lead->phone); ?></td>
                <td class="border border-gray-400 p-2"><?php echo e($lead->your_message); ?></td>
                <td class="border border-gray-400 p-2">
                    <?php if($lead->attachment): ?>
                        <a href="<?php echo e(asset('uploads/'.$lead->attachment)); ?>" target="_blank" class="text-blue-600 underline">View</a>
                    <?php else: ?>
                        No File
                    <?php endif; ?>
                </td>
                <td class="border border-gray-400 p-2">
                    <a href="<?php echo e(route('dashboard.edit', $lead->id)); ?>" class="text-blue-600">Edit</a>

                    <form action="<?php echo e(route('dashboard.destroy', $lead->id)); ?>" method="POST" onsubmit="return confirm('Delete this lead?')" class="inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="text-red-600 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Shruti\htdocs\shipx-landing\resources\views/dashboard/index.blade.php ENDPATH**/ ?>