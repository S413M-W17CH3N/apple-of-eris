<div class="control-bar row">
    <div class="col-md-3"></div>
    <div class="col-md-3"></div>
    <div class="col-md-3"></div>
    <div class="col-md-3 account-control control-segment text-right" id="account-control" >
        <?php if(isset($_SESSION['eris:user_id'])): ?>
            <p>
                help
            </p>
        <?php else: ?>
            <button class="control-button">Login</button>
            <button class="control-button">Register</button>
        <?php endif; ?>
    </div>
</div>