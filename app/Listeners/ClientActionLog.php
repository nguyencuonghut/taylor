<?php

namespace App\Listeners;

use App\Events\ClientAction;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Activity;
use App\Models\Client;
use Lang;

class ClientActionLog
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ClientAction  $event
     * @return void
     */
    public function handle(ClientAction $event)
    {
        $client = $event->getClient();

        switch ($event->getAction()) {
            case 'created':
                $text = __('Khách hàng :client_name được giao cho :assignee', [
                    'client_name' => $client->name,
                    'assignee' => $client->AssignedUser->name,
                ]);
                break;
            case 'updated_assign':
                $text =  __(':username assigned client to :assignee', [
                    'username' => Auth()->user()->name,
                    'assignee' => $client->AssignedUser->name,
                ]);
                break;
            case 'created_body_index':
                $text =  __('Tạo số đo cho :client_name', [
                    'client_name' => $client->name,
                ]);
                break;
            case 'updated_body_index':
                $text =  __('Sửa số đo cho :client_name', [
                    'client_name' => $client->name,
                ]);
                break;
            case 'created_product':
                $text =  __('May sản phẩm mới cho :client_name', [
                    'client_name' => $client->name,
                ]);
                break;
            case 'updated_product':
                $text =  __('Sửa sản phẩm mới cho :client_name', [
                    'client_name' => $client->name,
                ]);
                break;
            default:
                break;
        }
    
        $activityinput = array_merge(
            [
                'text' => $text,
                'user_id' => Auth()->id(),
                'source_type' => Client::class,
                'source_id' =>  $client->id,
                'action' => $event->getAction()
            ]
        );
        
        Activity::create($activityinput);
    }
}
