<?php


namespace Treinaweb;


class UserCommand
{
    protected $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function handle()
    {
        $this->notification->send();
    }
}