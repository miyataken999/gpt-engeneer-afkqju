namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diamond;

class DiamondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diamonds = Diamond::all();
        return view('diamonds.index', compact('diamonds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diamonds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diamond = new Diamond();
        $diamond->carat = $request->input('carat');
        $diamond->cut = $request->input('cut');
        $diamond->color = $request->input('color');
        $diamond->clarity = $request->input('clarity');
        $diamond->save();
        return redirect()->route('diamonds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diamond = Diamond::find($id);
        return view('diamonds.show', compact('diamond'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diamond = Diamond::find($id);
        return view('diamonds.edit', compact('diamond'));
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
        $diamond = Diamond::find($id);
        $diamond->carat = $request->input('carat');
        $diamond->cut = $request->input('cut');
        $diamond->color = $request->input('color');
        $diamond->clarity = $request->input('clarity');
        $diamond->save();
        return redirect()->route('diamonds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Diamond::destroy($id);
        return redirect()->route('diamonds.index');
    }
}