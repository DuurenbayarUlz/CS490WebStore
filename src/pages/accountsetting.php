<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/accountsettings.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title>Account Settings</title>
</head>

<body>
    <div id="root">
        <?php include("../pages/partials/header.php") ?>
        <?php include("../pages/partials/menu.php") ?>
        <main>
            <?php include("../pages/partials/accountsidebar.php") ?>
            <div class="accountsettings">
                <div class="userpass">
                    <div>
                        <h4>Change Username:</h4>
                        <input type="text" name="email" class="form-control" placeholder="" />
                        <button type="submit" class="btn btn-secondary" name="change-username" style="margin-top: 10px">Submit</button>
                    </div>
                    <div style="padding-top: 20px">
                        <h4>Change Password:</h4>
                        <input type="text" name="password" class="form-control" placeholder="" />
                        <input type="text" name="password" class="form-control" placeholder="" style="margin-top: 6px" />
                        <button type="submit" class="btn btn-secondary" name="change-password" style="margin-top: 10px">Submit</button>

                    </div>
                </div>
            </div>
        </main>
        <?php include("../pages/partials/footer.php") ?>
    </div>
</body>

</html>