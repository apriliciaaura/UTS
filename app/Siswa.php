<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model{
    protected $table = 'siswa';
    protected $fillable = ['nama', 'nim', 'email', 'jurusan', 'avatar', 'user_id'];

    public function getAvatar(){
    	if(!$this->avatar){
    		return asset('images/default.png');
    	}
    	return asset('images/'.$this->avatar);
    }

    public function matkul(){
    	return $this -> belongsToMany(Matkul::class)->withPivot(['nilai'])->withTimeStamps();
    }
}
