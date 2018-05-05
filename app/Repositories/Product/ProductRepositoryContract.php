<?php
namespace App\Repositories\Product;

interface ProductRepositoryContract
{
    public function find($id);

    public function create($client_id, $requestData);

    public function update($id, $requestData);

    public function destroy($id);
}
