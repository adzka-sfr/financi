<?php
require 'config/connect.php';
if (!empty($_SESSION['uid'])) {
  echo "<script>window.location='" . base_url('dashboard') . "';</script>";
} else {
  echo "<script>window.location='" . base_url('auth') . "';</script>";
}
