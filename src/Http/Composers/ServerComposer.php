<?php

namespace pandaac\ThemeTibia\Http\Composers;

use Illuminate\Contracts\View\View;
use Apolune\Contracts\Server\Factory as Server;

class ServerComposer
{
    /**
     * Holds the server implementation.
     *
     * @var \Apolune\Contracts\Server\Factory
     */
    protected $server;

    /**
     * Create a new instance.
     *
     * @param  \Apolune\Contracts\Server\Factory  $server
     * @return void
     */
    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\Contracts\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('server', $this->server->name());
    }
}
