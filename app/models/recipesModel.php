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


function findAllPopulars(PDO $conn): array
{

    $sql = "select *
            FROM recipes
            order by created_at desc
            limit 3;";

    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
