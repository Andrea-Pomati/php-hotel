
<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


<table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">Hotel Name</th>
                <th scope="col">Hotel Description</th>
                <th scope="col">Hotel Parking</th>
                <th scope="col">Hotel Vote</th>
                <th scope="col">Hotel distance to center</th>
            </tr>
        </thead>
        <tbody>

        <?php
           
            foreach ($hotels as $hotel) {

             
                $name = $hotel["name"];
                $description = $hotel["description"];
                $parking = $hotel["parking"];
                $vote = $hotel["vote"];
                $distanceToCenter = $hotel["distance_to_center"];
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $name ?>
                    </th>
                    <td>
                        <?php echo $description ?>
                    </td>

                  
                    <td>
                        <?php echo $parking ? 'Parking Available' : 'Parking not Available' ?>
                    </td>

                    <td>
                        <?php echo $vote ?>
                    </td>
                    <td>
                        <?php echo $distanceToCenter . ' km' ?>
                    </td>
                </tr>
            
            <?php } ?>
        </tbody>
    </table>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>