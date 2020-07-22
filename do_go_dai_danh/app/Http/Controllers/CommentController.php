<?php
//control binh luan
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    //
    public function getDelete($id,$id_product){
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('admin/sanpham/edit/'.$id_product)->with('thongbao','Xóa bình luận thành công!');
    }

	public function postAdd(Request $req, $id)
    {
    	// $this->validate($req,
            // [
            //     'title'=>'required|min:5',
            //     'summary'=>'required|min:5',
            //     'content'=>'required:10',
            //     'img'=>'required'
            // ],
            // [
            //     'title.required'=>'Bạn chưa nhập tiêu đề tin tức',
            //     'title.min'=>'Tiêu đề ít nhất 5 ký tự',
            //     'summary.required'=>'Bạn chưa nhập tóm tắt tin tức',
            //     'summary.min'=>'Tóm tắt ít nhất 5 ký tự', 
            //     'content.required'=>'Bạn chưa nhập nội dung',
            //     'content.min'=>'Nội dung ít nhất 5 ký tự',
            //     'img.required'=>'Bạn chưa nhập ảnh cho tin!'
            // ]);
        $comment = new Comment();
        $comment->id_product = 1;
        $comment->id_user =1;
        $comment->content = "222";
        $comment->save();
        return redirect()->back()->with('thanhcong','Đăng ký tài khoản thành công!!');
    }

}