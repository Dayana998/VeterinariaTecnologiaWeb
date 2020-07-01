<?php

namespace App\Http\Controllers;
//use DB;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        //$portfolio = Project::get();
       // $portfolio = DB::table('projects')->get();
        //$portfolio = Project::orderBy('created_at', 'DESC')->get();
        //$portfolio = Project::latest('updated_at')->get();
        //$projects = Project::latest()->paginate();
        return view('projects.index',[
            'projects' => Project::latest()->paginate()
        ]);
    }
    public function show(Project $project)
    {
        //$project Project::find($id);
        return view ('projects.show', [
            'project' => $project
        ]);
    }
    public function create()
    {
        return view('projects.create', ['project' => new Project]);
    }
    public function store(SaveProjectRequest $request)
    {
        //return $request->all();
        /*$fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);*/
        Project::create( $request->validated() );
        /*return request('title');
        $title = request('title');
        $url = request('url');
        $description = request('description');*/
        //Project::create(request()->all());
        //Project::create(request()->only('title', 'url', 'description');
        /*['title'=>request('title'),
        'url'=>request('url'),
        'description'=>request('description')
        ]*/
        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito');
    }
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update( $request->validated() );

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con exito');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exito');
    }

}