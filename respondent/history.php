<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCERNS | History</title>
    <link rel="icon" href="../assets/img/orig-logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Main Template -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        #pills-tab .nav-link {
            color: #000;
        }

        #pills-tab .nav-link.active,
        #pills-tab .nav-link:focus {
            background-color: #6F9472 !important;
            color: #fff !important;
        }

        #pills-tab .nav-link:hover {
            background-color: #8DA48F !important;
            color: #fff !important;
        }
    </style>
</head>

<body>

    <div class="text-center other-cont">
        <!-- TOP NAVBAR -->
        <?php include '../respondent/components/navbar-top.php'; ?>
    </div>

    <div class="container p-4">

        <h3 class="mb-3">History</h3>

        <div class="position-relative my-3">
            <input type="text" class="form-control rounded-pill border border-dark" id="" placeholder="Search...">
            <a href="#" id="search" class="search-button">
                <span class="fa fa-search text-dark me-1"></span>
            </a>
        </div>
        <?php 
        include 'fetch.php'; // Include the file where fetchDataForTab is defined        
        ?>
        <ul class="nav nav-pills nav-tabs mb-3" id="pills-tab" role="tablist">
            <li class="nav-items" role="presentation">
                <a class="nav-link <?php echo $tab === 'Medic' ? 'active' : ''; ?>" id="pills-medic-tab" href="history.php?tab=Medic" role="tab" aria-controls="pills-medic" aria-selected="true">
                    <i class="fa-solid fa-truck-medical"></i> Medic
                </a>
            </li>
            <li class="nav-items" role="presentation">
                <a class="nav-link <?php echo $tab === 'Police' ? 'active' : ''; ?>" id="pills-police-tab" href="history.php?tab=Police" role="tab" aria-controls="pills-police" aria-selected="false">
                    <i class="fa-solid fa-building-shield"></i> Police
                </a>
            </li>
            <li class="nav-items" role="presentation">
                <a class="nav-link <?php echo $tab === 'Fire' ? 'active' : ''; ?>" id="pills-fire-tab" href="history.php?tab=Fire" role="tab" aria-controls="pills-fire" aria-selected="false">
                    <i class="fa-solid fa-fire"></i> Fire
                </a>
            </li>
            <li class="nav-items" role="presentation">
                <a class="nav-link <?php echo $tab === 'Disaster' ? 'active' : ''; ?>" id="pills-disaster-tab" href="history.php?tab=Disaster" role="tab" aria-controls="pills-disaster" aria-selected="false">
                    <i class="fa-solid fa-hurricane"></i> Disaster
                </a>
            </li>
        </ul>


        <div class="tab-content" id="pills-tabContent">
            <?php
            if (!empty($rows)) {
                echo "<div class='tab-pane fade show active' id='pills-" . strtolower($tab) . "' role='tabpanel' aria-labelledby='pills-" . strtolower($tab) . "-tab' tabindex='0'>
                        <div class='table-responsive'>
                            <table class='table table-bordered'>
                                <thead>
                                    <tr>
                                        <th scope='col'>Case</th>
                                        <th scope='col'>Respondents</th>
                                        <th scope='col'>Place</th>
                                        <th scope='col'>Date</th>
                                    </tr>
                                </thead>
                                <tbody>";
                foreach ($rows as $row) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['id']) . "</td>
                            <td>" . htmlspecialchars($row['respondent_name']) . "</td>
                            <td>" . htmlspecialchars($row['address']) . "</td>
                            <td>" . htmlspecialchars($row['date']) . "</td>
                        </tr>";
                }
                echo "</tbody>
                        </table>
                    </div>
                </div>";
            } else {
                echo "<p>No data available.</p>";
            }
            ?>
        </div>

    </div>


    <br> <br> <br>

    <!-- BOTTOM NAVBAR -->
    <?php include '../respondent/components/navbar-bottom.php'; ?>

    <?php include '../respondent/components/notif-modal.php'; ?>

    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/navbarmenu.js"></script>
    <script src="../assets/js/all.min.js"></script>

</body>

</html>
