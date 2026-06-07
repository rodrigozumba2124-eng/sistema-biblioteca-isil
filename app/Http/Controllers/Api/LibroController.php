public function index() {
    return \App\Models\Libro::all();
}

public function store(\Illuminate\Http\Request $request) {
    return \App\Models\Libro::create($request->all());
}