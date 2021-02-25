<?php

namespace App\Repositories;

use App\Libs\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Administrator;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\JoinClause;

class AdministratorRepository extends BaseRepository
{
    use ResizeImageRepository;

    /** @var array 並び順 */
    protected array $orderBys = [
        'administrator_id_desc' => [
            ['administrator.administrator_id', 'DESC'],
        ],
        'administrator_id_asc' => [
            ['administrator.administrator_id', 'ASC'],
        ],
        'administrator_name_desc' => [
            ['administrator.administrator_name', 'DESC'],
            ['administrator.administrator_id', 'DESC'],
        ],
        'administrator_name_asc' => [
            ['administrator.administrator_name', 'ASC'],
            ['administrator.administrator_id', 'ASC'],
        ],
        'administrator_email_desc' => [
            ['administrator.administrator_email', 'DESC'],
            ['administrator.administrator_id', 'DESC'],
        ],
        'administrator_email_asc' => [
            ['administrator.administrator_email', 'ASC'],
            ['administrator.administrator_id', 'ASC'],
        ],
        'administrator_is_valid_desc' => [
            ['administrator.administrator_is_valid', 'DESC'],
            ['administrator.administrator_id', 'DESC'],
        ],
        'administrator_is_valid_asc' => [
            ['administrator.administrator_is_valid', 'ASC'],
            ['administrator.administrator_id', 'ASC'],
        ],
        'administrator_type_desc' => [
            ['administrator_types', 'DESC'],
            ['administrator.administrator_id', 'DESC'],
        ],
        'administrator_type_asc' => [
            ['administrator_types', 'ASC'],
            ['administrator.administrator_id', 'ASC'],
        ],
        'administrator_authority_id_desc' => [
            ['administrator.administrator_authority_id', 'DESC'],
            ['administrator.administrator_id', 'DESC'],
        ],
        'administrator_authority_id_asc' => [
            ['administrator.administrator_authority_id', 'ASC'],
            ['administrator.administrator_id', 'ASC'],
        ],
        'logged_in_at_desc' => [
            ['administrator.logged_in_at', 'DESC'],
            ['administrator.administrator_id', 'DESC'],
        ],
        'logged_in_at_asc' => [
            ['administrator.logged_in_at', 'ASC'],
            ['administrator.administrator_id', 'ASC'],
        ],
    ];

    /**
     * updatePasswordAtFirst
     *
     * @param int $administratorId
     * @param string $administratorPassword
     * @return Administrator
     */
    public function updatePasswordAtFirst(
        int $administratorId, 
        string $administratorPassword
    ): Administrator {
        $administrator = Administrator::find($administratorId);
        $administrator->administrator_password = Hash::make($administratorPassword);
        $administrator->logged_in_at = now();
        $administrator->prev_logged_in_at = now();
        $administrator->save();
        return $administrator;
    }

    /**
     * updateLoggedInAt
     *
     * @param Administrator $administrator
     */
    public function updateLoggedInAt(int $administratorId): void
    {
        $administrator = Administrator::find($administratorId);
        $administrator->prev_logged_in_at = $administrator->logged_in_at;
        $administrator->logged_in_at = now();
        $administrator->save();
    }

    /**
     * search
     *
     * @param array $conditions
     * @return AbstractPaginator
     */
    public function search(array $conditions): AbstractPaginator
    {
        return $this->getSearchBuilder($conditions)
            ->paginate()
            ->appends($conditions);
    }

    /**
     * getSearchBuilder
     *
     * @param array $conditions
     * @return Builder
     */
    private function getSearchBuilder(array $conditions): Builder
    {
        $builder = (new Administrator())->newQuery();

        $this->setConditionAdministratorId($conditions, $builder)
            ->setConditionAdministratorName($conditions, $builder)
            ->setConditionAdministratorEmail($conditions, $builder)
            ->setConditionAdministratorAuthorityId($conditions, $builder)
            ->setConditionLoginAtFrom($conditions, $builder)
            ->setConditionLoginAtTo($conditions, $builder)
            ->setOrderBy($conditions, $builder);

        return $builder;
    }

    /**
     * setConditionAdministratorId
     *
     * @param array $conditions
     * @param Builder $builder
     * @return AdministratorRepository
     */
    private function setConditionAdministratorId(
        array $conditions, 
        Builder $builder
    ): AdministratorRepository {
        $value = $conditions['search_administrator_id'] ?? null;
        if (strlen($value) > 0) {
            $builder->where('administrator.administrator_id', '=', $value);
        }

        return $this;
    }

    /**
     * setConditionAdministratorName
     *
     * @param array $conditions
     * @param Builder $builder
     * @return AdministratorRepository
     */
    private function setConditionAdministratorName(
        array $conditions, 
        Builder $builder
    ): AdministratorRepository {
        $value = $conditions['search_administrator_name'] ?? null;
        if (strlen($value) > 0) {
            $builder->where('administrator.administrator_name', 'LIKE', "%{$value}%");
        }

        return $this;
    }

    /**
     * setConditionAdministratorEmail
     *
     * @param array $conditions
     * @param Builder $builder
     * @return AdministratorRepository
     */
    private function setConditionAdministratorEmail(
        array $conditions, 
        Builder $builder
    ): AdministratorRepository {
        $value = $conditions['search_administrator_email'] ?? null;
        if (strlen($value) > 0) {
            $builder->where('administrator.administrator_email', 'LIKE', "%{$value}%");
        }

        return $this;
    }

    /**
     * setConditionAdministratorAuthorityId
     *
     * @param array $conditions
     * @param Builder $builder
     * @return AdministratorRepository
     */
    private function setConditionAdministratorAuthorityId(
        array $conditions, 
        Builder $builder
    ): AdministratorRepository {
        $values = $conditions['search_administrator_authority_id'] ?? [];
        if ($values) {
            $builder->whereIn('administrator.administrator_authority_id', $values);
        }

        return $this;
    }

    /**
     * setConditionLoginAtFrom
     *
     * @param array $conditions
     * @param Builder $builder
     * @return AdministratorRepository
     */
    private function setConditionLoginAtFrom(
        array $conditions, 
        Builder $builder
    ): AdministratorRepository {
        $value = $conditions['search_logged_in_at_from'] ?? null;
        if (strlen($value) > 0) {
            $builder->where('administrator.logged_in_at', '>=', (new Carbon($value))->format('Y-m-d H:i').':00');
        }

        return $this;
    }

    /**
     * setConditionLoginAtTo
     *
     * @param array $conditions
     * @param Builder $builder
     * @return AdministratorRepository
     */
    private function setConditionLoginAtTo(
        array $conditions, 
        Builder $builder
    ): AdministratorRepository {
        $value = $conditions['search_logged_in_at_to'] ?? null;
        if (strlen($value) > 0) {
            $builder->where('administrator.logged_in_at', '<=', (new Carbon($value))->format('Y-m-d H:i').':59');
        }

        return $this;
    }
    
    /** @return array IS＿VALID */
    final public static function IS＿VALID(): array
    {
        $master = [];
        foreach (config('const/administrator.is_valid') as $name => $id) {
            $master[$id] = __('master/administrator.is_valid.'.$name);
        }
        return $master;
    }
    
    /**
     * register
     *
     * @param array $input
     * @return void
     */
    public function register(array $input): Administrator
    {
        $values = Arr::only($input, [
            'administrator_name',
            'administrator_email',
            'administrator_is_valid',
            'administrator_authority_id',
        ]);

        $administratorPassword = Arr::get($input, 'administrator_password');
        if ($administratorPassword) {
            $values['administrator_password'] = Hash::make($administratorPassword);
        }

        $administratorId = Arr::get($input, 'administrator_id');
        if ($administratorId) {
            $administrator = Administrator::find($administratorId);
        } else {
            $administratorId = Administrator::nextId();
            $values['administrator_id'] = $administratorId;
            $administrator = new Administrator();
        }

        foreach ($values as $column => $value) {
            $administrator->$column = $value;
        }
        $administrator->form1_updated_at = now();
        $administrator->save();

        return $administrator;
    }

    /**
     * findById
     *
     * @param int $administratorId
     * @return Administrator
     */
    public function findById(int $administratorId): Administrator
    {
        return Administrator::find($administratorId);
    }

    /**
     * uploadAdministratorImageFile
     *
     * @param int $administratorId
     * @param UploadedFile $administratorImageFile
     * @return array
     */
    public function uploadAdministratorImageFile(
        int $administratorId, 
        UploadedFile $administratorImageFile
    ): array {
        $this->resizeImage($administratorImageFile,Administrator::ADMINISTRATOR_IMAGE_FILE_MAX_PIXEL);

        $hash = Administrator::generateAdministratorImageFileHash($administratorId).'.'.$administratorImageFile->extension();
        $administratorImageFile->storeAs(
            Administrator::getAdministratorImageFileDir(null, false),
            $hash
        );

        return [
            'name' => $administratorImageFile->getClientOriginalName(),
            'hash' => $hash,
        ];
    }

    /**
     * registerAdministratorImageFile
     *
     * @param array $input
     * @return void
     */
    public function registerAdministratorImageFile(array $input): Administrator
    {
        $administratorId = $input['administrator_id'];
        $administrator = Administrator::find($administratorId);

        if ($administrator->administrator_image_file_hash != $input['administrator_image_file_hash']) {
            $oldHash = $administrator->administrator_image_file_hash;

            $administrator->administrator_image_file_name = $input['administrator_image_file_name'];
            $administrator->administrator_image_file_hash = $input['administrator_image_file_hash'];
            $administrator->save();

            $fromDir = Administrator::getAdministratorImageFileDir(null, true);
            $toDir = Administrator::getAdministratorImageFileDir($administratorId, true);

            if (!File::exists($toDir)) {
                File::makeDirectory($toDir);
            }

            File::move(
                $fromDir.$input['administrator_image_file_hash'],
                $toDir.$input['administrator_image_file_hash']
            );

            if (!is_null($oldHash)) {
                $oldPath = Administrator::getAdministratorImageFileDir($administratorId, true).$oldHash;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }
        }

        return $administrator;
    }

    /**
     * destroy
     *
     * @param int $administratorId
     */
    public function destroy(int $administratorId): void
    {
        Administrator::find($administratorId)->delete();
    }

    /**
     * fetchAdministratorByFile
     *
     * @param string $columnName
     * @param string $fileName
     * @return Administrator|null
     */
    public function fetchAdministratorByFile(
        string $columnName, 
        string $fileName
    ): ?Administrator {
        return Administrator::where($columnName, $fileName)->first();
    }

}