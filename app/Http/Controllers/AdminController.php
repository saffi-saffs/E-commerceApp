<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        if (Auth::id()) {
            $data = category::all();
            return view("admin.category", compact('data'));

        } else {
            return redirect('login');
        }

    }
    public function add_category(Request $request)
    {
        if (Auth::id()) {

            $data = new Category;
            $data->category_name = $request->category;
            $data->save();
            return redirect()->back()->with('message', 'category Added successfully');
        } else {
            return redirect('login');
        }

    }
    public function delete_category($id)
    {
        if (Auth::id()) {

            $data = Category::find($id);
            $data->delete();
            return redirect()->back()->with('message', 'category Deleted successfully');
        } else {
            return redirect('login');
        }

    }
    public function view_product()
    {
        if (Auth::id()) {

            $category = Category::all();
            return view('admin.product', compact('category'));
        } else {
            return redirect('login');
        }
    }
    public function add_product(Request $request)
    {
        if (Auth::id()) {

            $product = new Product;
            //from table =blade
            $product->title = $request->title;
            $product->description = $request->description;

            $product->quantity = $request->quantity;
            $product->price = $request->price;


            $product->discount_price = $request->discount;
            $product->category = $request->category;

            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $product->image = $imagename;


            $product->save();

            return redirect()->back()->with('message', 'Product Added successfully');
        } else {
            return redirect('login');
        }

    }

    public function show_product()
    {
        if (Auth::id()) {

            $product = Product::all();

            return view("admin.show_product", compact('product'));
        } else {
            return redirect('login');
        }

    }
    public function delete_product($id)
    {
        if (Auth::id()) {

            $product = Product::find($id);
            $product->delete();
            return redirect()->back()->with('message', 'product Deleted successfully');
        } else {
            return redirect('login');
        }

    }
    public function edit_product($id)
    {
        if (Auth::id()) {

            $category = Category::all();
            $product = Product::find($id);

            return view('admin.update_product', compact('product', 'category'));
        } else {
            return redirect('login');
        }

    }
    public function update_product_confirm(Request $request, $id)
    {
        if (Auth::id()) {
            $product = Product::find($id);
            $product->title = $request->title;
            $product->title = $request->title;
            $product->quantity = $request->quantity;
            $product->description = $request->description;

            $product->discount_price = $request->discount;
            $product->category = $request->category;

            $image = $request->image;
            if ($image) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->image->move('product', $imagename);
                $product->image = $imagename;
            }

            $product->save();
            return redirect()->back()->with('message', 'Product updated successfully');
        } else {
            return redirect('login');
        }
    }

    public function order()
    {

        if (Auth::id()) {

            $order = Order::all();
            return view('admin.order', compact('order'));
        } else {
            return redirect('login');
        }
    }

    public function delivered($id)
    {
        if (Auth::id()) {

            $order = Order::find($id);
            $order->delivery_status = "delivered";
            $order->save();

            return redirect()->back();
        } else {
            return redirect('login');
        }

    }

    public function searchdata(Request $request)
    {
        if (Auth::id()) {

            $searchText = $request->search;
            $order = order::where('name', 'LIKE', "%$searchText%")->orWhere('phone', 'LIKE', "%$searchText")->orWhere('product_title', 'LIKE', "%$searchText")
                ->orWhere('delivery_status', 'LIKE', "%$searchText")->orWhere('payment_status', 'LIKE', "%$searchText")->get();
            return view('admin.order', compact('order'));
        } else {
            return redirect('login');
        }
    }
}
