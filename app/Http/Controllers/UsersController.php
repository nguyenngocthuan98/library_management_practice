<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsersController;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UsersController extends Controller
{
    protected $userRepo;

    /**
     * Prevent unauthorized access by URL
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->middleware('is_admin');
        $this->userRepo = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = config('setting.paginate');
        $filters = request()->only('action', 'key');

        if($filters && $filters['action'] == 'search'){
            //For search
            $users = $this->userRepo->getUserBySearchName($filters['key'], $paginate);
        }else{
            //For all user
            $users = $this->userRepo->paginate('id', 'DESC', $paginate);
        }
        return view('users.user', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        
        try {
            $user = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'birth' => $request->birth,
                'address' => $request->address,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'role' => $request->role,
        ];
        $this->userRepo->create($user);

        return redirect()->back()->with(['create_success' => trans('controller/user.create_success')]);
        } catch (ModelNotFoundException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepo->findOrFail($id);
        return view('users.edit_user', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'birth' => $request->birth,
            'address' => $request->address,
            'gender' => $request->gender,
            'phone' => $request->phone,
        ];
        $this->userRepo->findOrFail($id, $user);

        return redirect()->back()->with(['update_success' => trans('controller/user.update_success') ]);
        } catch (ModelNotFoundException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            $user = $this->userRepo->delete($id);
        return redirect()->back()->with(['delete_success' => trans('controller/user.delete_success')]);
        } catch (ModelNotFoundException $e) {
            throw new Exception($e->getMessage());
        }
    }
}
