<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tools test database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="app.js" type="text/javascript"></script>
</head>

<body>
    <div class="container">
        <div class="mt-2" id="toast-message"></div>
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Test PostgreSQL database</h5>
                        <form id="form" method="POST" action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="dbName" id="dbName" placeholder="DB name">
                                <label for="dbName">DB name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="host" id="host"
                                    placeholder="Host name(or IP address)">
                                <label for="host">Host name(or IP address)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="port" id="port" placeholder="Port number">
                                <label for="port">Port number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="userName" id="userName"
                                    placeholder="User name">
                                <label for="userName">User name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" minlength="1" name="numberConnections"
                                    id="numberConnections" placeholder="Number connections">
                                <label for="numberConnections">Number connections</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-success btn-connect text-uppercase fw-bold" name="btnConnect"
                                    id="btnConnect" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i> Connect
                                </button>
                            </div>
                            <br>
                            <div class="d-grid">
                                <button class="btn btn-danger btn-disconnect text-uppercase fw-bold"
                                    name="btnDisConnect" id="btnDisConnect" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i> Disconnect
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="progress mb-5 d-none">
            <div id="progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
        </div>
    </div>
    <?php require_once('event.php') ?>
</body>

</html>