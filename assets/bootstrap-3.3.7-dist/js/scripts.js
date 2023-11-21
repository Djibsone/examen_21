$(document).on("click", ".goBack", function (e) {
    e.preventDefault();
    
    window.history.back();
});

/*function goBack() {
    alert('ok')
    window.history.back();
}*/

/*<!-- index msg-success-error  -->
<?php if (isset(($_GET['s']))): ?>
    <div class="msg">
        <?php 
        $success = base64_decode($_GET['s']);
        echo $success; 
        unset($success);
        ?>
    </div>
<?php endif ?>
<?php if (isset(($_GET['e']))): ?>
    <div class="err">
        <?php 
            $error = base64_decode($_GET['e']);
            echo $error; 
            unset($error);
        ?>
    </div>
<?php endif ?> */