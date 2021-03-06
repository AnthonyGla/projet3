<?php $this->title = "Billet simple pour l'Alaska"; ?>

<div class="breadcrumb">
    <li><a href="admin/post/<?= $post['id'] ?>">Editer "<?= $post['title'] ?>"</a><br/>Publié le <?= $post['date_fr'] ?></li>
</div>


<div class="row">

    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="admin-post">
                <?= $post['content'] ?>
                </div>
            </div>
        </div>
    </div>



    <div class="col-lg-2">

        <div class="alert alert-warning"><i class="fa fa-refresh "></i><a href="admin/edit/<?= $post['id'] ?>"> Mettre à jour ce chapitre</a></div>

        <div class="alert alert-danger"><i class="fa fa-pencil"></i><a href="admin/delete/<?= $post['id'] ?>"> Supprimer ce chapitre</a></div>

        <div class="alert alert-success"><i class="fa fa-edit "></i><a href="admin/create"> Ajouter un nouveau chapitre</a></div>
    </div>
</div>



