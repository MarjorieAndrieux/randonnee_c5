<?php
$connect=mysqli_connect("localhost", "root", "greendayÉ(&&", "reunion_island");
$connect->query ("SET NAMES UTF8");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Reunion island</title>
</head>
<body>
<!-- ___________________________________Modale formulaire_______________________________ -->
<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaleformulaire">
        Ajouter
    </button>

<!-- Modal -->
    <div class="modal fade" id="modaleformulaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle randonnée</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Entrez nom">
                        </div>
                        <div class="form-group">
                            <label for="dificulte">Difficulté</label>
                            <input type="text" class="form-control" id="difficulté" aria-describedby="emailHelp" placeholder="Entrez difficulté">
                        </div>
                        <div class="form-group">
                            <label for="distance">Distance</label>
                            <input type="text" class="form-control" id="distance" aria-describedby="emailHelp" placeholder="Entrez distance">
                        </div>
                        <div class="form-group">
                            <label for="duree">durée</label>
                            <input type="time" class="form-control" id="duree" aria-describedby="emailHelp" placeholder="Entrez durée">
                        </div>
                        <div class="form-group">
                            <label for="denivele">Dénivelé</label>
                            <input type="text" class="form-control" id="denivele" aria-describedby="emailHelp" placeholder="Entrez dénivelé">
                        </div>
                        <div class="form-group">
                            <label for="praticable">Praticable</label>
                            <input type="text" class="form-control" id="praticable" aria-describedby="emailHelp" placeholder="Entrez praticable">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

<!-- ___________________________________Affichage des randonnées____________________________ -->
    <div class="container-fluid">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Difficultée</th>
                    <th scope="col">Distance</th>
                    <th scope="col">Durée</th>
                    <th scope="col">Dénivelé</th>
                    <th scope="col">Praticable</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $allrando=mysqli_query($connect,"SELECT * FROM hiking;");
                        while($rando_res=mysqli_fetch_array($allrando)){

                    ?>
                <tr>
                    <th scope="row"><?php echo($rando_res ['name']);?></th>
                    <th scope="row"><?php echo($rando_res ['difficulty']);?></th>
                    <th scope="row"><?php echo($rando_res ['distance']);?></th>
                    <th scope="row"><?php echo($rando_res ['duration']);?></th>
                    <th scope="row"><?php echo($rando_res ['height_difference']);?></th>
                    <th scope="row"><?php echo($rando_res ['available']);?></th>

                    <?php } ?> 
                </tr>
            </tbody>
        </table>












    </div>



    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>