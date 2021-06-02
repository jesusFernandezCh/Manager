<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface IRerpository
{
    public function getall();
	public function findOrFail($id);
	public function create(array $data);
	public function update($entity, $data);
	public function delete($entity);
}
