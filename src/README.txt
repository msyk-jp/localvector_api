#how to use

use VectorApiClient\Services\VectorService;

class TestController extends Controller
{
    public function test(VectorService $vector)
    {
        $vector->register(['テストA', 'テストB']);
        $judge = $vector->judge('テストX');

        return response()->json([
            'list' => $vector->list(),
            'judge' => $judge
        ]);
    }
}
