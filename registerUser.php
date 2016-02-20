<div class="container" style="padding:10%">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Rejestracja użytkownika </h3>
                </div>
                <div class="panel-body">
                    <form id="register" method="post" accept-charset='UTF-8' action="registration.php">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Hasło" required>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Potwierdź hasło" required>
                                </div>
                            </div>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">admin</label>
                            <label><input type="radio" name="optradio" checked="" >ochotnik</label>
                        <input type="submit" value="Zarejestruj" class="btn btn-info btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>