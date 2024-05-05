
<?php $__env->startSection('title', 'Contact List'); ?>
<?php $__env->startSection('body'); ?>
<div class="row d-flex justify-content-center m-5">
  <div class="col-xl-8">
    <h2 class="pb-4">Contact List</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($contact->name); ?></td>
            <td><?php echo e($contact->email); ?></td>
            <td><?php echo e($contact->message); ?></td>
            <td>
            <form action="<?php echo e(route('contact.delete', $contact->id ?? 'default')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-1\resources\views/contactlist.blade.php ENDPATH**/ ?>