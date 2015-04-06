<?php
/**
 * Copyright (C) 2015 David Young
 *
 * Defines the form middleware
 */
namespace RDev\HTTP\Forms;
use Closure;
use RDev\HTTP\Middleware\IMiddleware;
use RDev\HTTP\Requests\Request;

class Middleware implements IMiddleware
{
    /** @var FormRequest The form request to handle */
    protected $formRequest = null;

    /**
     * @param FormRequest $formRequest The form request to handle
     */
    public function __construct(FormRequest $formRequest)
    {
        $this->formRequest = $formRequest;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$this->formRequest->isValid($request))
        {
            // TODO:  Determine which response to return
        }

        return $next($request);
    }
}