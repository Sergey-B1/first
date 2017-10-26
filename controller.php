<?php
require_once 'functions.php';
$delete = $_POST['delete'];

if (isset($delete)){
  if (isset($_POST['delete_no'])){
    header ('Location: index.php');
    exit;
  }
if (isset($_POST['delete_yes'])){
    file_delete($delete);
    header ('Location: index.php');
    exit;
}
}
