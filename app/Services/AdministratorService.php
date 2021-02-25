<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class AdministratorService extends BaseService
{

    /**
     * updatePasswordAtFirst
     *
     * @param Request $request
     */
    public function updatePasswordAtFirst(Request $request): void
    {
        TransactionRepository::transaction(function () use ($request) {
            $administratorRepositry = new AdministratorRepository();
            $administrator = $administratorRepositry->updatePasswordAtFirst(
                Auth::id(),
                $request->input('administrator_password')
            );
            $administrator->saveAuthHashToSession();
        });
    }

    /**
     * search
     *
     * @param Request $request
     * @return AbstractPaginator
     */
    public function search(Request $request): AbstractPaginator
    {
        $administratorRepositry = new AdministratorRepository();
        return $administratorRepositry->search($request->all());
    }

    /**
     * register
     *
     * @param Request $request
     * @param int $myAdministratorrId
     * @return Administrator
     */
    public function register(
        Request $request,
        int $myAdministratorId
    ): Administrator {
        $administrator = TransactionRepository::transaction(function () use ($request, $myAdministratorId) {
            $administratorRepositry = new AdministratorRepository();
            $administrator = $administratorRepositry->register($request->all());

            if ($administrator->administrator_id == $myAdministratorId) {
                $administrator->saveAuthHashToSession();
            }

            return $administrator;
        });
        return $administrator;
    }

    /**
     * findById
     *
     * @param int $administratorId
     */
    public function findById(int $administratorId): Administrator
    {
        $administratorRepositry = new AdministratorRepository();
        return $administratorRepositry->findById($administratorId);
    }

}
