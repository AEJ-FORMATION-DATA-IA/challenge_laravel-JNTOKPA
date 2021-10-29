

<?php $__env->startSection("contenu"); ?>
<h2 class="mb-5 mt-2">Modifier les informations</h2>

<?php if(session()->has("success")): ?>
<p class="text-success"><?php echo e(session()->get("success")); ?></p>
<?php endif; ?>

<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p class="text-danger"><strong><?php echo e($error); ?></strong></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<form class="row g-3" method="POST" action="<?php echo e(route('traitement.modif', ['apprenant'=>$apprenant->id])); ?>">
    <?php echo csrf_field(); ?>

    <!--input type="hidden" name="_method" value="put"-->

    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Nom</label>
        <input type="text" class="form-control" id="validationDefault01" name="nom" value="<?php echo e($apprenant->nom); ?>">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Prenoms</label>
        <input type="text" class="form-control" id="validationDefault02" name="prenom" value="<?php echo e($apprenant->prenom); ?>">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Email</label>
        <input type="email" class="form-control" id="validationDefault02" name="mail" value="<?php echo e($apprenant->mail); ?>">
    </div>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Groupe</label>
        <select class="form-select" id="validationDefault04" name="groupe">
            <option selected disabled value="">Choisir le groupe</option>
            <?php if($apprenant->groupe == 1): ?>
            <option value="1" selected>GROUPE 1</option>
            <?php endif; ?>
            <?php if($apprenant->groupe == 2): ?>
            <option value="1" selected>GROUPE 2</option>
            <?php else: ?>
            <option value="1">GROUPE 1</option>
            <option value="2">GROUPE 2</option>
            <?php endif; ?>
        </select>
    </div>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Formation</label>
        <select class="form-select" id="validationDefault04" name="formation_id">
            <option selected disabled value="">Choisir la formation</option>
            <?php $__currentLoopData = $formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($f->id == $apprenant->formation_id): ?>
            <option value="<?php echo e($f->id); ?>" selected><?php echo e($f->libelle); ?></option>
            <?php else: ?>
            <option value="<?php echo e($f->id); ?>"><?php echo e($f->libelle); ?></option>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col-12">
        <button class="btn btn-secondary" type="submit">ENREGISTRER</button>
        <a class="btn btn-danger" href="<?php echo e(route('accueil')); ?>">ANNULER</a>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrateur\challenge3-app\resources\views/modifApprenant.blade.php ENDPATH**/ ?>