<?php

//Declare Interface for repository; later it'll be implemented with Blog Repository

namespace App\Repositories\Interfaces;

use App\User;

interface BlogRepositoryInterface
{
    public function all();

    public function getByUser(User $user);
}