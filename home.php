<!-- Header -->
<div class="intro-header">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Przez "Czystszą" do Pracy</h1>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="?page=find_job" class="btn btn-primary  btn-block"><i class=></i> <span
                                    class="network-name" ; style="font-size:smaller;">
                                    <h5>Człowiek szuka pracy</h5><br>Przedstaw się potecjalnemu pracodawcy</span></a>
                            <a href="" class="btn btn-primary  btn-block"><i class=></i> <span class="network-name" ;
                                                                                               style="font-size:smaller;">
                                    <h5>Praca szuka człowieka</h5><br>Zobacz listę ofert pracy</span></a>
                            <a href="?page=info" class="btn btn-primary  btn-block"><i class=></i> <span class="network-name"; style="font-size:smaller;">
                                    <h5>Jak to działa</h5><br>O akcji Przez "Czystszą" do pracy</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Login tabbed -->
        <nav class="">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    include_once('User.php');
                    if (!User::is_logged_in()) {
                        echo '<form id="login" class="navbar-form navbar-right" method="post" accept-charset="UTF-8" action="login.php">';
                        echo '<fieldset id="inputs">';
                        echo '<input id="email" type="text" name="email" placeholder="Email" data-rule-email="true" autofocus required>';
                        echo '<input id="password" name="password" type="password" placeholder="Password" required>';
                        echo '<div id="messages"></div>';
                        echo '</fieldset>';
                        echo '<input class="btn btn-primary" type="submit" value="Logowanie"/>';
                        if (isset($_SESSION["admin"])) {
                            echo '<a href="?page=registerUser" class="btn btn-primary" role="button">Rejestracja</a>"; }?>';
                            echo ' </form > ';
                        }
                    } else {
                        echo '<a href = "logout.php" class="btn btn-primal" > Logout</a > ';
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>
</div>

<script src="js/vendor/jquery-1.12.0.min.js"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"/>
<script src="js/pswd.js"/>