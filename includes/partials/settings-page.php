<!DOCTYPE html>
<html lang="en">

<?php

if(isset($_POST['submit'])) {
     // echo $_POST['client_id_field'];
     // save to options
     update_option('client_id_field', $_POST['client_id_field']);
     // save to database to mollie config table 
     $client_id = $_POST['client_id_field'];
     global $wpdb, $table_prefix;
     $table_name = $table_prefix . 'mollie_config';
     $wpdb->insert( 
          $table_name, 
          array( 
               'api_key' => $client_id, 
               'created_at' => current_time( 'mysql' ), 
               'updated_at' => current_time( 'mysql' ) 
          ) 
     );

     // clear the form
     $_POST['client_id_field'] = '';
     // redirect to settings page with success message
     echo "<script>window.location.href = 'admin.php?page=fam-mollie-settings&success=1';</script>";
     return 1;
}

?>

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap cdn  -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>
          FAM Mollie - <?php echo $title; ?>
     </title>
</head>

<body>
     <div class="container mt-2">
          <?php
               if(isset($_GET['success'])) {
                    echo '<div class="alert alert-success " role="alert">
                    Your settings have been saved successfully!
                    </div>';
               }
               ?>
          <div class="row">
               <div class="col-12 mb-2">
                    <h1>FAM Mollie - Settings</h1>
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ab, magni ipsam porro, rem
                         praesentium quaerat, cupiditate tenetur assumenda facilis exercitationem totam saepe eum
                         accusantium? Deserunt dolorem nobis magnam delectus.
                    </p>
               </div>
          </div>

          <div class="row">
               <div class="col-12">
                    <form method="POST">
                         <div class="form-group">
                              <label for="client_id_field">Client ID :</label>
                              <input type="text" class="form-control" name="client_id_field" id="client_id_field"
                                   value="<?php echo get_option('client_id_field'); ?>">
                              <button type="submit" class="btn btn-primary mt-2" name="submit">Save</button>
                         </div>
                    </form>
               </div>

          </div>
</body>

</html>