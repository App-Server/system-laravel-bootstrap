<?php

namespace App\Http\Controllers\ServiceOrderRelaionships;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceOrderModels;
use App\Models\ServiceOrderCommentModel;
//use App\http\Requests\StoreOrderComments;

class ServiceOrderComment extends Controller
{
    protected $comment;
    protected $serviceorder;

    // Inject both Comment and OrderModels
    public function __construct(ServiceOrderCommentModel $comment, ServiceOrderModels $serviceorder)
    {
        $this->comment = $comment;
        $this->serviceorder = $serviceorder;  
    }

    public function index($serviceorderId)
    {
        // Find the serviceorder by its ID
        if (!$serviceorder = $this->serviceorder->find($serviceorderId)) {
            return redirect()->back();
        }

        // Retrieve comments related to this serviceorder
        $service_order_comments = $serviceorder->comments()->get();

        $comments_count = $serviceorder->comments()->count();

        return view('service-order.service-order-comments.index', compact('service_order_comments', 'serviceorder', 'comments_count'));
    }

    public function store(Request $request, $serviceorderId)
    {
        if (!$serviceorder = $this->serviceorder->find($serviceorderId)) {
            return redirect()->back();
        }

        $serviceorder->comments()->create($request->all());
        session()->flash('success', 'Comment created successfully!');
        return redirect()->route('service-order-comments.index', $serviceorder->id);
    }


}
