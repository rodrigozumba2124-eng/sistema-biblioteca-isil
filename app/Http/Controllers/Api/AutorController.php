public function index() {
    return \App\Models\Autor::all();
}

public function store(\Illuminate\Http\Request $request) {
    return \App\Models\Autor::create($request->all());
}