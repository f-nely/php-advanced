<?php


namespace Treinaweb;


class UserCommand
{
    protected Notification $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function handle()
    {
        $this->notification->send();
    }
}