<div class="modal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Connexion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="login-form" action="/login">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="loginEmail">Email:</label>
                        <input type="email" name="email" class="form-control" id="loginEmail">
                        <div class="invalid-feedback email-error"></div>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Mot de passe:</label>
                        <input type="password" name="password" class="form-control" id="loginPassword">
                        <div class="invalid-feedback password-error"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group mr-auto">
                        <div class="invalid-feedback auth-error"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary align-middle">Connexion</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>