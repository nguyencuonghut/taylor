<?php
namespace App\Repositories\BodyIndex;

use App\Models\BodyIndex;
use App\Models\Client;
use DB;
/**
 * Class BodyIndexRepository
 * @package App\Repositories\BodyIndex
 */
class BodyIndexRepository implements BodyIndexRepositoryContract
{
    const CREATED_BODY_INDEX = 'created_body_index';
    const UPDATED_BODY_INDEX = 'updated_body_index';

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return BodyIndex::findOrFail($id);
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

        $body_index = BodyIndex::create($input);

        $client = Client::findOrFail($body_index->client_id);
        Session()->flash('flash_message', 'Tạo mới số đo thành công!');
        event(new \App\Events\ClientAction($client, self::CREATED_BODY_INDEX));
    }

    /**
     * @param $id
     * @param $requestData
     */
    public function update($id, $requestData)
    {
        $body_index = BodyIndex::findOrFail($id);
        $body_index->fill($requestData->all())->save();
        $body_index->refresh();

        $client = Client::findOrFail($body_index->client_id);
        Session()->flash('flash_message', 'Cập nhật số đo thành công');
        event(new \App\Events\ClientAction($client, self::UPDATED_BODY_INDEX));
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
    }
}
