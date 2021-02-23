<?php


namespace Treinaweb;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class Core implements HttpKernelInterface
{

    public function handle(Request $request, int $type = self::MASTER_REQUEST, bool $catch = true)
    {
        $rota = $request->getPathInfo();

        switch($rota) {
            case '/':
                $response = new Response(sprintf('<b>%s</b> - Home do site', $rota));
                break;
            case '/contato':
                $response = new Response(sprintf('<b>%s</b> - Página de contato', $rota));
                break;
            default:
                $response = new Response('Ops. Página não encontrada.');
        }

        return $response;
    }
}