																																											<?php
// Copy Paste ke template editor [Settings -> Template Editor].

if (substr($validity, -1) == "d") {
  $validity = "Aktif:" . substr($validity, 0, -1) . "Hari";
} else if (substr($validity, -1) == "h") {
  $validity = "Aktif:" . substr($validity, 0, -1) . "Jam";
}
if (substr($timelimit, -1) == "d" & strlen($timelimit) > 3) {
  $timelimit = "Durasi:" . ((substr($timelimit, 0, -1) * 7) + substr($timelimit, 2, 1)) . "Hari";
} else if (substr($timelimit, -1) == "d") {
  $timelimit = "Durasi:" . substr($timelimit, 0, -1) . "Hari";
} else if (substr($timelimit, -1) == "h") {
  $timelimit = "Durasi:" . substr($timelimit, 0, -1) . "Jam";
} else if (substr($timelimit, -1) == "w") {
  $timelimit = "Durasi:" . (substr($timelimit, 0, -1) * 7) . "Hari";
}

?>

<style type="text/css">
.rotate {
  vertical-align: bottom;
  text-align: center;
}
.rotate span {
  -ms-writing-mode: tb-rl;
  -webkit-writing-mode: vertical-rl;
  writing-mode: vertical-rl;
  transform: rotate(180deg);
  white-space: nowrap;
}
.qrcode{
		height:60px;
		width:60px;
}
</style>

<table class="voucher" style="width: 200px;">
  <tbody>
    <tr>
      <td style="font-weight: bold; font-size: 20px; text-align: center; border-right: 1px solid black;" class="rotate" rowspan="4"><span><?= $price; ?></span></td>
      <td style="font-weight: bold; text-align: center;" colspan="2"><?= $hotspotname; ?> </td>
    </tr>
    <tr>
      <?php if ($usermode == "vc") { ?>  
      <td style="width: 100%; font-weight: bold; font-size: 30px; text-align: center;"><?= $username; ?></td>
      <?php 
    } elseif ($usermode == "up") { ?>
      <td style="width: 100%; font-weight: bold; font-size: 20px; text-align: center;"><?= "User: " . $username . "<br>Pass: " . $password; ?></td>
      <?php 
    } ?>  
    </tr>
    <tr>
      <td style="font-size: 10px;"><?= $validity; ?> <?= $timelimit; ?> <?= $datalimit; ?></td>
    </tr>
    <tr>
      <td colspan="3" style="font-size: 10px;">Login: http://<?= $dnsname; ?> <span id="num"> <?= " [$num]"; ?></span></td>
    </tr>
  </tbody>