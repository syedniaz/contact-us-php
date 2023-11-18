<?php
    $link = mysqli_connect("localhost", "root", "", "formDB");

    if($link === false){
        die("Error: ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM userinfo";

    $result = $link->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body class="text-center text-white gradient-custom">
    <h1 class="display-1" style="padding-top: 20vh;">Messages Table</h1>
    <div class="container"  style="padding-top: 5vh;">
        <table class="table table-primary table-striped">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>

              <?php
                  if ($result->num_rows > 0) {
                      $count = 1;
                      while($row = $result->fetch_assoc()) {
                          
                          echo '<tbody>
                                  <tr>
                                  <td>'.$row['fname'].'</td>
                                  <td>'.$row['email'].'</td>
                                  <td>'.$row['mssg'].'</td>
                                  </tr>
                              </tbody>' ;
                              $count++;
                      }

                  } else {
                      echo "0 results";
                  }

                  mysqli_close($link);
              ?>

            </tbody>
          </table>
    </div>

    <div class="container d-flex justify-content-center py-5">
      <a href="index.html" class="text-white link-underline-opacity-100-hover">Contact Us Page</a>
    </div>
</body>
</html>