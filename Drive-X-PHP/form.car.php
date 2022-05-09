<?php require_once "partials/header.php" ?>


<div class="container">
    <h2 class="my-5 card shadow text-center bg-success text-white p-3">Ajouter un véhicule</h2>
    <div class="card shadow p-5">
        <form action="partials/cible.car.php" method="POST" enctype="multipart/form-data" class="my-3">
        <div class="form-group">
            <label for="nomvehicule">Nom du véhicule</label>
            <input type="text" name="nom" class="form-control" id="nomvehicule"  required>            
        </div>
        <div class="form-group">
            <label for="paysorigine">Pays d'origine du véhicule</label>
            <input type="text" name="pays" class="form-control" id="paysorigine" required>            
        </div>
        <div class="form-group">
            <label for="puissancevehicule">Puissance du véhicule en CH</label>
            <input type="number" name="puissance" class="form-control" id="puissancevehicule" required>            
        </div>
        <div class="form-group">
            <label for="performancevehicule">Performance du véhicule en secondes de 0 à 100km/h</label>
            <input type="text" name="perf" class="form-control" id="performancevehicule" required>            
            </div>
        
        <div class="form-group">
            <label for="image">Photo du véhicule (JPG, PNG ou GIF : taille maximale 1Mo)</label>
            <input type="file" name="image" class="form-control-file" id="image" required>
        </div>
        <button type="submit" class="btn btn-primary my-3"><i class="fas fa-plus-circle"></i> Ajouter</button>
        </form>
    </div>

</div>

