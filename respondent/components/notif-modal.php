<!-- Notification Modal -->
<div class="modal fade" id="notif-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row g-3">          
            <div class="col-12">
            <?php
            // Fetch data from the database
            $sql = "SELECT * FROM scerns_reports WHERE status = 'Pending' ORDER BY date DESC";
            $results = mysqli_query($conn, $sql);

            // Check if the query execution was successful
            if (!$results) {
                // Print the error and exit
                echo "Error in query: " . mysqli_error($conn);
                exit();
            }

            // Check if there are any reports
            if (mysqli_num_rows($results) > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
                    // Determine the icon based on the type_of_emergency
                    $emergencyIconClass = '';
                    switch ($row['type_of_emergency']) {
                        case 'Police':
                            $emergencyIconClass = 'fa-solid fa-handcuffs fa-2xl'; // Adjust the class based on your icon library
                            break;
                        case 'Disaster':
                            $emergencyIconClass = 'fa-solid fa-house-crack fa-2xl'; // Adjust the class based on your icon library
                            break;
                        case 'Fire':
                            $emergencyIconClass = 'fa-solid fa-fire fa-2xl'; // Adjust the class based on your icon library
                            break;
                        case 'Medic':
                            $emergencyIconClass = 'fa-solid fa-notes-medical fa-2xl'; // Adjust the class based on your icon library
                            break;
                        default:
                            // Use a default icon class if the type is not recognized
                            $emergencyIconClass = 'fa-solid fa-question fa-2xl'; // Adjust the class based on your icon library
                            break;
                    }

                    // Format the date
                    $formattedDate = date("F j, Y \a\\t g:i a", strtotime($row['date']));
                    $id = $row['id'];
                    // HTML structure for each report
                    echo '<div class="card bg-primary rounded-3 mb-2 shadow">
                            <div class="card-body text-secondary">
                              <div class="d-flex">
                                <i class="' . $emergencyIconClass . ' my-auto text-light"></i>
                                <h5 class="fw-bold my-auto ms-1">Status : <span class="fw-normal">' . $row['levels'] . '</span></h5>
                              </div>
                              <div class="text-start my-3">
                                <h6 class="fw-semibold">Location : <span class="fw-normal">' . $row['address'] . '</span></h6>
                              </div>
                              <div class="text-start my-3">
                                <h6 class="fw-semibold">Help needed  : <span class="fw-normal">' . $row['type_of_emergency'] . '</span></h6>
                              </div>
                              <div class="text-start my-3">
                                <h6 class="fw-semibold">Date & Time  : <span class="fw-normal">' . $formattedDate . '</span></h6>
                              </div>
                              <div class="d-flex justify-content-center align-items-center">
                                <a href="./location.php?id=' . $id . '&?type='.$row['type_of_emergency'].'" class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-eye"></i> View</a>
                                <button class="btn btn-secondary rounded-pill shadow p-2 w-50 fw-semibold mx-2"><i class="fa-solid fa-phone"></i> Call</button>
                              </div>
                            </div>
                          </div>';
                }
            } else {
                // No reports found
                echo '<p>No reports available.</p>';
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>