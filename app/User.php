<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','surname','phone_number','address','active',
    ];

    public function roles() {
      return $this->belongsToMany(Role::class);
    }

    public function orders() {
      return $this->hasMany('App\Order');
    }

    public function isAdmin() {
      return $this->hasRole('admin'); // ?? something like this! should return true or false
    }

    public function isStaff() {
      return $this->hasRole('staff'); // ?? something like this! should return true or false
    }

    public function authorizeRoles($roles) {

      if (is_array($roles)) {
        return $this->hasAnyRole($roles) ||
                 abort(401, 'This action is unauthorized.');
      }

      return $this->hasRole($roles) ||
             abort(401, 'This action is unauthorized.');
    }

    /**

    * Check multiple roles

    * @param array $roles

    */

    public function hasAnyRole($roles) {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    /**

    * Check one role

    * @param string $role

    */

    public function hasRole($role) {
      return null !== $this->roles()->where('name', $role)->first();
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    // this is a recommended way to declare event handlers
    protected static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
             $user->roles()->detach();
             // do the rest of the cleanup...
        });
    }
}
