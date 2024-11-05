<?php

namespace App\Repositories;

use App\Models\Restaurant;

class RestaurantRepository implements RestaurantRepositoryInterface
{
    public function all()
    {
        return Restaurant::all();
    }

    public function find($id)
    {
        return Restaurant::find($id);
    }

    public function create(array $data)
    {
        return Restaurant::create($data);
    }

    public function update($id, array $data)
    {
        return Restaurant::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return Restaurant::destroy($id);
    }
}
