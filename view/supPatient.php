<?php
    $id = $_GET['idPatient'];
    deletePatient($id);
    header("Location:?page=listPatients");