<?php

namespace Erikfig\NovaToggleOnTable\Http\Controllers;

use Erikfig\NovaToggleOnTable\Http\Requests\ToggleRequest;

class ToggleController
{
    public function handle(ToggleRequest $request)
    {
        $request->findResourceOrFail()->authorizeToUpdate($request);

        $model = $request->findModelQuery()->firstOrFail();
        $model->update($request->all());

        return response('', 200);
    }
}
