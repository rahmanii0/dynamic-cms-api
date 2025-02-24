<?php
namespace Modules\Admin\Repositories;
use App\Repositories\BaseRepository;
use Modules\Admin\Repositories\Interfaces\AdminRepositoryInterface;
use Modules\Admin\Models\Admin;



class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    public function __construct(Admin $admin)
    {
        parent::__construct($admin);
    }

 
}
