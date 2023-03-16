<?php

namespace Db;

interface Repository {
    public function DBConnection();
    public function DBRecrord(...$data);
    public function DBQueryBuiler();
}