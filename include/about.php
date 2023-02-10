<?php
session_start();
// hide all error
error_reporting(0);
if (!isset($_SESSION["mikhmon"])) {
  header("Location:../admin.php?id=login");
} else {
}
?>
<style>
.iFWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.iFWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
  height: 100%;
  border :none;
}
</style>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3><i class="fa fa-info-circle"></i> About</h3>
      </div>
      <div class="card-body">
        <h3>User Controller V<?= $_SESSION['v']; ?></h3>
<p>
  User Management & Controller Solusi 247.
</p>
<p>
  <ul>
    <li>
      Author : Guntur Sulistyo Raharjo
    </li>
    <li>
      Github : <a href="https://github.com/OhmGun">Github</a>
    </li>
    <li>
      API Class : <a href="https://github.com/BenMenking/routeros-api">routeros-api</a>
    </li>
    <li>
      Linkedin : <a href="https://www.linkedin.com/in/guntursulistyoraharjo/">Linkedin Guntur Sulistyo Raharjo</a>
    </li>
    <li>
      Facebook : <a href="https://www.facebook.com/guntursulistyoraharjo/">fb.com/guntursulistyoraharjo</a>
    </li>
  </ul>
</p>
<p>
  Divisi Cyber Security & Network Operation Center.
</p>
<div>
    <i>Copyright &copy; <i> 2023 Solusi 247</i></i>
</div>
</div>
</div>
</div>
<div class="col-12">
<div class="card">
  <div class="card-header">
  <h3><i class="fa fa-info-circle"></i> Changelog</h3>
  </div>
  <div class="card-body">
  <div class="iFWrapper">
    <iframe src="https://www.solusi247.com/company/customer/" ></iframe>
  </div>
  </div>
</div>
</div>
</div>
