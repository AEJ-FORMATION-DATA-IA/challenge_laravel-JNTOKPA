

<?php $__env->startSection("contenu"); ?>
<h2 class="mb-5 mt-2">Ajouter un Apprenant</h2>

<?php if(session()->has("success")): ?>
<p class="text-success"><?php echo e(session()->get("success")); ?></p>
<?php endif; ?>

<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p class="text-danger"><strong><?php echo e($error); ?></strong></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<form class="row g-3" method="POST" action="<?php echo e(route('traitement.ajout')); ?>">
    <?php echo csrf_field(); ?>

    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Nom</label>
        <input type="text" class="form-control" id="validationDefault01" name="nom">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Prenoms</label>
        <input type="text" class="form-control" id="validationDefault02" name="prenom">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Email</label>
        <input type="email" class="form-control" id="validationDefault02" name="mail">
    </div>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Groupe</label>
        <select class="form-select" id="validationDefault04" name="groupe">
            <option selected disabled value="">Choisir le groupe</option>
            <option value="1">GROUPE 1</option>
            <option value="2">GROUPE 2</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Formation</label>
        <select class="form-select" id="validationDefault04" name="formation_id">
            <option selected disabled value="">Choisir la formation</option>
            <?php $__currentLoopData = $formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($f->id); ?>"><?php echo e($f->libelle); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col-12">
        <button class="btn btn-secondary" type="submit">ENREGISTRER</button>
        <a class="btn btn-danger" href="<?php echo e(route('accueil')); ?>">ANNULER</a>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrateur\challenge3-app\resources\views/ajoutApprenant.blade.php ENDPATH**/ ?>