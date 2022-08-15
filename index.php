<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/inventaris.png" type="image/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.6/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>All Data | INVENTARISKU.</title>
</head>
<body>
    <div class="container-fluid">
    <div class="container" style="margin:auto; box-shadow:5px;">
    <div class="row">
        <h3 style="text-align: center; margin-bottom: -20px;"><img src="img/inventaris-dark.png" style="height:50px; width:50px;"><b>INVENTARISKU.</b></h3><br>
    <a href="insert.php"><button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Add data</button></a>
    <table id="tabel-data" class="table table-striped table-bordered" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Color</th>
                <th>Location</th>
                <th>Owner</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Color</th>
                <th>Location</th>
                <th>Owner</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
            include "db-conn.php";
            $sql = "SELECT * FROM inventaris";
            $queri = mysqli_query($conn, $sql);

            $no=1;
            while($data = mysqli_fetch_array($queri)){
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['brand'];?></td>
                <td><?php echo $data['type'];?></td>
                <td><?php echo $data['amount'];?></td>
                <td><?php echo $data['color'];?></td>
                <td><?php echo $data['location'];?></td>
                <td><?php echo $data['owner'];?></td>
                <td>
                    <a href="update.php?updateid=<?php echo $data['id'];?>"><button type="submit" class="btn btn-success" name="update" id="update"><span class="glyphicon glyphicon-edit"></span> Update</button></a>
                    <a href="delete.php?deleteid=<?php echo $data['id'];?>" class="btn-info"><button type="submit" class="btn" style="background-color: #f64668;" name="delete" id="delete"><span class="glyphicon glyphicon-trash white"></span> Delete</button></a>
                </td>
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
    </table>
    
    </div>
    </div>
<script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
</script>
</body>
</html>