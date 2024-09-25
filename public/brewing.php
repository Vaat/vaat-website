<?php
session_start(['cookie_lifetime' => 2592000]);
$auth = new Auth();

if (!isset($_ENV['BREWING_PASS']) && (
        $_SERVER['HTTP_HOST'] === 'vaat-website.ddev.site'
    )) {
    $auth->setAuthenticated(true);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    $auth->validate($_POST['password']);
}

/**
 * Class Auth
 */
class Auth
{
    /**
     * @param $password
     */
    public function validate($password)
    {
        $result = password_verify($password, $_ENV['BREWING_PASS']);
        $this->setAuthenticated($result);
    }

    /**
     * @param $result
     */
    public function setAuthenticated($result)
    {
        $_SESSION['hasValidSession'] = $result;
    }

    /**
     * @return bool
     */
    public function isAuthenticated(): bool
    {
        return (isset($_SESSION['hasValidSession']) && $_SESSION['hasValidSession']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Vaat Brewery">
    <meta name="author" content="Vaat OÜ">
    <link rel="icon" href="favicon.ico">
    <title>Vaat</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" type="text/css" href="css/styles.min.css" />
</head>

<body>
<?php if (!$auth->isAuthenticated()) : ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-inline" action="/brewing.php" method="post">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" name="password" id="password" type="password"/>
                    </div>
                    <input class="btn btn-default" name="submit" type="submit" value="log in"/>
                </form>
            </div>
        </div>
    </div>
<?php else: ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="brewing">Vaat's brewing?</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-sm-4 tank-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="can" src="images/tank.png" alt="tank" />
                        </div>
                        <div class="col-lg-12">
                            <h3>Tank 1</h3>
                            <h4>The Coast is Clear</h4>
                            <p class="beer-description">
                                BD: 20.09.2024
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 tank-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="can" src="images/tank.png" alt="tank" />
                        </div>
                        <div class="col-lg-12">
                            <h3>Tank 2</h3>
                            <h4>Tallinner Weizen</h4>
                            <p class="beer-description">
                                BD: 03.09.2024
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 tank-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="can" src="images/tank.png" alt="tank" />
                        </div>
                        <div class="col-lg-12">
                            <h3>Tank 3</h3>
                            <h4>Cherry Dubbel (7Fjell collab)</h4>
                            <p class="beer-description">
                                BD: 24.09.2024
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 tank-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="can" src="images/tank.png" alt="tank" />
                        </div>
                        <div class="col-lg-12">
                            <h3>Tank 4</h3>
                            <h4>Test brew for Witty Nelson</h4>
                            <p class="beer-description">
                                BD: 02.09.2024
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 tank-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="can" src="images/tank.png" alt="tank" />
                        </div>
                        <div class="col-lg-12">
                            <h3>Tank 5</h3>
                            <h4>Finally!</h4>
                            <p class="beer-description">
                                BD: 26.08.2024
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 tank-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="can" src="images/tank.png" alt="tank" />
                        </div>
                        <div class="col-lg-12">
                            <h3>Tank 6</h3>
                            <h4>free</h4>
                            <p class="beer-description">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<script src="js/scripts.js"></script>
</body>
</html>