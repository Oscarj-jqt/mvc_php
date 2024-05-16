<?php include __DIR__ . '/header.php'; ?>

<div class="flex gap-8 m-8 items-stretch justify-center flex-wrap">

    <?php foreach ($articles as $a) { ?>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="<?= $a->image ?>" alt="">
            <div class="px-6 py-4">
                <h2 class="font-bold text-xl mb-2"><?= $a->titre ?></h2>
                <p class="text-gray-700 text-base">
                    <?= substr($a->contenu, 0, 150) ?>...
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?= date_create($a->date)->format('\L\e d/m/Y à H\hi') ?></span>
            </div>

            <p class="flex gap-4 justify-center items-center m-2">
                <a href="details-article.php?id=<?= $a->id ?>" class="bg-blue-500 text-white rounded w-10 h-10 flex justify-center items-center">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </a>

                <a href="modif-article.php?id=<?= $a->id ?>" class="bg-yellow-500 text-white rounded w-10 h-10 flex justify-center items-center">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>

                <a href="supprimer-article.php?id=<?= $a->id ?>" class="bg-red-500 text-white rounded w-10 h-10 flex justify-center items-center" onclick="return confirm('Êtes-vous sûr ?')">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </p>
        </div>
    <?php } ?>
</div>

<?php include __DIR__ . '/footer.php';
