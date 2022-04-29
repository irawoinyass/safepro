<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Mail;

class MainController extends Controller
{
      public function index(){

    	$title = "Home";
    	
    	return view('MainPages.index')->with(['title'=>$title]);

    }



   public function aboutus(){

    $title = "About Us";

    return view('MainPages.about')->with(['title'=>$title]);
  }


  public function assurance(){

    $title = "Information security and assurance";

    return view('MainPages.assurance')->with(['title'=>$title]);
  }



   public function consulting(){

    $title = "Technology advisory and consulting";

    return view('MainPages.consulting')->with(['title'=>$title]);
  }




  public function design(){

    $title = "Products and solution design";

    return view('MainPages.design')->with(['title'=>$title]);
  }


    public function support(){

    $title = "Networking and cloud support";

    return view('MainPages.support')->with(['title'=>$title]);
  }



  public function careers(){

    $title = "Careers";

    return view('MainPages.careers')->with(['title'=>$title]);
  }




     public function contactus(){

	$title = "Contact Us";
	//Mail::to('lasisisaheed5@gmail.com', 'Nabtech')->send(new ContactUsMail('asdfashduif','Iraws',423452354, 'askdkflajsdfk','asdlkfjaskldfklasjdkl', 'admin'));
	 return view('MainPages.contactus')->with(['title'=>$title]);

	}




		public function contact(Request $request){

		 	if ($request->ajax()) {
  		
     Mail::to($request->email, $request->name)->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->msg,$request->msg_subject, 'user'));

     Mail::to('info@safeproservices.co.uk', 'SafePro')->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->msg,$request->msg_subject, 'admin'));

     return response('success');

   }

	}











}
