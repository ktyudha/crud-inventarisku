<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/inventaris.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Data | INVENTARISKU.</title>
</head>
<body>
    <div class="container" style="margin-top:65px;">
        <div class="row justify-content-md-center" >
            <div class="col-md-3 text-white" style="background-color: #375ca6; border-radius: 10px 0px 0px 10px; text-align: center;">
                <img src="img/inventaris.png" style="width: 150px; height: 150px; margin-top: 45%;">
                <h5 style="margin-top: 25%;"><strong>INVENTARISKU.</strong></h5>
                <p style="font-size:11px; margin-top:3%;">let's set up the goods data collection system,<br>to get more focused and clear data</p>
                <p style="font-size:10px; margin-top: 47%;"><strong>&copy; 2022 Vocational School Graduate Academy</strong></p>
            </div>

            <div class="col-md-4" style="border-radius: 0px 10px 10px 0px; background-color:#e3f2fd;">
                <div class="container-sm">
                <div class="mt-3 mb-3">
                <form action="action.php" method="post">
                    <table class="table table-borderless" style="margin:auto; margin-top:65px; text-align: right; color: #375ca6;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><h6 style="text-align: left; margin-bottom: -3px;"><strong>INFORMATION OF GOODS</strong></h6></td>
                            </tr>
                        <tr>
                            <td><label for="brand" class="form-label">Brand</label></td>
                            <td><input type="text" class="form-control" id="brand" placeholder="MikroTik" name="brand" required></td>
                        </tr>
                        <tr>
                            <td><label for="type" class="form-label">Type</label></td>
                            <td><input type="text" class="form-control" id="type" placeholder="RB941-2nD" name="type" required></td>
                        </tr>
                        <tr>
                            <td><label for="amount" class="form-label">Amount</label></td>
                            <td><input type="text" class="form-control" id="amount" placeholder="20 pcs" name="amount" required></td>
                        </tr>
                        <tr>
                            <td><label for="color" class="form-label">Color</label></td>
                            <td> <input type="text" class="form-control" id="color" placeholder="White-blue" name="color" required></td>
                        </tr>
                        <tr>
                            <td><label for="location" class="form-label">Location</label></td>
                            <td><input type="text" class="form-control" id="location" placeholder="Lab TKJ A" name="location" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><h6 style="text-align: left; margin-top:5px; margin-bottom: -3px;"><strong>OWNERSHIP</strong></h6></td>
                        </tr>
                        <tr>
                            <td><label for="owner" class="form-label">Owner</label></td>
                            <td> <input type="text" class="form-control" id="owner" placeholder="Management TKJ" name="owner" required></td>
                        </tr>
                        <tr>
                            <td></td>
                        <td style="text-align: left;">
                        <button type="submit" class="btn text-white" style="background-color: #41436a;" name="save" id="save">Save</button>
                        <a href="insert.php"><input type="button" class="btn text-white" style="background-color: #f64668;" name="reset" id="Reset" value="Reset"></a>
                        <a href="index.php"><input type="button" class="btn text-white" style="background-color: #fe9677;" name="back" id="back" value="Back"></a>
                        </td>
                        </tr>    
                    </tbody>
                    </table>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>