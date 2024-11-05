<?php
namespace App\Http\Controllers;

use App\Repositories\RestaurantRepositoryInterface;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    protected $restaurantRepository;

    public function __construct(RestaurantRepositoryInterface $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    public function index()
    {
        $restaurants = $this->restaurantRepository->all();
        return view('restaurants.index', compact('restaurants'));
    }

    public function show($id)
    {
        $restaurant = $this->restaurantRepository->find($id);
        return view('restaurants.show', compact('restaurant'));
    }

    public function store(Request $request)
    {
        $this->restaurantRepository->create($request->all());
        return redirect()->route('restaurants.index');
    }

    public function update(Request $request, $id)
    {
        $this->restaurantRepository->update($id, $request->all());
        return redirect()->route('restaurants.index');
    }

    public function destroy($id)
    {
        $this->restaurantRepository->delete($id);
        return redirect()->route('restaurants.index');
    }
}
