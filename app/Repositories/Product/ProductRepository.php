<?php
namespace App\Repositories\Product;

use App\Models\Product;
use App\Models\Client;
use DB;
/**
 * Class ProductRepository
 * @package App\Repositories\Product
 */
class ProductRepository implements ProductRepositoryContract
{
    const CREATED_PRODUCT = 'created_product';
    const UPDATED_PRODUCT = 'updated_product';

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Product::findOrFail($id);
    }

    /**
     * @param $requestData
     */
    public function create($client_id, $requestData)
    {
        $input = $requestData = array_merge(
            $requestData->all(),
            ['client_id' => $client_id]
        );

        $product = Product::create($input);

        $client = Client::findOrFail($product->client_id);
        Session()->flash('flash_message', 'Tạo mới sản phẩm thành công!');
        event(new \App\Events\ClientAction($client, self::CREATED_PRODUCT));
    }

    /**
     * @param $id
     * @param $requestData
     */
    public function update($id, $requestData)
    {
        $product = Product::findOrFail($id);
        $product->fill($requestData->all())->save();
        $product->refresh();

        $client = Client::findOrFail($product->client_id);
        Session()->flash('flash_message', 'Cập nhật sản phẩm thành công');
        event(new \App\Events\ClientAction($client, self::UPDATED_PRODUCT));
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
    }
}
