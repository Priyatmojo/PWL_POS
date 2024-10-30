<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {
        return USerModel::all();
    }

    public function store(Request $request) {
        $rules = [
            'level_id' => 'required|integer',
            'username' => 'required|string|min:3|unique:m_user,username',
            'nama' => 'required|string|max:100',
            'password' => 'required|min:6',
            'file_profile' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $newReq = [
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => $request->password
        ];

        $user = UserModel::create($newReq);

        $fileExtension = $request->file('file_profil')->getClientOriginalExtension();
        $fileName = 'profile_' . $user->user_id . '.' . $fileExtension;
        
        $oldFile = 'profile_pictures/' . $fileName;
        
        if (Storage::disk('public')->exists($oldFile)) {
            Storage::disk('public')->delete($oldFile);
        }
        
        $path = $request->file('file_profil')->storeAs('profile_pictures', $fileName, 'public');
        
        $user = UserModel::find($user->user_id);
        $user->image_profile = $path;
        $user->save();
        
        return response()->json($user, 201);
    }

    public function show(UserModel $user) {
        return UserModel::find($user);
    }

    public function update(Request $request, UserModel $user) {
        $rules = [
            'level_id'   => 'required|integer',
            'username'   => 'required|max:20|unique:m_user,username,' . $user->user_id . ',user_id',
            'nama'       => 'required|max:100',
            'password'   => 'nullable|min:6|max:20',
            'file_profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $newReq = [
            'level_id' => $request->level_id,
            'username' => $request->username,
            'name'     => $request->nama,
        ];
        $check = UserModel::find($user->user_id);
        if ($check) {
        
            if ($request->filled('password')) {
                $newReq['password'] = $request->password; 
            }
        
            if ($request->hasFile('file_profil')) {
                
                $fileExtension = $request->file('file_profil')->getClientOriginalExtension();
                $fileName = 'profile_' . $user->user_id . '.' . $fileExtension;
                
                $oldFile = 'profile_pictures/' . $fileName;
                if (Storage::disk('public')->exists($oldFile)) {
                    Storage::disk('public')->delete($oldFile);
                }
                
                $path = $request->file('file_profil')->storeAs('profile_pictures', $fileName, 'public');
                
                $newReq['image_profile'] = $path;
            }
            
            $check->update($newReq);
            return response()->json($check, 201);
        } else {
            return response()->json([
                'status'  => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    }

    public function destroy (UserModel $user) {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
