<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvel enseignant créé</title>
</head>
<body>
    <h2>Nouvel enseignant créé</h2>
    <p>Un nouvel enseignant a été créé avec succès :</p>
    <p>Nom d'utilisateur : <?php echo e($user->email); ?></p>
    <p>Mot de passe : <?php echo e($password); ?></p>
    <p>Vous pouvez vous connecter à l'application en utilisant ces informations.</p>
    <p>Merci!</p>
</body>
</html>
<?php /**PATH C:\Users\PE\Downloads\your-project-name\resources\views/emails/enseignant-created.blade.php ENDPATH**/ ?>