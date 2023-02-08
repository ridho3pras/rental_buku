<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\RentLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookRentController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('book-rent', ['users'=>$users, 'books' => $books]);
    }

    public function store(Request $request)
    {
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(7)->toDateString();


        $book = Book::findOrFail($request->book_id)->only('status');

        if($book['status'] != 'in stock'){
            Session::flash('message', 'Cannot rent, the book is not available');
            Session::flash('alret-class', 'alert-danger');
            return redirect('book-rent');
        }

        else {

            $count = RentLogs::where('user_id', $request->user_id)->where('actual_return_date', null)->count();
            
            if($count >= 3) {
                Session::flash('message', 'Cannot rent, user has reach limit of book!');
                Session::flash('alret-class', 'alert-danger');
                return redirect('book-rent');
            }
            else {
                try {
                    DB::beginTransaction();
                    //process insert to rent_logs table
                    RentLogs::create($request->all());
                    //process update book table
                    $book = Book::findOrFail($request->book_id);
                    $book->status = 'not available';
                    $book->save();
                    DB::commit();
    
                    Session::flash('message', 'Rent book successfully!');
                    Session::flash('alret-class', 'alert-success');
                    return redirect('book-rent');
                } catch (\Throwable $th) {
                    DB::rollBack();
                }
            }
        }
    }

    public function returnBook()
    {
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('return-book', ['users'=>$users, 'books' => $books]);
    }

    public function saveReturnBook(Request $request)
    {
        // user & buku yg dipilih maka berhasil return book

        // user $ buku yg dipilih salah muncul error notice
        $rent = RentLogs::where('user_id', $request->user_id)->where('book_id', $request->book_id)->where('actual_return_date', null);
        $rentData = $rent->first();
        $countData = $rent->count();
        
        if($countData == 1){
            // return buku 
            $rentData->actual_return_date = Carbon::now()->toDateString();
            $rentData->save();

            $book = Book::findOrFail($request->book_id);
                    $book->status = 'in stock';
                    $book->save();

            Session::flash('message', 'The book is returned sucessfully!');
            Session::flash('alret-class', 'alert-success');
            return redirect('book-return');
        }
        else {
            // error notice
            Session::flash('message', 'There is error in process');
            Session::flash('alret-class', 'alert-danger');
            return redirect('book-return');
        }

    }
}
