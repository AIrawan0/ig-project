namespace App/Models;

use codeIgniter/Model;

class userModel extends Model;
{
    protected $table = 'users';
    protected $allowedFields = ['name', 'email', 'password'];
}