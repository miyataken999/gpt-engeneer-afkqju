namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diamond extends Model
{
    protected $fillable = [
        'carat',
        'cut',
        'color',
        'clarity',
    ];
}