<?php

function getCourses($name = '') {

    global $db;
    
    $exec_var = [];

    if($name) {
        $sql = "SELECT * 
        FROM `courses` 
        JOIN `teachers` ON `courses`.`teacher_id` = `teachers`.`id` 
        WHERE `name` LIKE ? 
        ORDER BY `courses`.`name` ASC";

        $exec_var[] = "%$name%";

    } else {
        $sql = 'SELECT * 
        FROM `courses` 
        JOIN `teachers` ON `courses`.`teacher_id` = `teachers`.`id` 
        ORDER BY `courses`.`name` ASC';
    }


    $stmnt = $db->prepare($sql);
    $stmnt->execute($exec_var);
    $data = $stmnt->fetchAll();

    return $data;
}

function getCourseById($id) {
    global $db;

    $exec_var = [];

    $sql = "SELECT * 
    FROM `courses` 
    JOIN `teachers` ON `courses`.`teacher_id` = `teachers`.`id` 
    WHERE `courses`.`id` = ? ";

    $exec_var[] = $id;

    $stmnt = $db->prepare($sql);
    $stmnt->execute($exec_var);
    return $stmnt->fetchAll();
}