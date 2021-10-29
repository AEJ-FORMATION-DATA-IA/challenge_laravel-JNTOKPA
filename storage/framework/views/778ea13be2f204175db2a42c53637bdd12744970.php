

<?php $__env->startSection("contenu"); ?>
<h2 class="mb-5 mt-2">Liste des apprenants</h2>
<div class="table-responsive">
    <div class="d-flex justify-content-between">
        <?php echo e($apprenants->links()); ?>

        <div>
            <a href="<?php echo e(route('ajoutApprenant')); ?>" class="btn btn-secondary">Ajouter un Apprenant</a>
        </div>
    </div>
    <?php if(session()->has("successDelete")): ?>
    <p class="text-success"><?php echo e(session()->get("successDelete")); ?></p>
    <?php endif; ?>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenoms</th>
                <th scope="col">Email</th>
                <th scope="col">Formation</th>
                <th scope="col">Groupe</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $apprenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->index + 1); ?></td>
                <td><?php echo e($a->nom); ?></td>
                <td><?php echo e($a->prenom); ?></td>
                <td><?php echo e($a->mail); ?></td>
                <td><?php echo e($a->formation->libelle); ?></td>
                <td>GROUPE <?php echo e($a->groupe); ?></td>
                <td>
                    <a href="<?php echo e(route('modifApprenant', $a->id)); ?>" class="btn btn-secondary">Modifier</a>
                    <a href="<?php echo e(route('apprenantSupprimer', $a->id)); ?>" class="btn btn-danger">Supprimer</a>


                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrateur\challenge3-app\resources\views/apprenant.blade.php ENDPATH**/ ?>