<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewsFormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsFormRequest $request)
    {
        $user_id = Auth::user()->id;
        $news = new News(array(
            'title' => $request->get('title'),
            'short' => $request->get('short'),
            'content' => $request->get('content'),
            'status' => $request->get('status'),
            'image' => $request->file('image')->getClientOriginalName(),
            'date' => $request->get('date'),            
            ));
         
if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/news/', $name);
        }

        
        $news->save();
        return redirect('/admin/news/create')->with('status', 'Новость успешно опубликована!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	$news = News::whereid($id)->firstOrFail();
        return view('admin.news.edit', compact('news'));        
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
        $news = News::whereid($id)->firstOrFail();
        $news->title = $request->get('title');
        $news->short = $request->get('short');
        $news->content = $request->get('content');
        $news->date = $request->get('date');
        $news->status = $request->get('status');
        $news->save();
        return redirect(action('Admin\NewsController@edit', $news->id))->with('status', 'Новость успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function storeImage()
{

    $files = Input::file('files');

    $json = array(
        'files' => array()
    );

    foreach ($files as $file) {

        $destination = '/images';
        $size = $file->getSize();
        $filename = 'testimage';
        $extension = 'png';
        $fullName = $filename . '.' . $extension;
        $pathToFile = $destination . '/' . $fullName;
        $upload_success = Image::make($file)->encode('png')->save($destination . '/' . $fullName);

        if ($upload_success) {
            $json['files'][] = array(
                'name' => $filename,
                'size' => $size,
                'url' => $pathToFile,
                'message' => 'Uploaded successfully'
            );
            return Response::json($json);
        } else {
            $json['files'][] = array(
                'message' => 'error uploading images',
            );
            return Response::json($json, 202);
        }
    }
}

public function uploadSubmit(Request $request)
{
    $photos = [];
    foreach ($request->photos as $photo) {
        $filename = $photo->store('photos');
        $new_photo = NewsPhoto::create([
            'filename' => $filename
        ]);

        $photo_object = new \stdClass();
        $photo_object->name = str_replace('/images/', '',$photo->getClientOriginalName());
        $photo_object->size = round(Storage::size($filename) / 1024, 2);
        $photo_object->fileID = $new_photo->id;
        $photos[] = $photo_object;
    }

    return response()->json(array('files' => $photos), 200);

}
public function postFile(Request $request)
{
    $news = Product::create($request->all());
    ProductPhoto::whereIn('id', explode(",", $request->file_ids))
        ->update(['news_id' => $news->id]);
    return 'news saved successfully';
}

}
