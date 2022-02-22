<!-- 1 -->
    SELECT COUNT(`id`) 
    FROM `students` 
    WHERE YEAR(`date_of_birth`) = "1990"
<!-- 2 -->
    SELECT *
    FROM `courses`
    WHERE `cfu` > 10
<!-- 3 -->
    SELECT *
    FROM `students`
    WHERE YEAR(`date_of_birth`) < 1992
<!-- 4 -->
    SELECT * 
    FROM `courses`
    WHERE `period` = "I semestre" AND `year` = 1
<!-- 5 -->
    SELECT * 
    FROM `exams`
    WHERE HOUR(`hour`) >= 14 AND DATE(`date`) = "2020-06-20"
<!-- 6 -->
    SELECT * 
    FROM `degrees`
    WHERE `level` = "magistrale"
<!-- 7 -->
    SELECT COUNT(`id`)
    FROM `departments`
<!-- 8 -->
    SELECT * 
    FROM `teachers` 
    WHERE ISNULL(`phone`)
<!-- 9 -->
    SELECT COUNT(`id`), YEAR(`enrolment_date`)
    FROM `students`
    GROUP BY YEAR(`enrolment_date`)
<!-- 10 -->
    SELECT COUNT(`id`), `office_address` 
    FROM `teachers`
    GROUP BY `office_address`
<!-- 11 -->
    SELECT `exam_id`, SUM(`vote`) / COUNT(`exam_id`) AS `media_voti`
    FROM `exam_student`
    GROUP BY `exam_id`
<!-- 12 -->
    SELECT COUNT(`department_id`)
    FROM `degrees`
    GROUP BY `department_id`