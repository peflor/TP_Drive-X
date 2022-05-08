<?php require_once "partials/header.php" ?>


<div class="container">
    <h2 class="my-5 card shadow text-center bg-success text-white p-3">Ajouter un pilote</h2>
    <div class="card shadow p-5">
        <form action="partials/cible.driver.php" method="POST" enctype="multipart/form-data" class="my-3">
        <div class="form-group">
            <label for="nompilote">Nom du pilote</label>
            <input type="text" name="fullname" class="form-control" id="nompilote"  required>            
        </div>
        <div class="form-group">
            <label for="paysorigine">Pays d'origine du pilote</label>
            <input type="text" name="pays" class="form-control" id="paysorigine" >            
        </div>
        <div class="form-group">
            <label for="categorypilote">Catégorie du pilote</label>
            <select name="category" class="form-control" id="categorypilote">
                <option>Formule 1</option>
                <option>Gymkhana</option>
                <option>Nascar</option>
                <option>Rallye</option>
                <option>Drag</option>
            </select>
        </div>         
        <div class="form-group">
            <label for="image">Photo du pilote (JPG, PNG ou GIF : taille maximale 1Mo)</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>
        <button type="submit" class="btn btn-primary my-3"><i class="fas fa-plus-circle"></i> Ajouter</button>
        </form>
    </div>

</div>

