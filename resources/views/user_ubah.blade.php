<!DOCTYPE html>
<html>
    <head>
        <title>Ubah User</title>
    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <form method="post" action="{{ url('user/ubah_simpan') }}/{{ $data->user_id }}">

            {{ CSRF_field() }}
            {{ method_field('PUT') }}

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
            <br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama" value="{{ $data->name }}">
            <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password" value="{{ $data->password }}">
            <br>
            <label>Level ID</label>
            <input type="number" name="level_id" placeholder="Masukkan ID Level" value="{{ $data->level_id }}">
            <br>
            <input type="submit" class="btn btn-success" value="Simpan">
        
        </form>
    </body>
</html>