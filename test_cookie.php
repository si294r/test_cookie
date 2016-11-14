<h1>Test Cookie</h1>
<script type="text/javascript" src="https://api.alegrium.com/UADashboard/assets/jquery/jquery-2.2.2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript">
        <?php if (isset($_GET['referral'])) { ?>
        $.cookie("referral","<?php echo $_GET['referral'] ?>", { expires: 30 })
        <?php } ?>
        document.write("referral="+ $.cookie("referral"))
        document.write("<br>")
        <?php if (isset($_GET['media_source'])) { ?>
        $.cookie("media_source","<?php echo $_GET['media_source'] ?>", { expires: 30 })
        <?php } ?>
        document.write("media_source="+ $.cookie("media_source"))
        document.write("<br>")
        document.write(document.cookie)
</script>
<hr>
user_id = <?php echo $_GET['user_id'] ?><br>
referral = <?php echo $_COOKIE['referral'] ?><br>
media_source = <?php echo $_COOKIE['media_source'] ?><br>

<?php

if (!isset($_GET['user_id'])) die;
    
require 'mongodb_helper.php';

$db = get_mongodb();

$data['user_id'] = $_GET['user_id'];
$data['referral'] = $_COOKIE['referral'];
$data['media_source'] = $_COOKIE['media_source'];

$db->doc1->insertOne($data);

