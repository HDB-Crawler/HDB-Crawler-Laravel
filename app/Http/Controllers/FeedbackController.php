<?php
namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
	public function getFeedbacks()
	{
		$feedback = Feedback::all();
		return view('feedback', ['feedbacks' => $feedback]);
	}
}