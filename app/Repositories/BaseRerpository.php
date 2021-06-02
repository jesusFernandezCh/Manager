<?php

namespace App\Repositories;

abstract class BaseRerpository 
{
    /**
	 * [getModel description]
	 * @return [type] [description]
	 */
	abstract function getModel();

	/**
	 * [getfind description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findOrFail($id)
	{
		return $this->getModel()->find($id);
	}

	/**
	 * [getAll description]
	 * @return [type] [description]
	 */
	public function getAll()
	{
		return $this->getModel()->all();
	}

	/**
	 * [create description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function create($data)
	{
		return $this->getModel()->create($data);
	}

	/**
	 * [update description]
	 * @param  [type] $object [description]
	 * @param  [type] $data   [description]
	 * @return [type]         [description]
	 */
	public function update($object, $data)
	{
		$object->update($data);
		return $object->save();
	}

	/**
	 * [delete description]
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	public function delete($object)
	{
		return $object->delete();
	}
}
