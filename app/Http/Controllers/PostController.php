use App\Plan;

public function showPlan(Request $request) {

    $plan = new Plan;

    $data = $plan->find(1);
    //$data = '1';
    return view('index', compact('data'));

}
