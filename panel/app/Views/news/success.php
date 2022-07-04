
<?php
if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin') {
    echo '<h1>Announcement has been sumbitted<h2>';
    echo '<p>You will be redirected in 3 seconds</p>';
} else {
    echo '<h5>you should not be here</h5>';
}
?>

<script>
        var timer = setTimeout(function() {
            window.location='<?php echo base_url(); ?>/news-update'
        }, 3000);
    </script>