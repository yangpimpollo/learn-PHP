<?php
    $course = [
        'title' => 'Curso de PHP',
        'subtitle' => 'Aprende PHP desde cero',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.',
        'tags' => ['php', 'programación', 'backend'],
    ];
?>

<!DOCTYPE html>
<html>
    <head></head>     
    <body> 
        <h2><?= $course['subtitle'] ?></h2>
        <ul>
            <?php foreach ($course['tags'] as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>