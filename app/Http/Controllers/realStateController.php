<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterealStateRequest;
use App\Http\Requests\UpdaterealStateRequest;
use App\Repositories\realStateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\realState;
class realStateController extends AppBaseController
{
    /** @var  realStateRepository */
    private $realStateRepository;

    public function __construct(realStateRepository $realStateRepo)
    {
        $this->realStateRepository = $realStateRepo;
          $this->middleware('auth');

    }

    /**
     * Display a listing of the realState.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->realStateRepository->pushCriteria(new RequestCriteria($request));
        $realStates = $this->realStateRepository->all();
        // $realStates=realState::latest()->get();
        return view('home')
            ->with('realStates', $realStates);
    }


public function getToday(){
// return date("Y-m-d");
    $realStates=realState::latest()->where('created_at',date("Y-m-d"))->get();
    // return $realStates;
     return view('real_states.today')
            ->with('realStates', $realStates);
}


public function search(){

     $realStates=realState::latest();
   
    if (isset($_GET['from_price'])!=null&&$_GET['from_price']!='') {
        $realStates =$realStates->where('price','>=',$_GET['from_price']);
        return "ff";
    }
    if (isset($_GET['to_price'])!=null&&$_GET['to_price']!='') {
        $realStates =$realStates->where('price','<=',$_GET['to_price']);
    }
     if (isset($_GET['city'])!=null&&$_GET['city']!='') {
        $realStates =$realStates->where('city',$_GET['city']); 
        // return $_GET;
     // return json_encode($realStates);
    }
     if (isset($_GET['group'])!=null&&$_GET['group']!='') {
        $realStates =$realStates->where('group',$_GET['group']);
    }
     if (isset($_GET['building'])!=null&&$_GET['building']!='') {
        $realStates =$realStates->where('building',$_GET['building']);
    }
     if (isset($_GET['flat'])!=null&&$_GET['flat']!='') {
        $realStates =$realStates->where('flat',$_GET['flat']);
    }
     if (isset($_GET['type'])!=null&&$_GET['type']!='') {
        $realStates =$realStates->where('type',$_GET['type']);
    }
     if (isset($_GET['view'])!=null&&$_GET['view']!='') {
        $realStates =$realStates->where('view',$_GET['view']);
    }
     if (isset($_GET['purpose'])!=null&&$_GET['purpose']!='') {
        $realStates =$realStates->where('purpose',$_GET['purpose']);
    }

      if (isset($_GET['name'])!=null&&$_GET['name']!='') {
        $realStates =$realStates->where('name',$_GET['name']);
    }
     if (isset($_GET['mobile'])!=null&&$_GET['mobile']!='') {
        $realStates =$realStates->where('mobile',$_GET['mobile']);
    }
     // return json_encode($realStates);
        $realStates= $realStates->get();

  return view('real_states.search')
            ->with('realStates', $realStates);
}

    /**
     * Show the form for creating a new realState.
     *
     * @return Response
     */
    public function create()
    {
        return view('real_states.create');
    }

    /**
     * Store a newly created realState in storage.
     *
     * @param CreaterealStateRequest $request
     *
     * @return Response
     */
    public function store(CreaterealStateRequest $request)
    {
        $input = $request->all();

        $realState = $this->realStateRepository->create($input);

        Flash::success('Real State saved successfully.');

        return redirect('home');
    }

    /**
     * Display the specified realState.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $realState = $this->realStateRepository->findWithoutFail($id);

        if (empty($realState)) {
            Flash::error('Real State not found');

            return redirect(route('realStates.index'));
        }

        return view('real_states.show')->with('realState', $realState);
    }

    /**
     * Show the form for editing the specified realState.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $realState = $this->realStateRepository->findWithoutFail($id);

        if (empty($realState)) {
            Flash::error('Real State not found');

            return redirect(route('realStates.index'));
        }

        return view('real_states.edit')->with('realState', $realState);
    }

    /**
     * Update the specified realState in storage.
     *
     * @param  int              $id
     * @param UpdaterealStateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterealStateRequest $request)
    {
        $realState = $this->realStateRepository->findWithoutFail($id);

        if (empty($realState)) {
            Flash::error('Real State not found');

            return redirect(route('realStates.index'));
        }

        $realState = $this->realStateRepository->update($request->all(), $id);

        Flash::success('Real State updated successfully.');

        return redirect('home');
    }

    /**
     * Remove the specified realState from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $realState = $this->realStateRepository->findWithoutFail($id);

        if (empty($realState)) {
            Flash::error('Real State not found');

            return redirect(route('realStates.index'));
        }

        $this->realStateRepository->delete($id);

        Flash::success('Real State deleted successfully.');

        return redirect(route('realStates.index'));
    }
}
