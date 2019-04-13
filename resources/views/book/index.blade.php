{{--<!-- @dd($books) -->--}}
{{-- <!-- {{dd($books)}}  --> --}}
{{-- <!-- {{dd($books)}}  -> cách trước đây được sử dụng -> Cú pháp chuẩn -->
<!-- @extends sử dụng lại layouts cha --> --}}
@extends("layouts.app")
{{-- <!-- @section hàm sẽ gọi content, so sánh và tìm hàm content trong app.blade.php --> --}}
@section("content")
{{-- <!-- đoạn code viết trong này sẽ nhúng vào content (@yeild) bên app layout ở file app.blade.php --> --}}
<table class="table table-hover">
	@foreach($books as $book)
		<tr>
			<td>
				{{-- <!-- TenSach & GiaCu là tên trường có sẵn trong CSDL của mình --> --}}
				{{$book->TenSach}}
			</td>
			<td>
				{{$book->GiaCu}}
			</td>
		</tr>
	@endforeach
</table>

@endsection