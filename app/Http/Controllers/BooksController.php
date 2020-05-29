<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\books;

class BooksController extends Controller
{
    //This function shows Index page-contains the list of issued books and returned books. 
    public function index() {
        // Issued Books Records
        $issuedbook = books::where('status','Issued')->orderBy('id','DESC')->get();
        $returnedbook = books::where('status','Returned')->orderBy('id','DESC')->get();
        return view('pages.index',['issuedbook'=>$issuedbook,'returnedbook'=>$returnedbook]);
    }

    //This function shows Issue a book form.
    public function issue() {
        return view('pages.issuebook');
    }

    //This function shows a Return book button which on click passes the return date with book status
    public function returnbook(Request $request,$id) {
        $return = books::find($id);
        $return->status = 'Returned';
        $return->returndate = date('y-m-d');
        $return->save();
        return redirect('/');
    }

    //This function stores a details of issused book
    public function store(Request $request) {
        $this->validate($request, [
            'bookname' => 'required',
            'issuername' => 'required',
            'role' => 'required',
            'issuedate' => 'required',
            'duedate' => 'required',
            'status' => 'required'
        ]);

        $book = new books;
        $book->bookname = $request->input('bookname');
        $book->issuername = $request->input('issuername');
        $book->role = $request->input('role');
        $book->issuedate = $request->input('issuedate');
        $book->duedate = $request->input('duedate');
        $book->status = $request->input('status');
        $book->returndate =
        $book->save();
        return redirect('/');
    }

    //This function shows the due list
    public function duelist(){
        $date = date('y-m-d');
        $duedate = books::where('status','Issued')->whereDate('duedate','<',$date)->orderBy('id','DESC')->get();
        return view('pages.duelist')->with('duedate',$duedate);
    }

    //This function shows the student wise report
    public function studentreport() {
        $report = books::orderBy('id','DESC')->get();
        return view('pages.studentreport')->with('report',$report);
    }
}
