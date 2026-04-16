<?php

namespace app\Models\RecipesModel;

use \PDO;

function findOneByRand(PDO $conn): array
{
    $sql = "select *
          FROM recipes
          order by rand();
          limit 1;";

    $rs = $conn->query($sql);
    return $rs->fetch(PDO::FETCH_ASSOC);
}
