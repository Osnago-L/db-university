<!-- 1 -->
    SELECT *
    FROM `students`
    INNER JOIN `degrees`
    ON `degrees`.`id` = `degree_id`
    WHERE `degrees`.name = "Corso di Laurea in Economia"
<!-- 2 -->
    SELECT * 
    FROM `degrees`
    INNER JOIN `departments`
    ON `departments`.`id` = `department_id`
    WHERE `departments`.`name` = "Dipartimento di Neuroscienze"
<!-- 3 -->
    <!-- find teacher id  -->
    SELECT `id` AS "selected"
    FROM `teachers`
    WHERE `teachers`.`name` = "Fulvio" AND `teachers`.`surname` = "Amato"
    <!-- complete query request  -->
    SELECT * 
    FROM `courses`
    INNER JOIN `course_teacher`
    ON  `course_teacher`.`course_id` = `courses`.`id`
    WHERE `course_teacher`.`teacher_id` = 44;
<!-- 4 -->
    SELECT *
    FROM `students`
    INNER JOIN `degrees`
    ON `degrees`.`id` = `degree_id`
    ORDER BY `students`.`name`,`students`.`surname`
<!-- 5 -->
    SELECT * 
    FROM `degrees`
    INNER JOIN `courses`
    INNER JOIN `teachers`
    ON `degrees`.`id` = `courses`.`degree_id`
<!-- 6 -->
    SELECT `teachers`.`name`,`teachers`.`surname`
    FROM `departments`
	INNER JOIN `degrees` ON `departments`.`id` = `degrees`.`department_id`
    INNER JOIN `courses` ON `degrees`.`id` = `courses`.`degree_id`
    INNER JOIN `course_teacher` ON `courses`.`id` = `course_teacher`.`course_id`
    INNER JOIN `teachers` ON `course_teacher`.`teacher_id` = `teachers`.`id`
    WHERE `departments`.`name` = "Dipartimento di Matematica"
    GROUP BY `teachers`.`name`,`teachers`.`surname`
    ORDER BY `teachers`.`name`,`teachers`.`surname`
<!-- BONUS -->
