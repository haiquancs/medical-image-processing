<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 7/10/2018
 * Time: 5:25 PM
 */

namespace App\Http\Controllers\Web;

use App\Models\Staff;

class StaffsController extends AppController
{
    private $dirView = 'Web.Staffs.';

    public function index()
    {
    	//query lay du lieu trong DB list danh sach staff
    	$listStaffs = Staff::get()->toArray();
        return view($this->dirView . 'index')->with('listStaffs', $listStaffs);
    }

    public function create()
    {
        return view($this->dirView . 'create');
    }
}